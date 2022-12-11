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
            <th>{l s='Foreign ID' mod='mailchimppro'}</th>
            <th>{l s='Store ID' mod='mailchimppro'}</th>
            <th>{l s='Platform' mod='mailchimppro'}</th>
            <th>{l s='Domain' mod='mailchimppro'}</th>
            <th>{l s='Site script' mod='mailchimppro'}</th>
            <th>#</th>
        </tr>
        </thead>
        <tbody>
        {foreach $sites as $site}
            <tr>
                <td>{$site.foreign_id|escape:'htmlall':'UTF-8'}</td>
                <td>{$site.store_id|escape:'htmlall':'UTF-8'}</td>
                <td>{$site.platform|escape:'htmlall':'UTF-8'}</td>
                <td>{$site.domain|escape:'htmlall':'UTF-8'}</td>
                <td>{$site.site_script.url|escape:'htmlall':'UTF-8'}</td>
                <td>
                    <a href="{LinkHelper::getAdminLink('AdminMailchimpProSites', true, [], ['action' => 'entitydelete', 'entity_id' => $site.foreign_id])|escape:'htmlall':'UTF-8'}">
                        Delete
                    </a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>