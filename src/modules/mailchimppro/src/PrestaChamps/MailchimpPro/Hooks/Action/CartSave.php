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

namespace PrestaChamps\MailchimpPro\Hooks\Action;

use Context;
use DrewM\MailChimp\MailChimp;
use PrestaChamps\MailchimpPro\Commands\CartSyncCommand;

/**
 * Class CartSave
 * @package PrestaChamps\MailchimpPro\Hooks\Action
 */
class CartSave
{
    private $cart;
    private $context;
    /**
     * @var MailChimp
     */
    private $mailchimp;

    private function __construct(Context $context, MailChimp $mailChimp)
    {
        $this->context = $context;
        $this->mailchimp = $mailChimp;
    }

    public static function run(Context $context, MailChimp $mailChimp)
    {
        (new static($context, $mailChimp))->syncCart();
    }

    protected function syncCart()
    {
        $cartId = isset(Context::getContext()->cart->id) ? Context::getContext()->cart->id : false;
        if ($cartId && !$this->context->customer->isGuest()) {
            $command = new CartSyncCommand($this->context, $this->mailchimp, [$cartId]);
            $command->setSyncMode(CartSyncCommand::SYNC_MODE_REGULAR);
            $command->setMethod(CartSyncCommand::SYNC_METHOD_POST);
            $command->execute();
            $command->setMethod(CartSyncCommand::SYNC_METHOD_PATCH);
            $command->execute();
        }
    }
}
