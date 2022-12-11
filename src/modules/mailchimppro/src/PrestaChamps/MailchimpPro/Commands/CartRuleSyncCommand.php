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
 * @author    PrestaChamps <leo@prestachamps.com>
 * @copyright PrestaChamps
 * @license   commercial
 */

namespace PrestaChamps\MailchimpPro\Commands;

use DrewM\MailChimp\MailChimp;
use PrestaChamps\MailchimpPro\Formatters\PromoRuleFormatter;
use PrestaChamps\PrestaShop\Traits\ShopIdTrait;

/**
 * Class CartRuleSyncCommand
 *
 * @package PrestaChamps\MailchimpPro\Commands
 */
class CartRuleSyncCommand extends BaseApiCommand
{
    use ShopIdTrait;

    protected $context;
    protected $cartRules;
    protected $mailchimp;
    protected $batch;
    protected $batchPrefix = '';

    /**
     * ProductSyncService constructor.
     *
     * @param \Context $context
     * @param MailChimp $mailchimp
     * @param \CartRule[] $cartRules
     */
    public function __construct(\Context $context, MailChimp $mailchimp, $cartRules = [])
    {
        $this->context = $context;
        $this->mailchimp = $mailchimp;
        $this->batchPrefix = uniqid('CART_RULE_SYNC', true);
        $this->batch = $this->mailchimp->new_batch($this->batchPrefix);
        $this->cartRules = $cartRules;
    }

    public function execute()
    {
        $this->responses = [];
        if ($this->syncMode === self::SYNC_MODE_REGULAR) {
            foreach ($this->cartRules as $cartRule) {
                $formatted = new PromoRuleFormatter($cartRule, $this->context);
                if ($this->method === self::SYNC_METHOD_POST) {
                    $this->mailchimp->post(
                        "ecommerce/stores/{$this->getShopId()}/promo-rules",
                        $formatted->format()
                    );
                    $this->responses[] = $this->mailchimp->getLastResponse();
                    $this->mailchimp->post(
                        "ecommerce/stores/{$this->getShopId()}/promo-rules/$cartRule->id/promo-codes",
                        $formatted->formatPromoCode()
                    );
                    $this->responses[] = $this->mailchimp->getLastResponse();
                }
                if ($this->method === self::SYNC_METHOD_PATCH) {
                    $this->mailchimp->patch(
                        "ecommerce/stores/{$this->getShopId()}/promo-rules/{$cartRule->id}",
                        $formatted->format()
                    );
                    $this->responses[] = $this->mailchimp->getLastResponse();
                    // @codingStandardsIgnoreStart
                    $this->mailchimp->patch(
                        "ecommerce/stores/{$this->getShopId()}/promo-rules/{$cartRule->id}/promo-codes/{$cartRule->id}",
                        $formatted->formatPromoCode()
                    );
                    // @codingStandardsIgnoreEnd
                    $this->responses[] = $this->mailchimp->getLastResponse();
                }
                if ($this->method === self::SYNC_METHOD_DELETE) {
                    // @codingStandardsIgnoreStart
                    $this->mailchimp->delete(
                        "ecommerce/stores/{$this->getShopId()}/promo-rules/{$cartRule->id}/promo-codes/{$cartRule->id}"
                    );
                    // @codingStandardsIgnoreEnd
                    $this->responses[] = $this->mailchimp->getLastResponse();
                    $this->mailchimp->delete(
                        "ecommerce/stores/{$this->getShopId()}/promo-rules/{$cartRule->id}"
                    );
                    $this->responses[] = $this->mailchimp->getLastResponse();
                }
            }
        }
        if ($this->syncMode === self::SYNC_MODE_BATCH) {
            $batch = $this->mailchimp->new_batch();
            foreach ($this->cartRules as $cartRule) {
                $formatted = new PromoRuleFormatter($cartRule, $this->context);
                if ($this->method === 'POST') {
                    $batch->post(
                        "{$this->batchPrefix}_{$cartRule->id}",
                        "ecommerce/stores/{$this->getShopId()}/promo-rules",
                        $formatted->format()
                    );
                }
                if ($this->method === 'PATCH') {
                    $data = $formatted->format();
                    $batch->patch(
                        "{$this->batchPrefix}_{$cartRule->id}",
                        "ecommerce/stores/{$this->getShopId()}/promo-rules/{$cartRule->id}",
                        $data
                    );
                }
                if ($this->method === 'DELETE') {
                    $batch->delete(
                        "{$this->batchPrefix}_{$cartRule->id}",
                        "ecommerce/stores/{$this->getShopId()}/promo-rules/{$cartRule->id}"
                    );
                }
                $this->responses[] = $this->mailchimp->getLastResponse();
            }
            $this->responses[] = $batch->execute();
        }

        return $this->responses;
    }
}
