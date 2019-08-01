<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:36:55
  from '/var/www/html/Bosshopping/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_after_price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0c71729b9_55293024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47ffc325a54221fbce25b9366c67c158a9f75009' => 
    array (
      0 => '/var/www/html/Bosshopping/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_after_price.tpl',
      1 => 1562667405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c0c71729b9_55293024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12174685985d42c0c716c346_83323087';
?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['after_price']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['after_price']['delivery_str_i18n'])) {?>
        <span class="aeuc_delivery_label">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartyVars']->value['after_price']['delivery_str_i18n'],'htmlall' )), ENT_QUOTES, 'UTF-8');?>

        </span>
    <?php }
}
}
}
