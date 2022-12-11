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

use Sendinblue\Services\ConfigService;

class ActionEmailConfigurationSaveHook extends AbstractHook
{
    public function handleEvent($data = null)
    {
        try {
            $configService = $this->getSendinblueConfigService();

            $currentSmtpMethod = \ConfigurationCore::get(ConfigService::MAIL_METHOD);
            $currentSmtpEmail = \ConfigurationCore::get(ConfigService::MAIL_EMAIL);
            $currentSmtpUser = \ConfigurationCore::get(ConfigService::MAIL_USER);
            $currentSmtpPassword = \ConfigurationCore::get(ConfigService::MAIL_PASSWD);
            $currentSmtpServer = \ConfigurationCore::get(ConfigService::MAIL_SERVER);
            $currentSmtpPort = \ConfigurationCore::get(ConfigService::MAIL_PORT);
            $currentSmtpEncryption = \ConfigurationCore::get(ConfigService::MAIL_ENCRYPTION);

            $smtpMethod = ConfigService::EXTERNAL_MAIL_METHOD;
            $smtpEnabled = $configService->getSibConfig(ConfigService::CONFIG_IS_SMTP_ENABLED);
            $smtpEmail = $configService->getSibConfig(ConfigService::CONFIG_SMTP_SENDER);
            $smtpUser = $configService->getSibConfig(ConfigService::CONFIG_SMTP_USER);
            $smtpPassword = $configService->getSibConfig(ConfigService::CONFIG_SMTP_PASSWORD);
            $smtpServer = $configService->getSibConfig(ConfigService::CONFIG_SMTP_HOST);
            $smtpPort = $configService->getSibConfig(ConfigService::CONFIG_SMTP_PORT);
            $smtpEncryption = ConfigService::CONFIG_SMTP_ENCRYPTION;

            if ($smtpEnabled && ($currentSmtpMethod !== $smtpMethod ||
                    $currentSmtpEmail !== $smtpEmail || $currentSmtpUser !== $smtpUser ||
                    $currentSmtpPassword !== $smtpPassword || $currentSmtpServer !== $smtpServer ||
                    $currentSmtpPort !== $smtpPort || $currentSmtpEncryption !== $smtpEncryption
                )) {
                $configService->upsertSibConfig(ConfigService::CONFIG_IS_SMTP_ENABLED, 'false');
                $this->getIntegrationClient()->disableSmtp();
            }
        } catch (\Exception $e) {
            $this->logError($e->getMessage());
        }
    }
}
