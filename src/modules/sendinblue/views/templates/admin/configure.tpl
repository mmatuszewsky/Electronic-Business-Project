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
<div id="content" class="content-div bootstrap sib-content" style="padding-top: 20px !important;">
  <div class="row justify-content-md-center">
    <div id="" class="col-md-12">
      <div id="" class="col-md-10">
        <div class="tabs js-tabs">
          <ul class="nav nav-tabs js-nav-tabs" id="form-nav" role="tablist" style="width: 781.172px;">
            <li id="tab_step1" class="nav-item active">
              <a href="#step1" role="tab" data-toggle="tab" class="nav-link active"
                 aria-selected="true" style="">{l s='Home' mod='sendinblue'}</a></li>
            <li id="tab_step3" class="nav-item">
              <a href="#sib_sms" role="tab" data-toggle="tab" class="nav-link"
                      {if $apiKeyV3}
                        style="display:block"
                      {else}
                        style="display:none"
                      {/if}
                 aria-selected="false"> {l s='SMS' mod='sendinblue'}</a></li>
          </ul>

        </div>
        <div id="form_content" class="tab-content">

          {include file='./connection_tab.tpl'}


{*          main page end *}
{*  SMS tab start *}
          <div role="tabpanel" class="form-contenttab tab-pane" id="sib_sms">
            <div class="row">
              <div class="col-md-12">

                <div class="form-box panel">
                  <div class="form-box-content">
                    <table width="100%" cellspacing="0" cellpadding="0" class="tableblock">
                      <tbody>

{*                      sms notification panel start *}
                      <tr>
                        <td class="row1" style="border:none; padding-top:10px;">
                          {include file='./sms_notification_panel.tpl'}
                        </td>
                      </tr>
{*                      sms notification panel end *}
                      <tr>
                        <td>

                          <div class="panel">
                            <!-- Tab nav -->
                            <ul class="nav nav-tabs" id="tabOrder">
                              <li class="active">
                                <a href="#sib_sms_order_confirmation_tab" style="">
                                  {l s='Order confirmation' mod='sendinblue'}
                                </a>
                              </li>
                              <li class="">
                                <a href="#sib_sms_shipment_tab" style="outline-width: 0px !important; user-select: auto !important;">
                                  {l s='Shipping confirmation' mod='sendinblue'}
                                </a>
                              </li>
                              <li class="">
                                <a href="#sib_sms_campaign_tab" style="outline-width: 0px !important; user-select: auto !important;">
                                  {l s='Campaign' mod='sendinblue'}
                                </a>
                              </li>
                            </ul>
                            <!-- Tab content -->
                            <div class="tab-content panel">

                              <div class="tab-pane active" id="sib_sms_order_confirmation_tab">
{*                                order confirmation start  *}
                                {include file="./sib_sms_order_confirmation_tab.tpl" title='test' links=array()}
{*                                order confirmation end  *}
                              </div>
                              <!-- Tab documents -->
                              <div class="tab-pane" id="sib_sms_shipment_tab">
{*                                order sib_sms_shipment start  *}
                                {include file="./sib_sms_shipment_tab.tpl"}
{*                                order sib_sms_shipment end  *}
                              </div>

                              <div class="tab-pane" id="sib_sms_campaign_tab">
{*                                order sib_sms_campaign start  *}
                                {include file="./sib_sms_campaign_tab.tpl"}
{*                                order sib_sms_campaign end  *}
                              </div>
                            </div>
                          </div>

                        </td>
                      </tr>
                      </tbody>
                    </table>

                </div>
              </div>
            </div>
          </div>

        </div>
{*  SMS tab end *}
      </div>
    </div>

  </div>
</div>
