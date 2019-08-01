<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:39
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c03fb83851_63407933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1564655392,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c03fb83851_63407933 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="block_newsletter" class="block_newsletter block">
  <div class="box-title col-xl-7 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-sp-12">
    <h3 class="title" id="block-newsletter-label">
      <span class="text-footer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Join Our Newsletter','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
      <span class="text-bg"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    </h3>
    <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
      <p class="description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
    <?php }?> 
  </div>
  <div class="block_content col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-sp-12">
    <div class="row">
      <div class="col-xs-12">
        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
          <div class="form-group">
            <div class="input-wrapper">
              <input
                name="email"
                type="email"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email...','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
                aria-labelledby="block-newsletter-label"
              >
            </div>
            <button
              class="btn btn-outline"
              name="submitNewsletter"
              type="submit"
            >
              <i class="fa fa-envelope"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
            </button>
            <input type="hidden" name="action" value="0">
          </div>
        </form>
      </div>
      <div class="col-xs-12">
        <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
          <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

          </p>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['id_module']->value)) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

        <?php }?>
      </div>
    </div>
  </div>
</div>
<?php }
}
