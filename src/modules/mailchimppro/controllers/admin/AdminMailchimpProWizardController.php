<?php
/**
 * PrestaChamps
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
 * @copyright PrestaChamps
 * @license   commercial
 */

/**
 * Class AdminMailchimpProWizardController
 *
 * @property Mailchimppro $module
 */
class AdminMailchimpProWizardController extends ModuleAdminController
{
    public $bootstrap = true;

    /**
     * @throws PrestaShopException
     * @throws SmartyException
     */
    public function initContent()
    {
        $this->addCSS($this->module->getLocalPath() . 'views/css/main.css');
        if (\Shop::getContext() !== \Shop::CONTEXT_SHOP) {
            $this->content = '';
            $this->warnings[] = $this->module->l('Please select a shop');
        } else {
            Media::addJsDef(['wizardUrl' => $this->context->link->getAdminLink($this->controller_name)]);
            $this->addCSS($this->module->getLocalPath() . 'views/css/smart_wizard.css');
            $this->addCSS($this->module->getLocalPath() . 'views/css/smart_wizard_theme_dots.css');
            $this->addCSS($this->module->getLocalPath() . 'views/css/toastr.css');
            $this->addCSS($this->module->getLocalPath() . 'views/css/spinner.css');
            $this->addJS($this->module->getLocalPath() . 'views/js/jquery.smartWizard.js');
            $this->addJS($this->module->getLocalPath() . 'views/js/setup-wizard.js');
            $this->addJS($this->module->getLocalPath() . 'views/js/toastr.min.js');
            $this->addJS($this->module->getLocalPath() . 'views/js/ajaxq.js');
            $this->addJS($this->module->getLocalPath() . 'views/js/array.chunk.js');


            Media::addJsDef([
                'statePending' => MailchimpProConfig::STATUSES_FOR_PENDING,
                'stateRefunded' => MailchimpProConfig::STATUSES_FOR_REFUNDED,
                'stateCancelled' => MailchimpProConfig::STATUSES_FOR_CANCELLED,
                'stateShipped' => MailchimpProConfig::STATUSES_FOR_SHIPPED,
                'statePaid' => MailchimpProConfig::STATUSES_FOR_PAID,
                'productIds' => array_column(
                    Product::getSimpleProducts(\Context::getContext()->language->id),
                    'id_product'
                ),
                'promoCodeIds' => $this->getCartRules(),
                'orderIds' => $this->getOrderIds(),
                'customerIds' => array_column(Customer::getCustomers(true), 'id_customer'),
                'syncUrl' => $this->context->link->getAdminLink('$this->controller_name'),
                'middlewareUrl' => Mailchimppro::MC_MIDDLEWARE,
                'itemsPerRequest' => 50,
            ]);
            $this->context->smarty->assign([
                'apiKey' => Configuration::get(MailchimpProConfig::MAILCHIMP_API_KEY),
                'mcEmail' => $this->getMailchimpUserEmail(Configuration::get(MailchimpProConfig::MAILCHIMP_API_KEY)),
            ]);
            $this->content .= $this->context->smarty->fetch(
                $this->module->getLocalPath() . 'views/templates/admin/wizard.tpl'
            );
            if (Shop::getContext() !== Shop::CONTEXT_SHOP) {
                $this->content = '';
                $this->context->controller->warnings[] = $this->module->l('Please select a shop');
            }

            if (!Tools::usingSecureMode()) {
                $this->content = '';
                $this->context->controller->warnings[] = $this->module->l('Please use HTTPS for authenticating to Mailchimp');
            }
            parent::initContent();
        }
    }

    protected function getMailchimpUserEmail($apiKey)
    {
        try {
            $mc = new \DrewM\MailChimp\MailChimp($apiKey);
            $response = $mc->get('/');
        } catch (Exception $exception) {
            return null;
        }

        return (isset($response['email'])) ? $response['email'] : null;
    }

    protected function getCartRules()
    {
        $query = new DbQuery();
        $query->from('cart_rule');
        $query->select('id_cart_rule');
        $query->where('shop_restriction = 0');
        $ids = array_column(Db::getInstance()->executeS($query), 'id_cart_rule');

        $query = new DbQuery();
        $query->from('cart_rule_shop');
        $query->select('id_cart_rule');
        $query->where('id_shop = ' . pSQL($this->context->shop->id));
        $result = array_column(Db::getInstance()->executeS($query), 'id_cart_rule');
        $result = array_unique(array_merge($ids, $result));
        sort($result, SORT_NUMERIC);

        return $result;
    }

    protected function getOrderIds()
    {
        $shopId = Shop::getContextShopID();
        $query = new DbQuery();
        $query->from('orders');
        $query->select('id_order');
        if ($shopId) {
            $query->where("id_shop = {$shopId}");
        }

        return array_column(Db::getInstance()->executeS($query), 'id_order');
    }

    public function processApiKey()
    {
        try {
            $apiKey = Tools::getValue('apiKey');
            $mc = new \DrewM\MailChimp\MailChimp($apiKey);
            $mc->get('ping');
            if ($mc->success()) {

                Configuration::updateValue(MailchimpProConfig::MAILCHIMP_API_KEY, $apiKey);
                $this->ajaxDie(['hasError' => false, 'error' => null]);
            } else {
                $this->ajaxDie(
                    [
                        'hasError' => true,
                        'error' => $this->module->l('Invlid api key'),
                    ],
                    null,
                    null, 400
                );
            }
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $mc->getLastResponse(),
                ],
                null,
                null,
                400
            );
        }
    }

    public function getStateMapping()
    {
        try {
            $configValues = MailchimpProConfig::getConfigurationValues();
            $this->ajaxDie(
                [
                    'hasError' => false,
                    'mapping' => [
                        MailchimpProConfig::STATUSES_FOR_PENDING =>
                            $configValues[MailchimpProConfig::STATUSES_FOR_PENDING],
                        MailchimpProConfig::STATUSES_FOR_PENDING =>
                            $configValues[MailchimpProConfig::STATUSES_FOR_REFUNDED],
                        MailchimpProConfig::STATUSES_FOR_CANCELLED =>
                            $configValues[MailchimpProConfig::STATUSES_FOR_CANCELLED],
                        MailchimpProConfig::STATUSES_FOR_SHIPPED =>
                            $configValues[MailchimpProConfig::STATUSES_FOR_SHIPPED],
                        MailchimpProConfig::STATUSES_FOR_PAID =>
                            $configValues[MailchimpProConfig::STATUSES_FOR_PAID],
                    ],
                ],
                null,
                null,
                400
            );
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $exception->getMessage(),
                ],
                null,
                null,
                400
            );
        }
    }

    public function processStateMapping()
    {
        try {
            $statuses = Tools::getValue('states');
            if (isset($statuses[MailchimpProConfig::STATUSES_FOR_PENDING]) &&
                isset($statuses[MailchimpProConfig::STATUSES_FOR_REFUNDED]) &&
                isset($statuses[MailchimpProConfig::STATUSES_FOR_CANCELLED]) &&
                isset($statuses[MailchimpProConfig::STATUSES_FOR_SHIPPED]) &&
                isset($statuses[MailchimpProConfig::STATUSES_FOR_PAID]) &&
                is_array($statuses[MailchimpProConfig::STATUSES_FOR_PENDING]) &&
                is_array($statuses[MailchimpProConfig::STATUSES_FOR_REFUNDED]) &&
                is_array($statuses[MailchimpProConfig::STATUSES_FOR_CANCELLED]) &&
                is_array($statuses[MailchimpProConfig::STATUSES_FOR_SHIPPED]) &&
                is_array($statuses[MailchimpProConfig::STATUSES_FOR_PAID])
            ) {
                MailchimpProConfig::saveValue(
                    MailchimpProConfig::STATUSES_FOR_PENDING,
                    json_encode($statuses[MailchimpProConfig::STATUSES_FOR_PENDING])
                );
                MailchimpProConfig::saveValue(
                    MailchimpProConfig::STATUSES_FOR_REFUNDED,
                    json_encode($statuses[MailchimpProConfig::STATUSES_FOR_REFUNDED])
                );
                MailchimpProConfig::saveValue(
                    MailchimpProConfig::STATUSES_FOR_CANCELLED,
                    json_encode($statuses[MailchimpProConfig::STATUSES_FOR_CANCELLED])
                );
                MailchimpProConfig::saveValue(
                    MailchimpProConfig::STATUSES_FOR_SHIPPED,
                    json_encode($statuses[MailchimpProConfig::STATUSES_FOR_SHIPPED])
                );
                MailchimpProConfig::saveValue(
                    MailchimpProConfig::STATUSES_FOR_PAID,
                    json_encode($statuses[MailchimpProConfig::STATUSES_FOR_PAID])
                );
                $this->ajaxDie(['hasError' => false, 'error' => null]);
            }
            throw new Exception('Invalid data');
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $exception->getMessage(),
                ],
                null,
                null,
                400
            );
        }
    }

    public function processGetStates()
    {
        try {
            $configValues = MailchimpProConfig::getConfigurationValues();

            $orderStates = OrderState::getOrderStates($this->context->language->id);
            $this->ajaxDie([
                'hasError' => false,
                'error' => null,
                'states' => $orderStates,
                'mapping' => [
                    MailchimpProConfig::STATUSES_FOR_PENDING =>
                        $configValues[MailchimpProConfig::STATUSES_FOR_PENDING],
                    MailchimpProConfig::STATUSES_FOR_REFUNDED =>
                        $configValues[MailchimpProConfig::STATUSES_FOR_REFUNDED],
                    MailchimpProConfig::STATUSES_FOR_CANCELLED =>
                        $configValues[MailchimpProConfig::STATUSES_FOR_CANCELLED],
                    MailchimpProConfig::STATUSES_FOR_SHIPPED =>
                        $configValues[MailchimpProConfig::STATUSES_FOR_SHIPPED],
                    MailchimpProConfig::STATUSES_FOR_PAID =>
                        $configValues[MailchimpProConfig::STATUSES_FOR_PAID],
                ],
            ]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $exception->getMessage(),
                ],
                null,
                null,
                400
            );
        }
    }

    public function processSyncStores()
    {
        try {
//            $shops = array_column(Shop::getShops(true), 'id_shop');
            $command = new \PrestaChamps\MailchimpPro\Commands\StoreSyncCommand(
                $this->context,
                $this->module->getApiClient(),
                [$this->context->shop->id]
            );
            $command->setSyncMode($command::SYNC_MODE_REGULAR);
            $command->setMethod($command::SYNC_METHOD_POST);
            $command->execute();
            $command->setMethod($command::SYNC_METHOD_PATCH);
            $this->ajaxDie([
                'hasError' => false,
                'error' => null,
                'result' => $command->execute(),
            ]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $exception->getMessage(),
                ],
                null,
                null,
                400
            );
        }
    }

    public function processSyncCustomers()
    {
        try {
            $results = [];
            $customerIds = Tools::getValue('items');
            $command = new \PrestaChamps\MailchimpPro\Commands\CustomerSyncCommand(
                Context::getContext(),
                $this->module->getApiClient(),
                $customerIds,
                true
            );
            $command->setSyncMode($command::SYNC_MODE_REGULAR);
            $command->setMethod($command::SYNC_METHOD_PUT);
            $results[] = $command->execute();
            $this->ajaxDie([
                'hasError' => false,
                'error' => null,
                'result' => $results,
            ]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $exception->getMessage(),
                ],
                null,
                null,
                400
            );
        }
    }

    public function processSyncPromoCodes()
    {
        try {
            $results = [];
            $objectIds = Tools::getValue('items');
            $objects = [];

            foreach ($objectIds as $objectId) {
                $object = new CartRule($objectId, $this->context->language->id, $this->context->shop->id);
                if (Validate::isLoadedObject($object)) {
                    $objects[] = $object;
                }
            }
            $command = new \PrestaChamps\MailchimpPro\Commands\CartRuleSyncCommand(
                Context::getContext(),
                $this->module->getApiClient(),
                $objects
            );
            $command->setSyncMode($command::SYNC_MODE_REGULAR);
            $command->setMethod($command::SYNC_METHOD_POST);
            $results[] = $command->execute();
            $command->setMethod($command::SYNC_METHOD_PATCH);
            $results[] = $command->execute();
            $this->ajaxDie([
                'hasError' => false,
                'error' => null,
                'result' => $results,
            ]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $exception->getMessage(),
                ],
                null,
                null,
                400
            );
        }
    }

    public function processSyncProducts()
    {
        try {
            $results = [];
            /*
            $productIds = array_column(
                Product::getSimpleProducts(\Context::getContext()->language->id),
                'id_product'
            );*/
            $productIds = Tools::getValue('items');
            $command = new \PrestaChamps\MailchimpPro\Commands\ProductSyncCommand(
                $this->context,
                $this->module->getApiClient(),
                $productIds
            );
            $command->setSyncMode($command::SYNC_MODE_REGULAR);
            $command->setMethod($command::SYNC_METHOD_POST);
            $results[] = $command->execute();
            $command->setMethod($command::SYNC_METHOD_PATCH);
            $results[] = $command->execute();
            $this->ajaxDie([
                'hasError' => false,
                'error' => null,
                'result' => $results,
            ]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $exception->getMessage(),
                ],
                null,
                null,
                400
            );
        }
    }

    public function processSyncOrders()
    {
        try {
            $results = [];
            $orderIds = Tools::getValue('items');
            $command = new \PrestaChamps\MailchimpPro\Commands\OrderSyncCommand(
                $this->context,
                $this->module->getApiClient(),
                $orderIds
            );
            $command->setSyncMode($command::SYNC_MODE_REGULAR);
            $command->setMethod($command::SYNC_METHOD_POST);
            $results[] = $command->execute();
            $command->setMethod($command::SYNC_METHOD_PATCH);
            $results[] = $command->execute();
            $this->ajaxDie([
                'hasError' => false,
                'error' => null,
                'result' => $results,
            ]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $exception->getMessage(),
                ],
                null,
                null,
                400
            );
        }
    }

    public function processListSelect()
    {
        try {
            $listId = Tools::getValue('listId');
            Configuration::updateValue(MailchimpProConfig::MAILCHIMP_LIST_ID, $listId);
            $this->ajaxDie(['hasError' => false, 'error' => null]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $exception->getMessage(),
                ],
                null,
                null,
                400
            );
        }
    }

    public function processGetLists()
    {
        try {
            $lists = $this->module->getApiClient()->get(
                'lists',
                ['fields' => 'lists.name,lists.id', 'count' => 999]
            );
            if (!$lists || empty($lists)) {
                \PrestaChamps\MailchimpPro\Factories\ListFactory::make(
                    $this->context->shop->name,
                    $this->module->getApiClient(),
                    $this->context
                );
                $lists = $this->module->getApiClient()->get(
                    'lists',
                    ['fields' => 'lists.name,lists.id', 'count' => 999]
                );
            }
            $this->ajaxDie(
                [
                    'hasError' => false,
                    'error' => null,
                    'lists' => $lists['lists'],
                    'selectedList' => Configuration::get(MailchimpProConfig::MAILCHIMP_LIST_ID),
                ]
            );
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $exception->getMessage(),
                ],
                null,
                null,
                400
            );
        }
    }

    public function processBatchInfo()
    {
        try {
            $batchId = Tools::getValue('id', false);
            if (!$batchId) {
                throw new Exception('Invalid BatchId');
            }
            $mc = $this->module->getApiClient();

            $this->ajaxDie(['hasErrors' => false, 'batch' => $mc->new_batch($batchId)->check_status($batchId)]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $exception->getMessage(),
                ],
                null,
                null, 400
            );
        }
    }

    /**
     * @param null $value
     * @param null $controller
     * @param null $method
     * @param int  $statusCode
     */
    public function ajaxDie($value = null, $controller = null, $method = null, $statusCode = 200)
    {
        header('Content-Type: application/json');
        if (!is_scalar($value)) {
            $value = json_encode($value);
        }

        http_response_code($statusCode);
        parent::ajaxDie($value, $controller, $method);
    }
}
