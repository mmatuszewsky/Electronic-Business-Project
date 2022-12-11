/**
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
 */
$(document).ready(function () {
    $("#product-sync .submit").click(function () {
        $("#product-sync").addClass("sync-is-running");
        $("#product-sync .progress").removeClass("hidden");
        $("#product-sync .progress .progress-bar").css("width", "0%");
        var productBatch = productIds.chunk(itemsPerRequest);
        for (var i = 0; i < productBatch.length; i++) {
            let current = i;
            $.ajaxq("productSync", {
                url: syncUrl,
                type: 'POST',
                data: {
                    action: 'productSync',
                    method: $('#product-sync input[name=method]:checked').val(),
                    syncMode: $('#product-sync input[name=syncMode]:checked').val(),
                    items: productBatch[i]
                },
            }).success(function (response) {
                $("#product-sync #result").html(JSON.stringify(response, null, 2));
                toastr.success(parseInt(current + 1) * parseInt(itemsPerRequest) + " / " + productIds.length + " completed");
            }).fail(function (xhr, status, error) {
                console.log(xhr);
                toastr.error("Error while launching product sync batch");
            }).done(function () {
                $("#product-sync .progress .progress-bar").css("width", (((current + 1) * parseInt(itemsPerRequest) * 100) / productIds.length) + "%");
            });
        }
        $("#product-sync").removeClass("sync-is-running");
    });
});