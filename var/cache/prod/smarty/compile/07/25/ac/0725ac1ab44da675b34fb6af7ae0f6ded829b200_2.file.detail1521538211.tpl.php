<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:36:55
  from '/var/www/html/Bosshopping/themes/leo_nunica/modules/appagebuilder/views/templates/front/details/detail1521538211.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0c70b7b48_67547247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0725ac1ab44da675b34fb6af7ae0f6ded829b200' => 
    array (
      0 => '/var/www/html/Bosshopping/themes/leo_nunica/modules/appagebuilder/views/templates/front/details/detail1521538211.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-images-modal.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:sub/product_info/tab.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5d42c0c70b7b48_67547247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<section id="main" class="product-detail  product-image-thumbs product-thumbs-bottom" itemscope itemtype="https://schema.org/Product">
  <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><div class="row"><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-sp-12">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21459729405d42c0c705dae4_56001513', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6038768185d42c0c7091702_78313814', 'product_images_modal');
?>

                            </div><div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 col-sp-12">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11135112405d42c0c7092dd7_68708892', 'page_header_container');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4161049305d42c0c7095af0_51402823', 'product_additional_info');
?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductReviewExtra','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16479318985d42c0c7097939_16172269', 'product_prices');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15640628115d42c0c7098bc8_75385804', 'product_description_short');
?>

<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20800873425d42c0c709b604_82332507', 'product_customization');
?>

<?php }?>
<div class="product-actions">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7820902155d42c0c709cf80_64391504', 'product_buy');
?>

</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4882286235d42c0c70a69a1_60249023', 'hook_display_reassurance');
?>

                            </div><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12">
<?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14223024775d42c0c70a8022_98646156', 'product_accessories');
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_523981525d42c0c70b5d62_95483701', 'product_footer');
?>

                            </div></div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1386312835d42c0c70b6cf0_24513496', 'page_footer_container');
?>

</section>

<?php }
/* {block 'product_flags'} */
class Block_2365143945d42c0c70614d3_73618752 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <ul class="product-flags">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                    <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_cover'} */
class Block_6316236905d42c0c70607f8_87661186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-cover">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2365143945d42c0c70614d3_73618752', 'product_flags', $this->tplIndex);
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                <img id="zoom_product" data-type-zoom="" class="js-qv-product-cover img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                  <i class="material-icons zoom-in">&#xE8FF;</i>
                </div>
              <?php } else { ?>
                <img id="zoom_product" data-type-zoom="" class="js-qv-product-cover img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
              <?php }?>
            </div>
          <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_11934128705d42c0c7071664_32763745 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="thumb-gallery" class="product-thumb-images">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                  <div class="thumb-container <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> active <?php }?>">
                    <a href="javascript:void(0)" data-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" data-zoom-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"> 
                      <img
                        class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
                        data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                        itemprop="image"
                      >
                    </a>
                  </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php } else { ?>
                <div class="thumb-container">
                  <a href="javascript:void(0)" data-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" data-zoom-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"> 
                    <img 
                      class="thumb js-thumb img-fluid" 
                      data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                      title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                      itemprop="image"
                    >
                  </a>
                </div>
              <?php }?>
            </div>
            
            <?php if (count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>
              <div class="arrows-product-fake slick-arrows">
                <button class="slick-prev slick-arrow" aria-label="Previous" type="button" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</button>
                <button class="slick-next slick-arrow" aria-label="Next" type="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</button>
              </div>
            <?php }?>
          <?php
}
}
/* {/block 'product_images'} */
/* {block 'product_cover_thumbnails'} */
class Block_7318237945d42c0c705f877_38932860 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6316236905d42c0c70607f8_87661186', 'product_cover', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11934128705d42c0c7071664_32763745', 'product_images', $this->tplIndex);
?>


        <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_15405119195d42c0c705ec40_56913462 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="images-container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7318237945d42c0c705f877_38932860', 'product_cover_thumbnails', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>

      </div>
    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21459729405d42c0c705dae4_56001513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_21459729405d42c0c705dae4_56001513',
  ),
  'page_content' => 
  array (
    0 => 'Block_15405119195d42c0c705ec40_56913462',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_7318237945d42c0c705f877_38932860',
  ),
  'product_cover' => 
  array (
    0 => 'Block_6316236905d42c0c70607f8_87661186',
  ),
  'product_flags' => 
  array (
    0 => 'Block_2365143945d42c0c70614d3_73618752',
  ),
  'product_images' => 
  array (
    0 => 'Block_11934128705d42c0c7071664_32763745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="page-content" id="content" data-templateview="bottom" data-numberimage="5" data-numberimage1200="5" data-numberimage992="4" data-numberimage768="3" data-numberimage576="3" data-numberimage480="2" data-numberimage360="2" data-templatemodal="1" data-templatezoomtype="out" data-zoomposition="right" data-zoomwindowwidth="400" data-zoomwindowheight="400">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15405119195d42c0c705ec40_56913462', 'page_content', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_images_modal'} */
class Block_6038768185d42c0c7091702_78313814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images_modal' => 
  array (
    0 => 'Block_6038768185d42c0c7091702_78313814',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_title'} */
class Block_4220076315d42c0c7093c75_68347797 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_7752714895d42c0c7093557_51882078 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<h1 class="h1 product-detail-name" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4220076315d42c0c7093c75_68347797', 'page_title', $this->tplIndex);
?>
</h1>
	<?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_11135112405d42c0c7092dd7_68708892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_11135112405d42c0c7092dd7_68708892',
  ),
  'page_header' => 
  array (
    0 => 'Block_7752714895d42c0c7093557_51882078',
  ),
  'page_title' => 
  array (
    0 => 'Block_4220076315d42c0c7093c75_68347797',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7752714895d42c0c7093557_51882078', 'page_header', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_additional_info'} */
class Block_4161049305d42c0c7095af0_51402823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_additional_info' => 
  array (
    0 => 'Block_4161049305d42c0c7095af0_51402823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_prices'} */
class Block_16479318985d42c0c7097939_16172269 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_16479318985d42c0c7097939_16172269',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_15640628115d42c0c7098bc8_75385804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_15640628115d42c0c7098bc8_75385804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_20800873425d42c0c709b604_82332507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_20800873425d42c0c709b604_82332507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	 	<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
	<?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_2502548035d42c0c709edc0_19075583 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_15129284495d42c0c70a17a4_03191166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
              <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_12331971145d42c0c709fc33_14095437 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
          <section class="product-pack">
            <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15129284495d42c0c70a17a4_03191166', 'product_miniature', $this->tplIndex);
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </section>
        <?php }?>
      <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_18707581755d42c0c70a32d0_99218007 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_6166270245d42c0c70a4454_19334327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_4644469155d42c0c70a54a7_33185079 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
      <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_7820902155d42c0c709cf80_64391504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_7820902155d42c0c709cf80_64391504',
  ),
  'product_variants' => 
  array (
    0 => 'Block_2502548035d42c0c709edc0_19075583',
  ),
  'product_pack' => 
  array (
    0 => 'Block_12331971145d42c0c709fc33_14095437',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_15129284495d42c0c70a17a4_03191166',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_18707581755d42c0c70a32d0_99218007',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_6166270245d42c0c70a4454_19334327',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_4644469155d42c0c70a54a7_33185079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
      <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
      <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
      <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2502548035d42c0c709edc0_19075583', 'product_variants', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12331971145d42c0c709fc33_14095437', 'product_pack', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18707581755d42c0c70a32d0_99218007', 'product_discounts', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6166270245d42c0c70a4454_19334327', 'product_add_to_cart', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4644469155d42c0c70a54a7_33185079', 'product_refresh', $this->tplIndex);
?>

    </form>
  <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_4882286235d42c0c70a69a1_60249023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_reassurance' => 
  array (
    0 => 'Block_4882286235d42c0c70a69a1_60249023',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_8620399675d42c0c70b1101_76619115 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if (isset($_smarty_tpl->tpl_vars['productProfileDefault']->value) && $_smarty_tpl->tpl_vars['productProfileDefault']->value) {?>
                      
                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'profile'=>$_smarty_tpl->tpl_vars['productProfileDefault']->value),$_smarty_tpl ) );?>

                    <?php } else { ?>
                      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    <?php }?>
                  <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_14223024775d42c0c70a8022_98646156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_accessories' => 
  array (
    0 => 'Block_14223024775d42c0c70a8022_98646156',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_8620399675d42c0c70b1101_76619115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
    <section class="product-accessories-carousel block button-middle button-hover clearfix">
      <h2 class="products-section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h2>
      <?php $_smarty_tpl->_assignInScope('itemscolumn', 1);?>
      <?php $_smarty_tpl->_assignInScope('itempercolumn', 4);?>
      <?php $_smarty_tpl->_assignInScope('itemsDesktop', 4);?>
      <?php $_smarty_tpl->_assignInScope('itemsDesktopSmall', 3);?>
      <?php $_smarty_tpl->_assignInScope('itemsTablet', 2);?>
      <?php $_smarty_tpl->_assignInScope('itemsMobile', 1);?>
      <div class="block_content">
        <div class="products">
          <div class="owl-row">
            <div class="timeline-wrapper prepare"
              data-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itempercolumn']->value, ENT_QUOTES, 'UTF-8');?>
" 
              data-xl="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsDesktop']->value, ENT_QUOTES, 'UTF-8');?>
" 
              data-lg="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsDesktop']->value, ENT_QUOTES, 'UTF-8');?>
" 
              data-md="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsDesktopSmall']->value, ENT_QUOTES, 'UTF-8');?>
" 
              data-sm="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsTablet']->value, ENT_QUOTES, 'UTF-8');?>
" 
              data-m="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsMobile']->value, ENT_QUOTES, 'UTF-8');?>
"
            >
              <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['itempercolumn']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['itempercolumn']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>     
                <div class="timeline-parent">
                  <?php
$_smarty_tpl->tpl_vars['foo_child'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo_child']->step = 1;$_smarty_tpl->tpl_vars['foo_child']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo_child']->step > 0 ? $_smarty_tpl->tpl_vars['itemscolumn']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['itemscolumn']->value)+1)/abs($_smarty_tpl->tpl_vars['foo_child']->step));
if ($_smarty_tpl->tpl_vars['foo_child']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo_child']->value = 1, $_smarty_tpl->tpl_vars['foo_child']->iteration = 1;$_smarty_tpl->tpl_vars['foo_child']->iteration <= $_smarty_tpl->tpl_vars['foo_child']->total;$_smarty_tpl->tpl_vars['foo_child']->value += $_smarty_tpl->tpl_vars['foo_child']->step, $_smarty_tpl->tpl_vars['foo_child']->iteration++) {
$_smarty_tpl->tpl_vars['foo_child']->first = $_smarty_tpl->tpl_vars['foo_child']->iteration === 1;$_smarty_tpl->tpl_vars['foo_child']->last = $_smarty_tpl->tpl_vars['foo_child']->iteration === $_smarty_tpl->tpl_vars['foo_child']->total;?>
                    <div class="timeline-item ">
                      <div class="animated-background">         
                        <div class="background-masker content-top"></div>             
                        <div class="background-masker content-second-line"></div>             
                        <div class="background-masker content-third-line"></div>              
                        <div class="background-masker content-fourth-line"></div>
                      </div>
                    </div>
                  <?php }
}
?>
                </div>
              <?php }
}
?>
            </div>
            <div id="product-accessories" class="owl-carousel owl-theme owl-loading">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product', false, NULL, 'mypLoop', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']++;
?>
                <div class="item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8620399675d42c0c70b1101_76619115', 'product_miniature', $this->tplIndex);
?>

                </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php echo '<script'; ?>
 type="text/javascript">
      ap_list_functions_loaded.push(
        function(){
          if($('#product-accessories').parents('.tab-pane').length)
          {   
              if(!$('#product-accessories').parents('.tab-pane').hasClass('active'))
              {
                  var width_owl_active_tab = $('#product-accessories').parents('.tab-pane').siblings('.active').find('.owl-carousel').width();    
                  $('#product-accessories').width(width_owl_active_tab);
              }
          }
          $('#product-accessories').imagesLoaded( function() {
            $('#product-accessories').owlCarousel({
              <?php if (isset($_smarty_tpl->tpl_vars['IS_RTL']->value) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?>
                direction:'rtl',
              <?php } else { ?>
                direction:'ltr',
              <?php }?>
              items : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itempercolumn']->value, ENT_QUOTES, 'UTF-8');?>
,
              itemsCustom : false,
              itemsDesktop : [1200,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsDesktop']->value, ENT_QUOTES, 'UTF-8');?>
],
              itemsDesktopSmall : [992, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsDesktopSmall']->value, ENT_QUOTES, 'UTF-8');?>
],
              itemsTablet : [768, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsTablet']->value, ENT_QUOTES, 'UTF-8');?>
],
              itemsMobile : [480, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['itemsMobile']->value, ENT_QUOTES, 'UTF-8');?>
],
              singleItem : false,         // true : show only 1 item
              itemsScaleUp : false,
              slideSpeed : 200,  //  change speed when drag and drop a item
              paginationSpeed :800, // change speed when go next page

              autoPlay : false,   // time to show each item
              stopOnHover : false,
              navigation : true,
              navigationText : ["&lsaquo;", "&rsaquo;"],

              scrollPerPage :true,
              responsive :true,
              
              pagination : false,
              paginationNumbers : false,
              
              addClassActive : true,
              
              mouseDrag : true,
              touchDrag : true,

              addClassActive :    true,
              afterInit: OwlLoaded,
              afterAction : SetOwlCarouselFirstLast,

            });
          });
        }
      ); 
      function OwlLoaded(el){
        el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
        if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
            el.width('100%');
      };
    <?php echo '</script'; ?>
>
  <?php }
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_523981525d42c0c70b5d62_95483701 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_footer' => 
  array (
    0 => 'Block_523981525d42c0c70b5d62_95483701',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'product_footer'} */
/* {block 'page_footer'} */
class Block_4885665535d42c0c70b7151_70497900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    	<!-- Footer content -->
	    <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1386312835d42c0c70b6cf0_24513496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer_container' => 
  array (
    0 => 'Block_1386312835d42c0c70b6cf0_24513496',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4885665535d42c0c70b7151_70497900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  <footer class="page-footer">
	    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4885665535d42c0c70b7151_70497900', 'page_footer', $this->tplIndex);
?>

	  </footer>
	<?php
}
}
/* {/block 'page_footer_container'} */
}
