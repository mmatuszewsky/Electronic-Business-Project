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
<div class="panel" id="order-sync">
    <div class="panel-heading">
        {l s='Order sync' mod='mailchimppro'}
    </div>
    <div class="panel-body">
        <form>
            <h4>
                {l s='Orders represent successful e-commerce transactions, and this data can be used to provide more detailed campaign reports, track sales, and personalize emails to your targeted consumers, and view other e-commerce data in your Mailchimp account.' mod='mailchimppro'}
            </h4>
            <br>
            {include file="./_radio-btns.tpl"}
            <pre id="result"></pre>
        </form>
    </div>
    <div class="panel-footer">
        <a class="btn btn-primary pull-right submit">
            <i class="process-icon-export"></i>
            {l s='Order sync' mod='mailchimppro'}
        </a>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#order-sync .submit").click(function () {
            $.ajax({
                url: syncUrl,
                type: 'POST',
                data: {
                    action: 'orderSync',
                    method: $('#order-sync input[name=method]:checked').val()
                },
            }).success(function (response) {
                $("#order-sync #result").html(JSON.stringify(response, null, 2));
                toastr.success("Order sync batch started");
            }).fail(function (xhr, status, error) {
                console.log(xhr);
                toastr.error("Error while launching order sync batch");
            });
        });
    });
</script>