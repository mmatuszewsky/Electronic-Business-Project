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

class ConfigService
{
    /* Sendinblue sms settings */
    const CONFIG_SMS_CURRENT_CREDIT = 'currentSmsCredits';
    const CONFIG_SMS_FORM_URL = 'formUrl';
    const CONFIG_SMS_NOTIFICATION_STATUS = 'Api_Sms_Credit';
    const CONFIG_SMS_NOTIFICATION_EMAIL = 'Notify_Email';
    const CONFIG_SMS_NOTIFICATION_LIMIT = 'Notify_Value';
    const CONFIG_SMS_NOTIFICATION_ALERT = 'Notify_Cron_Executed';
    const CONFIG_SMS_ORDER_CONFIRMATION = 'Api_Sms_Order_Status';
    const CONFIG_SMS_SHIPPING_CONFIRMATION = 'Api_Sms_shipment_Status';
    const CONFIG_SMS_ORDER_CONFIRMATION_SENDER = 'Sender_Order';
    const CONFIG_SMS_ORDER_CONFIRMATION_MSG = 'Sender_Order_Message';
    const CONFIG_SMS_CAMPAIGN_STATUS = 'Api_Sms_Campaign_Status';
    const CONFIG_SMS_CAMPAIGN_TYPE = 'Sms_Campaign_Type';
    const CONFIG_SMS_SHIPPING_CONFIRMATION_SENDER = 'Sender_Shipment';
    const CONFIG_SMS_SHIPPING_CONFIRMATION_MSG = 'Sender_Shipment_Message';

    const CONFIG_SENDINBLUE_WEBSERVICE_KEY = 'webserviceKey';
    const CONNECTION_URL = 'connection_url';
    const SIB_INTEGRATIONS_PORTAL_URL = 'https://app.sendinblue.com/integrations';
    const SIB_INTEGRATIONS_API_URL = 'https://plugin.sendinblue.com/integrations/api';
    const WEBSERVICE_API_KEY = 'apiKey';
    const API_KEY_V3 = 'apiKeyV3';
    const ERROR_LEVEL = 3;
    const CONFIG_PREFIX = 'Sendin_%s';

    /* Sendinblue plugin settings */
    const CONFIG_USER_CONNECTION_ID = 'userConnectionId';
    const CONFIG_IS_AUTO_SYNC_ENABLED = 'isAutoSyncEnabled';
    const CONFIG_IS_CONTACT_STATE_SYNC_ENABLED = 'isContactStateSyncEnabled';
    const CONFIG_SUBSCRIPTION_MAILING = 'subscriptionMailing';
    const CONFIG_IS_CUSTOMER_SYNC_ENABLED = 'isCustomerSyncEnabled';
    const CONFIG_IS_PAGE_TRACKING_ENABLED = 'isPageTrackingEnabled';
    const CONFIG_IS_ABANDONED_CART_TRACKING_ENABLED = 'isAbandonedCartTrackingEnabled';
    const CONFIG_MA_KEY = 'marketingAutomationKey';
    const CONFIG_MAPPED_GROUPS = 'mappedGroups';
    const CONFIG_LIST_ID = 'listId';

    /* Sendinblue SMTP settings */
    const CONFIG_IS_SMTP_ENABLED = 'isSmtpEnabled';
    const CONFIG_SMTP_SENDER = 'smtpSender';
    const CONFIG_SMTP_USER = 'smtpUser';
    const CONFIG_SMTP_PASSWORD = 'smtpPassword';
    const CONFIG_SMTP_HOST = 'smtpHost';
    const CONFIG_SMTP_PORT = 'smtpPort';
    const CONFIG_SMTP_ENCRYPTION = 'tls';

    /* Prestashop SMTP Parameters */
    const MAIL_METHOD = 'PS_MAIL_METHOD';
    const MAIL_SERVER = 'PS_MAIL_SERVER';
    const MAIL_EMAIL = 'PS_SHOP_EMAIL';
    const MAIL_USER = 'PS_MAIL_USER';
    const MAIL_PASSWD = 'PS_MAIL_PASSWD';
    const MAIL_PORT = 'PS_MAIL_SMTP_PORT';
    const MAIL_ENCRYPTION = 'PS_MAIL_SMTP_ENCRYPTION';

    /* Test Mail Parameters */
    const EXTERNAL_MAIL_METHOD = 2;
    const DEFAULT_MAIL_METHOD = 1;
    const SEND_TEST_EMAIL = 'email';
    const SEND_TEST_SUBJECT = '[Sendinblue SMTP] test email';
    const SEND_FROM_EMAIL = 'contact@sendinblue.com';
    const SEND_SMTP_TEMPLATE = 'smtpTestMail';

    /*Pushowl Url */
    const PUSHOWL_STAGING_URL = "https://cdn-staging.pushowl.com/latest/sdks/service-worker.js";
    const PUSHOWL_PRODUCTION_URL = "https://cdn.pushowl.com/latest/sdks/service-worker.js";
    const URL_CHECK_STAGING = "staging";

    /**
     * @param string $key
     * @param bool $default
     * @return string|false
     */
    public function getSibConfig($key, $default = false)
    {
        $value = \Configuration::get(sprintf(self::CONFIG_PREFIX, $key), $default);

        if (in_array($value, ['true', 'false'])) {
            $value = filter_var($value, FILTER_VALIDATE_BOOLEAN);
        }

        return $value;
    }

    /**
     * @param string $key
     * @param string|null $value
     * @return bool
     */
    public function upsertSibConfig($key, $value = null)
    {
        if (is_bool($value)) {
            $value = $value ? 'true' : 'false';
        }

        return \Configuration::updateValue(sprintf(self::CONFIG_PREFIX, $key), $value);
    }

    /**
     * @param $name
     */
    public function deleteSibConfig($name)
    {
        \Configuration::deleteByName(sprintf(self::CONFIG_PREFIX, $name));
    }

    public function deleteAllSibConfigs()
    {
        if ($this->getSibConfig(self::CONFIG_IS_SMTP_ENABLED)) {
            \Configuration::updateValue(self::MAIL_METHOD, self::DEFAULT_MAIL_METHOD);
        }
        $configs = [
            ConfigService::CONFIG_SENDINBLUE_WEBSERVICE_KEY,
            ConfigService::CONFIG_USER_CONNECTION_ID,
            ConfigService::CONFIG_IS_AUTO_SYNC_ENABLED,
            ConfigService::CONFIG_IS_CONTACT_STATE_SYNC_ENABLED,
            ConfigService::CONFIG_SUBSCRIPTION_MAILING,
            ConfigService::CONFIG_IS_PAGE_TRACKING_ENABLED,
            ConfigService::CONFIG_IS_ABANDONED_CART_TRACKING_ENABLED,
            ConfigService::CONFIG_MA_KEY,
            ConfigService::CONFIG_MAPPED_GROUPS,
            ConfigService::CONFIG_IS_CUSTOMER_SYNC_ENABLED,
            ConfigService::CONFIG_IS_SMTP_ENABLED,
            ConfigService::CONFIG_SMTP_SENDER,
            ConfigService::CONFIG_SMTP_USER,
            ConfigService::CONFIG_SMTP_PASSWORD,
            ConfigService::CONFIG_SMTP_HOST,
            ConfigService::CONFIG_SMTP_PORT,
            ConfigService::CONFIG_SMTP_ENCRYPTION,
            ConfigService::API_KEY_V3,
            WebserviceService::SENDINBLUE_API_ACCOUNT,
            ConfigService::CONFIG_SMS_NOTIFICATION_STATUS,
            ConfigService::CONFIG_SMS_NOTIFICATION_EMAIL,
            ConfigService::CONFIG_SMS_NOTIFICATION_LIMIT,
            ConfigService::CONFIG_SMS_NOTIFICATION_ALERT,
            ConfigService::CONFIG_SMS_ORDER_CONFIRMATION,
            ConfigService::CONFIG_SMS_ORDER_CONFIRMATION_SENDER,
            ConfigService::CONFIG_SMS_ORDER_CONFIRMATION_MSG,
            ConfigService::CONFIG_SMS_CAMPAIGN_STATUS,
            ConfigService::CONFIG_SMS_CAMPAIGN_TYPE,
            ConfigService::CONFIG_LIST_ID,
            ConfigService::CONFIG_SMS_SHIPPING_CONFIRMATION,
            ConfigService::CONFIG_SMS_SHIPPING_CONFIRMATION_SENDER,
            ConfigService::CONFIG_SMS_SHIPPING_CONFIRMATION_MSG,
        ];

        foreach ($configs as $configKey) {
            $this->deleteSibConfig($configKey);
        }
    }

    /**
     * @return array
     */
    public function getConfigs()
    {
        return [
            self::CONFIG_SMS_ORDER_CONFIRMATION => $this->getSibConfig(self::CONFIG_SMS_ORDER_CONFIRMATION),
            self::CONFIG_SMS_SHIPPING_CONFIRMATION => $this->getSibConfig(self::CONFIG_SMS_SHIPPING_CONFIRMATION),
            self::CONNECTION_URL => $this->getConnectUrl(),
            self::CONFIG_USER_CONNECTION_ID => $this->getSibConfig(self::CONFIG_USER_CONNECTION_ID),
            self::API_KEY_V3 => $this->getSibConfig(self::API_KEY_V3),
            self::CONFIG_SMS_CURRENT_CREDIT => (new SmsService())->getSmsCredit(),
            self::CONFIG_SMS_NOTIFICATION_STATUS => $this->getSibConfig(self::CONFIG_SMS_NOTIFICATION_STATUS),
            self::CONFIG_SMS_NOTIFICATION_EMAIL => $this->getSibConfig(self::CONFIG_SMS_NOTIFICATION_EMAIL),
            self::CONFIG_SMS_NOTIFICATION_LIMIT => $this->getSibConfig(self::CONFIG_SMS_NOTIFICATION_LIMIT),
            self::CONFIG_SMS_CAMPAIGN_STATUS => $this->getSibConfig(self::CONFIG_SMS_CAMPAIGN_STATUS),
            self::CONFIG_SMS_CAMPAIGN_TYPE => $this->getSibConfig(self::CONFIG_SMS_CAMPAIGN_TYPE),
            self::CONFIG_SMS_FORM_URL => \Tools::safeOutput($_SERVER['REQUEST_URI']),
            self::CONFIG_SMS_ORDER_CONFIRMATION_SENDER =>
                $this->getSibConfig(self::CONFIG_SMS_ORDER_CONFIRMATION_SENDER),
            self::CONFIG_SMS_ORDER_CONFIRMATION_MSG => $this->getSibConfig(self::CONFIG_SMS_ORDER_CONFIRMATION_MSG),
            self::CONFIG_SMS_SHIPPING_CONFIRMATION_SENDER => $this->getSibConfig(
                self::CONFIG_SMS_SHIPPING_CONFIRMATION_SENDER
            ),
            self::CONFIG_SMS_SHIPPING_CONFIRMATION_MSG => $this->getSibConfig(
                self::CONFIG_SMS_SHIPPING_CONFIRMATION_MSG
            ),
        ];
    }

    /**
     * @return string
     */
    private function getConnectUrl()
    {
        $userConnectionId = $this->getSibConfig(self::CONFIG_USER_CONNECTION_ID);
        if ($userConnectionId) {
            $response = sprintf(
                '%s/%s/settings',
                self::SIB_INTEGRATIONS_PORTAL_URL,
                $userConnectionId
            );
        } else {
            $response = sprintf(
                '%s/connect/PS17?%s',
                self::SIB_INTEGRATIONS_PORTAL_URL,
                http_build_query($this->getConnectUrlParams())
            );
        }

        return $response;
    }

    /**
     * @return array
     */
    private function getConnectUrlParams()
    {
        $apiKey = $this->getSibConfig(self::CONFIG_SENDINBLUE_WEBSERVICE_KEY);
        if (!$apiKey) {
            $apiKey = (new WebserviceService())->generateWebServiceKey();
        }

        return [
            'url' => rtrim(\Tools::getShopDomainSsl(true).__PS_BASE_URI__, '/'),
            'subshop' => 0,
            'shop_version' => _PS_VERSION_,
            'callback' => $this->getModuleAdminUrl(),
            'apiKey' => $apiKey,
            'utm_medium' => 'plugin',
            'utm_source' => 'prestashop_1_7_plugin'
        ];
    }

    /**
     * @return string
     */
    public function getModuleAdminUrl()
    {
        return \Context::getContext()->link->getModuleLink('sendinblue', 'callback');
    }

    /**
     * @return bool|null
     */
    public function isAutoSyncEnabled()
    {
        return $this->getSibConfig(self::CONFIG_IS_AUTO_SYNC_ENABLED);
    }

     /**
     * @return bool|null
     */
    public function isShipmentSMSConfEnabled()
    {
        return $this->getSibConfig(self::CONFIG_SMS_SHIPPING_CONFIRMATION);
    }

    /**
     * @return bool|null
     */
    public function isCartTrackingEnabled()
    {
        return $this->getSibConfig(self::CONFIG_IS_ABANDONED_CART_TRACKING_ENABLED);
    }
}
