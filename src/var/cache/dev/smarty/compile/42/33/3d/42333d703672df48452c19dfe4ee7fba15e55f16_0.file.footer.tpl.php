<?php
/* Smarty version 3.1.43, created on 2022-12-08 20:43:25
  from '/var/www/html/admin-panel/themes/new-theme/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63923e5d926365_19445476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42333d703672df48452c19dfe4ee7fba15e55f16' => 
    array (
      0 => '/var/www/html/admin-panel/themes/new-theme/template/footer.tpl',
      1 => 1670521062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63923e5d926365_19445476 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer" class="bootstrap">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

</div>
<?php }
}
