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
<div class="images-container">


  {block name='product_images'}
    <div class="product_images_block">
      <ul class="product-images" id="gallery_09">
        {foreach from=$product.images item=image}
          <li class="thumb-container-img {if $image.id_image == $product.cover.id_image} selected {/if}">


            <img class="thumb_item {if $image.id_image == $product.cover.id_image} selected {/if}"
                 data-image-medium-src="{$image.bySize.medium_default.url}"
                 data-image-large-src="{$image.bySize.large_default.url}"
                 src="{$image.bySize.cart_default.url}"
                 alt="{$image.legend}"
                 title="{$image.legend}"
                 itemprop="image"
            >
          </li>
        {/foreach}
      </ul>
    </div>
  {/block}

  {block name='product_cover'}
    <div class="product-cover">

      <div class="product-cover-img">
        <img data-zoom-image="{$product.cover.bySize.large_default.url}" id="zoom_mw"  class="js-qv-product-cover" src="{$product.cover.bySize.medium_default.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" style="max-width:100%;" itemprop="image">
        <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
        </div>
      </div>

      {block name='product_flags'}
        <ul class="product-flags">
          {foreach from=$product.flags item=flag}
            {if $flag.type !== 'discount'}
              <li class="{$flag.type}">{$flag.label}</li>
            {/if}
          {/foreach}
        </ul>
      {/block}

    </div>
  {/block}

</div>
{hook h='displayAfterProductThumbs'}





<script type="text/javascript">

  setTimeout(function () {

    if($('.quickview  .product_images_block .product-images').length>0){
      productsImageSlider($('.quickview .product_images_block .product-images'), 2);
    }

    if($('#product .page-content .product_images_block .product-images').length>0){
      productsImageSlider($('#product .page-content .product_images_block .product-images'), 3);
    }

  }, 400)

</script>
