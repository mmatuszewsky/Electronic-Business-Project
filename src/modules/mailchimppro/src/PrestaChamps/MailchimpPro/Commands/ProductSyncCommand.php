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

namespace PrestaChamps\MailchimpPro\Commands;

use DrewM\MailChimp\MailChimp;
use PrestaChamps\MailchimpPro\Formatters\ProductFormatter;
use PrestaChamps\PrestaShop\Traits\ShopIdTrait;

/**
 * Class ProductSyncService
 *
 * @package PrestaChamps\MailchimpPro\Exceptions
 */
class ProductSyncCommand extends BaseApiCommand
{
    use ShopIdTrait;

    protected $context;
    protected $productIds;
    protected $mailchimp;
    protected $batch;
    protected $batchPrefix = '';
    protected $method = 'POST';
    protected $commands = [];

    /**
     * @var \Category[]
     */
    protected $categoryCache = [];

    /**
     * ProductSyncService constructor.
     *
     * @param \Context $context
     * @param MailChimp $mailchimp
     * @param           $productIds
     */
    public function __construct(\Context $context, MailChimp $mailchimp, $productIds)
    {
        $this->context = $context;
        $this->mailchimp = $mailchimp;
        $this->batchPrefix = uniqid("PRODUCT_SYNC_{$this->method}_", true);
        $this->batch = $this->mailchimp->new_batch($this->batchPrefix);
        $this->productIds = $productIds;

    }

    /**
     * @return array|false
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    public function execute()
    {

        $this->buildProducts();
        if ($this->method == self::SYNC_MODE_BATCH) {
            return $this->batch->execute();
        }
        $method = \Tools::strtolower($this->method);
        foreach ($this->commands as $entityId => $params) {
            try {
                $this->responses[$entityId] = $this->mailchimp->$method($params['route'], $params['data']);
            } catch (\Exception $exception) {
                $this->responses[$entityId] = $this->mailchimp->getLastResponse();
                continue;
            }
        }
        return $this->responses;
    }

    /**
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    protected function buildProducts()
    {
        foreach ($this->productIds as $key => $product) {
            $product = new \Product($product, false, $this->context->language->id);
            $category = $this->getCategory($product->getDefaultCategory());
            $productFormatter = new ProductFormatter(
                $product,
                $category,
                $this->context
            );
            if ($this->method === self::SYNC_METHOD_POST) {
                if ($this->syncMode == self::SYNC_MODE_BATCH) {
                    $this->batch->post(
                        $this->batchPrefix . '_' . $key,
                        "/ecommerce/stores/{$this->getShopId()}/products",
                        $productFormatter->format()
                    );
                } else {
                    $this->commands[$product->id] = [
                        'route' => "/ecommerce/stores/{$this->getShopId()}/products",
                        'data' => $productFormatter->format(),
                    ];
                }
            } elseif ($this->method === self::SYNC_METHOD_PATCH) {
                if ($this->syncMode == self::SYNC_MODE_BATCH) {
                    $this->batch->patch(
                        $this->batchPrefix . '_' . $key,
                        "/ecommerce/stores/{$this->getShopId()}/products/{$product->id}",
                        $productFormatter->format()
                    );
                } else {
                    $this->commands[$product->id] = [
                        'route' => "/ecommerce/stores/{$this->getShopId()}/products/{$product->id}",
                        'data' => $productFormatter->format(),
                    ];
                }
            } else {
                if ($this->syncMode == self::SYNC_MODE_BATCH) {
                    $this->batch->delete(
                        $this->batchPrefix . '_' . $key,
                        "/ecommerce/stores/{$this->getShopId()}/products/{$product->id}"
                    );
                } else {
                    $this->commands[$product->id] = [
                        'route' => "/ecommerce/stores/{$this->getShopId()}/products/{$product->id}",
                        'data' => [],
                    ];
                }
            }
        }
    }

    /**
     * It's a good idea to store categories in a cache to prevent multiple and unnecessary DB calls
     *
     * @param $categoryId
     *
     * @return \Category
     */
    protected function getCategory($categoryId)
    {
        // Because PrestaShop, that's why
        if (!is_scalar($categoryId)) {
            $categoryId = $categoryId['id_category_default'];
        }

        if (isset($this->categoryCache[$categoryId])) {
            return $this->categoryCache[$categoryId];
        }
        $this->categoryCache[$categoryId] = new \Category(
            $categoryId,
            $this->context->language->id,
            $this->context->shop->id
        );

        return $this->categoryCache[$categoryId];
    }

    public function getBatchId()
    {
        return $this->batchPrefix;
    }
}
