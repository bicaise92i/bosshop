<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:45
  from 'module:pscurrencyselectorpscurre' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0451dc661_74775566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97756c07f8c7dd53da6530f78f67ddd242f77c9' => 
    array (
      0 => 'module:pscurrencyselectorpscurre',
      1 => 1564655392,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c0451dc661_74775566 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="currency-selector dropdown js-dropdown popup-over" id="currency-selector-label">
  <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency dropdown','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
    <i class="icon icon-currency"></i>
    <span class="text-title"><span class="hidden-xs-down title-hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</span>
    <i class="icon-arrow-down fa fa-sort-down"></i>
  </a>
  <ul class="popup-content dropdown-menu" aria-labelledby="currency-selector-label">  
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
  <li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
    <a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</a>
  </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div><?php }
}
