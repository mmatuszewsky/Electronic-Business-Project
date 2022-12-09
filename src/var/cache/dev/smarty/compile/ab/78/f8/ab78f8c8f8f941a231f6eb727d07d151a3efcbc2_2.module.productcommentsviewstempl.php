<?php
/* Smarty version 3.1.43, created on 2022-12-08 20:48:39
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63923f977b2f65_47714149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab78f8c8f8f941a231f6eb727d07d151a3efcbc2' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1670520335,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:productcomments/views/templates/hook/alert-modal.tpl' => 2,
  ),
),false)) {
function content_63923f977b2f65_47714149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin /var/www/html/modules/productcomments/views/templates/hook/post-comment-modal.tpl -->
<?php echo '<script'; ?>
 type="text/javascript">
  var productCommentPostErrorMessage = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, your review cannot be posted.','d'=>'Modules.Productcomments.Shop','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>

<div id="post-product-comment-modal" class="modal fade product-comment-modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write your review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="post-product-comment-form" action="<?php echo $_smarty_tpl->tpl_vars['post_comment_url']->value;?>
" method="POST">
          <div class="row">
            <div class="col-md-2 col-sm-2">
              <?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157018844363923f977a99c6_41393348', 'product_flags');
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_597569963923f977aaab9_51911379', 'product_cover');
?>

              <?php }?>
            </div>
            <div class="col-md-4 col-sm-4">
              <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h3>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122014709363923f977acc65_19226678', 'product_description_short');
?>

            </div>
            <div class="col-md-6 col-sm-6">
              <?php if (count($_smarty_tpl->tpl_vars['criterions']->value) > 0) {?>
                <ul id="criterions_list">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['criterions']->value, 'criterion');
$_smarty_tpl->tpl_vars['criterion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->do_else = false;
?>
                    <li>
                      <div class="criterion-rating">
                        <label><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['criterion']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
:</label>
                        <div
                          class="grade-stars"
                          data-grade="3"
                          data-input="criterion[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion'], ENT_QUOTES, 'UTF-8');?>
]">
                        </div>
                      </div>
                    </li>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              <?php }?>
            </div>
          </div>

          <div class="row">
            <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
              <div class="col-md-8 col-sm-8">
                <label class="form-label" for="comment_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
                <input name="comment_title" type="text" value=""/>
              </div>
              <div class="col-md-4 col-sm-4">
                <label class="form-label" for="customer_name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your name','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
                <input name="customer_name" type="text" value=""/>
              </div>
            <?php } else { ?>
              <div class="col-md-12 col-sm-12">
                <label class="form-label" for="comment_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
                <input name="comment_title" type="text" value=""/>
              </div>
            <?php }?>
          </div>

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <label class="form-label" for="comment_content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
<sup class="required">*</sup></label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <textarea name="comment_content"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','mod'=>'psgdpr','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-sm-6">
              <p class="required"><sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required fields','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</p>
            </div>
            <div class="col-md-6 col-sm-6 post-comment-buttons">
              <button type="button" class="btn btn-comment-inverse btn-comment-big" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

              </button>
              <button type="submit" class="btn btn-comment btn-comment-big">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['moderation_active']->value) {?>
  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been submitted and will be available once approved by a moderator.','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_assignInScope('comment_posted_message', $_prefixVariable7);
} else { ?>
  <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment has been added!','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable8 = ob_get_clean();
$_smarty_tpl->_assignInScope('comment_posted_message', $_prefixVariable8);
}
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review sent','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/alert-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'product-comment-posted-modal','modal_title'=>$_prefixVariable9,'modal_message'=>$_smarty_tpl->tpl_vars['comment_posted_message']->value), 0, false);
?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your review cannot be sent','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );
$_prefixVariable10 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('module:productcomments/views/templates/hook/alert-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modal_id'=>'product-comment-post-error','modal_title'=>$_prefixVariable10,'icon'=>'error'), 0, true);
?>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/post-comment-modal.tpl --><?php }
/* {block 'product_flags'} */
class Block_157018844363923f977a99c6_41393348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_157018844363923f977a99c6_41393348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <ul class="product-flags">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                      <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </ul>
                <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_597569963923f977aaab9_51911379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_cover' => 
  array (
    0 => 'Block_597569963923f977aaab9_51911379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <div class="product-cover">
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                      <img class="js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
                    <?php } else { ?>
                      <img src="<?php echo $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'];?>
" style="width:100%;">
                    <?php }?>
                  </div>
                <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_description_short'} */
class Block_122014709363923f977acc65_19226678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_122014709363923f977acc65_19226678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
              <?php
}
}
/* {/block 'product_description_short'} */
}
