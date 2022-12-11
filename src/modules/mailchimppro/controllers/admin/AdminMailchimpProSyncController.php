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

use PrestaChamps\PrestaShop\Traits\ShopIdTrait;

/**
 * Class AdminMailchimpProSyncController
 *
 * @property Mailchimppro $module
 */
class AdminMailchimpProSyncController extends ModuleAdminController
{
    use ShopIdTrait;

    public $bootstrap = true;

    /**
     * @throws SmartyException
     * @throws PrestaShopException
     */
    public function initContent()
    {
        $this->addCSS($this->module->getLocalPath() . 'views/css/main.css');
        if (\Shop::getContext() !== \Shop::CONTEXT_SHOP) {
            $this->content = '';
            $this->warnings[] = $this->module->l('Please select a shop');
        } else {
            $this->content .= $this->context->smarty->fetch(
                $this->module->getLocalPath() . 'views/templates/admin/config/navbar.tpl'
            );
            $this->content .= $this->context->smarty->fetch(
                $this->module->getLocalPath() . 'views/templates/admin/sync/index.tpl'
            );
            Media::addJsDef([
                'productIds' => array_column(
                    Product::getSimpleProducts(\Context::getContext()->language->id),
                    'id_product'
                ),
                'syncUrl' => $this->context->link->getAdminLink($this->controller_name),
                'itemsPerRequest' => 50,
            ]);

            $this->addCSS($this->module->getLocalPath() . 'views/css/sync.css');
            $this->addCSS($this->module->getLocalPath() . 'views/css/spinner.css');
            $this->addCSS($this->module->getLocalPath() . 'views/css/toastr.css');
            $this->addJS($this->module->getLocalPath() . 'views/js/toastr.min.js');
            $this->addJS($this->module->getLocalPath() . 'views/js/array.chunk.js');
            $this->addJS($this->module->getLocalPath() . 'views/js/ajaxq.js');
            $this->addJS($this->module->getLocalPath() . 'views/js/sync/product.js');
            parent::initContent();
        }
    }

    /**
     * @throws Exception
     */
    public function processProductSync()
    {
        try {
            $method = Tools::getValue('method', 'post');
            $service = new \PrestaChamps\MailchimpPro\Commands\ProductSyncCommand(
                $this->context,
                $this->module->getApiClient(),
                Tools::getValue('items')
            );
            if (Tools::getValue('syncMode', false) === 'batch') {
                $service->setSyncMode($service::SYNC_MODE_BATCH);
            }
            if ($method === 'post') {
                $service->setMethod($service::SYNC_METHOD_POST);
            }
            if ($method === 'patch') {
                $service->setMethod($service::SYNC_METHOD_PATCH);
            }
            if ($method === 'delete') {
                $service->setMethod($service::SYNC_METHOD_DELETE);
            }
            $this->ajaxDie([
                'hasError' => false,
                'error' => null,
                'result' => $service->execute(),
            ]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $this->module->getApiClient()->getLastResponse(),
                ],
                null,
                null,
                400
            );
        }
    }

    /**
     * @throws Exception
     */
    public function processStoreSync()
    {
        try {
            $method = Tools::getValue('method', 'post');
            $service = new \PrestaChamps\MailchimpPro\Commands\StoreSyncCommand(
                $this->context,
                $this->module->getApiClient(),
                [$this->context->shop->id]
            );
            if ($method === 'post') {
                $service->setMethod($service::SYNC_METHOD_POST);
            }
            if ($method === 'patch') {
                $service->setMethod($service::SYNC_METHOD_PATCH);
            }
            if ($method === 'delete') {
                $service->setMethod($service::SYNC_METHOD_DELETE);
            }
            $this->ajaxDie([
                'hasError' => false,
                'error' => null,
                'result' => $service->execute(),
            ]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $this->module->getApiClient()->getLastResponse(),
                ],
                null,
                null,
                400
            );
        }
    }

    /**
     * @throws Exception
     */
    public function processPromoCodeSync()
    {
        try {
            $method = Tools::getValue('method', 'post');
            $items = $this->getCartRules();

            $service = new \PrestaChamps\MailchimpPro\Commands\CartRuleSyncCommand(
                $this->context,
                $this->module->getApiClient(),
                $items
            );
            if (Tools::getValue('syncMode', false) === 'batch') {
                $service->setSyncMode($service::SYNC_MODE_BATCH);
            }
            if ($method === 'post') {
                $service->setMethod($service::SYNC_METHOD_POST);
            }
            if ($method === 'patch') {
                $service->setMethod($service::SYNC_METHOD_PATCH);
            }
            if ($method === 'delete') {
                $service->setMethod($service::SYNC_METHOD_DELETE);
            }
            $this->ajaxDie([
                'hasError' => false,
                'error' => null,
                'result' => $service->execute(),
            ]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $this->module->getApiClient()->getLastResponse(),
                ],
                null,
                null,
                400
            );
        }
    }

    public function processBatchSync()
    {
        $responses = [];
        try {
            $batches = $this->module->getApiClient()->get(
                '/batches',
                [
                    'count' => 200,
                ]
            );

            foreach ($batches['batches'] as $batch) {
                $responses[] = $this->module->getApiClient()->delete("/batches/{$batch['id']}");
            }
            $this->ajaxDie(['success' => true, 'responses' => $responses]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $this->module->getApiClient()->getLastResponse(),
                ],
                null,
                null,
                400
            );
        }
    }

    /**
     *
     * @throws Exception
     */
    public function processOrderSync()
    {
        try {
            $method = Tools::getValue('method', 'post');
            $service = new \PrestaChamps\MailchimpPro\Commands\OrderSyncCommand(
                $this->context,
                $this->module->getApiClient()
            );
            if ($method === 'post') {
                $service->setMethod($service::SYNC_METHOD_POST);
            }
            if ($method === 'patch') {
                $service->setMethod($service::SYNC_METHOD_PATCH);
            }
            if ($method === 'delete') {
                $service->setMethod($service::SYNC_METHOD_DELETE);
            }
            $this->ajaxDie([
                'hasError' => false,
                'error' => null,
                'result' => $service->execute(),
            ]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $this->module->getApiClient()->getLastResponse(),
                ],
                null,
                null,
                400
            );
        }
    }

    /**
     *
     * @throws Exception
     */
    public function processCustomerSync()
    {
        $query = new DbQuery();
        $query->from('customer');
        $query->select('id_customer');
        $query->where('id_shop = ' . pSQL($this->context->shop->id));
        $customerIds = array_column(Db::getInstance()->executeS($query), 'id_customer');
        try {
            $method = Tools::getValue('method', 'post');

            $service = new \PrestaChamps\MailchimpPro\Commands\CustomerSyncCommand(
                $this->context,
                $this->module->getApiClient(),
                $customerIds,
                true
            );
            $service->triggerDoubleOptIn(false);
            $service->setSyncMode($service::SYNC_MODE_BATCH);
            if ($method === 'post') {
                $service->setMethod($service::SYNC_METHOD_PUT);
            }
            if ($method === 'patch') {
                $service->setMethod($service::SYNC_METHOD_PUT);
            }
            if ($method === 'delete') {
                $service->setMethod($service::SYNC_METHOD_DELETE);
            }
            $this->ajaxDie([
                'hasError' => false,
                'error' => null,
                'result' => $service->execute(),
            ]);
        } catch (Exception $exception) {
            $this->ajaxDie(
                [
                    'hasError' => true,
                    'error' => $this->module->getApiClient()->getLastResponse(),
                ],
                null,
                null,
                400
            );
        }
    }

    /**
     * @param null $value
     * @param null $controller
     * @param null $method
     * @param int $statusCode
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
                null,
                400
            );
        }
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
        $objects = [];
        foreach ($result as $itemId) {
            $object = new \CartRule($itemId, $this->context->language->id);
            if (Validate::isLoadedObject($object)) {
                $objects[] = $object;
            }
        }
        return $objects;
    }
}
