<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:41
  from '/var/www/html/Bosshopping/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_before_price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c041c17790_49987768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2e26297bd5a79244b9786d900d7a21497400d15' => 
    array (
      0 => '/var/www/html/Bosshopping/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_before_price.tpl',
      1 => 1562667405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c041c17790_49987768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6369934125d42c041ba25a6_04654183';
?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['before_price']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['before_price']['from_str_i18n'])) {?>
        <span class="aeuc_from_label">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartyVars']->value['before_price']['from_str_i18n'],'htmlall' )), ENT_QUOTES, 'UTF-8');?>

        </span>
    <?php }
}
}
}
