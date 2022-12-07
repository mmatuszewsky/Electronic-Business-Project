<div id="blockcart-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title h6 text-xs-center" id="myModalLabel">{l s='Product successfully added to your shopping cart' d='Shop.Theme.Checkout'}</h4>
      </div>
      <div class="modal-body">
        <div>
          <div class="cart-content-img-block">
            <div>
              <div class="product-image-block">
                <img class="product-image" src="{$product.cover.bySize.home_default.url}" alt="{$product.cover.legend}" title="{$product.cover.legend}" itemprop="image">
              </div>
            </div>
          </div>
          <div class="cart-content-total-block">

            <div class="cart-content-item">
              <h6 class="h6 product-name">{$product.name}</h6>
              <p></p>
              <span class="cart-products-item-line"><strong>{l s='Total products:' d='Shop.Theme.Checkout'}</strong>&nbsp;{$product.price}</span>
              {hook h='displayProductPriceBlock' product=$product type="unit_price"}
              {foreach from=$product.attributes item="property_value" key="property"}
                <span class="cart-products-item-line"><strong>{$property}</strong>: {$property_value}</span>
              {/foreach}
              <span class="cart-products-item-line"><strong>{l s='Quantity:' d='Shop.Theme.Checkout'}</strong>&nbsp;{$product.cart_quantity}</span>
            </div>

            <div class="cart-content">
              {if $cart.products_count > 1}
                <p class="cart-products-count-modal">{l s='There are %products_count% items in your cart.' sprintf=['%products_count%' => $cart.products_count] d='Shop.Theme.Checkout'}</p>
              {else}
                <p class="cart-products-count-modal">{l s='There is %product_count% item in your cart.' sprintf=['%product_count%' =>$cart.products_count] d='Shop.Theme.Checkout'}</p>
              {/if}
              <span class="cart-products-item-line"><strong>{l s='Total products:' d='Shop.Theme.Checkout'}</strong>&nbsp;{$cart.subtotals.products.value}</span>
              <span class="cart-products-item-line"><strong>{l s='Total shipping:' d='Shop.Theme.Checkout'}</strong>&nbsp;{$cart.subtotals.shipping.value} {hook h='displayCheckoutSubtotalDetails' subtotal=$cart.subtotals.shipping}</span>
              {if $cart.subtotals.tax}
                <span class="cart-products-item-line"><strong>{$cart.subtotals.tax.label}</strong>&nbsp;{$cart.subtotals.tax.value}</span>
              {/if}
              <span class="cart-products-item-line"><strong>{l s='Total:' d='Shop.Theme.Checkout'}</strong>&nbsp;{$cart.totals.total.value} {$cart.labels.tax_short}</span>
              <div class="cart-content-btn">
                <button type="button" class="btn btn-primary" data-dismiss="modal">{l s='Continue shopping' d='Shop.Theme.Actions'}</button>
                <a href="{$cart_url}" class="btn btn-primary">{l s='proceed to checkout' d='Shop.Theme.Actions'}</a>
              </div>
            </div>
          </div>
        </div>
        <div style="clear: both"></div>
      </div>
    </div>
  </div>
</div>
