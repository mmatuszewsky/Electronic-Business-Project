{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name='product_miniature_item'}
    <article class="product-miniature js-product-miniature product-miniature-{$product.id_product}" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
        <div class="thumbnail-container">
            {block name='product_thumbnail'}

                <div class="product_thumbnail_content">

                    {hook h='displayImagesList' product=$product}
                    <a href="{$product.url}" class="thumbnail product-thumbnail">
                        <img src = "{$product.cover.bySize.home_default.url}" alt = "{$product.cover.legend}" data-full-size-image-url = "{$product.cover.large.url}" >
                    </a>
                    {block name='product_flags'}
                        <ul class="product-flags-list">
                            {foreach from=$product.flags item=flag}
                                {if $flag.type !== 'discount'}
                                    <li class="{$flag.type}">{$flag.label}</li>
                                {/if}
                            {/foreach}
                            {if $product.has_discount}
                                {if $product.discount_type === 'percentage'}
                                    <li class="discount">{$product.discount_percentage}</li>
                                {/if}
                            {/if}
                        </ul>
                    {/block}
                </div>
            {/block}




            <div class="highlighted-informations">
                <div class="product-description">
                    {block name='product_name'}
                        <h1 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h1>
                    {/block}
                    {block name='product_description'}
                        <div class="description-informations">
                            {$product.description|truncate:300:'...' nofilter}
                        </div>
                    {/block}

                    {block name='product_variants'}
                        {if $product.main_variants}
                            <div class="product_variants">
                                {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
                            </div>
                        {/if}
                    {/block}

                    {block name='product_price_and_shipping'}
                        {if $product.show_price}
                            <div class="product-price-and-shipping">
                                {hook h='displayProductPriceBlock' product=$product type="before_price"}
                                <span class="price  {if $product.has_discount}has_discount{/if}">{$product.price}</span>

                                {if $product.has_discount}
                                    {hook h='displayProductPriceBlock' product=$product type="old_price"}
                                    <span class="regular-price">{$product.regular_price}</span>
                                {/if}

                                {hook h='displayProductPriceBlock' product=$product type='unit_price'}
                                {hook h='displayProductPriceBlock' product=$product type='weight'}
                            </div>
                        {/if}
                    {/block}
                    {block name='product_reviews'}
                        {hook h='displayProductListReviews' product=$product}
                    {/block}
                </div>

                <div class="button_block_prtoduct_list">
                    {block name='add_to_cart'}
                        <div class="product-add-to-cart">
                            <form action="{Context::getContext()->link->getPageLink('cart',true)|escape:'htmlall':'UTF-8'}" method="post" class="add-to-cart-or-refresh">
                                <input type="hidden" name="token" value="{Tools::getToken(false)|escape:'htmlall':'UTF-8'}">
                                <input type="hidden" name="id_product" value="{$product.id_product|escape:'htmlall':'UTF-8'}" class="product_page_product_id">
                                <input type="hidden" name="id_customization" value="0" class="product_customization_id">
                                <button class="btn add-to-cart btn-primary" {if  $product.available_for_order && $product.minimal_quantity>$product.quantity}disabled{/if} data-button-action="add-to-cart" type="submit" >
                                    <i class="material-icons">shopping_cart</i>
                                    <span class="add_to_cart_tittle"> {l s='Add to cart' mod='mpm_bestbanners'} </span>
                                </button>
                            </form>
                        </div>
                    {/block}
                    {block name='quick_view'}
                        <a class="quick-view" href="#" data-link-action="quickview">
                            <i class="material-icons search">&#xE8B6;</i>
                        </a>
                    {/block}
                </div>

            </div>
            <div style="clear: both"></div>
        </div>
    </article>
{/block}
