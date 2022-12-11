<?php
/* Smarty version 3.1.43, created on 2022-12-11 22:53:35
  from '/var/www/html/admin-panel/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6396515f3cc027_34367385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ae3f4432fcc41d71ef716ea8c3693857282d57d' => 
    array (
      0 => '/var/www/html/admin-panel/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1670792564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6396515f3cc027_34367385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10988773536396515f3cb811_64663060', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_10988773536396515f3cb811_64663060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_10988773536396515f3cb811_64663060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
