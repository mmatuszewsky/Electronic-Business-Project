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

namespace PrestaChamps\MailchimpPro\Formatters;

use PrestaShop\PrestaShop\Adapter\Entity\CartRule;

/**
 * Class OrderFormatter
 *
 * @package PrestaChamps\MailchimpPro\Formatters
 */
class OrderFormatter
{
    protected $context;
    protected $order;
    protected $customer;
    protected $shipping_address;
    protected $billing_address;

    /**
     * ProductFormatter constructor.
     *
     * @todo Refactor this spaghetti
     *
     * @param \Order    $order
     * @param \Customer $customer
     * @param \Address  $billing_address
     * @param \Address  $shipping_address
     * @param \Context  $context
     */
    public function __construct(
        \Order $order,
        \Customer $customer,
        \Address $billing_address,
        \Address $shipping_address,
        \Context $context
    )
    {
        $this->order = $order;
        $this->customer = $customer;
        $this->billing_address = $billing_address;
        $this->shipping_address = $shipping_address;
        $this->context = $context;
    }

    /**
     * @return array
     * @throws \PrestaShopException
     */
    public function format()
    {
        if ($this->context->currency) {
            $store_currency_format = \Tools::strtoupper($this->context->currency->iso_code);
        } else {
            $store_currency_format = \Tools::strtoupper(\Currency::getDefaultCurrency()->iso_code);
        }

        $data = [
            'id' => (string)$this->order->id,
            'currency_code' => $store_currency_format,
            'order_total' => $this->order->total_paid,
            'tax_total' => $this->order->total_paid_tax_incl - $this->order->total_paid_tax_excl,
            'shipping_total' => $this->order->total_shipping,
            'lines' => [],
            'customer' => ['id' => (string)$this->customer->id],
        ];

        /**
         * Addons Validator note
         *
         * Unfortunately the encrypted cookie functionality can't be used here, because it can't be implemented
         * in both Mailchimp and PrestaShop side
         */
        if (isset($_COOKIE['mc_cid']) && !empty($_COOKIE['mc_cid'])) {
            $data['campaign_id'] = $_COOKIE['mc_cid'];
        }

        $data['shipping_address'] = (new AddressFormatter($this->shipping_address, $this->context))->format();
        $data['billing_address'] = (new AddressFormatter($this->billing_address, $this->context))->format();

        if (!empty($this->context->cookie->landing_site)) {
            $data['landing_site'] = $this->context->cookie->landing_site;
        }

        $data['processed_at_foreign'] = strftime('%Y-%m-%d %H:%M:%S', strtotime($this->order->date_add));
        $state = $this->order->getCurrentOrderState();

        if ($state) {
            $financialState = (new OrderStateFormatter($state, $this->context))->format();
            if ($financialState) {
                $data['financial_status'] = $financialState;
            }
            $data['fulfillment_status'] = $state->shipped ? 'shipped' : '';
        } else {
            $data['financial_status'] = 'pending';
        }
        $lines = $this->order->getProductsDetail();
        foreach ($lines as $line) {
            $data['lines'][] = [
                'id' => $line['id_order_detail'],
                'product_id' => $line['product_id'],
                'product_variant_id' =>
                    $line['product_attribute_id'] == 0 ? $line['product_id'] : $line['product_attribute_id'],
                'quantity' => (int)$line['product_quantity'],
                'price' => $line['price'],
            ];
        }

        $data['promos'] = $this->getCartPromos();

        return $data;
    }

    /**
     * @return CartRule[]
     */
    protected function getCartRules()
    {
        $cart = \Cart::getCartByOrderId($this->order->id);
        $array = $cart->getCartRules();

        if (empty($array) || !is_array($array)) {
            return [];
        }
        return array_column($array, 'obj');
    }

    /**
     * @return array
     */
    protected function getCartPromos()
    {
        $cartRules = $this->getCartRules();
        if (empty($cartRules)) {
            return [];
        }

        $data = [];

        foreach ($cartRules as $cartRule) {
            $data[] = (new OrderPromoFormatter($cartRule, $this->order, $this->context))->format();
        }

        return $data;
    }
}
