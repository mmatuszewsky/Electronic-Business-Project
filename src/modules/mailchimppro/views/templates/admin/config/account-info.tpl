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
<div class="panel table-responsive">
    <div class="panel-heading">
        {l s='Account info' mod='mailchimppro'}
    </div>
    <div class="panel-body">
        <table class="table">
            <tbody>
            <tr>
                <td>{l s='Account name' mod='mailchimppro'}</td>
                <td>{$info.account_name|escape:'htmlall':'UTF-8'}</td>
            </tr>
            <tr>
                <td>{l s='E-mail' mod='mailchimppro'}</td>
                <td>{$info.email|escape:'htmlall':'UTF-8'}</td>
            </tr>
            <tr>
                <td>{l s='Name' mod='mailchimppro'}</td>
                <td>{$info.first_name|escape:'htmlall':'UTF-8'} {$info.last_name|escape:'htmlall':'UTF-8'}</td>
            </tr>
            <tr>
                <td>{l s='Pricing plan' mod='mailchimppro'}</td>
                <td>{$info.pricing_plan_type|escape:'htmlall':'UTF-8'}</td>
            </tr>
            <tr>
                <td>{l s='Timezone' mod='mailchimppro'}</td>
                <td>{$info.account_timezone|escape:'htmlall':'UTF-8'}</td>
            </tr>
            <tr>
                <td>{l s='Industry' mod='mailchimppro'}</td>
                <td>{$info.account_industry|escape:'htmlall':'UTF-8'}</td>
            </tr>
            <tr>
                <td>{l s='Pro enabled' mod='mailchimppro'}</td>
                <td>{$info.pro_enabled|escape:'htmlall':'UTF-8'}</td>
            </tr>
            <tr>
                <td>{l s='Total subscribers' mod='mailchimppro'}</td>
                <td>{$info.total_subscribers|escape:'htmlall':'UTF-8'}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>