<?php
/* Smarty version 3.1.33, created on 2019-08-01 13:24:55
  from '/var/www/html/Bosshopping/modules/leoslideshow/views/templates/hook/status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42e8276c6754_19838851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9f7d82c0f65db720f8e988e1b01ecf44fa9d54e' => 
    array (
      0 => '/var/www/html/Bosshopping/modules/leoslideshow/views/templates/hook/status.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42e8276c6754_19838851 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['gstatus']->value) || isset($_smarty_tpl->tpl_vars['status']->value)) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['status_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_link']->value;?>
" alt="" /></a>
<?php }?>

<?php }
}
