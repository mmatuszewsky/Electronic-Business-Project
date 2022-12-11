<?php
/**
 * 2007-2022 Sendinblue
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@sendinblue.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    Sendinblue <contact@sendinblue.com>
 * @copyright 2007-2022 Sendinblue
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of Sendinblue
 */

namespace Sendinblue\Factories;

use Customer;
use Sendinblue\Models\CartItem;
use Sendinblue\Models\CartProperties;
use Sendinblue\Models\CustomerAddress;
use Sendinblue\Models\EventdataData;
use Sendinblue\Models\OrderMiscellaneous;
use Sendinblue\Models\OrderPayload;
use Sendinblue\Models\TransactionalOrderPayload;
use Sendinblue\Services\ConfigService;

class EventDataFactory
{
    /**
     * @param Customer|\CustomerCore $customer
     * @return array
     */
    public static function prepareCartProperties($customer)
    {
        $cartProperties = new CartProperties();
        $cartProperties->email = $customer->email;
        $cartProperties->firstname = $customer->firstname;
        $cartProperties->lastname = $customer->lastname;

        return $cartProperties->toArray();
    }

    /**
     * @param \Customer|\CustomerCore $customer
     * @param \Order|\OrderCore $order
     * @return array
     */
    public static function prepareOrderPayload($customer, $order)
    {
        $payload = [
            'email' => $customer->email,
            'properties' => EventDataFactory::prepareCartProperties($customer),
            'eventdata' => [
                'id' => sprintf('cart:%s', $order->id_cart),
                'data' => [],
            ]
        ];

        $orderPayload = new OrderPayload();
        $orderPayload->date = date("m-d-Y", strtotime($order->date_add));
        $orderPayload->id = $order->reference;
        $orderPayload->revenue = $order->total_paid;
        $orderPayload->miscellaneous = self::getMiscellaneous($order, $customer);
        $orderPayload->billing_address = self::getAddress($order->id_address_invoice);
        $orderPayload->shipping_address = self::getAddress($order->id_address_delivery);

        $payload['eventdata']['data'] = self::prepareOrderEventdataData($order) + $orderPayload->toArray();

        return $payload;
    }

    /**
     * @param int $addressId
     * @return array
     */
    private static function getAddress($addressId)
    {
        $psAddress = new \AddressCore($addressId);
        $billingAddress = new CustomerAddress();
        $billingAddress->firstname = $psAddress->firstname;
        $billingAddress->lastname = $psAddress->lastname;
        $billingAddress->city = $psAddress->city;
        $billingAddress->company = $psAddress->company;
        $billingAddress->country = $psAddress->country;
        $billingAddress->address1 = $psAddress->address1;
        $billingAddress->address2 = $psAddress->address2;
        $billingAddress->state = (new \StateCore($psAddress->id_state))->name;
        $billingAddress->phone = $psAddress->phone;
        $billingAddress->zipcode = $psAddress->postcode;

        return $billingAddress->toArray();
    }

    /**
     * @param \Order|\OrderCore $order
     * @param \Customer|\CustomerCore $customer
     * @return array
     */
    private static function getMiscellaneous($order, $customer)
    {
        $miscellaneous = new OrderMiscellaneous();
        $miscellaneous->cart_DISCOUNT = $order->total_discounts;
        $miscellaneous->cart_DISCOUNT_TAX = $order->total_discounts_tax_incl - $order->total_discounts_tax_excl;
        $miscellaneous->payment_METHOD = $order->payment;
        $miscellaneous->payment_METHOD_TITLE = $order->payment;
        $miscellaneous->user_LOGIN = $customer->email;

        return $miscellaneous->toArray();
    }

    /**
     * @param \Cart|\CartCore $cart
     * @return array
     */
    public static function createEventdataDataByCart($cart)
    {
        $eventdataData = new EventdataData();
        $currency = \CurrencyCore::getCurrencyInstance((int)$cart->id_currency);
        $totalCartPrice = $cart->getOrderTotal();
        $taxAmount = $totalCartPrice - $cart->getOrderTotal(false);

        $eventdataData->affiliation = $cart->id_shop;
        $eventdataData->currency = $currency ? $currency->iso_code : '';
        $eventdataData->discount = $cart->getOrderTotal(false, \Cart::ONLY_DISCOUNTS);
        $eventdataData->discount_taxinc = $cart->getOrderTotal(true, \Cart::ONLY_DISCOUNTS);
        $eventdataData->shipping = $cart->getTotalShippingCost(null, false);
        $eventdataData->shipping_taxinc = $cart->getTotalShippingCost();
        $eventdataData->subtotal = $cart->getOrderTotal(false);
        $eventdataData->subtotal_predisc = $cart->getOrderTotal(false, \Cart::ONLY_PRODUCTS);
        $eventdataData->subtotal_predisc_taxinc = $cart->getOrderTotal(true, \Cart::ONLY_PRODUCTS);
        $eventdataData->subtotal_taxinc = $totalCartPrice;
        $eventdataData->tax = $taxAmount;
        $eventdataData->total = $totalCartPrice;
        $eventdataData->total_before_tax = $cart->getOrderTotal(false);
        $eventdataData->url = \Context::getContext()->link->getPageLink('cart', null, null, ['action' => 'show']);
        $eventdataData->items = self::getProducts($cart);

        return $eventdataData->toArray();
    }

    /**
     * @param \Order|\OrderCore $order
     * @return array
     */
    private static function prepareOrderEventdataData($order)
    {
        $eventdataData = new EventdataData();
        $currency = \Currency::getCurrencyInstance((int)$order->id_currency);
        $totalCartPrice = $order->total_paid;
        $taxAmount = $totalCartPrice - $order->total_paid_tax_excl;

        $eventdataData->affiliation = $order->id_shop;
        $eventdataData->currency = $currency ? $currency->iso_code : '';
        $eventdataData->discount = $order->total_discounts_tax_excl;
        $eventdataData->discount_taxinc = $order->total_discounts_tax_incl;
        $eventdataData->shipping = $order->total_shipping_tax_excl;
        $eventdataData->shipping_taxinc = $order->total_shipping_tax_incl;
        $eventdataData->subtotal = $order->total_paid_tax_excl;
        $eventdataData->subtotal_predisc = $order->total_discounts_tax_excl;
        $eventdataData->subtotal_predisc_taxinc = $order->total_discounts_tax_incl;
        $eventdataData->subtotal_taxinc = $totalCartPrice;
        $eventdataData->tax = $taxAmount;
        $eventdataData->total = $totalCartPrice;
        $eventdataData->total_before_tax = $order->total_paid_tax_excl;
        $eventdataData->url = self::getOrderPageUrl($order);
        $eventdataData->items = self::getProducts(new \Cart($order->id_cart, true, $order->id_lang));

        return $eventdataData->toArray();
    }

    /**
     * @param \Order|\OrderCore $order
     * @return string
     */
    private static function getOrderPageUrl($order)
    {
        $url = '';
        try {
            /** @var \PaymentModuleCore $paymentModule */
            $paymentModule = \ModuleCore::getInstanceByName('ps_checkpayment');

            $url = \ContextCore::getContext()->link->getPageLink(
                sprintf(
                    'order-confirmation&id_cart=%s&id_module=%s&id_order=%s&key=%s',
                    (int) $order->id_cart,
                    (int) $paymentModule->id,
                    $order->id,
                    $order->getCustomer()->secure_key
                )
            );
        } catch (\Exception $e) {
            \PrestaShopLoggerCore::addLog($e->getMessage(), ConfigService::ERROR_LEVEL);
        }

        return $url;
    }

    /**
     * @param \CartCore|\Cart $cart
     * @return array
     */
    private static function getProducts($cart)
    {
        $products = [];
        foreach ($cart->getProducts() as $product) {
            $products[] = self::prepareProduct($product);
        }

        return $products;
    }

    /**
     * @param array $item
     * @return array
     */
    private static function prepareProduct($item)
    {
        $cartItem = new CartItem();
        $cartItem->id = $item['id_product'];
        $cartItem->name = $item['name'];
        $cartItem->available_now = $item['available_now'];
        $cartItem->category = $item['category'];
        $cartItem->description_short = $item['description_short'];
        $cartItem->quantity = $item['quantity'];
        $cartItem->sku = $item['reference'];
        $cartItem->image = \ContextCore::getContext()->link->getImageLink($item['link_rewrite'], $item['id_image']);
        $cartItem->price = $item['price'];
        $cartItem->price_predisc = $item['price_without_reduction'] ?: 0;
        $cartItem->price_predisc_taxinc = $item['price_without_reduction_without_tax'] ?: 0;
        $cartItem->price_taxinc = $item['price_with_reduction'] ?: 0;
        $cartItem->disc_amount = $item['reduction_without_tax'] ?: 0;
        $cartItem->disc_amount_taxinc = $item['reduction'] ?: 0;
        $cartItem->disc_rate = '';
        $cartItem->tax_amount = $cartItem->price_predisc - $cartItem->price_predisc_taxinc;
        $cartItem->tax_name = $item['tax_name'];
        $cartItem->tax_rate = $item['rate'];
        $cartItem->url = \ContextCore::getContext()->link->getProductLink($item);
        $cartItem->variant_id = '';
        $cartItem->variant_id_name = isset($item['attributes_small']) ? $item['attributes_small'] : '';
        $cartItem->variant_name = isset($item['attributes_small']) ? $item['attributes_small'] : '';
        $array = isset($item['attributes_small']) ? explode('-', $item['attributes_small']) : '';
        $cartItem->size = empty($item['attributes_small']) ? '' : reset($array);

        return $cartItem->toArray();
    }

    /**
     * @param string $email
     * @param \Order|\OrderCore $order
     * @return array
     */
    public static function getTransactionalOrderPayload($email, $order)
    {
        $transactionalOrderPayload =  new TransactionalOrderPayload();
        $transactionalOrderPayload->email = $email;
        $transactionalOrderPayload->orderId = $order->reference;
        $transactionalOrderPayload->orderDate = $order->date_add;
        $transactionalOrderPayload->orderPrice= $order->total_paid;

        return $transactionalOrderPayload->toArray();
    }
}
