<?php
/* Smarty version 3.1.33, created on 2019-08-01 13:18:43
  from '/var/www/html/Bosshopping/modules/ps_legalcompliance/views/templates/hook/hookDisplayCartPriceBlock_shipping_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42e6b3211cd2_45180830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3caf0cfd22bd9fb6c6f3e946d77984ec97e5c870' => 
    array (
      0 => '/var/www/html/Bosshopping/modules/ps_legalcompliance/views/templates/hook/hookDisplayCartPriceBlock_shipping_details.tpl',
      1 => 1562667405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42e6b3211cd2_45180830 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Under conditions)','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>

 </a>
<?php }
}
