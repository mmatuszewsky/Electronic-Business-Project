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
<div role="tabpanel" class="form-contenttab tab-pane active" id="step1">
  <div class="row">
    <div class="col-md-12">


      <div class="panel" id="about-sendinblue">
        <div class="form-box">
          <img src="../modules/sendinblue/views/img/sendinblue.png"/>
          <h2 class="heading">
          </h2>
          <div class="form-box-content">
            <div class="contact-box">
              <h2 style="color:#044A75;">{l s='Contact Sendinblue Team' mod='sendinblue'}</h2>
              <div style="clear: both;"></div>
              <p>
                <a href="https://addons.prestashop.com/en/contact-us?id_product=8300"
                   target="_blank"
                   style="color:#044A75;">{l s=' Click here' mod='sendinblue'}</a>
              </p>
              <p style="padding-top:20px;">
                <b>{l s='For further informations, please visit our website:' mod='sendinblue'}</b><br/><a
                        href="https://www.sendinblue.com?utm_source=prestashop_plugin&utm_medium=plugin&utm_campaign=module_link"
                        target="_blank"
                        style="color:#044A75;">https://www.sendinblue.com</a></p>
            </div>
            <p class="sub-heading">{l s='With Sendinblue, you can build and grow relationships with your contacts and customers. ' mod='sendinblue'}</p>
            <ul class="listt">
              <li>{l s=' Automatically sync your Prestashop opt-in contacts with your Sendinblue Account' mod='sendinblue'}</li>
              <li>{l s=' Easily create engaging, mobile-friendly emails' mod='sendinblue'}</li>
              <li>{l s=' Schedule email and text message campaigns' mod='sendinblue'}</li>
              <li>{l s=' Manage transactional emails with better deliverability, custom templates, and real-time analytics' mod='sendinblue'}</li>
            </ul>
            <p class="sub-heading">{l s='Why use Sendinblue ?' mod='sendinblue'}</p>
            <ul class="listt">
              <li>{l s=' Reach the inbox with optimized deliverability' mod='sendinblue'}</li>
              <li>{l s=' Unbeatable pricing - the best value in email marketing' mod='sendinblue'}</li>
              <li>{l s=' Friendly customer support by phone and email' mod='sendinblue'}</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel-heading"><i class="icon-cogs" style="margin-right: 10px"></i>{l s='Integration' mod='sendinblue'}</div>
        <p class="sub-heading">{l s='Before making connection, remember these points:' mod='sendinblue'}</p>
        <div class="col-md-12">
          <ul class="listt">
            <li>{l s=' Internet service should be available and shop should be publicly accessible from the browser. (without login credentials)' mod='sendinblue'}</li>
            <li>{l s=' Check that URL rewriting is available on your server, as it’s required by Prestashop’s webservice.' mod='sendinblue'}</li>
            <li>{l s=' Please whitelist the following Sendinblue domain: https://plugin.sendinblue.com/integrations/api/.' mod='sendinblue'}</li>
            <li>{l s=' Please whitelist all the IPs comprised in the range from 185.107.232.0/24 and 1.179.112.0/20.' mod='sendinblue'}</li>
            <li>{l s=' Local development environment will not connected.' mod='sendinblue'}</li>
            <li>{l s=' Shop should be secure with SSL.' mod='sendinblue'}</li>
            <li>{l s=' Please clear shop cache.' mod='sendinblue'}</li>
          </ul>
        </div>
        <p><b>{l s='Note:' mod='sendinblue'}</b>{l s=' For the above points, contact your hosting provider or developer.' mod='sendinblue'}</p>
        <div class="form-wrapper row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="form-group">
              <a href="{$connection_url}" target="_blank" class="btn btn-primary btn-block">
                {if $userConnectionId}
                  {l s='Settings' mod='sendinblue'}
                {else}
                  {l s='Connect' mod='sendinblue'}
                {/if}
              </a>
            </div>
          </div>
          <div class="col-md-4"></div>

        </div>
      </div>

    </div>
  </div>
</div>
