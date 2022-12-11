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

class ApiClientService
{
    const AUTOMATION_API = 'https://in-automate.sendinblue.com/api/v2/trackEvent';

    const EVENT_CART_UPDATED = 'cart_updated';

    const EVENT_CART_DELETED = 'cart_deleted';

    const EVENT_ORDER_COMPLETED = 'order_completed';

    const EVENT_CONTACT_CREATED_URI = '/events/%s/contact_created';

    const EVENT_CONTACT_UPDATED_URI = '/events/%s/contact_updated';

    const EVENT_CONTACT_DELETED_URI = '/events/%s/contact_deleted';

    const MIGRATE_FROM_API_V2_URI = '/migrate';

    const SIB_BASE_API_URL = 'https://api.sendinblue.com/v3';

    const ACCOUNT_API_V3_URI = '/account';

    const HEADERS_KEY_MA_KEY = 'ma-key';

    const HEADERS_KEY_API_KEY = 'api-key';

    const HEADERS_KEY_SHOP_VERSION = 'x-sib-shop-version';

    const HEADERS_KEY_PLUGIN_VERSION = 'x-sib-plugin-version';

    const HEADERS_KEY_USER_AGENT = 'User-Agent';

    const HEADERS_KEY_CONTENT_TYPE = 'Content-Type';

    const HEADERS_VALUE_CONTENT_TYPE_JSON = 'application/json';

    const HEADERS_VALUE_USER_AGENT = 'sendinblue_plugins/prestashop_1_7';

    /**
     * @var string
     */
    private $sendinbluePluginVersion;

    /**
     * @var ConfigService
     */
    private $configService;

    /**
     * ApiClientService constructor.
     * @param ConfigService $configService
     */
    public function __construct($configService)
    {
        $sendinblueModule = \Module::getInstanceByName('sendinblue');
        $this->sendinbluePluginVersion = $sendinblueModule->version;

        $this->configService = $configService;
    }

    /**
     * @param string $eventName
     * @param array $data
     */
    public function sendTrackEvent($eventName, $data = [])
    {
        $marketingAutomationKey = $this->configService->getSibConfig(ConfigService::CONFIG_MA_KEY);

        $this->sendRequest(
            'POST',
            self::AUTOMATION_API,
            $data + ['event' => $eventName],
            [
                sprintf('%s: %s', self::HEADERS_KEY_MA_KEY, $marketingAutomationKey),
                sprintf('%s: %s', self::HEADERS_KEY_API_KEY, $marketingAutomationKey),
            ]
        );
    }

    /**
     * @param array $contact
     *
     * @return array
     */
    public function createContact($contact)
    {
        return $this->sendRequest(
            'POST',
            $this->getConnectionUri(self::EVENT_CONTACT_CREATED_URI),
            $contact,
            [
                sprintf('%s: %s', self::HEADERS_KEY_SHOP_VERSION, _PS_VERSION_),
                sprintf('%s: %s', self::HEADERS_KEY_PLUGIN_VERSION, $this->sendinbluePluginVersion),
            ]
        );
    }

    /**
     * @param array $contact
     *
     * @return array
     */
    public function updateContact($contact)
    {
        return $this->sendRequest(
            'POST',
            $this->getConnectionUri(self::EVENT_CONTACT_UPDATED_URI),
            $contact,
            [
                sprintf('%s: %s', self::HEADERS_KEY_SHOP_VERSION, _PS_VERSION_),
                sprintf('%s: %s', self::HEADERS_KEY_PLUGIN_VERSION, $this->sendinbluePluginVersion),
            ]
        );
    }

    /**
     * @param array $contact
     *
     * @return array
     */
    public function deleteContact($contact)
    {
        return $this->sendRequest(
            'POST',
            $this->getConnectionUri(self::EVENT_CONTACT_DELETED_URI),
            $contact,
            [
                sprintf('%s: %s', self::HEADERS_KEY_SHOP_VERSION, _PS_VERSION_),
                sprintf('%s: %s', self::HEADERS_KEY_PLUGIN_VERSION, $this->sendinbluePluginVersion),
            ]
        );
    }

    public function migrateFromApiV2($data)
    {
        return $this->sendRequest(
            'POST',
            $this->getConnectionUri(self::MIGRATE_FROM_API_V2_URI),
            $data
        );
    }

    /**
     * @param string $method
     * @param string $path
     * @param array $data
     * @return array
     */
    public function sibApiRequest($method, $path, $data = [])
    {
        return $this->sendRequest(
            $method,
            $this->getBaseUri($path),
            $data,
            [
                sprintf('%s: %s', self::HEADERS_KEY_API_KEY, $this->configService
                    ->getSibConfig(ConfigService::API_KEY_V3)),
                sprintf('%s: %s', self::HEADERS_KEY_SHOP_VERSION, _PS_VERSION_),
                sprintf('%s: %s', self::HEADERS_KEY_PLUGIN_VERSION, $this->sendinbluePluginVersion),
            ]
        );
    }

    /**
     * @param string $method
     * @param string $path
     * @param array $data
     * @return array
     */
    public function getMappedAttributes($method, $path, $data = [])
    {
        return $this->sendRequest(
            $method,
            $this->getConnectionUri($path),
            $data,
            [
                sprintf('%s: %s', self::HEADERS_KEY_SHOP_VERSION, _PS_VERSION_),
                sprintf('%s: %s', self::HEADERS_KEY_PLUGIN_VERSION, $this->sendinbluePluginVersion),
            ]
        );
    }

    /**
     * @param string $method
     * @param string $url
     * @param array $data
     * @param array $headers
     *
     * @return array
     */
    private function sendRequest($method, $url, $data = [], $headers = [])
    {
        try {
            $curl = curl_init();

            $defaultHeaders = [
                sprintf('%s: %s', self::HEADERS_KEY_CONTENT_TYPE, self::HEADERS_VALUE_CONTENT_TYPE_JSON),
                sprintf('%s: %s', self::HEADERS_KEY_USER_AGENT, self::HEADERS_VALUE_USER_AGENT),
            ];

            curl_setopt_array($curl, [
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_HTTPHEADER => array_merge($defaultHeaders, $headers)
            ]);

            if ($method === 'POST' || $method === 'PUT') {
                curl_setopt_array($curl, [CURLOPT_POSTFIELDS => json_encode($data)]);
            }

            $rawResponse = curl_exec($curl);
            $status = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);

            $response = [
                'data' => $rawResponse,
                'status' => $status,
            ];

            $error = curl_error($curl);

            $response['success'] = !$error && $status == 200;

            if ($error) {
                \PrestaShopLoggerCore::addLog($error, ConfigService::ERROR_LEVEL);

                $response['error'] = $error;
            }

            curl_close($curl);
        } catch (\Exception $exception) {
            \PrestaShopLoggerCore::addLog($exception->getMessage(), ConfigService::ERROR_LEVEL);

            $response = [
                'success' => false,
                'error' => $exception->getMessage(),
            ];
        }

        return $response;
    }

    /**
     * @param string $path
     *
     * @return string
     */
    private function getConnectionUri($path)
    {
        return ConfigService::SIB_INTEGRATIONS_API_URL . sprintf($path, $this->configService
                ->getSibConfig(
                    ConfigService::CONFIG_USER_CONNECTION_ID
                ));
    }

    /**
     * @param string $path
     *
     * @return string
     */
    private function getBaseUri($path)
    {
        return self::SIB_BASE_API_URL . sprintf("%s", $path);
    }
}
