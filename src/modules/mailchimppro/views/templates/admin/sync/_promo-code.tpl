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
<div class="panel" id="promo-code-sync">
    <div class="panel-heading">
        {l s='Promo code sync' mod='mailchimppro'}
    </div>
    <div class="panel-body">
        <form>
            <h4>
                {l s='Connect your Prestashop to Mailchimp to take advantage of powerful reporting and personalization features and to learn more about your customers.' mod='mailchimppro'}
            </h4>
            <br>
            {include file="./_radio-btns.tpl"}
            <pre id="result">
        </pre>
        </form>
    </div>
    <div class="panel-footer">
        <a class="btn btn-primary pull-right submit">
            <i class="process-icon-export"></i>
            {l s='Promo code sync' mod='mailchimppro'}
        </a>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#promo-code-sync .submit").click(function () {
            $.ajax({
                url: syncUrl,
                type: 'POST',
                data: {
                    action: 'promoCodeSync',
                    method: $('#promo-code-sync input[name=method]:checked').val()
                },
            }).success(function (response) {
                $("#promo-code-sync #result").html(JSON.stringify(response, null, 2));
                toastr.success("Store sync batch started");
            }).fail(function (xhr, status, error) {
                console.log(xhr);
                toastr.error("Error while launching promo code sync batch");
            });
        });
    });
</script>