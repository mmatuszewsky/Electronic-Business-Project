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
<div class="panel" id="product-sync">
    <div class="panel-heading">
        {l s='Product sync' mod='mailchimppro'}
    </div>
    <div class="panel-body">
        <h4>
            {l s='E-commerce items for sale in your store need to be created as Products so you can add the items to a Cart or an Order.' mod='mailchimppro'}
        </h4>
        <br>
        <form>
            {include file="./_radio-btns.tpl"}
            <pre id="result">
            </pre>
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>

            <div class="progress hidden">
                <div class="progress-bar" style="width:0"></div>
            </div>
        </form>
    </div>
    <div class="panel-footer">
        <a class="btn btn-primary pull-right submit">
            <i class="process-icon-export"></i>
            {l s='Product sync' mod='mailchimppro'}
        </a>
    </div>
</div>