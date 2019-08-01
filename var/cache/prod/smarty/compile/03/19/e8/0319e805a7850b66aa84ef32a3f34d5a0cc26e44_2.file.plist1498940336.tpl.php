<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:43
  from '/var/www/html/Bosshopping/themes/leo_nunica/modules/appagebuilder/views/templates/front/profiles/plist1498940336.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0431e0d38_60166366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0319e805a7850b66aa84ef32a3f34d5a0cc26e44' => 
    array (
      0 => '/var/www/html/Bosshopping/themes/leo_nunica/modules/appagebuilder/views/templates/front/profiles/plist1498940336.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c0431e0d38_60166366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="product-image">
<!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9378669875d42c0431d1259_70622272', 'product_thumbnail');
?>

</div>
    <div class="product-meta">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7193966065d42c0431d9df1_58699978', 'product_name');
?>


<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductListReview','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9250011405d42c0431db5b5_39250513', 'product_price_and_shipping');
?>

</div>
  </div>
</article>
<?php }
/* {block 'product_thumbnail'} */
class Block_9378669875d42c0431d1259_70622272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_9378669875d42c0431d1259_70622272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (isset($_smarty_tpl->tpl_vars['cfg_product_list_image']->value) && $_smarty_tpl->tpl_vars['cfg_product_list_image']->value) {?>
  	<div class="leo-more-info" data-idproduct="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
      <img
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value) && isset($_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) && $_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) {?>
          class="img-fluid lazyOwl"
          src = "#"
          data-src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
        <?php } else { ?>
          class="img-fluid"
          src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>
        alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
        data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
      >
      <?php if (isset($_smarty_tpl->tpl_vars['cfg_product_one_img']->value) && $_smarty_tpl->tpl_vars['cfg_product_one_img']->value) {?>
        <span class="product-additional" data-idproduct="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></span>
      <?php }?>
    </a>
  <?php } else { ?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
      <img
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value) && isset($_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) && $_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) {?>
          class="img-fluid lazyOwl"
          src = "#"
          data-src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
        <?php } else { ?>
          src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
          class="img-fluid"
        <?php }?>
        alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
      >
    </a>
  <?php }
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_7193966065d42c0431d9df1_58699978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_7193966065d42c0431d9df1_58699978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h3 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_9250011405d42c0431db5b5_39250513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_9250011405d42c0431db5b5_39250513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <div class="product-price-and-shipping <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has_discount<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

        <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
        <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
          <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
          <span class="discount-amount discount-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
      <?php }?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

      
      <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
      <span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <span itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"></span><span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
      </span>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

    </div>
  <?php }
}
}
/* {/block 'product_price_and_shipping'} */
}
