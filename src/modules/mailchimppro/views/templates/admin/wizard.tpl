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
<div id="setup-wizard">
    <ul>
        <li>
            <a href="#step-1">{l s='Log-in to Mailchimp' mod='mailchimppro'}</a>
        </li>
        <li>
            <a href="#step-2">{l s='Select list' mod='mailchimppro'}</a>
        </li>
        <li>
            <a href="#step-3">
                {l s='Order status mapping' mod='mailchimppro'}
            </a>
        </li>
        <li>
            <a href="#step-4">
                {l s='Shop sync' mod='mailchimppro'}
            </a>
        </li>
        <li>
            <a href="#step-5">
                {l s='Product sync' mod='mailchimppro'}
            </a>
        </li>
        <li>
            <a href="#step-6">
                {l s='Customer sync' mod='mailchimppro'}
            </a>
        </li>
        <li>
            <a href="#step-7">
                {l s='promo-code sync' mod='mailchimppro'}
            </a>
        </li>
        <li>
            <a href="#step-8">
                {l s='Order sync' mod='mailchimppro'}
            </a>
        </li>
    </ul>

    <div>
        <div id="step-1">
            {include file="./wizard/step-1.tpl"}
        </div>
        <div id="step-2">
            {include file="./wizard/step-2.tpl"}
        </div>
        <div id="step-3">
            {include file="./wizard/step-3.tpl"}
        </div>
        <div id="step-4" class="text-center">
            {include file="./wizard/step-4.tpl"}
        </div>
        <div id="step-5" class="text-center">
            {include file="./wizard/step-5.tpl"}
        </div>
        <div id="step-6" class="text-center">
            {include file="./wizard/step-6.tpl"}
        </div>
        <div id="step-7" class="text-center">
            {include file="./wizard/step-7.tpl"}
        </div>
        <div id="step-8" class="text-center">
            {include file="./wizard/step-8.tpl"}
        </div>
    </div>
</div>