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
        {*activate sms count notification start *}
        <div class="" id="sms_count_notification_toggle">
            <div>
                {if $currentSmsCredits >= $Notify_Value}
                    <span style="margin-bottom:10px; color: #585A69;">{l s='Currently you have ' mod='sendinblue'}<strong
                                style="color: #000000;" id="current_sms_value">
                            {$currentSmsCredits|floatval} </strong>{l s='credits sms. To buy more credits, please click' mod='sendinblue'}
                        <a target="_blank"
                           href="{l s='https://www.sendinblue.com/pricing?utm_source=prestashop_plugin&utm_medium=plugin&utm_campaign=module_link' mod='sendinblue'}">
                            {l s='here' mod='sendinblue'}</a>.</span>
                {elseif ($Api_Sms_Credit)}
                    <span style="margin-bottom:10px; color: #585A69;">{l s='Currently you have' mod='sendinblue'} <strong
                                style="color:#F00;" id="current_sms_value">
                            {$currentSmsCredits|floatval} </strong> {l s='credits sms. To buy more credits, please click' mod='sendinblue'}
                        <a target="_blank"
                           href="{l s='https://www.sendinblue.com/pricing' mod='sendinblue'}">{l s='here' mod='sendinblue'}</a>.</span>
                {else}
                    <span style="margin-bottom:10px; color: #585A69;">{l s='Currently you have ' mod='sendinblue'}<strong
                                style="color: #000000;" id="current_sms_value">
                            {$currentSmsCredits|floatval} </strong> {l s='credits sms. To buy more credits, please click' mod='sendinblue'}
                        <a target="_blank"
                           href="{l s='https://www.sendinblue.com/pricing?utm_source=prestashop_plugin&utm_medium=plugin&utm_campaign=module_link' mod='sendinblue'}">
                            {l s='here' mod='sendinblue'}</a>.</span>
                {/if}
            </div>
            <div>
                <label>{l s='You want to be notified by e-mail when you do not have enough credits?' mod='sendinblue'}</label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="sms_credit" value="0"
                            {(!$Api_Sms_Credit) ? 'checked="checked"' : ''} class="sms_credit"/>
                    {l s='Disable' mod='sendinblue'}
                </label>
                <label>
                    <input type="radio" name="sms_credit" value="1"
                            {($Api_Sms_Credit) ? 'checked="checked"' : ''} class="sms_credit"/>
                    {l s='Enable' mod='sendinblue'}
                </label>
            </div>
        </div>
        {*activate sms count notification end *}
        <form id="customer_form" class="defaultForm form-horizontal AdminCustomers"
                {if isset($Api_Sms_Credit) && $Api_Sms_Credit == 1} style="display:block"
                {else} style="display:none"
                {/if} action="{$formUrl}"
              method="POST" enctype="multipart/form-data" novalidate="" _lpchecked="1" name="notify_sms_mail_form">
            <div class="" id="fieldset_0">
                <div class="form-wrapper">
                    <div class="form-group">
                        <label class="control-label col-lg-3" for="email">{l s='E-Mail' mod='sendinblue'}</label>
                        <div class="col-lg-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-envelope-o"></i></span>
                                <input type="text"
                                       name="sendin_notify_email"
                                       id="sendin_notify_email"
                                       class="sib_notify_email input-text"
                                       autocomplete="off"
                                       value="{$Notify_Email}"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-3" for="count">{l s='Limit' mod='sendinblue'}</label>
                        <div class="col-lg-4">
                            <input type="text" name="sendin_notify_value"
                                   id="sendin_notify_value" class="sib_notify_value input-text"
                                   autocomplete="off"
                                   value="{$Notify_Value}"><span class="toolTip" style="margin-top: 4px;"
                                                                 title="{l s='Alert threshold for remaining credits' mod='sendinblue'}"></span>
                        </div>
                    </div>
                    <p>{l s='Please click' mod='sendinblue'}
                        <a href="#" class="credit_notify_mail"
                           emailAlert="{l s='Email notification already sent' mod='sendinblue'}"
                           creditAlert="{l s='Please check the current credits and limit value' mod='sendinblue'}"
                           successAlert="{l s='Email notification sent' mod='sendinblue'}"
                           failAlert="{l s='Email notification not sent' mod='sendinblue'}">{l s=' here' mod='sendinblue'}</a>
                        {l s='to get the email notification.' mod='sendinblue'}
                    </p>
                </div><!-- /.form-wrapper -->
            </div>
        </form>

        <div>
            <button type="submit" value="{l s='Update' mod='sendinblue'}" id="customer_form_submit_btn"
                    class="button btn btn-default pull-right sms_credit_cls"
                    emailAlert="{l s='Please provide valid email' mod='sendinblue'}"
                    limitAlert="{l s='Please provide valid limit greater than 0' mod='sendinblue'}"
                    creditAlert="{l s='Limit value is greater than current credits' mod='sendinblue'}"
                    successAlert="{l s='Settings updated' mod='sendinblue'}"
                    failAlert="{l s='Update failed' mod='sendinblue'}">
                <i class="process-icon-save"></i> {l s='Update' mod='sendinblue'}
            </button>
        </div>
    </div>

</div>
