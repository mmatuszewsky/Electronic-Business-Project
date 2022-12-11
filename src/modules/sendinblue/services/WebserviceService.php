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

class WebserviceService
{
    const SENDINBLUE_API_ACCOUNT = 'apiAccount';
    const SENDINBLUE_WEBSERVICE_KEY_DESCRIPTION = 'Sendinblue';

    const METHOD_RESOURCES = [
        'GET' => [
            'groups',
            'products',
            'sendinblueinfo',
            'sendinbluetest',
            'sendinblueproducts',
            'sendinbluecustomers',
            'sendinbluenewsletterrecipients',
        ],
        'POST' => [
            'sendinbluedisconnect',
            'sendinblueunsubscribe',
            'sendinbluesendtestmail',
        ],
        'PUT' => [
            'customers',
            'sendinblueconfig',
        ],
    ];

    /**
     * @var \DB
     */
    private $dbInstance;

    /**
     * @var int
     */
    private $shopId;

    public function __construct()
    {
        $this->dbInstance = \Db::getInstance();
        $this->shopId = (int)\Context::getContext()->shop->id;
    }

    /**
     * @return string
     */
    public function generateWebServiceKey()
    {
        $apiKey = \Tools::strtoupper(md5(time()));

        $this->dbInstance->insert('webservice_account', [
            'key' => $apiKey,
            'description' => 'Sendinblue',
            'active' => '1',
        ]);
        $accountId = $this->dbInstance->Insert_ID();

        $this->dbInstance->insert('webservice_account_shop', [
            'id_webservice_account' => $accountId,
            'id_shop' => $this->shopId,
        ]);

        $values = [];

        foreach (self::METHOD_RESOURCES as $method => $resources) {
            foreach ($resources as $resource) {
                $values[] = [
                    'resource' => $resource,
                    'method' => $method,
                    'id_webservice_account' => $accountId,
                ];
            }
        }

        $this->dbInstance->insert('webservice_permission', $values);
        $configService = new ConfigService();
        $configService->upsertSibConfig(ConfigService::CONFIG_SENDINBLUE_WEBSERVICE_KEY, $apiKey);
        $configService->upsertSibConfig(self::SENDINBLUE_API_ACCOUNT, $accountId);
        \Configuration::updateValue('PS_WEBSERVICE', 1);

        $sapi = php_sapi_name();
        if (strpos($sapi, 'cgi') !== false) {
            \Configuration::updateValue('PS_WEBSERVICE_CGI_HOST', 1);
        }

        return $apiKey;
    }

    public function deleteSendinblueWebserviceKey()
    {
        $configService = new ConfigService();
        $accountId = $configService->getSibConfig(self::SENDINBLUE_API_ACCOUNT);
        $webserviceKey = $configService->getSibConfig(ConfigService::CONFIG_SENDINBLUE_WEBSERVICE_KEY);
        if (!$webserviceKey) {
            return;
        }

        try {
            $this->dbInstance->delete(
                'webservice_permission',
                sprintf('id_webservice_account = %s', $accountId)
            );

            $this->dbInstance->delete(
                'webservice_account_shop',
                sprintf('id_webservice_account = %s AND id_shop = %s', $accountId, $this->shopId)
            );

            $keys = $this->dbInstance->executeS(
                sprintf(
                    'SELECT * FROM %swebservice_account WHERE description = "%s"',
                    _DB_PREFIX_,
                    self::SENDINBLUE_WEBSERVICE_KEY_DESCRIPTION
                )
            );
            foreach ($keys as $key) {
                if ($key['key'] == $webserviceKey) {
                    $this->dbInstance->delete(
                        'webservice_account',
                        sprintf('id_webservice_account = %s', $key['id_webservice_account'])
                    );

                    break;
                }
            }
        } catch (\Exception $e) {
            \PrestaShopLogger::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }
    }
}
