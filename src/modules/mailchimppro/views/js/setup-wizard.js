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
 *
 * @var {Object} toastr
 *
 * @var {String} statePending
 *
 * @var {String} stateRefundedSelect
 *
 * @var {String} stateCancelled
 *
 * @var {String} stateShipped
 *
 * @var {String} statePaid
 *
 * @var {String} itemsPerRequest
 *
 * @var {Array} productIds
 */

var receiveMessage = function (event) {
    if (event.origin !== middlewareUrl) {
        return false;
    }
    if (event.data.hasOwnProperty('token') && event.data.hasOwnProperty('user')) {
        $("#api-key").val(event.data.token + "-" + event.data.user.dc);
        $("#logged-in-as-container").removeClass("hidden").find("b").text(event.data.user.login.login_name);
        $("#oauth2-start").addClass("hidden");
        toastr.success("Authentication was successful");
    }
};
window.addEventListener("message", receiveMessage, true);

$(document).ready(function () {
    var wizard = $('#setup-wizard');
    var apiKeyInput = $('#api-key');
    var listsInput = $('#list-select');
    var statePendingSelect = $('#module-mailchimpproconfig-statuses-for-pending');
    var stateRefundedSelect = $('#module-mailchimpproconfig-statuses-for-refunded');
    var stateCancelledSelect = $('#module-mailchimpproconfig-statuses-for-cancelled');
    var stateShippedSelect = $('#module-mailchimpproconfig-statuses-for-shipped');
    var statePaidSelect = $('#module-mailchimpproconfig-statuses-for-paid');
    wizard.smartWizard({
        useURLhash: false,
        showStepURLhash: false,
        backButtonSupport: false
    });

    $('#oauth2-start').click(function (event) {
        event.preventDefault();
        var windowObjectReference;
        var strWindowFeatures = "height=500,width=500,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes";
        windowObjectReference = window.open(
            middlewareUrl,
            "McAuthMiddleware",
            strWindowFeatures
        );
    });


    wizard.on("leaveStep", function (e, anchorObject, stepNumber, stepDirection) {
        var success = false;
        if (stepNumber === 0) {
            function storeApiKey() {
                var stuff = false;
                $.ajax({
                    url: wizardUrl,
                    type: 'POST',
                    data: {
                        action: 'apiKey',
                        apiKey: apiKeyInput.val()
                    },
                    cache: false,
                    async: false
                }).success(function () {
                    toastr.success("API key saved");
                    stuff = true;
                }).fail(function (xhr, status, error) {
                    var response = JSON.parse(xhr.responseText);
                    toastr.error(response.error);
                    setTimeout(function () {

                    }, 5000);
                    stuff = false;
                });

                return stuff;
            }
            if (apiKeyInput.val().length < 3) {
                toastr.warning("Please authenticate first");
                return false;
            }
            return storeApiKey();
        }
        if (stepNumber === 1) {
            if (listsInput.val() === null) {
                toastr.error('Please select a list');
                success = false;
            } else {
                $.ajax({
                    url: wizardUrl,
                    type: 'POST',
                    data: {
                        action: 'listSelect',
                        listId: listsInput.val()
                    },
                    async: false
                }).success(function () {
                    toastr.success("List ID saved");
                    success = true;
                }).fail(function (xhr, status, error) {
                    var response = JSON.parse(xhr.responseText);
                    toastr.error(response.error);
                    success = false;
                });
            }

            return success;
        }

        if (stepNumber === 2) {
            if (!statePendingSelect.val()) {
                toastr.error("Please select at least one status for pending");

                return false;
            }
            if (!stateRefundedSelect.val()) {
                toastr.error("Please select at least one status for refunded");

                return false;
            }
            if (!stateCancelledSelect.val()) {
                toastr.error("Please select at least one status for cancelled");

                return false;
            }
            if (!stateShippedSelect.val()) {
                toastr.error("Please select at least one status for shipped");

                return false;
            }
            if (!statePaidSelect.val()) {
                toastr.error("Please select at least one status for paid");

                return false;
            }
            var statesData = {};
            statesData[statePending] = $(statePendingSelect).val();
            statesData[stateRefunded] = $(stateRefundedSelect).val();
            statesData[stateCancelled] = $(stateCancelledSelect).val();
            statesData[stateShipped] = $(stateShippedSelect).val();
            statesData[statePaid] = $(statePaidSelect).val();
            $.ajax({
                url: wizardUrl,
                type: 'POST',
                data: {
                    action: 'stateMapping',
                    states: statesData
                },
                async: false
            }).success(function () {
                toastr.success("Order state mapping was saved");
                setStates();
                success = true;
            }).fail(function (xhr, status, error) {
                var response = JSON.parse(xhr.responseText);
                toastr.error(response.error);
                success = false;
            });

            return success;
        }
    });

    wizard.on("showStep", function (e, anchorObject, stepNumber, stepDirection) {
        if (stepNumber === 1) {
            loadLists();
        }
        if (stepNumber === 2) {
            loadStateMapping();
        }
        if (stepNumber === 3) {
            syncStores();
        }
        if (stepNumber === 4) {
            syncProducts();
        }
        if (stepNumber === 5) {
            syncCustomers();
        }
        if (stepNumber === 6) {
            syncPromoCodes();
        }
        if (stepNumber === 7) {
            syncOrders();
        }
    });

    function setStates() {
        $.ajax({
            url: wizardUrl,
            type: 'POST',
            data: {
                action: 'getStates'
            },
        }).success(function (response) {
            success = true;
        }).fail(function (xhr, status, error) {
            var response = JSON.parse(xhr.responseText);
            toastr.error(response.error);
            success = false;
        });
    }

    function loadLists() {
        $.ajax({
            url: wizardUrl,
            type: 'POST',
            data: {
                action: 'getLists'
            },
        }).success(function (response) {
            listsInput
                .find('option')
                .remove()
                .end();
            $.each(response.lists, function (i, item) {
                listsInput.append(new Option(item.name, item.id, null, (response.selectedList === item.id)));
            });

            var container = $('.sw-container.tab-content');
            var spinner = $('#step-2 .spinner');
            spinner.addClass('hidden');
            $("#loading-lists-in-progress").addClass('hidden');
            $("#step-2 #input-container").removeClass('hidden');
            container.css('min-height', container.height() - spinner.height() - 250);

            success = false;
        }).fail(function (xhr, status, error) {
            var response = JSON.parse(xhr.responseText);
            toastr.error(response.error);
            success = false;
        });
    }

    function syncStores() {
        $.ajax({
            url: wizardUrl,
            type: 'POST',
            data: {
                action: 'syncStores'
            },
        }).success(function (response) {
            if (response.result !== undefined) {
                for (var i = 0; i < response.result.length; i++) {
                    var item = response.result[i];
                    if (item.headers.http_code === 200) {
                        var bodyJson = JSON.parse(item.body);
                        toastr.success("Shop synced: " + bodyJson.name);
                    } else {
                        toastr.error("Oups! Something happened");
                        console.log(item);
                    }
                }
            }
            var container = $('.sw-container.tab-content');
            var spinner = $('#step-4 .spinner');
            container.css('min-height', container.height() - spinner.height() - 200);
            $("#shop-sync-in-progress").addClass('hidden');
            $("#shop-sync-completed").removeClass('hidden');
            $("#shop-sync-error").addClass('hidden');
            spinner.addClass('hidden');
            success = true;

        }).fail(function (xhr, status, error) {
            var response = JSON.parse(xhr.responseText);
            console.log(response);
            if (response.result !== undefined) {
                for (var i = 0; i < response.result.length; i++) {
                    console.log(response.result[i]);
                }
            }
            toastr.error(response.error);
            success = false;
        });
    }

    function syncProducts() {
        $("#step-4 .progress .progress-bar").css("width", "0%");
        var productBatch = productIds.chunk(itemsPerRequest);
        for (var i = 0; i < productBatch.length; i++) {
            let current = i;
            $.ajaxq("productSync", {
                url: wizardUrl,
                type: 'POST',
                data: {
                    action: 'syncProducts',
                    items: productBatch[i]
                },
            }).success(function (response) {
                $("#step-5 #result").html(JSON.stringify(response, null, 2));
                var currentSuccess = parseInt(current + 1) * parseInt(itemsPerRequest);
                currentSuccess = (currentSuccess >= productIds.length) ? productIds.length : currentSuccess;
                toastr.success(currentSuccess + " / " + productIds.length + " completed");
                success = true;
            }).fail(function (xhr, status, error) {
                console.log(xhr);
                toastr.error("Error while launching product sync batch");
                success = false;
            }).done(function () {
                $("#step-5 .progress .progress-bar").css("width", (((current + 1) * parseInt(itemsPerRequest) * 100) / productIds.length) + "%");
                if (!$.ajaxq.isRunning("productSync")) {
                    $("#product-sync-in-progress").hide();
                    $("#product-sync-completed").removeClass('hidden');
                }
            });
        }
    }

    function syncPromoCodes() {
        $("#step-7 .progress .progress-bar").css("width", "0%");
        var promoCodeBatch = promoCodeIds.chunk(itemsPerRequest);
        if (promoCodeBatch.length < 1) {
            $("#promo-code-sync-in-progress").hide();
            $("#promo-code-sync-completed").removeClass('hidden');
        }
        for (var i = 0; i < promoCodeBatch.length; i++) {
            let current = i;
            $.ajaxq("promoCodesSync", {
                url: wizardUrl,
                type: 'POST',
                data: {
                    action: 'syncPromoCodes',
                    items: promoCodeBatch[i]
                },
            }).success(function (response) {
                $("#step-7 #result").html(JSON.stringify(response, null, 2));
                var currentSuccess = parseInt(current + 1) * parseInt(itemsPerRequest);
                currentSuccess = (currentSuccess >= promoCodeIds.length) ? promoCodeIds.length : currentSuccess;
                toastr.success(currentSuccess + " / " + promoCodeIds.length + " completed");
                success = true;
            }).fail(function (xhr, status, error) {
                console.log(xhr);
                toastr.error("Error while launching customer sync batch");
                success = false;
            }).done(function () {
                $("#step-7 .progress .progress-bar").css("width", (((current + 1) * parseInt(itemsPerRequest) * 100) / promoCodeIds.length) + "%");
                if (!$.ajaxq.isRunning("promoCodesSync")) {
                    $("#promo-code-sync-in-progress").hide();
                    $("#promo-code-sync-completed").removeClass('hidden');
                }
            });
        }
    }

    function syncCustomers() {
        $("#step-6 .progress .progress-bar").css("width", "0%");
        var customerBatch = customerIds.chunk(itemsPerRequest);
        for (var i = 0; i < customerBatch.length; i++) {
            let current = i;
            $.ajaxq("customerSync", {
                url: wizardUrl,
                type: 'POST',
                data: {
                    action: 'syncCustomers',
                    items: customerBatch[i]
                },
            }).success(function (response) {
                $("#step-6 #result").html(JSON.stringify(response, null, 2));
                var currentSuccess = parseInt(current + 1) * parseInt(itemsPerRequest);
                currentSuccess = (currentSuccess >= customerIds.length) ? customerIds.length : currentSuccess;
                toastr.success(currentSuccess + " / " + customerIds.length + " completed");
                success = true;
            }).fail(function (xhr, status, error) {
                console.log(xhr);
                toastr.error("Error while launching customer sync batch");
                success = false;
            }).done(function () {
                $("#step-6 .progress .progress-bar").css("width", (((current + 1) * parseInt(itemsPerRequest) * 100) / customerIds.length) + "%");
                if (!$.ajaxq.isRunning("customerSync")) {
                    $("#customer-sync-in-progress").hide();
                    $("#customer-sync-completed").removeClass('hidden');
                }
            });
        }
    }

    function syncOrders() {
        $("#step-8 .progress .progress-bar").css("width", "0%");
        var ordersBatch = orderIds.chunk(itemsPerRequest);
        if (ordersBatch.length < 1) {
            $("#order-sync-in-progress").hide();
            $("#order-sync-completed").removeClass('hidden');
        }
        for (var i = 0; i < ordersBatch.length; i++) {
            let current = i;
            $.ajaxq("orderSync", {
                url: wizardUrl,
                type: 'POST',
                data: {
                    action: 'syncOrders',
                    items: ordersBatch[i]
                },
            }).success(function (response) {
                $("#step-8 #result").html(JSON.stringify(response, null, 2));
                var currentSuccess = parseInt(current + 1) * parseInt(itemsPerRequest);
                currentSuccess = (currentSuccess >= orderIds.length) ? orderIds.length : currentSuccess;
                toastr.success(currentSuccess + " / " + orderIds.length + " completed");
                success = true;
            }).fail(function (xhr, status, error) {
                console.log(xhr);
                toastr.error("Error while launching order sync batch");
                success = false;
            }).done(function () {
                $("#step-8 .progress .progress-bar").css("width", (((current + 1) * parseInt(itemsPerRequest) * 100) / orderIds.length) + "%");
                if (!$.ajaxq.isRunning("orderSync")) {
                    $("#order-sync-in-progress").hide();
                    $("#order-sync-completed").removeClass('hidden');
                }
            });
        }
    }

    function loadStateMapping() {
        $.ajax({
            url: wizardUrl,
            type: 'POST',
            data: {
                action: 'getStates'
            },
        }).success(function (response) {
            var pending = JSON.parse(response.mapping[statePending]);
            var refunded = JSON.parse(response.mapping[stateRefunded]);
            var cancelled = JSON.parse(response.mapping[stateCancelled]);
            var shipped = JSON.parse(response.mapping[stateShipped]);
            var paid = JSON.parse(response.mapping[statePaid]);
            if (!pending) {pending = [];}
            if (!refunded) {refunded = [];}
            if (!cancelled) {cancelled = [];}
            if (!shipped) {shipped = [];}
            if (!paid) {paid = [];}
            $.each(response.states, function (i, item) {
                statePendingSelect.append(new Option(item.name, item.id_order_state, null, pending.includes(item.id_order_state)));
                stateRefundedSelect.append(new Option(item.name, item.id_order_state, null, refunded.includes(item.id_order_state)));
                stateCancelledSelect.append(new Option(item.name, item.id_order_state, null, cancelled.includes(item.id_order_state)));
                stateShippedSelect.append(new Option(item.name, item.id_order_state, null, shipped.includes(item.id_order_state)));
                statePaidSelect.append(new Option(item.name, item.id_order_state, null, paid.includes(item.id_order_state)));
            });

            statePendingSelect.attr('size', response.states.length);
            stateRefundedSelect.attr('size', response.states.length);
            stateCancelledSelect.attr('size', response.states.length);
            stateShippedSelect.attr('size', response.states.length);
            statePaidSelect.attr('size', response.states.length);

            var container = $('.sw-container.tab-content');
            var spinner = $('#step-3 .spinner');
            spinner.addClass('hidden');
            $("#loading-states-in-progress").addClass('hidden');
            $("#step-3 #status-inputs-container").removeClass('hidden');
            container.css('min-height', container.height() - spinner.height() - 250);

            success = true;
        }).fail(function (xhr, status, error) {
            var response = JSON.parse(xhr.responseText);
            toastr.error(response.error);
            success = false;
        });
    }
});