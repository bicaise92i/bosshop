<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:33:40
  from '/var/www/html/Bosshopping/admin600dfliar/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c00474d6f1_28250109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74f0501396c398ae3c8d733d5f5bfef443fe0923' => 
    array (
      0 => '/var/www/html/Bosshopping/admin600dfliar/themes/default/template/content.tpl',
      1 => 1562667404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c00474d6f1_28250109 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
