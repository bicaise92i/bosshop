<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:40
  from '/var/www/html/Bosshopping/themes/leo_nunica/modules/appagebuilder/views/templates/front/profiles/plist1492174418.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c04064e480_51015893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b3c80a406743ce798bf35dfd672115f681a2177' => 
    array (
      0 => '/var/www/html/Bosshopping/themes/leo_nunica/modules/appagebuilder/views/templates/front/profiles/plist1492174418.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c04064e480_51015893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="product-image">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3108666945d42c040630207_45652985', 'product_thumbnail');
?>


<div class="box-label">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20671853345d42c04063acb7_39861900', 'box_label');
?>

</div>
<!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20479493585d42c04063e751_60344056', 'product_flags');
?>

<div class="functional-buttons clearfix">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCompareButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoWishlistButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


<!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
<div class="quickview<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
	<a
		href="#"
		class="quick-view btn-product"
		data-link-action="quickview"
		data-source=".thumb-gallery-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"
		title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
	>
		<span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
		<span class="leo-quickview-bt-content">	
	  		<i class="icon-quick-view"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
	  	</span>
	</a>
</div>

<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCartButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div></div>
    <div class="product-meta">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9989360845d42c0406437c9_32979272', 'product_name');
?>


<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_916433775d42c0406456f0_80764774', 'product_price_and_shipping');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9967315565d42c04064c0d0_80681715', 'product_description_short');
?>

<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCartAttribute','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCartQuantity','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
  </div>
</article>
<?php }
/* {block 'product_thumbnail'} */
class Block_3108666945d42c040630207_45652985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_3108666945d42c040630207_45652985',
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
          data-src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
        <?php } else { ?>
          class="img-fluid"
          src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
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
          data-src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
        <?php } else { ?>
          src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
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
  <?php }?>

<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'box_label'} */
class Block_20671853345d42c04063acb7_39861900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'box_label' => 
  array (
    0 => 'Block_20671853345d42c04063acb7_39861900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
      <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
        <label class="label product-flag discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</label>
      <?php }?>
    <?php }?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
      <?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'new') {?>
        <label class="label product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</label>
      <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
}
/* {/block 'box_label'} */
/* {block 'product_flags'} */
class Block_20479493585d42c04063e751_60344056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_20479493585d42c04063e751_60344056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<ul class="product-flags">
	  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
	  		<?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] != 'new') {?>
	    		<li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
	    	<?php }?>
	  	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_9989360845d42c0406437c9_32979272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_9989360845d42c0406437c9_32979272',
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
class Block_916433775d42c0406456f0_80764774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_916433775d42c0406456f0_80764774',
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
/* {block 'product_description_short'} */
class Block_9967315565d42c04064c0d0_80681715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_9967315565d42c04064c0d0_80681715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="product-description-short" itemprop="description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),150,'...' ));?>
</div>
<?php
}
}
/* {/block 'product_description_short'} */
}
