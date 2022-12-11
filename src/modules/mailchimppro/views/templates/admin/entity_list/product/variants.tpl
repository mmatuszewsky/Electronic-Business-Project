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
{foreach $variants as $name => $variant}
    <p class="well">
        <b>
            <a href="{$variant.url|escape:'htmlall':'UTF-8'}" target="_blank" rel="nofollow">
                {$variant.title|escape:'htmlall':'UTF-8'}
            </a>
        </b>
        <small style="color: red">SKU: {$variant.sku|escape:'htmlall':'UTF-8'}</small>
        <small style="color: rebeccapurple">PRICE: {$variant.price|escape:'htmlall':'UTF-8'}</small>
    </p>
{/foreach}