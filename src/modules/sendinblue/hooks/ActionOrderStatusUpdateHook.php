<?php
/**
 * 2007-2022 Sendinblue
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@sendinblue.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    Sendinblue <contact@sendinblue.com>
 * @copyright 2007-2022 Sendinblue
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of Sendinblue
 */

namespace Sendinblue\Hooks;

use Sendinblue\Factories\EventDataFactory;
use Sendinblue\Services\ApiClientService;
use Sendinblue\Services\ConfigService;
use Sendinblue\Services\SmsService;

class ActionOrderStatusUpdateHook extends AbstractHook
{
    const ORDER_SHIPPED_STATUS = 4;
    const PS_EN_LANG_ID = 1;

    /**
     * @var null|ConfigService
     */
    private $configService;

    /**
     * @var null|smsService
     */
    private $smsService;

    /**
     * @param \OrderCore|\Shipping $order
     */
    public function handleEvent($order)
    {
        try {
            $shopGroup = \Shop::getContextShopGroupID(true);
            $idShop = \Shop::getContextShopID(true);
            $smsShippingStatus = $this->getSibConfigService()->getSibConfig(
                ConfigService::CONFIG_SMS_SHIPPING_CONFIRMATION,
                $shopGroup,
                $idShop
            );
            $apiKey = $this->getSibConfigService()->getSibConfig(ConfigService::API_KEY_V3, $shopGroup, $idShop);

            if (!empty($apiKey) && (int)$smsShippingStatus === 1) {
                $this->sendShipmentConfirmationSms($order);
            }
        } catch (\Exception $e) {
            $this->logError($e->getMessage());
        }
    }

    /**
     * @param \Shipping|\OrderCore $order
     */
    private function sendShipmentConfirmationSms($params)
    {
        $idOrderState = !empty($params['newOrderStatus']->id)
            ? $params['newOrderStatus']->id
            : \Tools::getValue('id_order_state');

        $idOrder = !empty($params['id_order']) ? $params['id_order'] : \Tools::getValue('id_order');

        $shopGroup = \Shop::getContextShopGroupID(true);
        $idShop = \Shop::getContextShopID(true);
        $sender = $this->getSibConfigService()->getSibConfig(
            ConfigService::CONFIG_SMS_SHIPPING_CONFIRMATION_SENDER,
            $shopGroup,
            $idShop
        );
        $message = $this->getSibConfigService()->getSibConfig(
            ConfigService::CONFIG_SMS_SHIPPING_CONFIRMATION_MSG,
            $shopGroup,
            $idShop
        );

        if ($idOrderState == self::ORDER_SHIPPED_STATUS && $message != '' && is_numeric($idOrder) == true) {
            $order = new \Order($idOrder);
            $deliveryAddress = new \AddressCore($order->id_address_delivery);
            $customer = new \Customer($deliveryAddress->id_customer);
            $countryData = new \CountryCore($deliveryAddress->id_country);
            $currency = new \CurrencyCore($order->id_currency);
            $referenceNum = (isset($order->reference)) ? $order->reference : 0;
            $totalPay = (isset($order->total_paid)) ? round($order->total_paid, 2) : 0;
            $totalPay = $totalPay . ' ' . $currency->iso_code;
            $orderDate = (isset($order->date_upd)) ? $order->date_upd : 0;

            if ((int)$order->id_lang === self::PS_EN_LANG_ID) {
                $ordDate = date('m/d/Y', strtotime($orderDate));
            } else {
                $ordDate = date('d/m/Y', strtotime($orderDate));
            }

            if (!empty($customer->id_gender) && !empty($order->id_lang)) {
                $genderName = \Db::getInstance()->getRow('
                    SELECT `name` FROM ' . _DB_PREFIX_ . 'gender_lang 
                    WHERE  `id_lang` = \'' . pSQL($order->id_lang) . '\' 
                    AND `id_gender` = \'' . pSQL($customer->id_gender) . '\'');

                $civility = !empty($genderName['name']) ? $genderName['name'] : '';
            } else {
                $civility = '';
            }

            $firstName = $deliveryAddress->firstname ?: $deliveryAddress->firstname;
            $lastName = $deliveryAddress->lastname ?: $deliveryAddress->lastname;
            if ($deliveryAddress) {
                $phoneSms = $deliveryAddress->phone_mobile ?: $deliveryAddress->phone;

                if (!empty($phoneSms) && !empty($sender) && !empty($message)) {
                    $number = $this->getSibSmsService()->checkMobileNumber($phoneSms, $countryData->call_prefix);

                    $msgBody = $this->getSibSmsService()->renderSmsMessage(
                        $civility,
                        $firstName,
                        $lastName,
                        $totalPay,
                        $ordDate,
                        $referenceNum,
                        $message
                    );

                    $this->getApiClientService()->sibApiRequest(
                        SmsService::API_POST_METHOD,
                        SmsService::SIB_SEND_SMS_URI,
                        [
                            'recipient' => $number,
                            'sender' => $sender,
                            'content' => $msgBody,
                            'type' => SmsService::SENDINBLUE_SMS_TYPE,
                        ]
                    );
                }
            }
        }
    }

    /**
     * @return ConfigService
     */
    protected function getSibConfigService()
    {
        if (!$this->configService) {
            $this->configService = new ConfigService();
        }
        return $this->configService;
    }

    /**
     * @return SMSService
     */
    protected function getSibSmsService()
    {
        if (!$this->smsService) {
            $this->smsService = new SmsService();
        }
        return $this->smsService;
    }
}
