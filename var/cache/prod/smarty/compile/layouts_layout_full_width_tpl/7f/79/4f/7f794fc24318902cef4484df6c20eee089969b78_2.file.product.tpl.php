<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:36:54
  from '/var/www/html/Bosshopping/themes/leo_nunica/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0c67b73e2_01970749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f794fc24318902cef4484df6c20eee089969b78' => 
    array (
      0 => '/var/www/html/Bosshopping/themes/leo_nunica/templates/catalog/product.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 2,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:sub/product_info/tab.tpl' => 1,
    'file:sub/product_info/accordions.tpl' => 1,
    'file:sub/product_info/default.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5d42c0c67b73e2_01970749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2768360215d42c0c679f041_22165286', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15534880925d42c0c679ff46_55470390', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7156514425d42c0c67a37e7_89113772', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_2768360215d42c0c679f041_22165286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_2768360215d42c0c679f041_22165286',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_15534880925d42c0c679ff46_55470390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_15534880925d42c0c679ff46_55470390',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'product_cover_thumbnails'} */
class Block_12446627795d42c0c67a56d0_81134704 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_19921075285d42c0c67a5459_27105142 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12446627795d42c0c67a56d0_81134704', 'product_cover_thumbnails', $this->tplIndex);
?>

              <?php
}
}
/* {/block 'page_content'} */
/* {block 'product_images_modal'} */
class Block_19729498875d42c0c67a63c3_10144693 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_content_container'} */
class Block_6744614235d42c0c67a5184_81845828 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section class="page-content" id="content">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19921075285d42c0c67a5459_27105142', 'page_content', $this->tplIndex);
?>

            </section>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19729498875d42c0c67a63c3_10144693', 'product_images_modal', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_16741120865d42c0c67a7239_85339560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_4722356275d42c0c67a6fb3_54242226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <h1 class="h1 product-detail-name" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16741120865d42c0c67a7239_85339560', 'page_title', $this->tplIndex);
?>
</h1>
            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_11779390795d42c0c67a6c82_10956067 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4722356275d42c0c67a6fb3_54242226', 'page_header', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_1074060635d42c0c67a85e5_23660864 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_description_short'} */
class Block_4199910575d42c0c67a8cd8_96547832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_18426716315d42c0c67aa133_21142655 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
              <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_10667042145d42c0c67ac524_03824184 extends Smarty_Internal_Block
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
class Block_20141343605d42c0c67ae274_17928290 extends Smarty_Internal_Block
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
class Block_3541161525d42c0c67acc28_52836050 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                      <section class="product-pack">
                        <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20141343605d42c0c67ae274_17928290', 'product_miniature', $this->tplIndex);
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
class Block_1533851265d42c0c67af0e3_49105792 extends Smarty_Internal_Block
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
class Block_4237210445d42c0c67af7e1_06143817 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_2015589125d42c0c67afeb5_32129950 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_7629187365d42c0c67b05f0_94013307 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_20530147035d42c0c67ab605_32257575 extends Smarty_Internal_Block
{
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10667042145d42c0c67ac524_03824184', 'product_variants', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3541161525d42c0c67acc28_52836050', 'product_pack', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1533851265d42c0c67af0e3_49105792', 'product_discounts', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4237210445d42c0c67af7e1_06143817', 'product_add_to_cart', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2015589125d42c0c67afeb5_32129950', 'product_additional_info', $this->tplIndex);
?>


                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7629187365d42c0c67b05f0_94013307', 'product_refresh', $this->tplIndex);
?>

                </form>
              <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_21427086005d42c0c67b0bf4_65686570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_info'} */
class Block_1136501405d42c0c67b12b2_72631729 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'tab') {?>
          <?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value) && $_smarty_tpl->tpl_vars['USE_PTABS']->value == 'accordion') {?>
          <?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/accordions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>  
      <?php
}
}
/* {/block 'product_info'} */
/* {block 'product_miniature'} */
class Block_6967139345d42c0c67b3f12_45308327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <?php if (isset($_smarty_tpl->tpl_vars['productProfileDefault']->value) && $_smarty_tpl->tpl_vars['productProfileDefault']->value) {?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'profile'=>$_smarty_tpl->tpl_vars['productProfileDefault']->value),$_smarty_tpl ) );?>

                      <?php } else { ?>
                          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value), 0, true);
?>
                      <?php }?>
                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_15632667845d42c0c67b2ff6_02664050 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
          <section class="product-accessories clearfix">
            <p class="h5 products-section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
            <div class="products">
              <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-sp-12 ajax_block_product">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6967139345d42c0c67b3f12_45308327', 'product_miniature', $this->tplIndex);
?>

                  </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            </div>
          </section>
        <?php }?>
      <?php
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_11920445555d42c0c67b57b1_93685606 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_7988691475d42c0c67b6062_36110964 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_17673539775d42c0c67b6a31_91906233 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <!-- Footer content -->
          <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16840407845d42c0c67b6779_85321248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer class="page-footer">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17673539775d42c0c67b6a31_91906233', 'page_footer', $this->tplIndex);
?>

        </footer>
      <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_7156514425d42c0c67a37e7_89113772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7156514425d42c0c67a37e7_89113772',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_6744614235d42c0c67a5184_81845828',
  ),
  'page_content' => 
  array (
    0 => 'Block_19921075285d42c0c67a5459_27105142',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_12446627795d42c0c67a56d0_81134704',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_19729498875d42c0c67a63c3_10144693',
    1 => 'Block_7988691475d42c0c67b6062_36110964',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_11779390795d42c0c67a6c82_10956067',
  ),
  'page_header' => 
  array (
    0 => 'Block_4722356275d42c0c67a6fb3_54242226',
  ),
  'page_title' => 
  array (
    0 => 'Block_16741120865d42c0c67a7239_85339560',
  ),
  'product_prices' => 
  array (
    0 => 'Block_1074060635d42c0c67a85e5_23660864',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_4199910575d42c0c67a8cd8_96547832',
  ),
  'product_customization' => 
  array (
    0 => 'Block_18426716315d42c0c67aa133_21142655',
  ),
  'product_buy' => 
  array (
    0 => 'Block_20530147035d42c0c67ab605_32257575',
  ),
  'product_variants' => 
  array (
    0 => 'Block_10667042145d42c0c67ac524_03824184',
  ),
  'product_pack' => 
  array (
    0 => 'Block_3541161525d42c0c67acc28_52836050',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_20141343605d42c0c67ae274_17928290',
    1 => 'Block_6967139345d42c0c67b3f12_45308327',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_1533851265d42c0c67af0e3_49105792',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_4237210445d42c0c67af7e1_06143817',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_2015589125d42c0c67afeb5_32129950',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_7629187365d42c0c67b05f0_94013307',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_21427086005d42c0c67b0bf4_65686570',
  ),
  'product_info' => 
  array (
    0 => 'Block_1136501405d42c0c67b12b2_72631729',
  ),
  'product_accessories' => 
  array (
    0 => 'Block_15632667845d42c0c67b2ff6_02664050',
  ),
  'product_footer' => 
  array (
    0 => 'Block_11920445555d42c0c67b57b1_93685606',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16840407845d42c0c67b6779_85321248',
  ),
  'page_footer' => 
  array (
    0 => 'Block_17673539775d42c0c67b6a31_91906233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  

  <?php if (isset($_smarty_tpl->tpl_vars['product']->value['productLayout']) && $_smarty_tpl->tpl_vars['product']->value['productLayout'] != '') {?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'typeProduct'=>'detail'),$_smarty_tpl ) );?>

  <?php } else { ?>

    <section id="main" class="product-detail" itemscope itemtype="https://schema.org/Product">
      <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

      <div class="row">
        <div class="col-md-6">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6744614235d42c0c67a5184_81845828', 'page_content_container', $this->tplIndex);
?>

        </div>

        <div class="col-md-6">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11779390795d42c0c67a6c82_10956067', 'page_header_container', $this->tplIndex);
?>


          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductReviewExtra','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1074060635d42c0c67a85e5_23660864', 'product_prices', $this->tplIndex);
?>


          <div class="product-information">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4199910575d42c0c67a8cd8_96547832', 'product_description_short', $this->tplIndex);
?>


            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18426716315d42c0c67aa133_21142655', 'product_customization', $this->tplIndex);
?>

            <?php }?>

            <div class="product-actions">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20530147035d42c0c67ab605_32257575', 'product_buy', $this->tplIndex);
?>

            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21427086005d42c0c67b0bf4_65686570', 'hook_display_reassurance', $this->tplIndex);
?>


          </div>
        </div>
      </div>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1136501405d42c0c67b12b2_72631729', 'product_info', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15632667845d42c0c67b2ff6_02664050', 'product_accessories', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11920445555d42c0c67b57b1_93685606', 'product_footer', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7988691475d42c0c67b6062_36110964', 'product_images_modal', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16840407845d42c0c67b6779_85321248', 'page_footer_container', $this->tplIndex);
?>


    </section>
  <?php }
}
}
/* {/block 'content'} */
}
