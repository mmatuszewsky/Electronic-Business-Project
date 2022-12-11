{*
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
 *}

<tr>
    <td>{$order.id|escape:'htmlall':'UTF-8'}</td>
    <td>
        {if isset($order.customer)}
            <b>{$order.customer.email_address|escape:'htmlall':'UTF-8'}</b>
            <small>ID: {$order.customer.id|escape:'htmlall':'UTF-8'}</small>
        {else}
            <span class="text-danger">{l s='No customer' mod='mailchimppro'}</span>
        {/if}
    </td>
    <td>
        {$order.store_id|escape:'htmlall':'UTF-8'}
    </td>
    <td>
        {$order.financial_status|escape:'htmlall':'UTF-8'}
    </td>
    <td>
        {$order.fulfillment_status|escape:'htmlall':'UTF-8'}
    </td>
    <td>
        {$order.order_total|escape:'htmlall':'UTF-8'} {$order.currency_code|escape:'htmlall':'UTF-8'}
    </td>
    <td>
        {$order.discount_total|escape:'htmlall':'UTF-8'} {$order.currency_code|escape:'htmlall':'UTF-8'}
    </td>
    <td>
        {$order.tax_total|escape:'htmlall':'UTF-8'} {$order.currency_code|escape:'htmlall':'UTF-8'}
    </td>
    <td>
        {$order.shipping_total|escape:'htmlall':'UTF-8'} {$order.currency_code|escape:'htmlall':'UTF-8'}
    </td>
    <td>
        {$order.processed_at_foreign|escape:'htmlall':'UTF-8'}
    </td>
    <td>
        {include file='./../cart/line.tpl' lines=$order.lines currency_code=$order.currency_code}
    </td>
    <td>
        <a href="{$link->getAdminLink('AdminMailchimpProOrders', true, [], ['action' => 'entitydelete', 'entity_id' => $order.id])|escape:'htmlall':'UTF-8'}">
            Delete
        </a>
    </td>
</tr>
