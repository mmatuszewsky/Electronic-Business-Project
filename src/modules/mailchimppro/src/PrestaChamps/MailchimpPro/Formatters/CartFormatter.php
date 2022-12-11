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


class CartFormatter
{
    public $cart;
    public $customer;
    public $context;

    /**
     * CartFormatter constructor.
     *
     * @param \Cart     $cart
     * @param \Customer $customer
     * @param \Context  $context
     */
    public function __construct(\Cart $cart, \Customer $customer, \Context $context)
    {

        $this->cart = $cart;
        $this->customer = $customer;
        $this->context = $context;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function format()
    {
        $products = $this->cart->getProducts(true);
        $data = [
            'id' => (string)$this->cart->id,
            'customer' => ['id' => (string)$this->customer->id],
            'order_total' => (float)$this->cart->getOrderTotal(true, \Cart::BOTH, $products),
            'checkout_url' => $this->context->link->getPageLink('order'),
            'currency_code' => \CurrencyCore::getDefaultCurrency()->iso_code,
            'lines' => [],
        ];

        foreach ($products as $prod) {
            $p = new \Product($prod['id_product'], true, $this->context->language->id);
            $price_with_tax = \Product::getPriceStatic(
                $p->id,
                true,
                null,
                2,
                null,
                false,
                true,
                1,
                false,
                null,
                $this->cart->id
            );
            $total_with_tax = $prod['cart_quantity'] * $price_with_tax;

            $data['lines'][] = [
                'id' => (string)$prod['unique_id'],
                'product_id' => (string)$prod['id_product'],
                'product_variant_id' => (string)($prod['id_product_attribute'] == 0
                    ? $prod['id_product'] : $prod['id_product_attribute']),
                'quantity' => (int)$prod['cart_quantity'],
                'price' => $total_with_tax,
            ];
        }

        return $data;
    }
}
