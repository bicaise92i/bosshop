<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:45
  from '/var/www/html/Bosshopping/modules/leobootstrapmenu/views/widgets/widget_product_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c045a28a98_68335102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7517c3c2bda0d74457939b86ef0bf61293e97ab' => 
    array (
      0 => '/var/www/html/Bosshopping/modules/leobootstrapmenu/views/widgets/widget_product_list.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c045a28a98_68335102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/Bosshopping/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value) && !empty($_smarty_tpl->tpl_vars['products']->value)) {?>
	<div class="widget-products">
		<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value) && !empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
		<div class="menu-title">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8');?>

		</div>
		<?php }?>
		<div class="widget-inner">
			<?php if (isset($_smarty_tpl->tpl_vars['products']->value) && $_smarty_tpl->tpl_vars['products']->value) {?>
				<div class="product-block">
					<?php $_smarty_tpl->_assignInScope('liHeight', 140);?>
					<?php $_smarty_tpl->_assignInScope('nbItemsPerLine', 3);?>
					<?php $_smarty_tpl->_assignInScope('nbLi', $_smarty_tpl->tpl_vars['limit']->value);?>
					<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

					<?php echo smarty_function_math(array('equation'=>"nbLines*liHeight",'nbLines'=>ceil($_smarty_tpl->tpl_vars['nbLines']->value),'liHeight'=>$_smarty_tpl->tpl_vars['liHeight']->value,'assign'=>'ulHeight'),$_smarty_tpl);?>
	 

					<?php $_smarty_tpl->_assignInScope('mproducts', array_chunk($_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['limit']->value));?>
					 
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'homeFeaturedProducts', array (
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
						<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_homeFeaturedProducts']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_homeFeaturedProducts']->value['total'] : null),'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['totModulo']->value == 0) {
$_smarty_tpl->_assignInScope('totModulo', $_smarty_tpl->tpl_vars['nbItemsPerLine']->value);
}?> 
						<div class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
							<div class="thumbnail-container clearfix">
								<div class="product-image">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11341054655d42c045a1c0a2_38676360', 'product_thumbnail');
?>

								</div>
								<div class="product-meta">
									<div class="product-description">
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9626293205d42c045a1e945_91385240', 'product_name');
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11902728825d42c045a20703_29608899', 'product_price_and_shipping');
?>

									</div>
								</div>
							</div>
						</div>			
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>
		</div>
	</div>
<?php } else { ?>
	<div class="widget-products">		
		<p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products found.','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</p>
	</div>
<?php }
}
/* {block 'product_thumbnail'} */
class Block_11341054655d42c045a1c0a2_38676360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_11341054655d42c045a1c0a2_38676360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
											<img
												class="img-fluid"
												src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
												alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
												data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
											>
										</a>
									<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_9626293205d42c045a1e945_91385240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_9626293205d42c045a1e945_91385240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<h4 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h4>
										<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_11902728825d42c045a20703_29608899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_11902728825d42c045a20703_29608899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
												<div class="product-price-and-shipping">
													<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

														<span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
														<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
															<span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
														<?php }?>
													<?php }?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


													<span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
														<span itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"></span><span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
													</span>

													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

												</div>
											<?php }?>
										<?php
}
}
/* {/block 'product_price_and_shipping'} */
}
