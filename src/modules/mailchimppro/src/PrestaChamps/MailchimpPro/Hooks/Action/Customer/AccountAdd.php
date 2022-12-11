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

namespace PrestaChamps\MailchimpPro\Hooks\Action\Customer;

use Context;
use Customer;
use DrewM\MailChimp\MailChimp;
use PrestaChamps\MailchimpPro\Commands\CartSyncCommand;
use PrestaChamps\MailchimpPro\Commands\CustomerSyncCommand;

/**
 * Invoked when a new customer creates an account successfully
 *
 * @package PrestaChamps\MailchimpPro\Hooks\Action\Customer
 */
class AccountAdd
{
    protected $context;
    protected $customer;
    protected $mailchimp;

    /**
     * AccountAdd constructor
     *
     * @param Customer $customer
     * @param MailChimp $mailchimp
     * @param Context $context
     */
    protected function __construct(Customer $customer, MailChimp $mailchimp, Context $context)
    {
        $this->context = $context;
        $this->customer = $customer;
        $this->mailchimp = $mailchimp;

        $this->handleGuestCheckoutAbandonedMail();

    }

    public static function run(Context $context, MailChimp $mailchimp, Customer $customer)
    {
        new static($customer, $mailchimp, $context);
    }

    protected function handleGuestCheckoutAbandonedMail()
    {
        $this->syncCustomer();
        $this->syncCart();

    }

    protected function syncCustomer()
    {
        $command = new CustomerSyncCommand($this->context, $this->mailchimp, [$this->customer->id]);
        $command->triggerDoubleOptIn(true);
        $command->setMethod(CustomerSyncCommand::SYNC_METHOD_POST);
        $command->setSyncMode(CustomerSyncCommand::SYNC_MODE_REGULAR);
        $command->execute();
    }

    protected function syncCart()
    {
        if ($this->context->cart) {
            $command = new CartSyncCommand($this->context, $this->mailchimp, [$this->context->cart->id]);
            $command->setMethod(CartSyncCommand::SYNC_METHOD_POST);
            $command->setSyncMode(CartSyncCommand::SYNC_MODE_REGULAR);
            $command->execute();
        }
    }
}
