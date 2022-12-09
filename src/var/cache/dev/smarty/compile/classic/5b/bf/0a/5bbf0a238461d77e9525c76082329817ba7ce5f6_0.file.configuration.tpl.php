<?php
/* Smarty version 3.1.43, created on 2022-12-08 20:45:18
  from '/var/www/html/modules/ps_checkout/views/templates/admin/configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63923eceeb46f9_43255163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bbf0a238461d77e9525c76082329817ba7ce5f6' => 
    array (
      0 => '/var/www/html/modules/ps_checkout/views/templates/admin/configuration.tpl',
      1 => 1670520335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63923eceeb46f9_43255163 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="app"></div>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
</style>
<?php }
}
