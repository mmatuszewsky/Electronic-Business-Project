{**
* 2007-2022 Sendinblue
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to contact@sendinblue.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    Sendinblue <contact@sendinblue.com>
* @copyright 2007-2022 Sendinblue
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
* International Registered Trademark & Property of Sendinblue
*}
<div class="row">

    <div class="col-lg-12 panel">

        <form id="" class="defaultForm form-horizontal AdminCustomers"
              action="{$formUrl}"
              method="POST" enctype="multipart/form-data" novalidate="" _lpchecked="1">
            {*activate sms campaign start *}
            <div class="form-group">
                <div class="radio">
                    <label>
                        <input type="radio" name="sib_sms_campaign_toggle"
                               value="0" {(!$Api_Sms_Campaign_Status) ? 'checked="checked"' : ''}>
                        {l s='Disable' mod='sendinblue'}
                    </label>
                    <label>
                        <input type="radio" name="sib_sms_campaign_toggle"
                               value="1" {($Api_Sms_Campaign_Status) ? 'checked="checked"' : ''}>
                        {l s='Enable' mod='sendinblue'}
                    </label>
                </div>
            </div>
            {* activate sms campaign end *}

            <div id="sib_sms_campaign" style=" {(!$Api_Sms_Campaign_Status) ? 'display: none;' : ''}">
                <div class="form-wrapper">

                    <div class="form-group">
                        <div class="radio">
                            <label>
                                <input name="Sendin_Sms_Choice" id="r1_Sendin_Sms_Choice" type="radio"
                                       value="0" {if $Sms_Campaign_Type == 0} checked="checked" {/if}>
                                {l s='A single contact' mod='sendinblue'}
                            </label>
                            <label>
                                <input name="Sendin_Sms_Choice" id="r3_Sendin_Sms_Choice"
                                       class="Sendin_Sms_Choice radio_spaceing" type="radio"
                                       value="1" {if $Sms_Campaign_Type == 1} checked="checked" {/if}>
                                {l s='Only subscribed customers' mod='sendinblue'}
                            </label>
                        </div>
                    </div>

                    <div class="form-group" id="sib_single_phone_number">
                        <label class="control-label col-lg-4" for="sib_campaign_phone_number">
                            {l s='Phone number of the contact' mod='sendinblue'}
                        </label>
                        <div class="col-lg-4">
                            <input type="text" name="single_campaign_phone_number" id="single_campaign_phone_number"
                                   class="sms_campaign_phone_number input-text"
                                   autocomplete="off" maxlength="17"
                                   value=""><span class="toolTip"
                                                  title="{l s=' The phone number should be in this form: 0033663309741 for this France mobile 06 63 30 97 41 (0033 is France prefix)' mod='sendinblue'}">&nbsp;</span>
                        </div>
                    </div>

                    <div class="form-group" id="sib_subscribed_campaign_option">
                        <label class="control-label col-lg-4" for="sib_datetimepicker">
                            {l s='Schedule your sms campaign' mod='sendinblue'}
                        </label>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <div class="col-lg-4">
                                    <input name="sib_datetimepicker_date" id="sib_datetimepicker_date" type="date"
                                           value=""
                                           class="sib_datetimepicker_date hasDatepicker" data-provide="datepicker"/>
                                </div>
                                <div class="col-lg-3">
                                    <select name="hour" id="sib_datetimepicker_hour"
                                            class="sib_datetimepicker_hour">
                                        <option value=''>{l s='Hour' mod='sendinblue'}</option>
                                        {for $counter=0 to 23}
                                            <option value={$counter}>{$counter}</option>
                                        {/for}
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    <select name="minute" id="sib_datetimepicker_minute"
                                            class="sib_datetimepicker_minute">
                                        <option value=''>{l s='Minute' mod='sendinblue'}</option>
                                        {for $counter=0 to 55 step 5}
                                            <option value={$counter}>{$counter}</option>
                                        {/for}
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4" for="sib_sms_campaign_sender">
                            {l s='Sender' mod='sendinblue'}
                        </label>
                        <div class="col-lg-4">
                            <input type="text" name="sib_sms_campaign_sender" id="sib_sms_campaign_sender"
                                   class="sms_campaign_sender input-text"
                                   autocomplete="off" maxlength="11" value="">
                            <span class="toolTip"
                                  title="{l s='This field allows you to customize the SMS sender. The number of characters is limited to 11 alphanumeric characters. You can´t configure your Sender with a phone number.' mod='sendinblue'}">&nbsp;</span>
                            <div class="hintmsg"><em>{l s='Number of characters left: ' mod='sendinblue'}<span
                                            id="sender_campaign_text">11</span></em></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4" for="sib_sms_campaign_message">
                            {l s='Message' mod='sendinblue'}
                        </label>

                        <div class="col-lg-4">
                            <textarea name="sib_sms_campaign_message" id="sib_sms_campaign_message"
                                      cols="45" rows="5" class="sms_campaign_message"
                                      style="resize: both"></textarea>
                            <span style="line-height:16px; margin-bottom:15px; width:333px;">{l s='Number of SMS used: ' mod='sendinblue'}<span
                                        id="sib_sms_campaign_message_text_count">0</span>
                                             <div class="hintmsg"><em>{l s='Number of characters left: ' mod='sendinblue'}</em><span
                                                         id="sib_sms_campaign_message_text">160</span></div></span>
                            <div class="hintmsg">
                                <em>{l s='Attention line break is counted as a single character.' mod='sendinblue'}</em>
                            </div>
                            <br>
                            <div class="hintmsg">
                                <em>{l s='If you want to personalize the SMS, you can use the variables below:' mod='sendinblue'}</em>
                            </div>
                            <div class="hintmsg"><em>{l s='- For civility use {civility}' mod='sendinblue'}</em></div>
                            <div class="hintmsg"><em>{l s='- For first name use {first_name}' mod='sendinblue'}</em>
                            </div>
                            <div class="hintmsg"><em>{l s='- For last name use {last_name}' mod='sendinblue'}</em></div>
                            <button type="button" style="margin-top:10px;"
                                    class="btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate sms_campaign_send"
                                    value="{l s='Send the campaign' mod='sendinblue'}"
                                    name="sms_campaign_send"
                                    senderAlert="{l s='Please fill the sender field' mod='sendinblue'}"
                                    numberAlert="{l s='Please fill the phone number field' mod='sendinblue'}"
                                    messageAlert="{l s='Please fill the message field' mod='sendinblue'}"
                                    dateAlert="{l s='Please fill the scheduled date fields' mod='sendinblue'}"
                                    hourAlert="{l s='Please fill the scheduled hour fields' mod='sendinblue'}"
                                    minuteAlert="{l s='Please fill the scheduled minute fields' mod='sendinblue'}"
                                    scheduleAlert="{l s='Scheduled date may not be prior to the current date' mod='sendinblue'}"
                                    listAlert="{l s='Please first select the list from the plugin settings' mod='sendinblue'}"
                                    contactAlert="{l s='SMS has not been sent because the number is not registered in your shops customer base' mod='sendinblue'}"
                                    successAlert="{l s='Campaign message has been sent successfully' mod='sendinblue'}"
                                    failAlert="{l s='Campaign message has not been sent successfully' mod='sendinblue'}">{l s='Send the campaign' mod='sendinblue'}
                            </button>
                        </div>
                        <span class="toolTip" style="padding-left: 5px;"
                              title="{l s=' Create the content of your SMS with the limit of 160-character.Beyond 160 characters, it will be counted as a second SMS. Thus, if you write  SMS of 240 characters, it will be recorded using two SMS.' mod='sendinblue'}">&nbsp;</span>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4" for="sib_sms_campaign_test">
                            {l s='Send a Test SMS' mod='sendinblue'}
                        </label>
                        <div class="col-lg-4">
                            <div class="">
                                <input type="text" name="sms_campaign_test_number"
                                       id="sms_campaign_test_number" class="sms_campaign_test_number input-text"
                                       autocomplete="off"
                                       maxlength="17" value=""/>
                            </div>
                            <br>
                            <div class="hintmsg"><em>Sending a test SMS will be deducted from your SMS credits</em>
                            </div>
                        </div>

                        <button name="sms_campaign_test_submit"
                                class="btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate sms_campaign_test_submit"
                                id="sms_campaign_test_submit" type="button" value="{l s='Send' mod='sendinblue'}"
                                senderAlert="{l s='Please fill the sender field' mod='sendinblue'}"
                                numberAlert="{l s='Please fill the test phone number field' mod='sendinblue'}"
                                messageAlert="{l s='Please fill the message field' mod='sendinblue'}"
                                successAlert="{l s='Test SMS message has been sent successfully' mod='sendinblue'}"
                                failAlert="{l s='Test SMS message has not been sent successfully' mod='sendinblue'}">{l s='Send' mod='sendinblue'}
                        </button>
                        <span class="toolTip"
                              title="{l s=' The phone number should be in this form: 0033663309741 for this France mobile 06 63 30 97 41 (0033 is France prefix)' mod='sendinblue'}">&nbsp;</span>
                    </div>
                </div><!-- /.form-wrapper -->
            </div>
        </form>
        <div>
            <button type="submit" value="{l s='Update' mod='sendinblue'}" id="customer_form_submit_btn"
                    name="submitAddcustomer"
                    class="btn btn-default pull-right sms_campaign_update"
                    successAlert="{l s='Settings updated' mod='sendinblue'}"
                    failAlert="{l s='Update failed' mod='sendinblue'}">
                <i class="process-icon-save"></i> {l s='Update' mod='sendinblue'}
            </button>
        </div>

    </div>

</div>
