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

class WebserviceSpecificManagementSendinbluesendtestmail extends WebserviceSpecificManagementSendinblueAbstract
{
    /* Prestashop Module Detail */
    const MODULE_NAME = 'sendinblue';


    public function manage()
    {
        $email = $this->getRequestKey(ConfigService::SEND_TEST_EMAIL);
        $subject = ConfigService::SEND_TEST_SUBJECT;

        $result = $this->sendMail($email, $subject);

        if ($result) {
            $this->response = [self::SUCCESS => true];
        } else {
            $this->response = [self::SUCCESS => false];
        }
    }

    /**
     * @param string $email
     * @param string $subject
     * @return bool
     */
    public function sendMail($email, $subject)
    {
        $langId = \ConfigurationCore::get('PS_LANG_DEFAULT');
        $countryIso = \Db::getInstance()->getRow(
            'SELECT `iso_code` 
             FROM '._DB_PREFIX_.'lang 
             WHERE  `id_lang` = \''.pSQL($langId).'\''
        );
        $isoCode = \Tools::strtolower($countryIso['iso_code']);

        if (is_dir(sprintf('%s%s/mails/%s', _PS_MODULE_DIR_, self::MODULE_NAME, $isoCode)) !== true) {
            $result = \Db::getInstance()->getRow(
                'SELECT `id_lang` 
                 FROM '._DB_PREFIX_.'lang 
                 WHERE `iso_code` = \'en\''
            );
            $langId = $result['id_lang'];
        }

        return \Mail::Send(
            (int)$langId,
            ConfigService::SEND_SMTP_TEMPLATE,
            \Mail::l($subject, (int)$langId),
            array('{title}' => $subject),
            $email,
            null,
            ConfigService::SEND_FROM_EMAIL,
            self::MODULE_NAME,
            null,
            null,
            sprintf('%s%s/mails/', _PS_MODULE_DIR_, self::MODULE_NAME)
        );
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return json_encode($this->response);
    }
}
