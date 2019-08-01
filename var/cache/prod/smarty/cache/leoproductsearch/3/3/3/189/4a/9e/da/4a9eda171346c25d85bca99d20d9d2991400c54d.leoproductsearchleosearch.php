<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:45
  from 'module:leoproductsearchleosearch' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0454dffe3_27616055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b6c84a43795e3f319f8e94e82f88cf557d8b880' => 
    array (
      0 => 'module:leoproductsearchleosearch',
      1 => 1564655392,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5d42c0454dffe3_27616055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'lps_categories' => 
  array (
    'compiled_filepath' => '/var/www/html/Bosshopping/var/cache/prod/smarty/compile/6b/6c/84/6b6c84a43795e3f319f8e94e82f88cf557d8b880_2.module.leoproductsearchleosearch.cache.php',
    'uid' => '6b6c84a43795e3f319f8e94e82f88cf557d8b880',
    'call_name' => 'smarty_template_function_lps_categories_13621047585d42c0453ead47_96440645',
  ),
));
?>


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
<?php }
}
