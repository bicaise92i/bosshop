<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:46
  from '/var/www/html/Bosshopping/themes/leo_nunica/modules/appagebuilder/views/templates/hook/cdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c046e53cc2_38594625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5018154fa97f9cbc15b6e1ba2195a0f0baaf7f90' => 
    array (
      0 => '/var/www/html/Bosshopping/themes/leo_nunica/modules/appagebuilder/views/templates/hook/cdown.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c046e53cc2_38594625 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value) {?>
<h3 class="title-deal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hurry up ! Time left:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
<ul class="deal-clock lof-clock-<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
-detail list-inline">
	<?php if (isset($_smarty_tpl->tpl_vars['product']->value['js']) && $_smarty_tpl->tpl_vars['product']->value['js'] == 'unlimited') {?><div class="lof-labelexpired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unlimited','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</div><?php }?>
</ul>
<?php if (isset($_smarty_tpl->tpl_vars['product']->value['js']) && $_smarty_tpl->tpl_vars['product']->value['js'] != 'unlimited') {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		
		jQuery(document).ready(function($){
			var text_d = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'days','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
';
			var text_h = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hours','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
';
			var text_m = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'min','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
';
			var text_s = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'sec','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
';
			$(".lof-clock-<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
-detail").lofCountDown({
				TargetDate:"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['js']['month'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['js']['day'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['js']['year'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['js']['hour'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['js']['minute'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['js']['seconds'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
				DisplayFormat:'<li class="z-depth-1">%%D%%<span>'+text_d+'</span></li><li class="z-depth-1">%%H%%<span>'+text_h+'</span></li><li class="z-depth-1">%%M%%<span>'+text_m+'</span></li><li class="z-depth-1">%%S%%<span>'+text_s+'</span></li>',
				FinishMessage: "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['finish'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
			
			});
		});
		
	<?php echo '</script'; ?>
>
<?php }
}
}
}
