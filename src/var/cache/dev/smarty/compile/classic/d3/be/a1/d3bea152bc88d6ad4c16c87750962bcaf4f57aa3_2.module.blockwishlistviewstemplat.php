<?php
/* Smarty version 3.1.43, created on 2022-12-08 20:48:38
  from 'module:blockwishlistviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63923f960daa48_77574535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3bea152bc88d6ad4c16c87750962bcaf4f57aa3' => 
    array (
      0 => 'module:blockwishlistviewstemplat',
      1 => 1670520335,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63923f960daa48_77574535 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
  <li>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlistsTitlePage']->value, ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
      <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blockwishlist']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

    </a>
  </li>
<?php }?>
<!-- end /var/www/html/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl --><?php }
}
