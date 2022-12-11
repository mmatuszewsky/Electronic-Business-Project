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

class OrderConfirmationHook extends AbstractHook
{
    const ORDER_CONFIRMED_COOKIE = 'sib_order_confirmed_%s';
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
     * @param \OrderCore|\Order $order
     */
    public function handleEvent($order)
    {
        try {
            $cookieKey = sprintf(self::ORDER_CONFIRMED_COOKIE, $order->id_cart);

            if ($this->getContext()->cookie->__get($cookieKey)) {
                return;
            }

            $shop_group = \Shop::getContextShopGroupID(true);
            $id_shop = \Shop::getContextShopID(true);
            $sms_ord_status = $this->getSibConfigService()->getSibConfig(
                ConfigService::CONFIG_SMS_ORDER_CONFIRMATION,
                $shop_group,
                $id_shop
            );
            $api_key = $this->getSibConfigService()->getSibConfig(ConfigService::API_KEY_V3, $shop_group, $id_shop);

            if (!empty($api_key) && $sms_ord_status == 1) {
                $this->sendOrderConfirmationSms($order);
            }

            if ($this->getSendinblueConfigService()->isAutoSyncEnabled() && $this->getContextCustomer()->newsletter) {
                $transactionalOrder = EventDataFactory::getTransactionalOrderPayload(
                    $this->getContextCustomer()->email,
                    $order
                );
                $this->getIntegrationClient()->createOrder($transactionalOrder);
            }

            if ($this->isCartTrackingEnabled()) {
                $orderData = EventDataFactory::prepareOrderPayload(
                    $this->getContextCustomer(),
                    $order
                );

                $this->getApiClientService()->sendTrackEvent(ApiClientService::EVENT_ORDER_COMPLETED, $orderData);
                $this->getContext()->cookie->__set($cookieKey, 1);
            }
        } catch (\Exception $e) {
            $this->logError($e->getMessage());
        }
    }

    /**
     * @param \Order|\OrderCore $order
     */
    private function sendOrderConfirmationSms($order)
    {
        $orderReference = (isset($order->reference)) ? $order->reference : 0;
        $orderTotalPay = (isset($order->total_paid)) ? round($order->total_paid, 2) : 0;
        $orderTotalPay = $orderTotalPay . ' ' . $this->getContext()->currency->iso_code;
        $orderDate = (isset($order->date_upd)) ? $order->date_upd : 0;

        if ($this->getContext()->language->id === self::PS_EN_LANG_ID) {
            $ord_date = date('m/d/Y', strtotime($orderDate));
        } else {
            $ord_date = date('d/m/Y', strtotime($orderDate));
        }

        if (!empty($this->getContext()->customer->id_gender) && !empty($this->getContext()->language->id)) {
            $genderName = \Db::getInstance()->getRow(
                'SELECT `name` FROM ' . _DB_PREFIX_ . 'gender_lang 
                WHERE  `id_lang` = \'' . pSQL($this->getContext()->language->id) . '\' 
                AND `id_gender` = \''.pSQL($this->getContext()->customer->id_gender).'\''
            );
            $civility = !empty($genderName['name']) ? $genderName['name'] : '';
        } else {
            $civility = '';
        }
        $shopGroup = \Shop::getContextShopGroupID(true);
            $id_shop = \Shop::getContextShopID(true);
        $sender = $this->getSibConfigService()->getSibConfig(
            ConfigService::CONFIG_SMS_ORDER_CONFIRMATION_SENDER,
            $shopGroup,
            $id_shop
        );
        $message = $this->getSibConfigService()->getSibConfig(
            ConfigService::CONFIG_SMS_ORDER_CONFIRMATION_MSG,
            $shopGroup,
            $id_shop
        );
        $deliveryAddress = new \AddressCore($order->id_address_delivery);
        $firstName = $deliveryAddress->firstname ?: $deliveryAddress->firstname;
        $lastName = $deliveryAddress->lastname ?: $deliveryAddress->lastname;
        if ($deliveryAddress) {
            $phone_sms = $deliveryAddress->phone_mobile ?: $deliveryAddress->phone;
            if (!empty($phone_sms) && !empty($sender) && !empty($message)) {
                $code = new \CountryCore($deliveryAddress->id_country);
                $number = $this->getSibSmsService()->checkMobileNumber($phone_sms, $code->call_prefix);
                $msg_body = $this->getSibSmsService()->renderSmsMessage(
                    $civility,
                    $firstName,
                    $lastName,
                    $orderTotalPay,
                    $ord_date,
                    $orderReference,
                    $message
                );
                $this->getApiClientService()->sibApiRequest(
                    SmsService::API_POST_METHOD,
                    SmsService::SIB_SEND_SMS_URI,
                    [
                        'recipient' => $number,
                        'sender' => $sender,
                        'content' => $msg_body,
                        'type' => SmsService::SENDINBLUE_SMS_TYPE,
                    ]
                );
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
