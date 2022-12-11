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
use PrestaChamps\MailchimpPro\Exceptions\MailChimpException;
use PrestaChamps\MailchimpPro\Formatters\OrderFormatter;
use PrestaChamps\PrestaShop\Traits\ShopIdTrait;

/**
 * Class OrderSyncService
 *
 * @package PrestaChamps\MailchimpPro\Services
 */
class OrderSyncCommand extends BaseApiCommand
{
    use ShopIdTrait;

    protected $context;
    protected $orders;
    protected $mailchimp;
    protected $batch;
    protected $batchPrefix = '';

    /**
     * ProductSyncService constructor.
     *
     * @param \Context $context
     * @param MailChimp $mailchimp
     * @param array $orderIds
     *
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    public function __construct(\Context $context, MailChimp $mailchimp, $orderIds = [])
    {
        $this->context = $context;
        $this->mailchimp = $mailchimp;
        $this->batchPrefix = uniqid('ORDERS_SYNC', true);
        $this->batch = $this->mailchimp->new_batch($this->batchPrefix);
        $this->orders = $orderIds;

        $this->buildOrders();
    }

    public function execute()
    {
        return $this->batch->execute();
    }

    /**
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     * @todo Implement batch functionality
     *
     */
    protected function buildOrders()
    {
        $shopId = \Mailchimppro::shopIdTransformer($this->context->shop);
        foreach ($this->orders as $orderId) {
            $order = new \Order($orderId, $this->context->language->id);
            $shippingAddress = new \Address($order->id_address_delivery, $this->context->language->id);
            $billingAddress = new \Address($order->id_address_invoice, $this->context->language->id);
            try {
                $this->syncCustomer($order->getCustomer());
                $formatter = new OrderFormatter(
                    $order,
                    $order->getCustomer(),
                    $billingAddress,
                    $shippingAddress,
                    $this->context
                );
                if ($this->getOrderExists($orderId)) {
                    $this->mailchimp->patch(
                        "/ecommerce/stores/{$shopId}/orders",
                        $formatter->format()
                    );
                } else {
                    $this->mailchimp->post(
                        "/ecommerce/stores/{$shopId}/orders",
                        $formatter->format()
                    );
                }
                if (!$this->mailchimp->success()) {
                    throw new MailChimpException($this->mailchimp->getLastResponse());
                }
            } catch (\PrestaShopDatabaseException $exception) {
                \PrestaShopLogger::addLog("[MAILCHIMP]: {$exception->getMessage()}");
                continue;
            } catch (MailChimpException $exception) {
                $message = json_encode($exception->getMessage());
                \PrestaShopLogger::addLog("[MAILCHIMP]: {$message}");
                continue;
            }
        }
    }

    /**
     * @param \Customer $customer
     *
     * @throws \PrestaShopDatabaseException
     * @throws MailChimpException
     */
    protected function syncCustomer(\Customer $customer)
    {
        if (!$this->getCustomerExists($customer)) {
            $command = new CustomerSyncCommand(
                $this->context,
                $this->mailchimp,
                [$customer->id]
            );
            $command->setMethod(CustomerSyncCommand::SYNC_METHOD_PUT);
            $command->triggerDoubleOptIn(true);
            $command->execute();
            if (!$this->mailchimp->success()) {
                throw new MailChimpException($this->mailchimp->getLastResponse());
            }
        }
    }

    /**
     * @param \Customer $customer
     *
     * @return bool
     */
    protected function getCustomerExists(\Customer $customer)
    {
        $this->mailchimp->get(
            "/ecommerce/stores/{$this->getShopId()}/customers/{$customer->id}",
            ['fields' => ['opt_in_status']]
        );

        if ($this->mailchimp->success()) {
            return true;
        }

        return false;
    }

    protected function getOrderExists($orderId)
    {
        $this->mailchimp->get(
            "/ecommerce/stores/{$this->getShopId()}/orders/{$orderId}",
            ['fields' => ['id']]
        );

        if ($this->mailchimp->success()) {
            return true;
        }

        return false;
    }
}
