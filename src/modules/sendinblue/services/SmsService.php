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

namespace Sendinblue\Services;

class SmsService
{

    const API_GET_METHOD = 'GET';
    const API_POST_METHOD = 'POST';

    const SIB_SEND_SMS_URI = '/transactionalSMS/sms';
    const SIB_SEND_SMS_CAMPAIGN_URI = '/smsCampaigns';
    const GET_MAPPED_ATTRIBUTES_URI = '/mapped/%s/attributes';

    const SENDINBLUE_SMS_PLAN = 'sms';
    const SENDINBLUE_SMS_TYPE = 'transactional';

    const SUCCESS_RESPONSE_CODE = 200;
    const SEND_SMS_SUCCESS_CODE = 201;
    const SMS_SUCCESS_RESPONSE = true;
    const SMS_FAILURE_RESPONSE = false;

    const SMS_CREDIT_TYPE = 'sms_credit';
    const SMS_CAMPAIGN_TYPE = 'campaign';

    const SMS_CREDIT_EMAIL_VALUE = 'email_val';
    const SMS_CREDIT_LIMIT_VALUE = 'limit_val';
    const SMS_CAMPAIGN_STATUS = 'campaign_status';
    const SMS_CAMPAIGN_TYPE_STATUS = 'campaign_type';
    const SMS_ORD_STATUS = 'Api_Sms_Order_Status';
    const SMS_ORD_CONF_SENDER = 'Sender_Order';
    const SMS_ORD_CONF_MSG = 'Sender_Order_Message';
    const SMS_ORD_CONF_NUMBER = 'order_number';
    const SMS_SHIP_STATUS = 'Api_Sms_Shipment_Status';
    const SMS_SHIP_CONF_SENDER = 'Sender_Shipment';
    const SMS_SHIP_CONF_MSG = 'Sender_Shipment_Message';
    const SMS_SHIP_CONF_NUMBER = 'Shipment_Number';

    const SMS_TEST_CIV = 'Mr./Ms./Miss';
    const SMS_CAMPAIGN_SENDER = 'sender';
    const SMS_CAMPAIGN_MESSAGE = 'message';
    const SMS_CAMPAIGN_NUMBER = 'number';
    const SMS_CAMPAIGN_DATE = 'date';
    const SMS_CAMPAIGN_HOUR = 'hour';
    const SMS_CAMPAIGN_MINUTE = 'minute';

    const SMS_MAIL_SENT_ERROR = 'email_error';
    const SMS_MAIL_VALIDATION_ERROR = 'validation_error';
    const SMS_CAMPAIGN_SCHEDULE_ERROR = 'datetime_error';
    const SMS_CAMPAIGN_LIST_ERROR = 'list_error';
    const SMS_CAMPAIGN_CONTACT_ERROR = 'contact_error';

    /**
     * @var ConfigService
     */
    private $configService;

    /**
     * @var string
     */
    private $name;

    public function __construct()
    {
        $this->name = 'sendinblue';
    }

    /**
     * @return ConfigService
     */
    protected function getConfigService()
    {
        if (!$this->configService) {
            $this->configService = new ConfigService();
        }

        return $this->configService;
    }

    /**
     * @return ApiClientService
     */
    protected function getApiClientService()
    {
        return new ApiClientService($this->getConfigService());
    }

    /**
     * @return string
     */
    public function getSmsCredit()
    {
        $resultData = $this->getApiClientService()
            ->sibApiRequest(self::API_GET_METHOD, ApiClientService::ACCOUNT_API_V3_URI);
        if ($resultData['status'] === self::SUCCESS_RESPONSE_CODE) {
            $response = json_decode($resultData['data'], true);
            foreach ($response['plan'] as $accountValue) {
                if ($accountValue['type'] === self::SENDINBLUE_SMS_PLAN) {
                    return $accountValue['credits'];
                }
            }
        }

        return "0";
    }

    /**
     * @return array
     */
    public function sendSms($data)
    {
        return $this->getApiClientService()
            ->sibApiRequest(self::API_POST_METHOD, self::SIB_SEND_SMS_URI, $data);
    }

    /**
     * @return array
     */
    public function sendSmsCampaign($data)
    {
        return $this->getApiClientService()
            ->sibApiRequest(self::API_POST_METHOD, self::SIB_SEND_SMS_CAMPAIGN_URI, $data);
    }

    /**
     * Update SMS Settings
     *
     * @return array
     */
    public function updateSmsSettings()
    {
        try {
            if (\Tools::getValue('type') === self::SMS_CREDIT_TYPE) {
                $this->getConfigService()
                    ->upsertSibConfig(
                        ConfigService::CONFIG_SMS_NOTIFICATION_STATUS,
                        \Tools::getValue(self::SMS_CREDIT_TYPE)
                    );
                $this->getConfigService()
                    ->upsertSibConfig(
                        ConfigService::CONFIG_SMS_NOTIFICATION_EMAIL,
                        \Tools::getValue(self::SMS_CREDIT_EMAIL_VALUE)
                    );
                $this->getConfigService()
                    ->upsertSibConfig(
                        ConfigService::CONFIG_SMS_NOTIFICATION_LIMIT,
                        \Tools::getValue(self::SMS_CREDIT_LIMIT_VALUE)
                    );
                $currentCredit = $this->getSmsCredit();
                if ($this->getConfigService()->getSibConfig(ConfigService::CONFIG_SMS_NOTIFICATION_ALERT) === false
                    || $this->getConfigService()->getSibConfig(ConfigService::CONFIG_SMS_NOTIFICATION_LIMIT)
                    <= $currentCredit) {
                    $this->getConfigService()
                        ->upsertSibConfig(ConfigService::CONFIG_SMS_NOTIFICATION_ALERT, 0);
                }

                return [
                    'success' => self::SMS_SUCCESS_RESPONSE
                ];
            }

            if (\Tools::getValue('type') === self::SMS_CAMPAIGN_TYPE) {
                $this->getConfigService()
                    ->upsertSibConfig(
                        ConfigService::CONFIG_SMS_CAMPAIGN_STATUS,
                        \Tools::getValue(self::SMS_CAMPAIGN_STATUS)
                    );
                $this->getConfigService()
                    ->upsertSibConfig(
                        ConfigService::CONFIG_SMS_CAMPAIGN_TYPE,
                        \Tools::getValue(self::SMS_CAMPAIGN_TYPE_STATUS)
                    );

                return [
                    'success' => self::SMS_SUCCESS_RESPONSE
                ];
            }
        } catch (\Exception $e) {
            \PrestaShopLoggerCore::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }

        return [
            'success' => self::SMS_FAILURE_RESPONSE
        ];
    }

    /**
     * Send SMS Credit Notification Mail
     *
     * @return array
     */
    public function creditNotificationMail()
    {
        try {
            $currentCredit = $this->getSmsCredit();
            if ($currentCredit <= $this->getConfigService()
                    ->getSibConfig(ConfigService::CONFIG_SMS_NOTIFICATION_LIMIT)) {
                if ($this->getConfigService()
                        ->getSibConfig(ConfigService::CONFIG_SMS_NOTIFICATION_ALERT) === '0') {
                    $langId = \ConfigurationCore::get('PS_LANG_DEFAULT');
                    $countryIso = \Db::getInstance()->getRow('SELECT `iso_code` FROM '
                        . _DB_PREFIX_ . 'lang WHERE  `id_lang` = \'' . pSQL($langId) . '\'');
                    $isoCode = \Tools::strtolower($countryIso['iso_code']);

                    if (is_dir(_PS_MODULE_DIR_ . $this->name . '/mails/' . $isoCode) !== true) {
                        $result = \Db::getInstance()->getRow('SELECT `id_lang` FROM '
                            . _DB_PREFIX_ . 'lang WHERE `iso_code` = \'en\'');
                        $langId = $result['id_lang'];
                    }

                    $title = '[Sendinblue] Notification : SMS CREDITS';
                    $siteName = \ConfigurationCore::get('PS_SHOP_NAME');
                    $notifyEmail = $this->getConfigService()
                        ->getSibConfig(ConfigService::CONFIG_SMS_NOTIFICATION_EMAIL);
                    $recipient = explode('@', $notifyEmail);
                    $recipient = preg_replace('/[^a-zA-Z0-9]+/', ' ', $recipient[0]);

                    $this->getConfigService()->upsertSibConfig(ConfigService::CONFIG_SMS_NOTIFICATION_ALERT, 1);

                    \Mail::Send(
                        (int)$langId,
                        'creditNotificationMail',
                        \Mail::l($title, (int)$langId),
                        array('{title}' => $title, '{present_credit}' => $currentCredit, '{site_name}' => $siteName),
                        $notifyEmail,
                        $recipient,
                        'contact@sendinblue.com',
                        'Sendinblue',
                        null,
                        null,
                        _PS_MODULE_DIR_ . $this->name . '/mails/'
                    );

                    return [
                        'success' => self::SMS_SUCCESS_RESPONSE
                    ];
                }
                return [
                    'success' => self::SMS_MAIL_SENT_ERROR
                ];
            }

            $this->getConfigService()->upsertSibConfig(ConfigService::CONFIG_SMS_NOTIFICATION_ALERT, 0);
            return [
                'success' => self::SMS_MAIL_VALIDATION_ERROR
            ];
        } catch (\Exception $e) {
            \PrestaShopLoggerCore::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }

        return [
            'success' => self::SMS_FAILURE_RESPONSE
        ];
    }

    /**
     * @return array
     */
    public function updateSmsOrdConfSettings()
    {
        try {
            if (\Tools::getValue('action') === 'SmsOrdConfSettings') {
                $shop_group = \Shop::getContextShopGroupID(true);
                $id_shop = \Shop::getContextShopID(true);

                $this->getConfigService()->upsertSibConfig(
                    ConfigService::CONFIG_SMS_ORDER_CONFIRMATION,
                    \Tools::getValue(self::SMS_ORD_STATUS),
                    $shop_group,
                    $id_shop
                );

                $this->getConfigService()->upsertSibConfig(
                    ConfigService::CONFIG_SMS_ORDER_CONFIRMATION_SENDER,
                    \Tools::getValue(self::SMS_ORD_CONF_SENDER),
                    $shop_group,
                    $id_shop
                );

                $this->getConfigService()->upsertSibConfig(
                    ConfigService::CONFIG_SMS_ORDER_CONFIRMATION_MSG,
                    \Tools::getValue(self::SMS_ORD_CONF_MSG),
                    $shop_group,
                    $id_shop
                );

                $responce_arr = array('result' => true);

                echo json_encode($responce_arr);
            }
        } catch (\Exception $e) {
            \PrestaShopLoggerCore::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }
    }

    /**
     * @return array
     */
    public function sendOrderTestSms()
    {
        try {
            if (\Tools::getValue('action') === 'SendOrderConfTestSms') {
                $shop_group = \Shop::getContextShopGroupID(true);
                $id_shop = \Shop::getContextShopID(true);
                $sender = \Tools::getValue(self::SMS_ORD_CONF_SENDER, $shop_group, $id_shop);
                $message = \Tools::getValue(self::SMS_ORD_CONF_MSG, $shop_group, $id_shop);
                $number = \Tools::getValue(self::SMS_ORD_CONF_NUMBER, $shop_group, $id_shop);

                $responce_arr = array('result' => false);
                if (!isset($this->context)) {
                    $this->context = \Context::getContext();
                }

                $charone = \Tools::substr($number, 0, 1);
                $chartwo = \Tools::substr($number, 0, 2);
                if ($charone === '0' && $chartwo === '00') {
                    $number = $number;
                }

                $civility = 'Mr./Ms./Miss';
                $total_to_pay = rand(10, 1000);
                $total_pay = $total_to_pay . '.00 ';
                $total_pay = $total_pay . ' ' . $this->context->currency->iso_code;
                $firstname = $this->context->employee->firstname;
                $lastname = $this->context->employee->lastname;
                if ($this->context->employee->id_lang == 1) {
                    $ord_date = date('m/d/Y');
                } else {
                    $ord_date = date('d/m/Y');
                }
                $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

                $ref_num = '';
                for ($i = 0; $i < 9; ++$i) {
                    $ref_num .= $characters[rand(0, \Tools::strlen($characters) - 1)];
                }

                $msg_body = $this->renderSmsMessage(
                    $civility,
                    $firstname,
                    $lastname,
                    $total_pay,
                    $ord_date,
                    $ref_num,
                    $message
                );

                $resultData = $this->getApiClientService()->sibApiRequest(
                    self::API_POST_METHOD,
                    self::SIB_SEND_SMS_URI,
                    [
                        'recipient' => $number,
                        'sender' => $sender,
                        'content' => $msg_body,
                        'type' => self::SENDINBLUE_SMS_TYPE,
                    ]
                );

                if (isset($resultData['status']) && $resultData['status'] === self::SEND_SMS_SUCCESS_CODE) {
                    $responce_arr = array('result' => true);
                }

                echo json_encode($responce_arr);
            }
        } catch (\Exception $e) {
            \PrestaShopLoggerCore::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }
    }

    /**
     * @param string $salutation
     * @param string $firstname
     * @param string $lastname
     * @param string|int $price
     * @param string $orderDate
     * @param string $orderReference
     * @param string $message
     * @return string
     */
    public function renderSmsMessage(
        $salutation,
        $firstname,
        $lastname,
        $price,
        $orderDate,
        $orderReference,
        $message
    ) {
        $message = str_replace('{civility}', $salutation, $message);
        $message = str_replace('{first_name}', $firstname, $message);
        $message = str_replace('{last_name}', sprintf("%s\r\n", $lastname), $message);
        $message = str_replace('{order_price}', $price, $message);
        $message = str_replace('{order_date}', sprintf("%s\r\n", $orderDate), $message);

        return str_replace('{order_reference}', $orderReference, $message);
    }

    /**
     * @return string
     */
    public function checkMobileNumber($number, $call_prefix)
    {
        $number = preg_replace('/\s+/', '', $number);
        $charone = \Tools::substr($number, 0, 1);
        $chartwo = \Tools::substr($number, 0, 2);

        if (preg_match('/^' . $call_prefix . '/', $number)) {
            return '00' . $number;
        } elseif ($charone == '0' && $chartwo != '00') {
            if (preg_match('/^0' . $call_prefix . '/', $number)) {
                return '00' . \Tools::substr($number, 1);
            } else {
                return '00' . $call_prefix . \Tools::substr($number, 1);
            }
        } elseif ($chartwo == '00') {
            if (preg_match('/^00' . $call_prefix . '/', $number)) {
                return $number;
            } else {
                return '00' . $call_prefix . \Tools::substr($number, 2);
            }
        } elseif ($charone == '+') {
            if (preg_match('/^\+' . $call_prefix . '/', $number)) {
                return '00' . \Tools::substr($number, 1);
            } else {
                return '00' . $call_prefix . \Tools::substr($number, 1);
            }
        } elseif ($charone != '0') {
            return '00' . $call_prefix . $number;
        }
    }

    /**
     * Send SMS Test Campaign
     *
     * @return array
     */
    public function sendSmsTestCampaign()
    {
        try {
            $sender = \Tools::getValue(self::SMS_CAMPAIGN_SENDER);
            $message = \Tools::getValue(self::SMS_CAMPAIGN_MESSAGE);
            $number = \Tools::getValue(self::SMS_CAMPAIGN_NUMBER);

            if (!isset($this->context)) {
                $this->context = \Context::getContext();
            }

            $civ = self::SMS_TEST_CIV;
            $firstName = $this->context->employee->firstname;
            $lastName = $this->context->employee->lastname;

            $civData = str_replace('{civility}', $civ, $message);
            $firstName = str_replace('{first_name}', $firstName, $civData);
            $content = str_replace('{last_name}', $lastName . "\r\n", $firstName);

            $smsDataInfo = [
                'recipient' => $number,
                'sender' => $sender,
                'content' => $content,
                'type' => self::SENDINBLUE_SMS_TYPE,
            ];

            $responseData = $this->sendSms($smsDataInfo);

            if ($responseData['status'] === self::SEND_SMS_SUCCESS_CODE) {
                return [
                    'success' => self::SMS_SUCCESS_RESPONSE
                ];
            }
        } catch (\Exception $e) {
            \PrestaShopLoggerCore::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }

        return [
            'success' => self::SMS_FAILURE_RESPONSE
        ];
    }

    /**
     * Select Campaign Option
     *
     * @return array
     */
    public function smsCampaignOptions()
    {
        try {
            $campaignType = \Tools::getValue(self::SMS_CAMPAIGN_TYPE_STATUS);
            if ($campaignType === '0') {
                return $this->singleContactSms();
            }

            return $this->sibSubscribeCampaign();
        } catch (\Exception $e) {
            \PrestaShopLoggerCore::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }

        return [
            'success' => self::SMS_FAILURE_RESPONSE
        ];
    }

    /**
     * Send Single Contact Campaign
     *
     * @return array
     */
    public function singleContactSms()
    {
        try {
            $sender = \Tools::getValue(self::SMS_CAMPAIGN_SENDER);
            $message = \Tools::getValue(self::SMS_CAMPAIGN_MESSAGE);
            $number = \Tools::getValue(self::SMS_CAMPAIGN_NUMBER);
            $isoCode = \Tools::substr($number, 0, 4);
            $phoneNumber = str_replace($isoCode, '', $number);

            $contactData = \Db::getInstance()->getRow(
                'SELECT DISTINCT 
                c.`id_customer` AS id, 
                c.`firstname`, 
                c.`lastname`, 
                c.`id_lang`, 
                c.`id_gender`, 
                a.`phone`, 
                a.`phone_mobile`, 
                g.`name` 
            FROM ' . _DB_PREFIX_ . 'customer c 
            LEFT JOIN ' . _DB_PREFIX_ . 'address a ON (c.`id_customer` = a.`id_customer`)
            LEFT JOIN ' . _DB_PREFIX_ . 'gender_lang g ON (c.`id_gender` = g.`id_gender`) 
            WHERE a.`phone` = ' . $phoneNumber . ' OR a.`phone_mobile` = ' . $phoneNumber . ''
            );

            if ($contactData === false) {
                return [
                    'success' => self::SMS_CAMPAIGN_CONTACT_ERROR
                ];
            }

            $firstName = (isset($contactData['firstname'])) ? $contactData['firstname'] : '';
            $lastName = (isset($contactData['lastname'])) ? $contactData['lastname'] : '';
            $civ = (isset($contactData['name'])) ? $contactData['name'] : '';

            $civility = str_replace('{civility}', $civ, $message);
            $firstName = str_replace('{first_name}', $firstName, $civility);
            $content = str_replace('{last_name}', $lastName . "\r\n", $firstName);

            $smsDataInfo = [
                'recipient' => $number,
                'sender' => $sender,
                'content' => $content,
                'type' => self::SENDINBLUE_SMS_TYPE,
            ];

            $responseData = $this->sendSms($smsDataInfo);

            if ($responseData['status'] === self::SEND_SMS_SUCCESS_CODE) {
                return [
                    'success' => self::SMS_SUCCESS_RESPONSE
                ];
            }
        } catch (\Exception $e) {
            \PrestaShopLoggerCore::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }

        return [
            'success' => self::SMS_FAILURE_RESPONSE
        ];
    }

    /**
     * Send SIB Subscribed Customers Campaign
     *
     * @return array
     */
    public function sibSubscribeCampaign()
    {
        try {
            if ($this->getConfigService()->getSibConfig(ConfigService::CONFIG_LIST_ID) !== false) {
                $sender = \Tools::getValue(self::SMS_CAMPAIGN_SENDER);
                $message = \Tools::getValue(self::SMS_CAMPAIGN_MESSAGE);
                $scheduleDate = \Tools::getValue(self::SMS_CAMPAIGN_DATE);
                $scheduleHour = \Tools::getValue(self::SMS_CAMPAIGN_HOUR);
                $scheduleMinute = \Tools::getValue(self::SMS_CAMPAIGN_MINUTE);

                if ($scheduleHour < 10) {
                    $scheduleHour = '0' . $scheduleHour;
                }
                if ($scheduleMinute < 10) {
                    $scheduleMinute = '0' . $scheduleMinute;
                }

                $scheduleDateTime = date(
                    DATE_ATOM,
                    strtotime("$scheduleDate $scheduleHour:$scheduleMinute")
                );
                $currentDateTime = date(DATE_ATOM);

                $scheduleDT = strtotime($scheduleDateTime);
                $currentDT = strtotime($currentDateTime);

                if ($scheduleDT < $currentDT) {
                    return [
                        'success' => self::SMS_CAMPAIGN_SCHEDULE_ERROR,
                    ];
                }

                $campaignName = 'SMS_' . date('Ymd');

                $mappedAttributes = [];

                $result = $this->getApiClientService()
                    ->getMappedAttributes(self::API_GET_METHOD, self::GET_MAPPED_ATTRIBUTES_URI);

                $response = json_decode($result['data'], true);

                foreach ($response['customer_attributes'] as $attributes) {
                    if ($attributes['id'] === 'lastname') {
                        $mappedAttributes['lastname'] = $attributes['mapped_to'];
                    } elseif ($attributes['id'] === 'firstname') {
                        $mappedAttributes['firstname'] = $attributes['mapped_to'];
                    } elseif ($attributes['id'] === 'id_gender') {
                        $mappedAttributes['id_gender'] = $attributes['mapped_to'];
                    }
                }

                $firstName = (isset($mappedAttributes['firstname'])) ? '{' . $mappedAttributes['firstname'] . '}' : '';
                $lastName = (isset($mappedAttributes['lastname'])) ? '{' . $mappedAttributes['lastname'] . '}' : '';
                $civility = (isset($mappedAttributes['id_gender'])) ? '{' . $mappedAttributes['id_gender'] . '}' : '';

                $personalizationData = str_replace('{civility}', $civility, $message);
                $data = str_replace('{first_name}', $firstName, $personalizationData);
                $content = str_replace('{last_name}', $lastName . "\r\n", $data);
                $list = [
                    "listIds" => [
                        (int)$this->getConfigService()
                            ->getSibConfig(ConfigService::CONFIG_LIST_ID)
                    ]
                ];

                $smsData = [
                    'recipients' => $list,
                    'sender' => $sender,
                    'name' => $campaignName,
                    'content' => $content,
                    'scheduledAt' => $scheduleDateTime,
                ];

                $response = $this->sendSmsCampaign($smsData);

                if ($response['status'] === self::SEND_SMS_SUCCESS_CODE) {
                    return [
                        'success' => self::SMS_SUCCESS_RESPONSE
                    ];
                }
            } else {
                return [
                    'success' => self::SMS_CAMPAIGN_LIST_ERROR
                ];
            }
        } catch (\Exception $e) {
            \PrestaShopLoggerCore::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }

        return [
            'success' => self::SMS_FAILURE_RESPONSE
        ];
    }

    /**
     * @return array
     */
    public function updateSmsShipmentSettings()
    {
        try {
            if (\Tools::getValue('action') === 'SmsShipmentConfSettings') {
                $shopGroup = \Shop::getContextShopGroupID(true);
                $idShop = \Shop::getContextShopID(true);

                $this->getConfigService()->upsertSibConfig(
                    ConfigService::CONFIG_SMS_SHIPPING_CONFIRMATION,
                    \Tools::getValue(self::SMS_SHIP_STATUS),
                    $shopGroup,
                    $idShop
                );

                $this->getConfigService()->upsertSibConfig(
                    ConfigService::CONFIG_SMS_SHIPPING_CONFIRMATION_SENDER,
                    \Tools::getValue(self::SMS_SHIP_CONF_SENDER),
                    $shopGroup,
                    $idShop
                );

                $this->getConfigService()->upsertSibConfig(
                    ConfigService::CONFIG_SMS_SHIPPING_CONFIRMATION_MSG,
                    \Tools::getValue(self::SMS_SHIP_CONF_MSG),
                    $shopGroup,
                    $idShop
                );

                $responce_arr = array('result' => true);

                echo json_encode($responce_arr);
            }
        } catch (\Exception $e) {
            \PrestaShopLoggerCore::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }
    }

    /**
     * @return array
     */
    public function sendShipmentTestSms()
    {
        try {
            if (\Tools::getValue('action') === 'SendShipmentTestSms') {
                $shopGroup = \Shop::getContextShopGroupID(true);
                $idShop = \Shop::getContextShopID(true);
                $sender = \Tools::getValue(self::SMS_SHIP_CONF_SENDER, $shopGroup, $idShop);
                $message = \Tools::getValue(self::SMS_SHIP_CONF_MSG, $shopGroup, $idShop);
                $number = \Tools::getValue(self::SMS_SHIP_CONF_NUMBER, $shopGroup, $idShop);

                $responceArr = array('result' => false);
                if (!isset($this->context)) {
                    $this->context = \Context::getContext();
                }

                $charone = \Tools::substr($number, 0, 1);
                $chartwo = \Tools::substr($number, 0, 2);

                if ($charone === '0' && $chartwo === '00') {
                    $number = $number;
                }

                $civility = 'Mr./Ms./Miss';
                $totalToPay = rand(10, 1000);
                $totalPay = $totalToPay.'.00 ';
                $totalPay = $totalPay.' '.$this->context->currency->iso_code;
                $firstname = $this->context->employee->firstname;
                $lastname = $this->context->employee->lastname;
                if ($this->context->employee->id_lang == 1) {
                    $ordDate = date('m/d/Y');
                } else {
                    $ordDate = date('d/m/Y');
                }
                $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

                $refNum = '';
                for ($i = 0; $i < 9; ++$i) {
                    $refNum .= $characters[rand(0, \Tools::strlen($characters) - 1)];
                }

                $msgBody = $this->renderSmsMessage(
                    $civility,
                    $firstname,
                    $lastname,
                    $totalPay,
                    $ordDate,
                    $refNum,
                    $message
                );

                $resultData = $this->getApiClientService()->sibApiRequest(
                    self::API_POST_METHOD,
                    self::SIB_SEND_SMS_URI,
                    [
                        'recipient' => $number,
                        'sender' => $sender,
                        'content' => $msgBody,
                        'type' => self::SENDINBLUE_SMS_TYPE,
                    ]
                );

                if (isset($resultData['status']) && $resultData['status'] === self::SEND_SMS_SUCCESS_CODE) {
                    $responceArr = array('result' => true);
                }

                echo json_encode($responceArr);
            }
        } catch (\Exception $e) {
            \PrestaShopLoggerCore::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }
    }
}
