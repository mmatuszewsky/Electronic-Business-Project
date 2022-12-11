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
<div class="text-center">
    <div class="alert alert-info alert-mc" id="shop-sync-in-progress">
        {l s='Syncing shops, please wait' mod='mailchimppro'}
    </div>
    <div class="alert alert-success alert-mc hidden" id="shop-sync-completed">
        {l s='Syncing shops completed' mod='mailchimppro'}
    </div>

    <div class="alert alert-error hidden" id="shop-sync-error">
        {l s='Error during shop sync error' mod='mailchimppro'}
    </div>
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>