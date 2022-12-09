<?php
/* Smarty version 3.1.43, created on 2022-12-08 20:49:26
  from 'module:pscashondeliveryviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63923fc61be0b4_93162564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f754ebaaf7d134a49c0c3fd788a742cc1aa4232c' => 
    array (
      0 => 'module:pscashondeliveryviewstemp',
      1 => 1670528595,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63923fc61be0b4_93162564 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/ps_cashondelivery/views/templates/hook/displayOrderConfirmation.tpl -->
<section id="ps_cashondelivery-displayOrderConfirmation">
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order on %s is complete.','sprintf'=>array($_smarty_tpl->tpl_vars['shop_name']->value),'d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>
</p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have chosen the cash on delivery method.','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>
</p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order will be sent very soon.','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>
</p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For any questions or for further information, please contact our','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_url']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'customer support','d'=>'Modules.Cashondelivery.Shop'),$_smarty_tpl ) );?>
</a>.</p>
</section>
<!-- end /var/www/html/modules/ps_cashondelivery/views/templates/hook/displayOrderConfirmation.tpl --><?php }
}
