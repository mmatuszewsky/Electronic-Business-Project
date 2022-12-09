<?php
/* Smarty version 3.1.43, created on 2022-12-08 20:48:43
  from '/var/www/html/themes/classic/templates/checkout/_partials/cart-detailed-totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63923f9b946ee5_88120561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34e89e381542ab285431482a2cde25b1d6f3199a' => 
    array (
      0 => '/var/www/html/themes/classic/templates/checkout/_partials/cart-detailed-totals.tpl',
      1 => 1670520335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary-totals.tpl' => 1,
    'file:checkout/_partials/cart-voucher.tpl' => 1,
  ),
),false)) {
function content_63923f9b946ee5_88120561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137612966363923f9b940d19_59965849', 'cart_detailed_totals');
?>

<?php }
/* {block 'cart_summary_totals'} */
class Block_119756796463923f9b945f16_46951042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
  <?php
}
}
/* {/block 'cart_summary_totals'} */
/* {block 'cart_voucher'} */
class Block_74013617663923f9b946681_53098663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'cart_voucher'} */
/* {block 'cart_detailed_totals'} */
class Block_137612966363923f9b940d19_59965849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_detailed_totals' => 
  array (
    0 => 'Block_137612966363923f9b940d19_59965849',
  ),
  'cart_summary_totals' => 
  array (
    0 => 'Block_119756796463923f9b945f16_46951042',
  ),
  'cart_voucher' => 
  array (
    0 => 'Block_74013617663923f9b946681_53098663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="cart-detailed-totals js-cart-detailed-totals">

  <div class="card-block cart-detailed-subtotals js-cart-detailed-subtotals">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
$_smarty_tpl->tpl_vars['subtotal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
$_smarty_tpl->tpl_vars['subtotal']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['subtotal']->value && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['subtotal']->value['value'], $tmp) > 0 && $_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax') {?>
        <div class="cart-summary-line" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="label<?php if ('products' === $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?> js-subtotal<?php }?>">
            <?php if ('products' == $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
          </span>
          <span class="value">
            <?php if ('discount' == $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?>-&nbsp;<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>

          </span>
          <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type'] === 'shipping') {?>
              <div><small class="value"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSubtotalDetails','subtotal'=>$_smarty_tpl->tpl_vars['subtotal']->value),$_smarty_tpl ) );?>
</small></div>
          <?php }?>
        </div>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119756796463923f9b945f16_46951042', 'cart_summary_totals', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74013617663923f9b946681_53098663', 'cart_voucher', $this->tplIndex);
?>

</div>
<?php
}
}
/* {/block 'cart_detailed_totals'} */
}
