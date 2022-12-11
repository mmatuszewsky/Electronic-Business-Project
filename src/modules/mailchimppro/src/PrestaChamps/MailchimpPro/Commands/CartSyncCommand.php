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

use Cart;
use Context;
use Customer;
use DrewM\MailChimp\MailChimp;
use Exception;
use PrestaChamps\MailchimpPro\Formatters\CartFormatter;

/**
 * Class CartSyncCommand
 * @package PrestaChamps\MailchimpPro\Commands
 */
class CartSyncCommand extends BaseApiCommand
{
    protected $context;
    protected $cartIds;
    protected $mailchimp;
    protected $batch;
    protected $batchPrefix = '';
    protected $triggerDoubleOptIn = false;

    public function __construct(Context $context, MailChimp $mailchimp, $cartIds = [])
    {
        $this->context = $context;
        $this->mailchimp = $mailchimp;
        $this->batchPrefix = uniqid('CART_SYNC', true);
        $this->batch = $this->mailchimp->new_batch($this->batchPrefix);
        $this->cartIds = $cartIds;
    }

    /**
     * @return array
     * @throws Exception
     */
    public function execute()
    {
        $this->responses = [];
        $shopId = \Mailchimppro::shopIdTransformer($this->context->shop);
        if ((int)$this->syncMode === self::SYNC_MODE_REGULAR) {
            foreach ($this->cartIds as $cartId) {
                $cart = new Cart($cartId);
                $customer = new Customer($cart->id_customer);
                $formatted = (new CartFormatter($cart, $customer, $this->context))->format();
                if ($this->method === self::SYNC_METHOD_POST) {
                    $this->mailchimp->post(
                        "/ecommerce/stores/{$shopId}/carts",
                        $formatted
                    );
                }
                if ($this->method === self::SYNC_METHOD_PATCH) {
                    $this->mailchimp->patch(
                        "/ecommerce/stores/{$shopId}/carts/{$cart->id}",
                        $formatted
                    );
                }
                if ($this->method === self::SYNC_METHOD_DELETE) {
                    $this->mailchimp->delete(
                        "/ecommerce/stores/{$shopId}/carts/{$cart->id}"
                    );
                }
                $this->responses[] = $this->mailchimp->getLastResponse();
            }
        }

        if ((int)$this->syncMode === self::SYNC_MODE_BATCH) {
            throw new Exception("Batch mode not supported yet!");
        }

        return $this->responses;
    }

    protected function getCartExists($cartId)
    {
        $shopId = \Mailchimppro::shopIdTransformer($this->context->shop);
        $this->mailchimp->get(
            "/ecommerce/stores/{$shopId}/carts/{$cartId}",
            ['fields' => ['id']]
        );

        if ($this->mailchimp->success()) {
            return true;
        }

        return false;
    }
}
