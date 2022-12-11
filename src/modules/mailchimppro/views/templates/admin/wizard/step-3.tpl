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
<div class="alert alert-info alert-mc" id="loading-states-in-progress">
    {l s='Loading statuses, please wait' mod='mailchimppro'}
</div>
<div id="status-inputs-container" class="hidden">
    <div class="form-group">
        <label class="control-label col-lg-3" for="module-mailchimpproconfig-statuses-for-pending">
            {l s='Status for pending' mod='mailchimppro'}
        </label>

        <div class="col-lg-9">
            <select name="module-mailchimpproconfig-statuses-for-pending[]"
                    id="module-mailchimpproconfig-statuses-for-pending" multiple="multiple">
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="form-group">
        <label class="control-label col-lg-3" for="module-mailchimpproconfig-statuses-for-refunded">
            {l s='Status for refunded' mod='mailchimppro'}
        </label>
        <div class="col-lg-9">
            <select name="module-mailchimpproconfig-statuses-for-refunded[]"
                    id="module-mailchimpproconfig-statuses-for-refunded" multiple="multiple">
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="form-group">
        <label class="control-label col-lg-3" for="module-mailchimpproconfig-statuses-for-cancelled">
            {l s='Status for cancelled' mod='mailchimppro'}
        </label>
        <div class="col-lg-9">
            <select name="module-mailchimpproconfig-statuses-for-cancelled[]"
                    id="module-mailchimpproconfig-statuses-for-cancelled" multiple="multiple">
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="form-group">
        <label class="control-label col-lg-3" for="module-mailchimpproconfig-statuses-for-shipped">
            {l s='Status for shipped' mod='mailchimppro'}
        </label>
        <div class="col-lg-9">
            <select name="module-mailchimpproconfig-statuses-for-shipped[]"
                    id="module-mailchimpproconfig-statuses-for-shipped" multiple="multiple">
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="form-group">
        <label class="control-label col-lg-3" for="module-mailchimpproconfig-statuses-for-paid">
            {l s='Status for paid' mod='mailchimppro'}
        </label>
        <div class="col-lg-9">
            <select name="module-mailchimpproconfig-statuses-for-paid[]"
                    id="module-mailchimpproconfig-statuses-for-paid" multiple="multiple">
            </select>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
</div>
<div class="spinner">
    <div class="double-bounce1"></div>
    <div class="double-bounce2"></div>
</div>