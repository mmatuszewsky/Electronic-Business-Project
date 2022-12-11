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

use Sendinblue\Services\ConfigService;

class WebserviceSpecificManagementSendinblueconfig extends WebserviceSpecificManagementSendinblueAbstract
{
    public function manage()
    {
        $configs = [
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
            ConfigService::CONFIG_LIST_ID,
        ];

        $configService = new ConfigService();
        $currentSmtpEnabled = $configService->getSibConfig(ConfigService::CONFIG_IS_SMTP_ENABLED);

        foreach ($configs as $configKey) {
            $configService->upsertSibConfig($configKey, $this->getRequestKey($configKey, false));
        }

        $isSmtpEnabled = filter_var(
            $this->getRequestKey(ConfigService::CONFIG_IS_SMTP_ENABLED),
            FILTER_VALIDATE_BOOLEAN
        );

        if ($isSmtpEnabled) {
            \ConfigurationCore::updateValue(ConfigService::MAIL_METHOD, ConfigService::EXTERNAL_MAIL_METHOD);
            \ConfigurationCore::updateValue(
                ConfigService::MAIL_EMAIL,
                $this->getRequestKey(ConfigService::CONFIG_SMTP_SENDER)
            );
            \ConfigurationCore::updateValue(
                ConfigService::MAIL_USER,
                $this->getRequestKey(ConfigService::CONFIG_SMTP_USER)
            );
            \ConfigurationCore::updateValue(
                ConfigService::MAIL_PASSWD,
                $this->getRequestKey(ConfigService::CONFIG_SMTP_PASSWORD)
            );
            \ConfigurationCore::updateValue(
                ConfigService::MAIL_SERVER,
                $this->getRequestKey(ConfigService::CONFIG_SMTP_HOST)
            );
            \ConfigurationCore::updateValue(
                ConfigService::MAIL_PORT,
                $this->getRequestKey(ConfigService::CONFIG_SMTP_PORT)
            );
            \ConfigurationCore::updateValue(ConfigService::MAIL_ENCRYPTION, ConfigService::CONFIG_SMTP_ENCRYPTION);
        } else {
            if ($currentSmtpEnabled) {
                \ConfigurationCore::updateValue('PS_MAIL_METHOD', ConfigService::DEFAULT_MAIL_METHOD);
            }
        }
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return json_encode(
            [
                self::SUCCESS => true
            ]
        );
    }
}
