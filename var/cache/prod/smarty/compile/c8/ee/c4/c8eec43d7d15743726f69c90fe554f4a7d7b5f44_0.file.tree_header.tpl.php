<?php
/* Smarty version 3.1.33, created on 2019-08-01 13:22:23
  from '/var/www/html/Bosshopping/admin600dfliar/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42e78fe38784_05059730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8eec43d7d15743726f69c90fe554f4a7d7b5f44' => 
    array (
      0 => '/var/www/html/Bosshopping/admin600dfliar/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1562667404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42e78fe38784_05059730 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
