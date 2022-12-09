<?php
/* Smarty version 3.1.43, created on 2022-12-08 20:43:25
  from '/var/www/html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63923e5d8bd3f0_56191128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4ef0b7f322864a42016da984d18a53f9bcdc945' => 
    array (
      0 => '/var/www/html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl',
      1 => 1670521469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63923e5d8bd3f0_56191128 (Smarty_Internal_Template $_smarty_tpl) {
if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {?>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof GoogleAnalyticEnhancedECommerce !== 'undefined') {
                var MBG = GoogleAnalyticEnhancedECommerce;
                MBG.setCurrency('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isoCode']->value,'htmlall','UTF-8' ));?>
');
                <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

            }
        });
    <?php echo '</script'; ?>
>
    
<?php }
}
}
