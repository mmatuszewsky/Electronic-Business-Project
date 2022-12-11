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

use Sendinblue\Factories\HooksFactory;
use Sendinblue\Services\ConfigService;
use Sendinblue\Services\IntegrationClient;
use Sendinblue\Services\WebserviceService;

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(dirname(__FILE__) . '/vendor/autoload.php');

class Sendinblue extends Module
{
    const SENDINBLUE_HOOKS = [
        'header',
        'displayBackOfficeHeader',
        'addWebserviceResources',
        'orderConfirmation',
        'actionOrderStatusUpdate',
        'actionCartSave',
        'actionEmailConfigurationSave',
        'actionCustomerAccountAdd',
        'actionCustomerAccountUpdate',
        'actionNewsletterRegistrationAfter',
        'actionValidateOrder',
        'actionObjectAddressAddAfter',
        'actionObjectAddressUpdateAfter',
    ];

    /**
     * @var null|ConfigService
     */
    private $configService;

    /**
     * @var null|IntegrationClient
     */
    private $integrationClient;

    /**
     * @var bool
     */
    private $isCartTracked = false;

    public function __construct()
    {
        $this->name = 'sendinblue';
        $this->tab = 'advertising_marketing';
        $this->version = '4.0.13';
        $this->module_key = 'fa4c321492032ab1bdeea359aa1e4e3d';
        $this->author = 'Sendinblue';
        $this->need_instance = 1;
        $this->bootstrap = true;
        $this->displayName = $this->l('Sendinblue');
        $this->description = $this->l('Synchronize your PrestaShop subscribers with Sendinblue,
            create beautifully designed emails, and automatically follow up with customers who abandon their
            cart with a personalized message -- all from a single platform.');
        $this->confirmUninstall = $this->l('Are you sure you want to do it? 
        This will revert your shop mail settings to default.');
        $this->ps_versions_compliancy = ['min' => '1.7.1', 'max' => _PS_VERSION_];

        parent::__construct();
    }

    public function install()
    {
        $this->addModuleToTab();

        return parent::install() &&
            $this->registerSendinblueHooks();
    }

    /**
     * @return bool
     */
    public function registerSendinblueHooks()
    {
        foreach (self::SENDINBLUE_HOOKS as $hook) {
            if (!$this->registerHook($hook)) {
                return false;
            }
        }

        return true;
    }

    public function unregisterSendinblueHooks()
    {
        foreach (self::SENDINBLUE_HOOKS as $hook) {
            $this->unregisterHook($hook);
        }
    }

    public function addModuleToTab()
    {
        $tab = new Tab();
        $tab->name[(int)Configuration::get('PS_LANG_DEFAULT')] = \Tools::ucfirst($this->name);
        $tab->class_name = 'SendinblueTab';
        $tab->id_parent = (int)Tab::getIdFromClassName('CONFIGURE');
        $tab->module = $this->name;
        $tab->add();
    }

    public function getContent()
    {
        Tools::redirectAdmin(Context::getContext()->link->getAdminLink('SendinblueTab'));
    }

    public function uninstall()
    {
        $this->getIntegrationClient()->deleteUserConnection();
        (new WebserviceService())->deleteSendinblueWebserviceKey();
        $this->getConfigService()->deleteAllSibConfigs();
        $this->removeServiceWorkerFile();
        $this->removeModuleTab();
        $this->unregisterSendinblueHooks();

        return parent::uninstall();
    }

    private function removeModuleTab()
    {
        $tabId = (int)Tab::getIdFromClassName(__CLASS__);
        if ($tabId) {
            $tab = new Tab($tabId);
            $tab->delete();
        }
    }

    public function hookDisplayBackOfficeHeader()
    {
        if (\Tools::getValue('controller') === 'SendinblueTab') {
            $this->context->controller->addJquery();
            $this->context->controller->addCSS($this->_path.'views/css/sendinblue.css');
            $this->context->controller->addJS($this->_path.'views/js/sendinblue.js');
            Media::addJsDef([
                'base_url' => $this->context->link->getAdminLink('SendinblueTab'),
            ]);
        }
    }

    public function hookHeader()
    {
        try {
            $configService = $this->getConfigService();
            $maKey = $configService->getSibConfig(ConfigService::CONFIG_MA_KEY);
            $serviceWorkerPath = __DIR__."/views/js/service-worker.js";

            if ($configService->getSibConfig(ConfigService::CONFIG_IS_PAGE_TRACKING_ENABLED) && $maKey) {
                $this->smarty->assign([
                    ConfigService::CONFIG_MA_KEY => $maKey,
                    'email' => $this->getContextCustomer()->isLogged() ? $this->getContextCustomer()->email : null
                ]);
                if ( ! file_exists($serviceWorkerPath)) {
                    HooksFactory::getActionWebPush()->handleEvent($serviceWorkerPath);
                }

                return $this->display(__FILE__, '/views/templates/front/tracking_script.tpl');
            }

           $this->removeServiceWorkerFile();

            return true;
        } catch (Exception $e) {
            PrestaShopLoggerCore::addLog($e->getMessage(), 3);
        }

        return true;
    }

    /**
     * @return CustomerCore
     */
    private function getContextCustomer()
    {
        return \Context::getContext()->customer;
    }

    public function hookAddWebserviceResources()
    {
        return [
            'sendinbluetest' => [
                'description' => 'Sendinblue test connection',
                'specific_management' => true
            ],
            'sendinblueconfig' => [
                'description' => 'Sendinblue configuration',
                'specific_management' => true
            ],
            'sendinbluedisconnect' => [
                'description' => 'Sendinblue configuration disconnect',
                'specific_management' => true
            ],
            'sendinbluesendtestmail' => [
                'description' => 'Sendinblue Test Mail',
                'specific_management' => true
            ],
            'sendinblueunsubscribe' => [
                'description' => 'Sendinblue unsubscribe recipient',
                'specific_management' => true
            ],
            'sendinblueinfo' => [
                'description' => 'Sendinblue plugin version',
                'specific_management' => true
            ],
            'sendinblueproducts' => [
                'description' => 'Sendinblue get products',
                'specific_management' => true
            ],
            'sendinbluecustomers' => [
                'description' => 'Sendinblue get customers',
                'specific_management' => true
            ],
            'sendinbluenewsletterrecipients' => [
                'description' => 'Sendinblue get newsletter recipients',
                'specific_management' => true
            ],
        ];
    }

    /**
     * @return ConfigService
     */
    private function getConfigService()
    {
        if (!$this->configService) {
            if (!class_exists('ConfigService')) {
                include_once dirname(__FILE__) . '/services/ConfigService.php';
            }

            $this->configService = new ConfigService();
        }

        return $this->configService;
    }

    /**
     * @return IntegrationClient
     */
    public function getIntegrationClient()
    {
        if (!$this->integrationClient) {
            if (!class_exists('IntegrationClient')) {
                include_once dirname(__FILE__) . '/services/IntegrationClient.php';
            }

            $this->integrationClient = new IntegrationClient();
        }

        return $this->integrationClient;
    }

    /**
     * @param array $params
     */
    public function hookActionCartSave($params)
    {
        if (!Validate::isLoadedObject($this->context->cart) || !Validate::isLoadedObject($params['cart'])) {
            return;
        }

        $customer = $this->getContextCustomer();

        if ($customer === null) {
            return;
        }

        if (!$this->isSendinblueEnabled()
            || !$customer->isLogged()
            || empty($params['cart'])
            || empty($params['cart']->id)
            || $this->isCartTracked
            || !$this->getConfigService()->isCartTrackingEnabled()
        ) {
            return;
        }

        HooksFactory::getCartSaveHook()->handleEvent($params['cart']);
        $this->isCartTracked = HooksFactory::getCartSaveHook()->isCartTracked();
    }

    /**
     * @param array $params
     */
    public function hookActionValidateOrder($params)
    {
        if (!$this->isSendinblueEnabled()
            || empty($params['order'])
            || (int)$params['order']->total_paid !== 0
            || !$this->getConfigService()->isCartTrackingEnabled()
        ) {
            return;
        }

        HooksFactory::getOrderConfirmationHook()->handleEvent($params['order']);
    }

    /**
     * @param array $params
     */
    public function hookOrderConfirmation($params)
    {
        if (!$this->isSendinblueEnabled()
            || empty($params['order'])
            || !$this->getConfigService()->isCartTrackingEnabled()
        ) {
            return;
        }

        HooksFactory::getOrderConfirmationHook()->handleEvent($params['order']);
    }

    /**
     * @param array $params
     */
    public function hookActionOrderStatusUpdate($params)
    {
        if (!$this->isSendinblueEnabled() || $this->getConfigService()->isShipmentSMSConfEnabled() === 1) {
            return;
        }
        HooksFactory::getActionOrderStatusUpdateHook()->handleEvent($params);
    }

    public function hookActionEmailConfigurationSave()
    {
        HooksFactory::getActionEmailConfigurationSaveHook()->handleEvent();
    }

    /**
     * @param array $params
     */
    public function hookActionCustomerAccountAdd($params)
    {
        if (!$this->isSendinblueEnabled() || !$this->getConfigService()->isAutoSyncEnabled()) {
            return;
        }

        HooksFactory::getActionCustomerAccountAddHook()->handleEvent($this->getContextCustomer());
    }

    /**
     * @param array $params
     */
    public function hookActionCustomerAccountUpdate($params)
    {
        if (!$this->isSendinblueEnabled() || !$this->getConfigService()->isAutoSyncEnabled()) {
            return;
        }

        HooksFactory::getActionCustomerAccountUpdateHook()->handleEvent($this->getContextCustomer());
    }

    /**
     * @param array $params
     */
    public function hookActionObjectAddressAddAfter($params)
    {
        if (!$this->isSendinblueEnabled() || !$this->getConfigService()->isAutoSyncEnabled()) {
            return;
        }

        HooksFactory::getActionObjectCustomerAddressUpdateHook()->handleEvent($params);
    }

    /**
     * @param array $params
     */
    public function hookActionObjectAddressUpdateAfter($params)
    {
        if (!$this->isSendinblueEnabled() || !$this->getConfigService()->isAutoSyncEnabled()) {
            return;
        }

        HooksFactory::getActionObjectCustomerAddressUpdateHook()->handleEvent($params);
    }

    /**
     * @param array $params
     */
    public function hookActionNewsletterRegistrationAfter($params)
    {
        if (!$this->isSendinblueEnabled() || !$this->getConfigService()->isAutoSyncEnabled()) {
            return;
        }

        HooksFactory::getActionNewsletterRegistrationAfterHook()->handleEvent($params);
    }

    /**
     * @return bool
     */
    private function isSendinblueEnabled()
    {
        return Module::isEnabled($this->name);
    }

    /**
     * @return bool
     */
    private function removeServiceWorkerFile()
    {
        $removeServiceWorkerPath = __DIR__. "/views/js/service-worker.js";
        if (file_exists($removeServiceWorkerPath)) {
            unlink($removeServiceWorkerPath);
        }

        return true;
    }
}
