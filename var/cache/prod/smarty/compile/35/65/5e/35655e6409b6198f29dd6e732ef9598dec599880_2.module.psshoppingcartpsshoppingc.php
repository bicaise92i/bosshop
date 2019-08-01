<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:45
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c04552f9c8_95831958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1564655392,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c04552f9c8_95831958 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="cart-block">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="header">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        <a rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
        <i class="shopping-cart fa fa-shopping-cart"></i>
        <span class="title-cart"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        <span class="cart-products-count">
          <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
            <span class="cart-count">
              <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>

              <?php }?>
            </span>
            <span class="cart-count-title">
              <?php if (($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 1)) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'item(s)','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'item','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

              <?php }?>
            </span>
            <span class="totals-cart">
              <?php if (($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0)) {?>
                - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>

              <?php }?>
            </span>
          <?php } else { ?>
                        <span class="empty"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'empty','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 </span>
          <?php }?>
        </span>
        <i class="shopping-cart fa fa-shopping-cart after"></i>
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        </a>
      <?php }?>
    </div>
  </div>
</div>
<?php }
}
