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
        {l s='Delete e-commerce data' mod='mailchimppro'}
    </div>
    <div class="panel-body">
        <div class="alert alert-danger">
            <p>
                {l s='Delete all e-commerce data from your Mailchimp account' mod='mailchimppro'}
            </p>
            <p>
                {l s='Once you delete a these datas, there is no going back. Please be certain.' mod='mailchimppro'}
            </p>
        </div>
        <div class="row text-center">
            <a class="btn btn-danger"
               onclick="return confirm('Are you sure?')"
               href="{LinkHelper::getAdminLink('AdminMailchimpProConfig', true, [], ['action' => 'deleteEcommerceData'])|escape:'htmlall':'UTF-8'}">
                {l s='Delete e-commerce' mod='mailchimppro'}
            </a>
        </div>
    </div>
</div>