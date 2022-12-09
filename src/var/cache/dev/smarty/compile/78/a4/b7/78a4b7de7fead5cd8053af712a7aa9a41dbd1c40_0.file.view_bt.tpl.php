<?php
/* Smarty version 3.1.43, created on 2022-12-08 20:51:13
  from '/var/www/html/modules/gamification/views/templates/admin/gamification/helpers/view/view_bt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_639240319576b7_10029813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78a4b7de7fead5cd8053af712a7aa9a41dbd1c40' => 
    array (
      0 => '/var/www/html/modules/gamification/views/templates/admin/gamification/helpers/view/view_bt.tpl',
      1 => 1670520335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./filters_bt.tpl' => 1,
  ),
),false)) {
function content_639240319576b7_10029813 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    var current_level_percent_tab = <?php echo intval($_smarty_tpl->tpl_vars['current_level_percent']->value);?>
;
    var current_level_tab = '<?php echo intval($_smarty_tpl->tpl_vars['current_level']->value);?>
';
    var gamification_level_tab = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Level','mod'=>'gamification','js'=>1),$_smarty_tpl ) );?>
';
    $(document).ready(function () {
        $('.gamification_badges_img').tooltip();
        $('#gamification_progressbar_tab').progressbar({
            change: function() {
                if (<?php echo $_smarty_tpl->tpl_vars['current_level_percent']->value;?>
)
                    $( "#gamification_progress-label_tab" ).html( '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Level','mod'=>'gamification','js'=>1),$_smarty_tpl ) );?>
'+' '+<?php echo intval($_smarty_tpl->tpl_vars['current_level']->value);?>
+' : '+$('#gamification_progressbar_tab').progressbar( "value" ) + "%" );
                else
                    $( "#gamification_progress-label_tab" ).html('');
              },
        });
        $('#gamification_progressbar_tab').progressbar("value", <?php echo intval($_smarty_tpl->tpl_vars['current_level_percent']->value);?>
 );
    });
    var admintab_gamification = true;
<?php echo '</script'; ?>
>

<div class="panel">
    <div id="intro_gamification">
        <div class="left_intro">
            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/gamification/views/img/checklist.png" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'gamification'),$_smarty_tpl ) );?>
" />
        </div>
        <div class="central_intro">
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Become an e-commerce expert in leaps and bounds!",'mod'=>'gamification'),$_smarty_tpl ) );?>
</h2>
            <p>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"In order to make you succeed in the e-commerce world, we have created a system of badges and points to help you monitor your progress as a merchant. The system has three levels:",'mod'=>'gamification'),$_smarty_tpl ) );?>


            </p>
            <ol class="central_intro_list">
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Your use of key e-commerce features on your store",'mod'=>'gamification'),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Your sales performances",'mod'=>'gamification'),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Your presence in international markets",'mod'=>'gamification'),$_smarty_tpl ) );?>
</li>
            </ol>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"The more progress your store makes, the more badges and points you earn. Take advantage and check it out below!",'mod'=>'gamification'),$_smarty_tpl ) );?>
</p>
        </div>
        <div class="right_intro">
            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/gamification/views/img/persona.png" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Employee",'mod'=>'gamification'),$_smarty_tpl ) );?>
">
            <h3 class="text-center right_intro_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Our team of experts is available to help, feel free to contact them!",'mod'=>'gamification'),$_smarty_tpl ) );?>
</h3>
            <a class="text-center right_intro_btn-contact" href="https://www.prestashop.com/en/experts?utm_source=gamification"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Find an expert",'mod'=>'gamification'),$_smarty_tpl ) );?>
</a>
        </div>
    </div>

    <div id="completion_gamification">
        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Completion level','mod'=>'gamification'),$_smarty_tpl ) );?>
</h2>
        <div id="gamification_progressbar_tab"></div>
        <p class="gamification_progress-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Level %s:",'sprintf'=>array(intval($_smarty_tpl->tpl_vars['current_level']->value)),'mod'=>'gamification'),$_smarty_tpl ) );?>


        <span class="gamification_progress-label_percent">
            <?php echo intval($_smarty_tpl->tpl_vars['current_level_percent']->value);?>
%
        </span>
        </p>
    </div>
    &nbsp;
</div>
<div class="clear"><br/></div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['badges_type']->value, 'type', false, 'key');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
?>
    <div class="panel">
        <h3><i class="icon-bookmark"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value['name'],'html','UTF-8' ));?>
</h3>
        <div class="row">
            <div class="col-lg-2">
                <?php $_smarty_tpl->_subTemplateRender('file:./filters_bt.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>$_smarty_tpl->tpl_vars['key']->value), 0, true);
?>
            </div>
            <div class="col-lg-10">
                <ul class="badge_list" id="list_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['type']->value['badges'], 'badge');
$_smarty_tpl->tpl_vars['badge']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['badge']->value) {
$_smarty_tpl->tpl_vars['badge']->do_else = false;
?>
                    <li class="badge_square badge_all <?php if ($_smarty_tpl->tpl_vars['badge']->value->validated) {?>validated <?php } else { ?> not_validated<?php }?> group_<?php echo $_smarty_tpl->tpl_vars['badge']->value->id_group;?>
 level_<?php echo $_smarty_tpl->tpl_vars['badge']->value->group_position;?>
 " id="<?php echo intval($_smarty_tpl->tpl_vars['badge']->value->id);?>
">
                        <div class="gamification_badges_img" data-placement="top" data-toggle="tooltip" data-original-title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['badge']->value->description,'html','UTF-8' ));?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['badge']->value->getBadgeImgUrl();?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['badge']->value->name,'html','UTF-8' ));?>
" loading="lazy" /></div>
                        <div class="gamification_badges_name"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['badge']->value->name,'html','UTF-8' ));?>
</div>
                    </li>
                    <?php
}
if ($_smarty_tpl->tpl_vars['badge']->do_else) {
?>
                    <li>
                        <div class="gamification_badges_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"No badge in this section",'mod'=>'gamification'),$_smarty_tpl ) );?>
</div>
                    </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <p id="no_badge_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="gamification_badges_name" style="display:none;text-align:center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"No badge in this section",'mod'=>'gamification'),$_smarty_tpl ) );?>
</p>
        </div>
    </div>
    <div class="clear"><br/></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
