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
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>{l s='ID' mod='mailchimppro'}</th>
            <th>{l s='Customer' mod='mailchimppro'}</th>
            <th>{l s='Store ID' mod='mailchimppro'}</th>
            <th>{l s='Financial status' mod='mailchimppro'}</th>
            <th>{l s='Fulfillment status' mod='mailchimppro'}</th>
            <th>{l s='Total' mod='mailchimppro'}</th>
            <th>{l s='Discount' mod='mailchimppro'}</th>
            <th>{l s='Tax' mod='mailchimppro'}</th>
            <th>{l s='Shipping' mod='mailchimppro'}</th>
            <th>{l s='Processed at' mod='mailchimppro'}</th>
            <th>{l s='Products' mod='mailchimppro'}</th>
            <th>#</th>
        </tr>
        </thead>
        <tbody>
        {foreach $orders as $order}
            {include file='./order/line.tpl' order=$order currency_code=$order.currency_code}
        {/foreach}
        </tbody>
    </table>
</div>