<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:45
  from '/var/www/html/Bosshopping/modules/appagebuilder/views/templates/hook/ApMegamenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c045a7e1c0_77874339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33bcf53238e5fc5226cd9fd04bc6d614d0c99d00' => 
    array (
      0 => '/var/www/html/Bosshopping/modules/appagebuilder/views/templates/hook/ApMegamenu.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c045a7e1c0_77874339 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
<div id="memgamenu-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="ApMegamenu">
	<?php if (isset($_smarty_tpl->tpl_vars['content_megamenu']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_megamenu']->value;?>
	<?php }?>
</div>
<?php }
}
}
