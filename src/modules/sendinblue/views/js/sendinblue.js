/**
 * 2007-2022 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2022 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

$(document).ready(function () {

    /*------ Tabs functionality --------*/
    $('#tabOrder a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

    /*------ SMS Credit Notification Starts --------*/
    $('input:radio[name="sms_credit"]').change(function () {
        if ($(this).val() === '1') {
            $('#customer_form').show();
        } else {
            $('#customer_form').hide();
        }
        return false;
    });

    // Setting Update
    $(".sms_credit_cls").click(function () {
        const emailAlert = $(this).attr('emailAlert');
        const limitAlert = $(this).attr('limitAlert');
        const creditAlert = $(this).attr('creditAlert');
        const successAlert = $(this).attr('successAlert');
        const failAlert = $(this).attr('failAlert');
        const sms_credit = $('input:radio[name=sms_credit]:checked').val();
        const email_val = $('input:text[name=sendin_notify_email]').val();
        const limit_val = $('input:text[name=sendin_notify_value]').val();
        const current_val = $("#current_sms_value").text();
        const type = 'sms_credit';

        if (smsSettingValidator(sms_credit, email_val, limit_val, current_val, emailAlert, limitAlert, creditAlert)) {
            $.ajax({
                type: 'POST',
                dataType: 'JSON',
                cache: false,
                async: false,
                url: base_url,
                data: {
                    ajax: true,
                    sms_credit: sms_credit,
                    email_val: email_val,
                    limit_val: limit_val,
                    type: type,
                    action: 'SmsSettings',
                },
                success: function (response) {
                    if (sms_credit === '1') {
                        $('#customer_form').show();
                    } else {
                        $('#customer_form').hide();
                    }

                    if (response.success) {
                        successPopUp(successAlert);
                    } else {
                        failurePopUp(failAlert);
                    }
                }
            });
        }

        return false;
    });

    // Notification Mail
    $(".credit_notify_mail").click(function () {
        const emailAlert = $(this).attr('emailAlert');
        const creditAlert = $(this).attr('creditAlert');
        const successAlert = $(this).attr('successAlert');
        const failAlert = $(this).attr('failAlert');
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            cache: false,
            async: false,
            url: base_url,
            data: {
                ajax: true,
                action: 'SmsNotificationMail',
            },
            success: function (response) {
                if (response.success === true) {
                    successPopUp(successAlert);
                } else if (response.success === "email_error") {
                    failurePopUp(emailAlert);
                } else if (response.success === "validation_error") {
                    failurePopUp(creditAlert);
                } else {
                    failurePopUp(failAlert);
                }
            }
        });

        return false;
    });
    /*------ SMS Credit Notification Ends --------*/

    /*------ SMS Campaign Starts --------*/
    $('input:radio[name="sib_sms_campaign_toggle"]').change(function () {
        if ($(this).val() === '1') {
            $('#sib_sms_campaign').show();
        } else {
            $('#sib_sms_campaign').hide();
        }

        return false;
    });

    // Campaign Setting Update
    $(".sms_campaign_update").click(function () {
        const successAlert = $(this).attr('successAlert');
        const failAlert = $(this).attr('failAlert');
        const campaign_status = $('input:radio[name=sib_sms_campaign_toggle]:checked').val();
        const campaign_type = $('input:radio[name=Sendin_Sms_Choice]:checked').val();
        const type = 'campaign';

        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            cache: false,
            async: false,
            url: base_url,
            data: {
                ajax: true,
                campaign_status: campaign_status,
                campaign_type: campaign_type,
                type: type,
                action: 'SmsSettings',
            },
            success: function (response) {
                if (campaign_status === '1') {
                    $('#sib_sms_campaign').show();
                } else {
                    $('#sib_sms_campaign').hide();
                }
                if (response.success) {
                    successPopUp(successAlert);
                } else {
                    failurePopUp(failAlert);
                }
            }
        });

        return false;
    });

    // Send Test Campaign
    $('#sms_campaign_test_number').keyup(function () {
        let str = $(this).val();
        str = str.replace(/[\D]/, '');
        $('#sms_campaign_test_number').val(str);
    });

    $('.sms_campaign_test_number').keydown(function (event) {
        if (event.keyCode === 32) {
            event.preventDefault();
        }
    });

    $(".sms_campaign_test_submit").click(function () {
        const successAlert = $(this).attr('successAlert');
        const failAlert = $(this).attr('failAlert');
        const senderAlert = $(this).attr('senderAlert');
        const numberAlert = $(this).attr('numberAlert');
        const messageAlert = $(this).attr('messageAlert');
        const sender = $('#sib_sms_campaign_sender').val();
        const message = $('#sib_sms_campaign_message').val();
        const number = $('#sms_campaign_test_number').val();

        if (number === '') {
            alert(numberAlert);
            $('.sms_campaign_test_number').focus();
            return false;
        } else if (sender === '') {
            alert(senderAlert);
            $('.sms_campaign_sender').focus();
            return false;
        } else if (message === '') {
            alert(messageAlert);
            $('.sms_campaign_message').focus();
            return false;
        } else {
            $.ajax({
                type: 'POST',
                dataType: 'JSON',
                cache: false,
                async: false,
                url: base_url,
                data: {
                    ajax: true,
                    sender: sender,
                    message: message,
                    number: number,
                    action: 'SmsTestCampaign',
                },
                success: function (response) {
                    if (response.success) {
                        successPopUp(successAlert);
                    } else {
                        failurePopUp(failAlert);
                    }
                }
            });
            return true;
        }
    });

    // Sendinblue SMS Campaign
    $('#sib_datetimepicker_date').datepicker({dateFormat: 'yy-mm-dd'});

    $('#sib_sms_campaign_sender').keyup(function () {
        let str = $(this).val();
        str = str.replace(/[^a-zA-Z 0-9]+/g, '');
        $('#sib_sms_campaign_sender').val(str);
        $('#sender_campaign_text').text((11 - str.length));
    });

    $('.sms_campaign_sender').keydown(function (event) {
        if (event.keyCode === 32) {
            event.preventDefault();
        }
    });

    $('#single_campaign_phone_number').keyup(function () {
        let str = $(this).val();
        str = str.replace(/[\D]/, '');
        $('#single_campaign_phone_number').val(str);
    });

    $('.sms_campaign_phone_number').keydown(function (event) {
        if (event.keyCode === 32) {
            event.preventDefault();
        }
    });

    $('#sib_sms_campaign_message').keyup(function () {
        let chars = this.value.length,
            messages = Math.ceil(chars / 160),
            remaining = messages * 160 - (chars % (messages * 160) || messages * 160);
        if (remaining === 0) {
            remaining = 160;
        }
        $('#sib_sms_campaign_message_text').text(remaining);
        $('#sib_sms_campaign_message_text_count').text(messages);
    });

    const campaign_type = $('input:radio[name=Sendin_Sms_Choice]:checked').val();
    const phoneNumber = $('#sib_single_phone_number');
    const scheduleOptions = $('#sib_subscribed_campaign_option');
    switch (campaign_type) {
        case '0':
            phoneNumber.show();
            scheduleOptions.hide();
            break;
        case '1':
            phoneNumber.hide();
            scheduleOptions.show();
            break;
    }

    $('input:radio[name="Sendin_Sms_Choice"]').change(function (e) {
        let phoneNumber = $('#sib_single_phone_number');
        let scheduleOptions = $('#sib_subscribed_campaign_option');
        switch ($(this).val()) {
            case '0':
                phoneNumber.show();
                scheduleOptions.hide();
                break;
            case '1':
                phoneNumber.hide();
                scheduleOptions.show();
                break;
        }
        return false;
    });

    //Send Sendinblue SMS Campaign
    $(".sms_campaign_send").click(function () {
        const successAlert = $(this).attr('successAlert');
        const failAlert = $(this).attr('failAlert');
        const numberAlert = $(this).attr('numberAlert');
        const senderAlert = $(this).attr('senderAlert');
        const messageAlert = $(this).attr('messageAlert');
        const dateAlert = $(this).attr('dateAlert');
        const hourAlert = $(this).attr('hourAlert');
        const minuteAlert = $(this).attr('minuteAlert');
        const scheduleAlert = $(this).attr('scheduleAlert');
        const listAlert = $(this).attr('listAlert');
        const contactAlert = $(this).attr('contactAlert');
        const campaign_type = $('input:radio[name=Sendin_Sms_Choice]:checked').val();
        const sender = $('#sib_sms_campaign_sender').val();
        const message = $('#sib_sms_campaign_message').val();
        const number = $('#single_campaign_phone_number').val();
        const date = $('#sib_datetimepicker_date').val();
        const hour = $('#sib_datetimepicker_hour').val();
        const minute = $('#sib_datetimepicker_minute').val();

        if (campaignValidator(sender, message, number, date, hour, minute, campaign_type, senderAlert, numberAlert, messageAlert, dateAlert, hourAlert, minuteAlert)) {
            $.ajax({
                type: 'POST',
                dataType: 'JSON',
                cache: false,
                async: false,
                url: base_url,
                data: {
                    ajax: true,
                    sender: sender,
                    message: message,
                    number: number,
                    date: date,
                    hour: hour,
                    minute: minute,
                    campaign_type: campaign_type,
                    action: 'SendSmsCampaign',
                },
                success: function (response) {
                    if (response.success === "datetime_error") {
                        alert(scheduleAlert);
                    } else if (response.success === "list_error") {
                        alert(listAlert);
                    } else if (response.success === "contact_error") {
                        alert(contactAlert);
                    } else if (response.success === true) {
                        successPopUp(successAlert);
                    } else {
                        failurePopUp(failAlert);
                    }
                }
            });

            return true;
        }

        return false;
    });
    /*------ SMS Campaign Ends --------*/

/*------ Order Toggle --------*/

       $('input:radio[name="sib_sms_order_confirmation_toggle"]').change(function (e) {
        console.log(e.currentTarget.name);
        if ($(this).val() === '1') {
            $('#sib_sms_order_confirmation').show();
        } else {
            $('#sib_sms_order_confirmation').hide();
        }

        return false;
    });
//  shipment tab start
    $('input:radio[name="sib_sms_shipment_confirmation_toggle"]').change(function (e) {
        console.log(e.currentTarget.name);
        if ($(this).val() === '1') {
            $('#sib_sms_shipment_confirmation').show();
        } else {
            $('#sib_sms_shipment_confirmation').hide();
        }

        return false;
    });

//  shipment tab start

     $('#sender_order').keyup(function (e) {
        var str = $(this).val();
        str = str.replace(/[^a-zA-Z 0-9]+/g, '');
        $('#sender_order').val(str);
    });
    $('#sender_shipment').keyup(function (e) {
            var str = $(this).val();
            str = str.replace(/[^a-zA-Z 0-9]+/g, '');
            $('#sender_shipment').val(str);
    });

    var $sender_order = $('#sender_order');
    var $sender_order_val = $sender_order.val();
    if ($sender_order_val) {
        if (isInteger($sender_order_val) || $sender_order_val.length == 0) {
            $("#sender_order").attr('maxlength', '11');
            $('#sender_order_text').text((11 - $sender_order_val.length));
        }
        else {
            $("#sender_order").attr('maxlength', '11');
            $('#sender_order_text').text((11 - $sender_order_val.length));
        }
    }

    $("#sender_order").keydown(function (event) {
        if (event.keyCode == 32) {
        event.preventDefault();
    }
    });

    $('#sender_order_message').keyup(function() {
        var chars = this.value.length,
                messages = Math.ceil(chars / 160),
                remaining = messages * 160 - (chars % (messages * 160) || messages * 160);
        if (remaining == 0)
        {
            remaining = 160.
        }
        $('#sender_order_message_text').text(remaining);
        $('#sender_order_message_text_count').text(messages);

    });

    if (typeof $('#sender_order_message').val() != 'undefined')
    {
        var chars = $('#sender_order_message').val().length,
        messages = Math.ceil(chars / 160),
        remaining = messages * 160 - (chars % (messages * 160) || messages * 160);
        $('#sender_order_message_text').text(remaining);
        $('#sender_order_message_text_count').text(messages);
    }

    $('#sender_shipment').keyup(function() {
        var val = $(this).val();

        if (isInteger(val) || val.length == 0) {
            $("#sender_shipment").attr('maxlength', '11');
            $('#sender_shipment_text').text((11 - val.length));
        }
        else {
            $("#sender_shipment").attr('maxlength', '11');
            $('#sender_shipment_text').text((11 - val.length));
        }
    });

    $('#sender_shipment_message').keyup(function() {

        var chars = this.value.length,
                messages = Math.ceil(chars / 160),
                remaining = messages * 160 - (chars % (messages * 160) || messages * 160);
        if (remaining == 0)
        {
            remaining = 160.
        }
        $('#sender_shipment_message_text').text(remaining);
        $('#sender_shipment_message_text_count').text(messages);
    });

    if (typeof $('#sender_shipment_message').val() != 'undefined')
    {
        var chars = $('#sender_shipment_message').val().length,
                messages = Math.ceil(chars / 160),
                remaining = messages * 160 - (chars % (messages * 160) || messages * 160);

        $('#sender_shipment_message_text').text(remaining);
        $('#sender_shipment_message_text_count').text(messages);
    }

  /*------- Test Order ------*/
    $(document).on('click', '.testOrdersmssend', function () {
        var successmsg = $(this).attr('successmsg');
        var failmsg = $(this).attr('failmsg');
        var senderAlert = $(this).attr('senderAlert');
        var numberAlert = $(this).attr('numberAlert');
        var messageAlert = $(this).attr('messageAlert');

        var sender = $('#sender_order').val();
        var message = $('#sender_order_message').val();
        var number = $('#sib_order_confirmation_test_sms_number').val();

        if (sender === '') {
            alert(senderAlert);
            document.getElementById('sender_order').focus();
            return false;
        } else if (message === '') {
            alert(messageAlert);
            document.getElementById('sender_order_message').focus();
            return false;
        } else if (number === '') {
            alert(numberAlert);
            document.getElementById('sib_order_confirmation_test_sms_number').focus();
            return false;
        }

        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            cache: false,
            async: false,
            url: base_url,
            data: {
                ajax: true,
                Sender_Order: sender,
                Sender_Order_Message: message,
                order_number: number,
                action: 'SendOrderConfTestSms',
            },
            beforeSend: function () {
                $('#ajax-busy').show();
            },
            success: function (msg) {
                $('#ajax-busy').hide();

                if (msg.result === true) {
                    alert(successmsg);
                } else {
                    alert(failmsg);
                }
            }
        });
        return false;
    });
    /*------- Shipment setting save ------*/
    $(document).on('click', '.sender_shipment_save', function () {
        var senderfield = $(this).attr('senderfield');
        var messagefield = $(this).attr('messagefield');
        var successmsg = $(this).attr('successmsg');
        var failmsg = $(this).attr('failmsg');
        var sender = $('#sender_shipment').val();
        var message = $('#sender_shipment_message').val();
        var sms_ship_conf_toggle = $('input:radio[name=sib_sms_shipment_confirmation_toggle]:checked').val();
        if (sender === '') {
            alert(senderfield);
            document.getElementById('sender_shipment').focus();
            return false;
        } else if (message === '') {
            alert(messagefield);
            document.getElementById('sender_shipment_message').focus();
            return false;
        }
        $.ajax({
                type: 'POST',
                dataType: 'JSON',
                cache: false,
                async: false,
                url: base_url,
                data: {
                    ajax: true,
                    Sender_Shipment: sender,
                    Sender_Shipment_Message: message,
                    Api_Sms_Shipment_Status: sms_ship_conf_toggle,
                    action: 'SmsShipmentConfSettings',
                },
                beforeSend: function () {
                    $('#ajax-busy').show();
                },
                success: function (response) {
                    $('#ajax-busy').hide();
                    if (response.result === true) {
                        alert(successmsg);
                    } else {
                        alert(failmsg);
                    }
                }
            });
    });
    /*------- Shipment setting save function end ------*/
    /*------- Test shipment started ------*/
    $(document).on('click', '.testSmsShipped', function () {
        var successmsg = $(this).attr('successmsg');
        var failmsg = $(this).attr('failmsg');
        var senderAlert = $(this).attr('senderAlert');
        var numberAlert = $(this).attr('numberAlert');
        var messageAlert = $(this).attr('messageAlert');

        var sender = $('#sender_shipment').val();
        var message = $('#sender_shipment_message').val();
        var number = $('#sender_shipment_number').val();

        if (sender === '') {
            alert(senderAlert);
            document.getElementById('sender_shipment').focus();
            return false;
        } else if (message === '') {
            alert(messageAlert);
            document.getElementById('sender_shipment_message').focus();
            return false;
        } else if (number === '') {
            alert(numberAlert);
            document.getElementById('sender_shipment_number').focus();
            return false;
        }

        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            cache: false,
            async: false,
            url: base_url,
            data: {
                ajax: true,
                Sender_Shipment: sender,
                Sender_Shipment_Message: message,
                Shipment_Number: number,
                action: 'SendShipmentTestSms',
            },
            beforeSend: function () {
                $('#ajax-busy').show();
            },
            success: function (msg) {
                $('#ajax-busy').hide();

                if (msg.result === true) {
                    alert(successmsg);
                } else {
                    alert(failmsg);
                }
            }
        });
        return false;
    });

    $(document).on('click', '.sender_order_save', function () {
        var senderfield = $(this).attr('senderfield');
        var messagefield = $(this).attr('messagefield');
        var successmsg = $(this).attr('successmsg');
        var failmsg = $(this).attr('failmsg');
        var sms_order_conf_toggle = $('input:radio[name=sib_sms_order_confirmation_toggle]:checked').val();
        var sender = $('#sender_order').val();
        var message = $('#sender_order_message').val();
        if (sender === '') {
            alert(senderfield);
            document.getElementById('sender_order').focus();
            return false;
        } else if (message === '') {
            alert(messagefield);
            document.getElementById('sender_order_message').focus();
            return false;
        }
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            cache: false,
            async: false,
            url: base_url,
            data: {
                ajax: true,
                Sender_Order: sender,
                Sender_Order_Message: message,
                Api_Sms_Order_Status: sms_order_conf_toggle,
                action: 'SmsOrdConfSettings',
            },
            beforeSend: function () {
                $('#ajax-busy').show();
            },
            success: function (response) {
                $('#ajax-busy').hide();
                if (response.result === true) {
                    alert(successmsg);
                } else {
                    alert(failmsg);
                }
            }
        });
    });
// end function

    /*------ ALERT and Messages Starts --------*/
    function successPopUp(str) {
        alert(str);
    }

    function failurePopUp(str) {
        alert(str);
    }

    $('<div id="ajax-busy"/> loading..')
        .css(
            {
                opacity: 0.5,
                position: 'fixed',
                top: 0,
                left: 0,
                width: '100%',
                height: $(window).height() + 'px',
                background: 'white url(../modules/sendinblue/views/img/loader.gif) no-repeat center'
            }).hide().appendTo('body');

    $(document).on('mouseover mouseout', '.toolTip', function (e) {
        const title = $(this).attr('title');
        const offset = $(this).offset();

        if (e.type === 'mouseover') {
            $('body').append(
                '<div id="tipkk" style="top:'
                + offset.top
                + 'px; left:'
                + offset.left
                + 'px; ">' + title
                + '</div>');
            const tipContentHeight = $('#tipkk')
                .height() + 25;
            $('#tipkk').css(
                'top',
                (offset.top - tipContentHeight)
                + 'px');
        } else if (e.type === 'mouseout') {
            $('#tipkk').remove();
        }
    });

    /*------ ALERT and Messages Ends --------*/
});

/*------ SMS Tab Validation Starts --------*/
function isNormalInteger(str) {
    return /^[1-9]\d*$/.test(str);
}

function RegexEmail(email) {
    const emailRegexStr = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    return emailRegexStr.test(email);
}

function smsSettingValidator(sms_credit, email_val, limit_val, current_val, emailAlert, limitAlert, creditAlert) {
    if (sms_credit === '1') {
        if (email_val === "" || RegexEmail(email_val) === false) {
            alert(emailAlert);
            $('.sib_notify_email').focus();
            return false;
        } else if (limit_val <= 0 || isNormalInteger(limit_val) === false) {
            alert(limitAlert);
            $('.sib_notify_value').focus();
            return false;
        } else if (parseInt(current_val) < limit_val) {
            alert(creditAlert);
            $('.sib_notify_value').focus();
            return false;
        } else {
            return true;
        }
    }

    return true;
}

function campaignValidator(sender, message, number, date, hour, minute, campaign_type, senderAlert, numberAlert, messageAlert, dateAlert, hourAlert, minuteAlert) {
    if (sender === '') {
        alert(senderAlert);
        $('.sms_campaign_sender').focus();
        return false;
    } else if (message === '') {
        alert(messageAlert);
        $('.sms_campaign_message').focus();
        return false;
    } else if (campaign_type === '0' && number === '') {
        alert(numberAlert);
        $('.sms_campaign_phone_number').focus();
        return false;
    } else if (campaign_type === '1') {
        if (date === '') {
            alert(dateAlert);
            $('.sib_datetimepicker_date').focus();
            return false;
        } else if (hour === '') {
            alert(hourAlert);
            $('.sib_datetimepicker_hour').focus();
            return false;
        } else if (minute === '') {
            alert(minuteAlert);
            $('.sib_datetimepicker_minute').focus();
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
}

function isInteger(val) {
    var numberRegex = /^[+-]?\d+(\.\d+)?([eE][+-]?\d+)?$/;
    if (numberRegex.test(val)) {
        return true
    }
    return false;
}
/*------ SMS Tab Validation Ends --------*/
