<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:40
  from '/var/www/html/Bosshopping/themes/leo_nunica/modules/leofeature/views/templates/hook/leo_compare_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c040655f08_32172515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10b448d8672eb91965c9ffbb9e3a51200ab8983a' => 
    array (
      0 => '/var/www/html/Bosshopping/themes/leo_nunica/modules/leofeature/views/templates/hook/leo_compare_button.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c040655f08_32172515 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="compare">
	<a class="leo-compare-button btn-product btn<?php if ($_smarty_tpl->tpl_vars['added']->value) {?> added<?php }?>" href="#" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_compare_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['added']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from Compare','mod'=>'leofeature'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Compare','mod'=>'leofeature'),$_smarty_tpl ) );
}?>">
		<span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
		<span class="leo-compare-bt-content">
			<i class="icon-compare"></i>
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Compare','mod'=>'leofeature'),$_smarty_tpl ) );?>
</span>
		</span>
	</a>
</div><?php }
}
