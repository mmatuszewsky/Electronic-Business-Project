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

use Sendinblue\Services\ApiClientService;
use Sendinblue\Services\ConfigService;
use Sendinblue\Services\IntegrationClient;

abstract class AbstractHook
{
    /**
     * @var null|IntegrationClient
     */
    private $integrationClient;

    /**
     * @var null|ConfigService
     */
    private $configService;

    /**
     * @return IntegrationClient|null
     */
    public function getIntegrationClient()
    {
        if (!$this->integrationClient) {
            $this->integrationClient = new IntegrationClient();
        }

        return $this->integrationClient;
    }

    /**
     * @return \CustomerCore|\Customer
     */
    protected function getContextCustomer()
    {
        try {
            return $this->getContext()->customer;
        } catch (\Exception $e) {
            $this->logError($e->getMessage());
            return null;
        }
    }

    /**
     * @return \CountryCore|\Country
     */
    protected function getContextCountry()
    {
        try {
            return $this->getContext()->country;
        } catch (\Exception $e) {
            $this->logError($e->getMessage());
            return null;
        }
    }

    /**
     * @return \Language
     */
    protected function getContextlanguage()
    {
        try {
            return $this->getContext()->language;
        } catch (\Exception $e) {
            $this->logError($e->getMessage());
            return null;
        }
    }

    /**
     * @return ConfigService
     */
    protected function getSendinblueConfigService()
    {
        if (!$this->configService) {
            $this->configService = new ConfigService();
        }

        return $this->configService;
    }

    /**
     * @param string $message
     */
    protected function logError($message)
    {
        \PrestaShopLoggerCore::addLog($message, ConfigService::ERROR_LEVEL);
    }

    /**
     * @return \Context|\ContextCore
     */
    protected function getContext()
    {
        return \ContextCore::getContext();
    }

    /**
     * @return ApiClientService
     */
    protected function getApiClientService()
    {
        return new ApiClientService($this->getSendinblueConfigService());
    }

    /**
     * @return bool
     */
    protected function isCartTrackingEnabled()
    {
        return $this->getSendinblueConfigService()
            ->getSibConfig(ConfigService::CONFIG_IS_ABANDONED_CART_TRACKING_ENABLED);
    }

    /**
     * @param \CartCore|\Cart|\CustomerCore|\OrderCore|\Order|null $data
     */
    abstract protected function handleEvent($data);
}
