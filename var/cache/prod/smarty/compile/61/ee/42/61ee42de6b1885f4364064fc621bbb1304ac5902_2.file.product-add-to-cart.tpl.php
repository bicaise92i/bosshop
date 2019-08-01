<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:36:55
  from '/var/www/html/Bosshopping/themes/leo_nunica/templates/catalog/_partials/product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0c7285ce8_20722810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61ee42de6b1885f4364064fc621bbb1304ac5902' => 
    array (
      0 => '/var/www/html/Bosshopping/themes/leo_nunica/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c0c7285ce8_20722810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2966928265d42c0c726db04_59568421', 'product_quantity');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17838402565d42c0c7281813_89272122', 'product_minimal_quantity');
?>

  <?php }?>
</div>
<?php }
/* {block 'product_availability'} */
class Block_7284214315d42c0c7276621_58198152 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
          <span id="product-availability">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
              <i class="material-icons rtl-no-flip product-available"></i>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
              <i class="material-icons product-last-items"></i>
            <?php } else { ?>
              <i class="material-icons product-unavailable"></i>
            <?php }?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

          </span>
        <?php }?>
      <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_quantity'} */
class Block_2966928265d42c0c726db04_59568421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_2966928265d42c0c726db04_59568421',
  ),
  'product_availability' => 
  array (
    0 => 'Block_7284214315d42c0c7276621_58198152',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-quantity">
        <div class="qty">
          <span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
          <input
            type="text"
            name="qty"
            id="quantity_wanted"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
            class="input-group"
            min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
	    aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
          />
        </div>
        <div class="add">
          <button
            class="btn btn-primary add-to-cart"
            data-button-action="add-to-cart"
            type="submit"
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
              disabled
            <?php }?>
          >
            <i class="fa fa-shopping-cart"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoWishlistButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCompareButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      </div>
      <div class="clearfix"></div>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7284214315d42c0c7276621_58198152', 'product_availability', $this->tplIndex);
?>

      <div class="clearfix"></div>
    <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_minimal_quantity'} */
class Block_17838402565d42c0c7281813_89272122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
    0 => 'Block_17838402565d42c0c7281813_89272122',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="product-minimal-quantity">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

        <?php }?>
      </p>
    <?php
}
}
/* {/block 'product_minimal_quantity'} */
}
