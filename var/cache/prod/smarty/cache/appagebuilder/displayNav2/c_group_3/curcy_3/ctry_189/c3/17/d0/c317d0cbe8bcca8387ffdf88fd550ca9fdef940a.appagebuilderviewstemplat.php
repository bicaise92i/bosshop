<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:45
  from 'module:appagebuilderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0455381b7_67278640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd50c9c59a2a4e1b1dc3bed4fc8dce8da33039f' => 
    array (
      0 => 'module:appagebuilderviewstemplat',
      1 => 1564655392,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5d42c0455381b7_67278640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?><!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
<div class="wrapper"      >
	 <div class="container">
    <div        class="row box-middle-header ApRow  has-bg bg-boxed"
	        data-bg=" no-repeat"                style="background: no-repeat;"        >
                                            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div    class="col-xl-4 col-lg-2-4 col-md-12 col-sm-12 col-xs-12 col-sp-12 left-middle-header ApColumn "
	    >
                    <!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

	<a href="http://localhost/Bosshopping/" title="Bosshopping"><img class="logo img-fluid" src="/Bosshopping/img/bosshopping-logo-1563797573.jpg" alt="Bosshopping"/></a>

    </div><!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div    class="col-xl-6 col-lg-7-2 col-md-9 col-sm-8 col-xs-7 col-sp-4 center-middle-header leo-search-mobile ApColumn "
	    >
                    <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->


<!-- Block search module -->
<div id="leo_search_block_top" class="block exclusive search-by-category">
	<a href="javascript:void(0)" class="icon-open-search" title="Chercher">
	    <i class="icon-search fa fa-search"></i>
	</a>
	<div class="box-title">
		<h4 class="title_block">Recherche produit</h4>
		<p>Recherche de produits qui vous intéresse</p>
	</div>
		<form method="get" action="http://localhost/Bosshopping/index.php?controller=productsearch" id="leosearchtopbox">
		<input type="hidden" name="fc" value="module" />
		<input type="hidden" name="module" value="leoproductsearch" />
		<input type="hidden" name="controller" value="productsearch" />
		    	<label>Recherche de produits:</label>
		<div class="block_content clearfix leoproductsearch-content">		
			<div class="list-cate-wrapper">
				<input id="leosearchtop-cate-id" name="cate" value="" type="hidden">
				<a id="dropdownListCateTop" class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span>Toutes catégories</span>
					<i class="material-icons pull-xs-right">keyboard_arrow_down</i>
				</a>
				<div class="list-cate dropdown-menu" aria-labelledby="dropdownListCateTop">
					<a href="#" data-cate-id="" data-cate-name="Toutes catégories" class="cate-item active" >Toutes catégories</a>				
					<a href="#" data-cate-id="2" data-cate-name="Accueil" class="cate-item cate-level-1" >Accueil</a>
					
  <a href="#" data-cate-id="3" data-cate-name="Informatique" class="cate-item cate-level-2" >--Informatique</a>
  <a href="#" data-cate-id="4" data-cate-name="Ordinateurs de bureau" class="cate-item cate-level-3" >---Ordinateurs de bureau</a>
  <a href="#" data-cate-id="5" data-cate-name="Ordinateurs portables" class="cate-item cate-level-3" >---Ordinateurs portables</a>
  <a href="#" data-cate-id="10" data-cate-name="imprimantes" class="cate-item cate-level-3" >---imprimantes</a>
  <a href="#" data-cate-id="11" data-cate-name="Photocopieuse" class="cate-item cate-level-3" >---Photocopieuse</a>
  <a href="#" data-cate-id="12" data-cate-name="scanners" class="cate-item cate-level-3" >---scanners</a>
  <a href="#" data-cate-id="6" data-cate-name="Electroménager" class="cate-item cate-level-2" >--Electroménager</a>
  <a href="#" data-cate-id="7" data-cate-name="Machine à laver" class="cate-item cate-level-3" >---Machine à laver</a>
  <a href="#" data-cate-id="8" data-cate-name="Climatiseur" class="cate-item cate-level-3" >---Climatiseur</a>
  <a href="#" data-cate-id="13" data-cate-name="Réfrigérateur" class="cate-item cate-level-3" >---Réfrigérateur</a>
  <a href="#" data-cate-id="9" data-cate-name="Bureautique" class="cate-item cate-level-2" >--Bureautique</a>
  <a href="#" data-cate-id="14" data-cate-name="Table de bureau" class="cate-item cate-level-3" >---Table de bureau</a>
  <a href="#" data-cate-id="15" data-cate-name="Table de réunion" class="cate-item cate-level-3" >---Table de réunion</a>
  <a href="#" data-cate-id="16" data-cate-name="armoire" class="cate-item cate-level-3" >---armoire</a>
  
				</div>
			</div>
			<div class="leoproductsearch-result">
				<div class="leoproductsearch-loading cssload-speeding-wheel"></div>
				<input class="search_query form-control grey" type="text" id="leo_search_query_top" name="search_query" value="" placeholder="Chercher"/>
			</div>
			<button type="submit" id="leo_search_top_button" class="btn btn-default button button-small"><span><i class="material-icons search">search</i></span></button> 
		</div>
	</form>
</div>
<script type="text/javascript">
	var blocksearch_type = 'top';
</script>
<!-- /Block search module -->

    </div><!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div    class="col-xl-2 col-lg-2-4 col-md-3 col-sm-4 col-xs-5 col-sp-8 right-middle-header ApColumn "
	    >
                    <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<div id="cart-block">
  <div class="blockcart cart-preview active" data-refresh-url="//localhost/Bosshopping/index.php?fc=module&amp;module=ps_shoppingcart&amp;controller=ajax">
    <div class="header">
              <a rel="nofollow" href="//localhost/Bosshopping/index.php?controller=cart&amp;action=show">
              <i class="shopping-cart fa fa-shopping-cart"></i>
        <span class="title-cart">mon panier</span>
        <span class="cart-products-count">
                      <span class="cart-count">
                              1
                          </span>
            <span class="cart-count-title">
                              item
                          </span>
            <span class="totals-cart">
                              - 177 000,00 CFA
                          </span>
                  </span>
        <i class="shopping-cart fa fa-shopping-cart after"></i>
              </a>
          </div>
  </div>
</div>

    </div>            </div>
</div>
</div>
    <?php }
}
