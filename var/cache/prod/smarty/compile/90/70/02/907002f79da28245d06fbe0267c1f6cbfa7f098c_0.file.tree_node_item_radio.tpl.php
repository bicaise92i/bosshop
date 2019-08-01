<?php
/* Smarty version 3.1.33, created on 2019-08-01 13:22:23
  from '/var/www/html/Bosshopping/admin600dfliar/themes/default/template/helpers/tree/tree_node_item_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42e78fe4aef7_42221442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '907002f79da28245d06fbe0267c1f6cbfa7f098c' => 
    array (
      0 => '/var/www/html/Bosshopping/admin600dfliar/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1562667404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42e78fe4aef7_42221442 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
