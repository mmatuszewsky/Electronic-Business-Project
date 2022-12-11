<?php
/**
 * MailChimp
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Commercial License
 * you can't distribute, modify or sell this code
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file
 * If you need help please contact leo@prestachamps.com
 *
 * @author    Mailchimp
 * @copyright Mailchimp
 * @license   commercial
 */

/**
 * Class Mailchimppro
 */
class Mailchimppro extends Module
{
    const MC_MIDDLEWARE = "https://prestashop.mailchimpapp.com";
    /**
     * @var \DrewM\MailChimp\MailChimp MailChimp API client object
     *
     * @see https://github.com/drewm/mailchimp-api
     */
    protected $apiClient;

    public $menus = [
        [
            'is_root' => true,
            'name' => 'Mailchimp Config',
            'class_name' => 'mailchimppro',
            'visible' => true,
            'parent_class_name' => 0,
        ],
        [
            'is_root' => false,
            'name' => 'Mailchimp Config',
            'class_name' => 'AdminMailchimpProConfig',
            'visible' => true,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'Mailchimp Setup Wizard',
            'class_name' => 'AdminMailchimpProWizard',
            'visible' => true,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'Mailchimp List',
            'class_name' => 'AdminMailchimpProLists',
            'visible' => false,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'Mailchimp Batches',
            'class_name' => 'AdminMailchimpProBatches',
            'visible' => false,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'Mailchimp Carts',
            'class_name' => 'AdminMailchimpProCarts',
            'visible' => false,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'Mailchimp Customers',
            'class_name' => 'AdminMailchimpProCustomers',
            'visible' => false,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'Mailchimp Orders',
            'class_name' => 'AdminMailchimpProOrders',
            'visible' => false,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'Mailchimp Products',
            'class_name' => 'AdminMailchimpProProducts',
            'visible' => false,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'Mailchimp Stores',
            'class_name' => 'AdminMailchimpProStores',
            'visible' => false,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'Mailchimp Sync',
            'class_name' => 'AdminMailchimpProSync',
            'visible' => false,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'Mailchimp Sites',
            'class_name' => 'AdminMailchimpProSites',
            'visible' => false,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'Mailchimp Automations',
            'class_name' => 'AdminMailchimpProAutomations',
            'visible' => false,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'List members',
            'class_name' => 'AdminMailchimpProListMembers',
            'visible' => false,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'Promo rules',
            'class_name' => 'AdminMailchimpProPromoRules',
            'visible' => false,
            'parent_class_name' => 'mailchimppro',
        ],
        [
            'is_root' => false,
            'name' => 'Promo codes',
            'class_name' => 'AdminMailchimpProPromoCodes',
            'visible' => false,
            'parent_class_name' => 'mailchimppro',
        ],
    ];


    public function __construct()
    {
        $this->name = 'mailchimppro';
        $this->tab = 'administration';
        $this->version = '2.0.14';
        $this->author = 'Mailchimp';
        $this->need_instance = 1;
        $this->bootstrap = true;
        $this->module_key = '793ebc5f330220c7fb7b817fe0d63a92';

        parent::__construct();

        $this->displayName = 'Mailchimp';
        $this->description = 'Official Mailchimp integration for PrestaShop';
        $this->ps_versions_compliancy = ['min' => '1.6', 'max' => _PS_VERSION_];

        require_once $this->getLocalPath() . 'vendor/autoload.php';
    }


    /**
     * Install the required tabs, configs and stuff
     *
     * @return bool
     * @throws PrestaShopException
     *
     * @throws PrestaShopDatabaseException
     * @since 0.0.1
     *
     */
    public function install()
    {
        $tabRepository = new \PrestaChamps\PrestaShop\Tab\TabRepository($this->menus, 'mailchimppro');
        $tabRepository->install();

        return parent::install() &&
            // The moduleRoutes hook is necessary in order to load the autoloader
            $this->registerHook('moduleRoutes') &&
            $this->registerHook('displayFooter') &&
            $this->registerHook('displayHeader') &&
            $this->registerHook('actionProductUpdate') &&
            $this->registerHook('actionValidateOrder') &&
            $this->registerHook('actionObjectUpdateAfter') &&
            $this->registerHook('actionObjectDeleteAfter') &&
            $this->registerHook('actionOrderStatusUpdate') &&
            $this->registerHook('actionCartSave') &&
            $this->registerHook('actionObjectCustomerAddAfter') &&
            $this->registerHook('actionObjectCartRuleAddAfter') &&
            $this->registerHook('actionObjectCartRuleDeleteBefore') &&
            $this->registerHook('displayAdminOrderContentOrder') &&
            $this->registerHook('displayAdminOrderTabOrder') &&
            $this->registerHook('displayBackOfficeTop') &&
            $this->registerHook('actionFrontControllerSetMedia') &&
            $this->registerHook('actionObjectCartRuleUpdateAfter') &&
            $this->registerHook('displayFooterBefore') &&
            $this->registerHook('actionNewsletterRegistrationAfter') &&
            $this->registerHook('actionCustomerAccountAdd') &&
            $this->registerHook('displayAdminProductsExtra') &&
            $this->registerHook('actionCustomerAccountUpdate') &&

            $this->registerHook('actionObjectSpecificPriceAddAfter') &&
            $this->registerHook('actionObjectSpecificPriceUpdateAfter') &&
            $this->registerHook('actionObjectSpecificPriceDeleteAfter');

    }

    public function runUpgradeModule()
    {
        return parent::runUpgradeModule(); // TODO: Change the autogenerated stub
    }

    /**
     * @return bool
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function uninstall()
    {
        $tabRepository = new \PrestaChamps\PrestaShop\Tab\TabRepository($this->menus, 'mailchimppro');
        $tabRepository->uninstall();

        return parent::uninstall();
    }


    /**
     * Check if the current PrestaShop installation is version 1.7 or below
     *
     * @return bool
     */
    public static function isPs17()
    {
        return (bool)version_compare(_PS_VERSION_, '1.7', '>=');
    }


    /**
     * Redirect to the custom config controller
     *
     * @throws PrestaShopException
     */
    public function getContent()
    {
        Tools::redirectAdmin($this->context->link->getAdminLink('AdminMailchimpProConfig'));
    }

    /**
     * Place UTM tracking cookie when the user arrived via MailChimp
     *
     * @param $params
     */
    public function hookDisplayHeader($params)
    {
        if ((Tools::getValue('utm_source') === 'mailchimp' || !empty(Tools::getValue('mc_cid')))
            && $this->isApiKeySet()) {
            $this->context->cookie->landing_site = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $mc_cid = Tools::getValue('mc_cid', false);
            $utm_source = Tools::getValue('utm_source', false);
            if ($mc_cid) {
                setcookie('mc_cid', Tools::getValue('mc_cid'), 0, $this->context->shop->getBaseURI());
            }
            if ($utm_source) {
                setcookie('utm_source', urldecode(Tools::getValue('utm_source')), 0, $this->context->shop->getBaseURI());
            }
            $this->context->cookie->utm_source = Tools::getValue('utm_source');
            setcookie(
                'landing_site',
                (Tools::usingSecureMode() ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
                0,
                $this->context->shop->getBaseURI()
            );
        }
    }

    /**
     * Mailchimp API client factory
     *
     * @throws Exception
     */
    public function getApiClient()
    {
        if ($this->apiClient instanceof \DrewM\MailChimp\MailChimp) {
            return $this->apiClient;
        }
        $this->apiClient = new DrewM\MailChimp\MailChimp(Configuration::get(MailchimpProConfig::MAILCHIMP_API_KEY));

        return $this->apiClient;
    }

    /**
     * @param       $url
     * @param       $method
     * @param array $data
     *
     * @return mixed
     * @throws Exception
     */
    public function sendApiRequest($url, $method, $data = [])
    {
        if ($method === 'POST') {
            $this->getApiClient()->post($url, $data);
        } elseif ($method === 'PATCH') {
            $this->getApiClient()->patch($url, $data);
        } elseif ($method === 'PUT') {
            $this->getApiClient()->put($url, $data);
        } elseif ($method === 'DELETE') {
            $this->getApiClient()->delete($url, $data);
        } else {
            $this->getApiClient()->get($url, $data);
        }

        return $this->getApiClient()->getLastResponse();
    }

    /**
     * Display site MailChimp site verification
     *
     * @param $params
     *
     * @return string
     */
    public function hookDisplayFooter($params)
    {
        if ($this->isApiKeySet()) {

            if((bool)version_compare(_PS_VERSION_, '1.7', '<')){

                $subscriptionIsEnabled = Module::isEnabled('blocknewsletter');

                if (Tools::isSubmit('submitNewsletter') && $subscriptionIsEnabled) {

                    try {
                    \PrestaChamps\MailchimpPro\Hooks\Display\FooterBefore::run(
                            $params,
                            $this->getApiClient(),
                            $this->context
                        )->newsletterBlockRegistration();
                    } catch (Exception $exception) {
                        PrestaShopLogger::addLog("[MAILCHIMP-NW16] :{$exception->getMessage()}");
                    }
                }
            }

            try {
                $shopId = \Mailchimppro::shopIdTransformer($this->context->shop);
                $result = $this->sendApiRequest("ecommerce/stores/{$this->getShopId()}", 'GET');
                if ($this->getApiClient()->success()) {
                    $result = json_decode($result['body'], true);

                    if (isset($result['connected_site'])) {
                        $footer = $result['connected_site']['site_script']['fragment'];
                        if (!Configuration::get(MailchimpProConfig::MAILCHIMP_SCRIPT_VERIFIED)) {
                            $site_id = $result['connected_site']['site_foreign_id'];
                            (new \PrestaChamps\MailchimpPro\Commands\SiteVerifyCommand($this->apiClient, $site_id))
                                ->execute();
                            $this->sendApiRequest(
                                "ecommerce/stores/{$this->getShopId()}",
                                'POST',
                                ['is_syncing' => false]
                            );
                            Configuration::updateValue(MailchimpProConfig::MAILCHIMP_SCRIPT_VERIFIED, true);
                        }

                        return $footer;
                    }
                }
                PrestaShopLogger::addLog("[MAILCHIMP] :{$this->getApiClient()->getLastError()}");
            } catch (Exception $e) {
                PrestaShopLogger::addLog("[MAILCHIMP] :{$e->getMessage()}");
            }
        }
        return '';
    }

    /**
     * @param $params
     *
     * @return string
     * @throws Exception
     */
    public function hookActionFrontControllerSetMedia($params)
    {
        if ($this->isApiKeySet()) {
            try {
                if (!Configuration::get(MailchimpProConfig::MAILCHIMP_SCRIPT_VERIFIED)) {
                    $result = $this->getApiClient()->get("ecommerce/stores/{$this->getShopId()}");
                    $siteId = $result['connected_site']['site_foreign_id'];
                    $this->sendApiRequest(
                        "connected-sites/{$siteId}/actions/verify-script-installation",
                        'POST'
                    );
                    Configuration::updateValue(MailchimpProConfig::MAILCHIMP_SCRIPT_VERIFIED, true);
                }
                if (isset($result['connected_site'])) {
                    $this->context->controller->addJS($result['connected_site']['site_script']['url'], false);
                }
            } catch (Exception $exception) {
                PrestaShopLogger::addLog("[MAILCHIMP] :{$exception->getMessage()}");
            }
        }
        return '';
    }

    /**
     * Sync the newly created customer to MailChimp
     *
     * @param $params
     */
    public function hookActionObjectCustomerAddAfter($params)
    {
        if ($this->isApiKeySet()) {
            try {
                /**
                 * @var $customer Customer
                 */
                $customer = $params['object'];
                $command = new \PrestaChamps\MailchimpPro\Commands\CustomerSyncCommand(
                    $this->context,
                    $this->getApiClient(),
                    [$customer->id],
                    false
                );
                $command->setMethod(\PrestaChamps\MailchimpPro\Commands\CustomerSyncCommand::SYNC_METHOD_PUT);
                $command->triggerDoubleOptIn(true);
                $command->execute();
            } catch (Exception $exception) {
                $this->context->controller->errors[] = "[MAILCHIMP] :{$exception->getMessage()}";
                PrestaShopLogger::addLog("[MAILCHIMP] :{$exception->getMessage()}");
            }
        }
    }

    /**
     * @param $params
     *
     * @throws Exception
     * @todo Refactor code to use a service pattern
     *
     */
    public function hookActionObjectCartRuleAddAfter($params)
    {
        if ($this->isApiKeySet()) {
            $object = new CartRule($params['object']->id, $this->context->language->id);
            $command = new \PrestaChamps\MailchimpPro\Commands\CartRuleSyncCommand(
                $this->context,
                $this->getApiClient(),
                [$object]
            );
            $command->setMethod($command::SYNC_METHOD_POST);
            $command->setSyncMode($command::SYNC_MODE_REGULAR);
            $command->execute();
        }
    }

    /**
     * @param $params
     *
     * @throws Exception
     * @todo Refactor code to use a service pattern
     *
     */
    public function hookActionObjectCartRuleUpdateAfter($params)
    {
        if ($this->isApiKeySet()) {
            $object = new CartRule($params['object']->id, $this->context->language->id);
            $command = new \PrestaChamps\MailchimpPro\Commands\CartRuleSyncCommand(
                $this->context,
                $this->getApiClient(),
                [$object]
            );
            $command->setMethod($command::SYNC_METHOD_PATCH);
            $command->setSyncMode($command::SYNC_MODE_REGULAR);
            $command->execute();
        }
    }

    /**
     * @param $params
     *
     * @throws Exception
     * @todo Refactor code to use a service pattern
     *
     */
    public function hookActionObjectCartRuleDeleteBefore($params)
    {
        if ($this->isApiKeySet()) {
            $object = new CartRule($params['object']->id, $this->context->language->id);
            $command = new \PrestaChamps\MailchimpPro\Commands\CartRuleSyncCommand(
                $this->context,
                $this->getApiClient(),
                [$object]
            );
            $command->setMethod($command::SYNC_METHOD_DELETE);
            $command->setSyncMode($command::SYNC_MODE_REGULAR);
            $command->execute();
        }
    }


    /**
     * Create or update the cart in Mailchimp
     *
     * @param $params
     *
     * @throws Exception
     * @todo Use command pattern instead
     *
     */
    public function hookActionCartSave($params)
    {
        if ($this->isApiKeySet() && (Tools::getValue('controller') !== 'adminaddresses')) {
            try {
                \PrestaChamps\MailchimpPro\Hooks\Action\CartSave::run(
                    $this->context,
                    $this->getApiClient()
                );
            } catch (Exception $exception) {
                $this->context->controller->errors[] = "[MAILCHIMP] :{$exception->getMessage()}";
                PrestaShopLogger::addLog("[MAILCHIMP] :{$exception->getMessage()}");
            }
        }
    }

    protected function getCartExists($cartId)
    {
        $this->getApiClient()->get(
            "/ecommerce/stores/{$this->getShopId()}/carts/{$cartId}",
            ['fields' => ['id']]
        );

        if ($this->apiClient->success()) {
            return true;
        }

        return false;
    }

    protected function getProductExists($productId)
    {
        $this->getApiClient()->get(
            "/ecommerce/stores/{$this->getShopId()}/products/{$productId}",
            ['fields' => ['id']]
        );

        if ($this->apiClient->success()) {
            return true;
        }

        return false;
    }

    /**
     * Sync the order status update to MailChimp
     *
     * @param $params
     */
    public function hookActionOrderStatusUpdate($params)
    {
        if ($this->isApiKeySet()) {
            try {
                $orderId = null;
                if (isset($params['id_order'])) {
                    $orderId = $params['id_order'];
                }
                if (isset($params['newOrderStatus']) && isset($params['newOrderStatus'], $params['newOrderStatus']->id_order)) {
                    $orderId = $params['newOrderStatus']->id_order;
                }

                $order = new Order($orderId, $this->context->language->id);

                $shippingAddress = new \Address($order->id_address_delivery, $this->context->language->id);
                $billingAddress = new \Address($order->id_address_invoice, $this->context->language->id);
                $data = (new \PrestaChamps\MailchimpPro\Formatters\OrderFormatter(
                    $order,
                    $order->getCustomer(),
                    $billingAddress,
                    $shippingAddress,
                    $this->context
                ))->format();
                $result = $this->sendApiRequest(
                    "ecommerce/stores/{$this->getShopId()}/orders",
                    'POST',
                    $data
                );
                if ($result['headers']['http_code'] === 400) {
                    $this->sendApiRequest(
                        "ecommerce/stores/{$this->getShopId()}/orders/{$order->id}",
                        'PATCH',
                        $data
                    );
                }
            } catch (Exception $exception) {
                $this->context->controller->errors[] = "[MAILCHIMP] :{$exception->getMessage()}";
                PrestaShopLogger::addLog("[MAILCHIMP] :{$exception->getMessage()}");
            }
        }
    }

    public function hookActionValidateOrder($params)
    {
        if (isset($params['order']) && is_subclass_of($params['order'], 'OrderCore') && $this->isApiKeySet()) {
            try {
                $order = new Order($params['order']->id, $this->context->language->id);
                $orderSyncCommand = new \PrestaChamps\MailchimpPro\Commands\OrderSyncCommand(
                    $this->context,
                    $this->getApiClient(),
                    [$params['order']->id]
                );
                $orderSyncCommand->execute();
                $this->sendApiRequest(
                    "ecommerce/stores/{$this->getShopId()}/carts/$order->id_cart",
                    'DELETE'
                );
            } catch (Exception $exception) {
                $this->context->controller->errors[] = "[MAILCHIMP] :{$exception->getMessage()}";
                PrestaShopLogger::addLog("[MAILCHIMP] :{$exception->getMessage()}");
            }
        }
    }

    /**
     * Delete the objects from the MailChimp account also
     *
     * @param $params
     */
    public function hookActionProductUpdate($params)
    {
        try {
            if (isset($params['product']) && $this->isApiKeySet()) {
                $product = $params['product'];
                if (is_a($product, 'ProductCore')) {
                    /**
                     * @var $product Product
                     */
                    $service = new \PrestaChamps\MailchimpPro\Commands\ProductSyncCommand(
                        $this->context,
                        new \DrewM\MailChimp\MailChimp(\Configuration::get(\MailchimpProConfig::MAILCHIMP_API_KEY)),
                        [$product->id]
                    );

                    $service->setMethod(
                        $this->getProductExists($product->id)
                        ? $service::SYNC_METHOD_PATCH
                        : $service::SYNC_METHOD_POST
                    );

                    $service->execute();

                }
            }
        } catch (Exception $exception) {
            $this->context->controller->errors[] = $exception->getMessage();
            PrestaShopLogger::addLog(
                "MAILCHIMP_ERROR: {$exception->getMessage()}",
                1,
                $exception->getCode(),
                PrestaChamps\MailchimpPro\Commands\ProductSyncCommand::class,
                null,
                true
            );
        }
    }

    /**
     * Delete the objects from the MailChimp account also
     *
     * @param $object
     */
    public function hookActionObjectDeleteAfter($object)
    {
        if (is_subclass_of($object['object'], 'ProductCore') && $this->isApiKeySet()) {
            $objectId = $object['object']->id;
            try {
                $this->getApiClient()->delete("ecommerce/stores/{$this->getShopId()}/products/$objectId");
            } catch (Exception $e) {
                $this->context->controller->errors[] = "[MAILCHIMP] :{$e->getMessage()}";
                PrestaShopLogger::addLog("[MAILCHIMP] :{$e->getMessage()}");
            }
        }
    }

    /**
     * Sync the object updates to Mailchimp
     *
     * @param $object
     */
    public function hookActionObjectUpdateAfter($object)
    {
        if (is_subclass_of($object['object'], 'CustomerCore') && $this->isApiKeySet()) {
            try {
                $url = "ecommerce/stores/{$this->getShopId()}/customers/{$object['object']->id}";
                $data = (new \PrestaChamps\MailchimpPro\Formatters\CustomerFormatter($object['object'], $this->context))
                    ->format();
                $this->sendApiRequest($url, 'PUT', $data);
            } catch (Exception $exception) {
                $this->context->controller->errors[] = $exception->getMessage();
                PrestaShopLogger::addLog(
                    "[MAILCHIMP]: {$exception->getMessage()}",
                    1,
                    $exception->getCode(),
                    PrestaChamps\MailchimpPro\Commands\CustomerSyncCommand::class,
                    null,
                    true
                );
            }
        }

        if (is_subclass_of($object['object'], 'ShopCore') && $this->isApiKeySet()) {
            try {
                $service = new \PrestaChamps\MailchimpPro\Commands\StoreSyncCommand(
                    $this->context,
                    $this->getApiClient(),
                    [$object['object']->id]
                );
                $service->setSyncMode($service::SYNC_MODE_REGULAR);
                $service->setMethod($service::SYNC_METHOD_PATCH);
                $service->execute();
            } catch (Exception $exception) {
                $this->context->controller->errors[] = $exception->getMessage();
                PrestaShopLogger::addLog(
                    "[MAILCHIMP]: {$exception->getMessage()}",
                    1,
                    $exception->getCode(),
                    \PrestaChamps\MailchimpPro\Commands\StoreSyncCommand::class,
                    null,
                    true
                );
            }
        }
    }

    /**
     * @param $params
     *
     * @return string
     */
    public function hookDisplayAdminOrderContentOrder($params)
    {
        if ($this->isApiKeySet()) {
            try {
                /**
                 * @var $order Order
                 */
                $order = $params['order'];
                $response = $this->getApiClient()->get("ecommerce/stores/{$order->id_shop}/orders/{$order->id}");
                if ($this->getApiClient()->success()) {
                    $this->context->smarty->assign([
                        'order' => $response,
                    ]);
                    return $this->context->smarty->fetch(
                        $this->getLocalPath() . 'views/templates/admin/mc-order-detail-tab-content.tpl'
                    );
                }

                return $this->context->smarty->fetch(
                    $this->getLocalPath() . 'views/templates/admin/mc-order-detail-tab-content-empty.tpl'
                );

            } catch (Exception $exception) {
                $this->context->controller->errors[] =
                    $this->l("Unable to fetch MailChimp order: {$exception->getMessage()}");
            }
        }
        return '';
    }

    /**
     * @param $params
     *
     * @return string
     * @throws SmartyException
     */
    public function hookDisplayAdminOrderTabOrder($params)
    {
        return $this->context->smarty->fetch(
            $this->getLocalPath() . '/views/templates/admin/mc-order-detail-tab-title.tpl'
        );
    }

    /**
     * @throws SmartyException
     */
    public function hookDisplayBackOfficeTop()
    {
        if ($this->context->controller->controller_name === 'AdminCarts' &&
            isset($_REQUEST['viewcart']) && $this->isApiKeySet()) {
            $cart = new Cart(Tools::getValue('id_cart'));
            $response = $this->getApiClient()->get("ecommerce/stores/{$cart->id_shop}/carts/{$cart->id}");
            if ($this->getApiClient()->success()) {
                $this->context->smarty->assign([
                    'cart' => $response,
                ]);
                $this->context->controller->content .=
                    $this->context->smarty->fetch(
                        $this->getLocalPath() . 'views/templates/admin/mc-cart-detail.tpl'
                    );
            }
        }
    }

    public function hookDisplayFooterBefore($params)
    {
        try {
            \PrestaChamps\MailchimpPro\Hooks\Display\FooterBefore::run(
                $params,
                $this->getApiClient(),
                $this->context
            )->newsletterBlockRegistration();
        } catch (Exception $exception) {
            PrestaShopLogger::addLog("[MAILCHIMP] :{$exception->getMessage()}");
        }
    }

    public function hookActionNewsletterRegistrationAfter($params)
    {
        try {
            \PrestaChamps\MailchimpPro\Hooks\Action\NewsletterRegistrationAfter::run(
                $params,
                $this->getApiClient(),
                $this->context,
                $params['email']
            )->newsletterBlockRegistration();
        } catch (Exception $exception) {
            PrestaShopLogger::addLog("[MAILCHIMP] :{$exception->getMessage()}");
        }
    }

    protected function isApiKeySet()
    {
        return !empty(Configuration::get(MailchimpProConfig::MAILCHIMP_API_KEY));
    }

    public function hookActionCustomerAccountAdd($params)
    {
        try {
            $customer = $this->getCustomerFromHookParam($params);
            \PrestaChamps\MailchimpPro\Hooks\Action\Customer\AccountAdd::run(
                $this->context,
                $this->getApiClient(),
                $customer
            );
        } catch (Exception $exception) {
            PrestaShopLogger::addLog("[MAILCHIMP] :{$exception->getMessage()}");
        }
    }

    public function hookActionCustomerAccountUpdate($params)
    {
        try {
            $customer = $this->getCustomerFromHookParam($params);
            \PrestaChamps\MailchimpPro\Hooks\Action\Customer\AccountUpdate::run(
                $this->context,
                $this->getApiClient(),
                $customer
            );
        } catch (Exception $exception) {
            PrestaShopLogger::addLog("[MAILCHIMP] :{$exception->getMessage()}");
        }
    }

    /**
     * @param $hookParams
     *
     * @return Customer
     * @throws Exception
     */
    private function getCustomerFromHookParam($hookParams)
    {
        if (isset($hookParams['customer']) && $hookParams['customer'] instanceof CustomerCore) {
            return $hookParams['customer'];
        }

        if (isset($hookParams['newCustomer']) && $hookParams['newCustomer'] instanceof CustomerCore) {
            return $hookParams['newCustomer'];
        }

        throw new Exception("Can't get Customer from hook");
    }

    /**
     * @param $params
     *
     * @return string
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function hookDisplayAdminProductsExtra($params)
    {
        $productId = isset($params['id_product']) ? $params['id_product'] : Tools::getValue('id_product');
        if (Validate::isLoadedObject(new Product($productId))) {
            $this->context->smarty->assign([
                'productId' => $productId,
                'regenerateLink' => $this->context->link->getAdminLink('AdminMailchimpProWizard'),
            ]);

            return $this->display(__FILE__, 'views/templates/hook/admin/_products-extra.tpl');
        }

        return "";
    }

    public function hookActionObjectSpecificPriceAddAfter($params){

        try {
            if (is_subclass_of($params['object'], 'SpecificPriceCore') && $this->isApiKeySet()) {
                
                $product_id = $params['object']->id_product;
         
                $service = new \PrestaChamps\MailchimpPro\Commands\ProductSyncCommand(
                    $this->context,
                    new \DrewM\MailChimp\MailChimp(\Configuration::get(\MailchimpProConfig::MAILCHIMP_API_KEY)),
                    [$product_id]
                );

                $service->setMethod(
                    $this->getProductExists($product_id)
                    ? $service::SYNC_METHOD_PATCH
                    : $service::SYNC_METHOD_POST
                );

                $service->execute();
            
            }
        } catch (Exception $exception) {
            $this->context->controller->errors[] = $exception->getMessage();
            PrestaShopLogger::addLog(
                "MAILCHIMP_ERROR: {$exception->getMessage()}",
                1,
                $exception->getCode(),
                PrestaChamps\MailchimpPro\Commands\ProductSyncCommand::class,
                null,
                true
            );
        }
    }

    public function hookActionObjectSpecificPriceUpdateAfter($params){

        try {
            if (is_subclass_of($params['object'], 'SpecificPriceCore') && $this->isApiKeySet()) {
                
                $product_id = $params['object']->id_product;
         
                $service = new \PrestaChamps\MailchimpPro\Commands\ProductSyncCommand(
                    $this->context,
                    new \DrewM\MailChimp\MailChimp(\Configuration::get(\MailchimpProConfig::MAILCHIMP_API_KEY)),
                    [$product_id]
                );

                $service->setMethod(
                    $this->getProductExists($product_id)
                    ? $service::SYNC_METHOD_PATCH
                    : $service::SYNC_METHOD_POST
                );

                $service->execute();
            
            }
        } catch (Exception $exception) {
            $this->context->controller->errors[] = $exception->getMessage();
            PrestaShopLogger::addLog(
                "MAILCHIMP_ERROR: {$exception->getMessage()}",
                1,
                $exception->getCode(),
                PrestaChamps\MailchimpPro\Commands\ProductSyncCommand::class,
                null,
                true
            );
        }
    }

    public function hookActionObjectSpecificPriceDeleteAfter($params){

        try {
            if (is_subclass_of($params['object'], 'SpecificPriceCore') && $this->isApiKeySet()) {
                
                $product_id = $params['object']->id_product;
         
                $service = new \PrestaChamps\MailchimpPro\Commands\ProductSyncCommand(
                    $this->context,
                    new \DrewM\MailChimp\MailChimp(\Configuration::get(\MailchimpProConfig::MAILCHIMP_API_KEY)),
                    [$product_id]
                );

                $service->setMethod(
                    $this->getProductExists($product_id)
                    ? $service::SYNC_METHOD_PATCH
                    : $service::SYNC_METHOD_POST
                );

                $service->execute();
            
            }
        } catch (Exception $exception) {
            $this->context->controller->errors[] = $exception->getMessage();
            PrestaShopLogger::addLog(
                "MAILCHIMP_ERROR: {$exception->getMessage()}",
                1,
                $exception->getCode(),
                PrestaChamps\MailchimpPro\Commands\ProductSyncCommand::class,
                null,
                true
            );
        }
    }

    public static function shopIdTransformer(\Shop $shop)
    {
        if (Configuration::get('module-mailchimpproconfig-multi-instance-mode') == 1) {
            return $shop->domain . "_" . $shop->id;
        }

        return $shop->id;
    }

    protected function getShopId()
    {
        return static::shopIdTransformer($this->context->shop);
    }
    
}
