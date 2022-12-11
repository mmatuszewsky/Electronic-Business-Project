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
    {*                         activate sms count notification  start *}
    <div class="" id="">
      <div class="radio">
        <label>
          <input type="radio" name="sib_sms_order_confirmation_toggle" value="0" {(!$Api_Sms_Order_Status) ? 'checked="checked"' : ''}>
          {l s='Disable' mod='sendinblue'}
        </label>
        <label>
          <input type="radio" name="sib_sms_order_confirmation_toggle" value="1" {($Api_Sms_Order_Status) ? 'checked="checked"' : ''}>
          {l s='Enable' mod='sendinblue'}
        </label>
      </div>
    </div>
    {* activate sms count notification  end *}
    <form id="sib_sms_order_confirmation" class="defaultForm form-horizontal AdminCustomers" style="{(!$Api_Sms_Order_Status) ? 'display: none;' : ''}" action="index.php?controller=AdminCustomers&amp;back=%2Fadminlogin%2Findex.php%3Fcontroller%3DAdminCustomers%26id_customer%3D1%26viewcustomer%26token%3D00be965ec4afbc9ae7d04c3e119a2ecc&amp;token=00be965ec4afbc9ae7d04c3e119a2ecc" method="post" enctype="multipart/form-data" novalidate="" _lpchecked="1">
      <div class="" id="fieldset_0">
        <div class="form-wrapper">

          <div class="form-group">
            <label class="control-label col-lg-3" for="email">
              {l s='Sender' mod='sendinblue'}
            </label>
            <div class="col-lg-4">
                <input type="text" name="sender_order" id="sender_order" class="input-text" value="{$Sender_Order|escape:'htmlall':'UTF-8'}" autocomplete="off" maxlength="11">
                <span class="toolTip" title="{l s='This field allows you to customize the SMS sender. The number of characters is limited to 11 alphanumeric characters. You can´t configure your Sender with a phone number.' mod='sendinblue'}">&nbsp;</span>
              <div class="hintmsg"><em>Number of characters left: <span id="sender_order_text">11</span></em></div>            </div>
          </div>

          <div class="form-group">

            <label class="control-label col-lg-3" for="sender_order_message">
                                              <span>
                                                {l s='Message' mod='sendinblue'}
                                              </span>
            </label>

            <div class="col-lg-4">
              <textarea name="sender_order_message" id="sender_order_message" cols="45" rows="5" class="textarea_bx" style="resize: both">{$Sender_Order_Message|escape:'htmlall':'UTF-8'}</textarea>
              <div class="clear"></div>
              <span style="line-height:16px; margin-bottom:15px; width:333px;">{l s='Number of SMS used: ' mod='sendinblue'}<span id="sender_order_message_text_count">0</span>
                                             <div class="hintmsg"><em>{l s='Number of characters left: ' mod='sendinblue'}</em><span id="sender_order_message_text">160</span></div>
                                             <div class="hintmsg"><em>{l s='Attention line break is counted as a single character.' mod='sendinblue'}</em>
                                             </div><br>
                                               <div class="hintmsg"><em>{l s='If you want to personalize the SMS, you can use the variables below:' mod='sendinblue'}</em></div>
                                               <div class="hintmsg"><em>{l s='- For civility use {civility}' mod='sendinblue'}</em></div>
                                               <div class="hintmsg"><em>{l s='- For first name use {first_name}' mod='sendinblue'}</em></div>
                                               <div class="hintmsg"><em>{l s='- For last name use {last_name}' mod='sendinblue'}</em></div>
                                               <div class="hintmsg"><em>{l s='- For order reference id use {order_reference}' mod='sendinblue'}</em></div>
                                               <div class="hintmsg"><em>{l s='- For order price use {order_price}' mod='sendinblue'}</em></div>
                                               <div class="hintmsg"><em>{l s='- For order date use {order_date}' mod='sendinblue'}</em></div>
            </div>
            <span class="toolTip" style="margin-top:35px;padding-left: 4px;" title="{l s=' Create the content of your SMS with the limit of 160-character.Beyond 160 characters, it will be counted as a second SMS. Thus, if you write  SMS of 240 characters, it will be recorded using two SMS.' mod='sendinblue'}">&nbsp;</span>
          </div>


          <div class="form-group">
            <label class="control-label col-lg-3" for="sib_order_confirmation_test_sms_number">
              {l s='Send a Test SMS' mod='sendinblue'}
            </label>
            <button type="button" class="btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate testOrdersmssend" successmsg="{l s='Test SMS message has been sent successfully' mod='sendinblue'}"  failmsg="{l s='Test SMS message has not been sent successfully' mod='sendinblue'}"
            senderAlert="{l s='Please fill the sender field' mod='sendinblue'}"
            numberAlert="{l s='Please fill the phone number field' mod='sendinblue'}"
            messageAlert="{l s='Please fill the message field' mod='sendinblue'}"
            >{l s='Send' mod='sendinblue'}</button>
            <span class="toolTip" title="{l s=' The phone number should be in this form: 0033663309741 for this France mobile 06 63 30 97 41 (0033 is France prefix)' mod='sendinblue'}">&nbsp;</span>
            <div class="col-lg-4">
              <div class="">
                <input type="text" name="sib_order_confirmation_test_sms_number" id="sib_order_confirmation_test_sms_number" class="" autocomplete="off" >
              </div>
              <em>{l s='Sending a test SMS will be deducted from your SMS credits' mod='sendinblue'}</em>
            </div>
          </div>

        </div><!-- /.form-wrapper -->
      </div>
    </form>


    <div>
      <button type="submit" value="{l s='Update' mod='sendinblue'}" id="customer_form_submit_btn" name="sender_order_save" class="btn btn-default pull-right sender_order_save" senderfield="{l s='Please fill the sender field' mod='sendinblue'}"  messagefield="{l s='Please fill the message field' mod='sendinblue'}" successmsg="{l s='Settings updated' mod='sendinblue'}"  failmsg="{l s='Update failed' mod='sendinblue'}">
        <i class="process-icon-save"></i> {l s='Update' mod='sendinblue'}
      </button>
    </div>

  </div>

</div>
