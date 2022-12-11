<?php
/* Smarty version 3.1.43, created on 2022-12-11 22:19:56
  from '/var/www/html/admin-panel/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6396497c3cc7f0_04974935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ed59642c9404a8a6fced4b25fc9b62af7d75d26' => 
    array (
      0 => '/var/www/html/admin-panel/themes/default/template/content.tpl',
      1 => 1670792564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6396497c3cc7f0_04974935 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
