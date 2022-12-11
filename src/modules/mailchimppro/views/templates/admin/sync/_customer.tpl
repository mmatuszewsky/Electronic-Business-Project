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
<div class="panel" id="customer-sync">
    <div class="panel-heading">
        {l s='Customer sync' mod='mailchimppro'}
    </div>
    <div class="panel-body">
        <form>
            <h4>
                {l s='Add Customers to your Store to track their orders and to view E-Commerce Data for your Mailchimp lists and campaigns. Each Customer is connected to a Mailchimp list member, so adding a Customer can also add or update a list member.' mod='mailchimppro'}
            </h4>
            <br>
            {include file="./_radio-btns.tpl"}
            <pre id="result"></pre>
        </form>
    </div>
    <div class="panel-footer">
        <a class="btn btn-primary pull-right submit">
            <i class="process-icon-export"></i>
            {l s='Customer sync' mod='mailchimppro'}
        </a>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#customer-sync .submit").click(function () {
            $.ajax({
                url: syncUrl,
                type: 'POST',
                data: {
                    action: 'customerSync',
                    method: $('#customer-sync input[name=method]:checked').val()
                },
            }).success(function (response) {
                $("#customer-sync #result").html(JSON.stringify(response, null, 2));
                toastr.success("Customer sync batch started");
            }).fail(function (xhr, status, error) {
                console.log(xhr);
                toastr.error("Error while launching customer sync batch");
            });
        });
    });
</script>