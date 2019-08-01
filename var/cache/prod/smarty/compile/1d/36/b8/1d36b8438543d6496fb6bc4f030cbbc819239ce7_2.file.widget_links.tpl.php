<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:45
  from '/var/www/html/Bosshopping/modules/leobootstrapmenu/views/widgets/widget_links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c045a62855_19542199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d36b8438543d6496fb6bc4f030cbbc819239ce7' => 
    array (
      0 => '/var/www/html/Bosshopping/modules/leobootstrapmenu/views/widgets/widget_links.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c045a62855_19542199 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['links']->value)) {?>
<div class="widget-links">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value) && !empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8');?>

	</div>
	<?php }?>
	<div class="widget-inner">	
		<div id="tabs<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="panel-group">
			<ul class="nav-links">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['links']->value, 'ac', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['ac']->value) {
?>  
					<li ><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ac']->value['link'], ENT_QUOTES, 'UTF-8');?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ac']->value['text'], ENT_QUOTES, 'UTF-8');?>
</a></li>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</div>
</div>
<?php }?>


<?php }
}
