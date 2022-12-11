{*
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
 *}
<h4>{l s='Sync method' mod='mailchimppro'}</h4>
<div class="radio">
    <label>
        <input type="radio" name="method" value="post" checked="checked">
        POST
        <small class="text-muted">
            {l s='New items willl be added. Existing items will remain unaffected. Upon encountering an existing item an error message will appear but this can be ignored and the sync will continue.' mod='mailchimppro'}
        </small>
    </label>
</div>
<div class="radio">
    <label>
        <input type="radio" name="method" value="patch">
        PATCH
        <small class="text-muted">
            {l s='Existing items will be updated. New items will not be added. In case there are new items which have not yet been added, an error message will appear but this can be ignored and the sync will continue.' mod='mailchimppro'}
        </small>
    </label>
</div>
<div class="radio control-label">
    <label>
        <input type="radio" name="method" value="delete">
        DELETE
        <small class="text-muted">
            {l s='All items of this type will be deleted from Mailchimp' mod='mailchimppro'}
        </small>
    </label>
</div>
<h4>{l s='Sync mode' mod='mailchimppro'}</h4>
<div class="radio">
    <label>
        <input type="radio" name="syncMode" value="batch" checked="checked">
        Batch
        <small class="text-muted">
            {l s='Faster process where large batches of items are sent to Mailchimp. Progress will be displayed only when an entire batch has been processed.' mod='mailchimppro'}
        </small>
    </label>
</div>
<div class="radio">
    <label>
        <input type="radio" name="syncMode" value="regular">
        Regular
        <small class="text-muted">
            {l s='Slower process where items are updated one by one. Progress can be monitored in real time.' mod='mailchimppro'}
        </small>
    </label>
</div>