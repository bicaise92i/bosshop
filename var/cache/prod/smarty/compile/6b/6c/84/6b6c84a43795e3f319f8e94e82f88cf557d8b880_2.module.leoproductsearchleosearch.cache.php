<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:45
  from 'module:leoproductsearchleosearch' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0454d3027_80504894',
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
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c0454d3027_80504894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'lps_categories' => 
  array (
    'compiled_filepath' => '/var/www/html/Bosshopping/var/cache/prod/smarty/compile/6b/6c/84/6b6c84a43795e3f319f8e94e82f88cf557d8b880_2.module.leoproductsearchleosearch.cache.php',
    'uid' => '6b6c84a43795e3f319f8e94e82f88cf557d8b880',
    'call_name' => 'smarty_template_function_lps_categories_13621047585d42c0453ead47_96440645',
  ),
));
$_smarty_tpl->compiled->nocache_hash = '13621047585d42c0453ead47_96440645';
?>



<!-- Block search module -->
<div id="leo_search_block_top" class="block exclusive<?php if ($_smarty_tpl->tpl_vars['en_search_by_cat']->value) {?> search-by-category<?php }?>">
	<a href="javascript:void(0)" class="icon-open-search" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
">
	    <i class="icon-search fa fa-search"></i>
	</a>
	<div class="box-title">
		<h4 class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search product','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for products you are interested','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
	</div>
		<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('productsearch',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" id="leosearchtopbox">
		<input type="hidden" name="fc" value="module" />
		<input type="hidden" name="module" value="leoproductsearch" />
		<input type="hidden" name="controller" value="productsearch" />
		    	<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search products:','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
</label>
		<div class="block_content clearfix leoproductsearch-content">		
			<div class="list-cate-wrapper"<?php if (!$_smarty_tpl->tpl_vars['en_search_by_cat']->value) {?> style="display: none"<?php }?>>
				<input id="leosearchtop-cate-id" name="cate" value="<?php if (isset($_smarty_tpl->tpl_vars['selectedCate']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedCate']->value, ENT_QUOTES, 'UTF-8');
}?>" type="hidden">
				<a id="dropdownListCateTop" class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span><?php if ($_smarty_tpl->tpl_vars['selectedCateName']->value != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedCateName']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'leoproductsearch'),$_smarty_tpl ) );
}?></span>
					<i class="material-icons pull-xs-right">keyboard_arrow_down</i>
				</a>
				<div class="list-cate dropdown-menu" aria-labelledby="dropdownListCateTop">
					<a href="#" data-cate-id="" data-cate-name="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
" class="cate-item<?php if ($_smarty_tpl->tpl_vars['selectedCate']->value == '') {?> active<?php }?>" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
</a>				
					<a href="#" data-cate-id="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cates']->value['id_category'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" data-cate-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cates']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="cate-item cate-level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cates']->value['level_depth'], ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['selectedCate']->value) && $_smarty_tpl->tpl_vars['cates']->value['id_category'] == $_smarty_tpl->tpl_vars['selectedCate']->value) {?> active<?php }?>" ><?php if ($_smarty_tpl->tpl_vars['cates']->value['level_depth'] > 1) {
echo htmlspecialchars(str_repeat('-',$_smarty_tpl->tpl_vars['cates']->value['level_depth']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['cates']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
					<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'lps_categories', array('nodes'=>$_smarty_tpl->tpl_vars['cates']->value['children']), false);?>

				</div>
			</div>
			<div class="leoproductsearch-result">
				<div class="leoproductsearch-loading cssload-speeding-wheel"></div>
				<input class="search_query form-control grey" type="text" id="leo_search_query_top" name="search_query" value="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
"/>
			</div>
			<button type="submit" id="leo_search_top_button" class="btn btn-default button button-small"><span><i class="material-icons search">search</i></span></button> 
		</div>
	</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var blocksearch_type = 'top';
<?php echo '</script'; ?>
>
<!-- /Block search module -->
<?php }
/* smarty_template_function_lps_categories_13621047585d42c0453ead47_96440645 */
if (!function_exists('smarty_template_function_lps_categories_13621047585d42c0453ead47_96440645')) {
function smarty_template_function_lps_categories_13621047585d42c0453ead47_96440645(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?><a href="#" data-cate-id="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['id_category'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" data-cate-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="cate-item cate-level-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['level_depth'], ENT_QUOTES, 'UTF-8');
if (isset($_smarty_tpl->tpl_vars['selectedCate']->value) && $_smarty_tpl->tpl_vars['node']->value['id_category'] == $_smarty_tpl->tpl_vars['selectedCate']->value) {?> active<?php }?>" ><?php if ($_smarty_tpl->tpl_vars['node']->value['level_depth'] > 1) {
echo htmlspecialchars(str_repeat('-',$_smarty_tpl->tpl_vars['node']->value['level_depth']), ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'lps_categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), false);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}}
/*/ smarty_template_function_lps_categories_13621047585d42c0453ead47_96440645 */
}
