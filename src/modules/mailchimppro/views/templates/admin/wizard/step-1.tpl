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
<div class="form-group">
    <label for="api-key" class="hidden">{l s='API key' mod='mailchimppro'}</label>
    <p id="logged-in-as-container" {if empty($apiKey) && empty($mcEmail)}class="hidden"{/if}>
        {l s='Logged in as:' mod='mailchimppro'} <b id="logged-in-as">{$mcEmail}</b>
    </p>
    <input type="hidden" class="form-control" name="api-key" id="api-key"
           placeholder="{l s='API key' mod='mailchimppro'}" required="" value="{$apiKey}">
    <a class="btn btn-default" id="oauth2-start">
        {if empty($apiKey) && empty($mcEmail)}
            Log in to Mailchimp
        {else}
            Log in as somebody else
        {/if}
    </a>
</div>