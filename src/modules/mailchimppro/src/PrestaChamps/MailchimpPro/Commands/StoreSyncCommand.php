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
use \PrestaChamps\MailchimpPro\Formatters\StoreFormatter;

/**
 * Class StoreSyncCommand
 *
 * @package PrestaChamps\MailchimpPro\Commands
 */
class StoreSyncCommand extends BaseApiCommand
{
    protected $context;
    protected $stores;
    protected $mailchimp;
    protected $batch;
    protected $batchPrefix = '';

    /**
     * ProductSyncService constructor.
     *
     * @param \Context  $context
     * @param MailChimp $mailchimp
     * @param array     $storeIds
     */
    public function __construct(\Context $context, MailChimp $mailchimp, $storeIds = [])
    {
        $this->context = $context;
        $this->mailchimp = $mailchimp;
        $this->batchPrefix = uniqid('STORE_SYNC', true);
        $this->batch = $this->mailchimp->new_batch($this->batchPrefix);
        $this->stores = $storeIds;
    }

    public function execute()
    {
        $this->responses = [];
        if ($this->syncMode == self::SYNC_MODE_REGULAR) {
            foreach ($this->stores as $storeId) {
                $shop = new \Shop($storeId);
                $formattedId = \Mailchimppro::shopIdTransformer($shop);
                $formatted = new StoreFormatter(new \Shop($storeId), $this->context);
                if ($this->method === self::SYNC_METHOD_POST) {
                    $resp = $this->mailchimp->post('/ecommerce/stores', $formatted->format());
                }
                if ($this->method === self::SYNC_METHOD_PATCH) {
                    $data = $formatted->format();
                    // MC does not support changing the list id, so it must be unset
                    unset($data['list_id']);
                    $this->mailchimp->patch("/ecommerce/stores/{$formattedId}", $data);
                }
                if ($this->method === self::SYNC_METHOD_DELETE) {
                    $this->mailchimp->delete("/ecommerce/stores/{$formattedId}");
                }
                $this->responses[] = $this->mailchimp->getLastResponse();
            }
        }
        if ($this->syncMode == self::SYNC_MODE_BATCH) {
            $batch = $this->mailchimp->new_batch();
            foreach ($this->stores as $storeId) {
                $formatted = new StoreFormatter(new \Shop($storeId), $this->context);
                $shop = new \Shop($storeId);
                $formattedId = \Mailchimppro::shopIdTransformer($shop);
                if ($this->method === 'POST') {
                    $batch->post("{$this->batchPrefix}_{$formattedId}", '/ecommerce/stores', $formatted->format());
                }
                if ($this->method === 'PATCH') {
                    $data = $formatted->format();
                    // MC does not support changing the list id, so it must be unset
                    unset($data['list_id']);
                    $batch->patch("{$this->batchPrefix}_{$formattedId}", "/ecommerce/stores/{$formattedId}", $data);
                }
                if ($this->method === 'DELETE') {
                    $batch->delete("{$this->batchPrefix}_{$formattedId}", "/ecommerce/stores/{$formattedId}");
                }
                $this->responses[] = $this->mailchimp->getLastResponse();
            }
            $this->responses[] = $batch->execute();
        }

        return $this->responses;
    }
}
