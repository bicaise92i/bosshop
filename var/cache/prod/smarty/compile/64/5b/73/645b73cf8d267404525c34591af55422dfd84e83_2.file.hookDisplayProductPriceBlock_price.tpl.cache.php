<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:36:55
  from '/var/www/html/Bosshopping/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0c71615b2_87508972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '645b73cf8d267404525c34591af55422dfd84e83' => 
    array (
      0 => '/var/www/html/Bosshopping/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_price.tpl',
      1 => 1562667405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c0c71615b2_87508972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6791110495d42c0c7106af8_02467408';
?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'])) {?>
        <span class="aeuc_shipping_label">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay'], ENT_QUOTES, 'UTF-8');?>
" class="iframe">
                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'],'htmlall' )), ENT_QUOTES, 'UTF-8');?>

            </a>
        </span>
    <?php }
}
}
}
