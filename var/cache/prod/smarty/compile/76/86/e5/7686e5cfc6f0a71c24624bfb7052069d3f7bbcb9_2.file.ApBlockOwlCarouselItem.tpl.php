<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:42
  from '/var/www/html/Bosshopping/themes/leo_nunica/modules/appagebuilder/views/templates/hook/category-carousel/ApBlockOwlCarouselItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c042e0b8c1_51614813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7686e5cfc6f0a71c24624bfb7052069d3f7bbcb9' => 
    array (
      0 => '/var/www/html/Bosshopping/themes/leo_nunica/modules/appagebuilder/views/templates/hook/category-carousel/ApBlockOwlCarouselItem.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c042e0b8c1_51614813 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApBlockOwlCarouselItem -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
	<h4 class="title_block"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
<?php }
if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
    <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['formAtts']->value['description']) && $_smarty_tpl->tpl_vars['formAtts']->value['description']) {?>
	<p><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['description'];?>
</p>
<?php }?>
<div class="owl-row">
    <div class="timeline-wrapper clearfix prepare"
        data-item="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item'], ENT_QUOTES, 'UTF-8');?>
" 
        data-xl="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['xl'], ENT_QUOTES, 'UTF-8');?>
" 
        data-lg="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['lg'], ENT_QUOTES, 'UTF-8');?>
" 
        data-md="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['md'], ENT_QUOTES, 'UTF-8');?>
" 
        data-sm="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['sm'], ENT_QUOTES, 'UTF-8');?>
" 
        data-m="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['m'], ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item']+1 - (1) : 1-($_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>          
            <div class="timeline-parent">
                <?php
$_smarty_tpl->tpl_vars['foo_child'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo_child']->step = 1;$_smarty_tpl->tpl_vars['foo_child']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo_child']->step > 0 ? $_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn']+1 - (1) : 1-($_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn'])+1)/abs($_smarty_tpl->tpl_vars['foo_child']->step));
if ($_smarty_tpl->tpl_vars['foo_child']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo_child']->value = 1, $_smarty_tpl->tpl_vars['foo_child']->iteration = 1;$_smarty_tpl->tpl_vars['foo_child']->iteration <= $_smarty_tpl->tpl_vars['foo_child']->total;$_smarty_tpl->tpl_vars['foo_child']->value += $_smarty_tpl->tpl_vars['foo_child']->step, $_smarty_tpl->tpl_vars['foo_child']->iteration++) {
$_smarty_tpl->tpl_vars['foo_child']->first = $_smarty_tpl->tpl_vars['foo_child']->iteration === 1;$_smarty_tpl->tpl_vars['foo_child']->last = $_smarty_tpl->tpl_vars['foo_child']->iteration === $_smarty_tpl->tpl_vars['foo_child']->total;?>
                    <div class="timeline-item">
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
    <div id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carouselName']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel owl-theme owl-loading">
    	<?php $_smarty_tpl->_assignInScope('Num', array_chunk($_smarty_tpl->tpl_vars['formAtts']->value['slides'],$_smarty_tpl->tpl_vars['formAtts']->value['itempercolumn']));?>
    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Num']->value, 'sliders', false, NULL, 'manuloop', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sliders']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_manuloop']->value['index']++;
?> 
    	<div class="item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_manuloop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_manuloop']->value['index'] : null) == 0) {?> first<?php }?>">
    		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sliders']->value, 'slider');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
?>
    			<div class="block-carousel-container">
                    <div class="left-block">
                        <?php if ($_smarty_tpl->tpl_vars['slider']->value['link']) {?>
                        <a title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s','sprintf'=>array($_smarty_tpl->tpl_vars['slider']->value['title']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['is_open']) {?>target="_blank"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['slider']->value['image']) && !empty($_smarty_tpl->tpl_vars['slider']->value['image'])) {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value) && isset($_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) && $_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) {?>
                                                                        <img class="img-fluid lazyOwl" src="" data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['title'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"/>
                                <?php } else { ?>
                                    <img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['title'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"/>
                                <?php }?>
                            <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['slider']->value['link']) {?>                        </a>
                        <?php }?>
                    </div>
                    <div class="right-block">
                        <?php if (isset($_smarty_tpl->tpl_vars['slider']->value['title']) && !empty($_smarty_tpl->tpl_vars['slider']->value['title'])) {?>
                            <h3 class="title">
                                <?php if ($_smarty_tpl->tpl_vars['slider']->value['link']) {?>
                                <a title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s','sprintf'=>array($_smarty_tpl->tpl_vars['slider']->value['title']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['is_open']) {?>target="_blank"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php }?>
                                    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['title'],'html','UTF-8' ));?>

                                <?php if ($_smarty_tpl->tpl_vars['slider']->value['link']) {?>                                </a>
                                <?php }?>
                            </h3>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['slider']->value['descript']) && !empty($_smarty_tpl->tpl_vars['slider']->value['descript'])) {?>
                            <div class="descript"><?php echo rtrim($_smarty_tpl->tpl_vars['slider']->value['descript']);?>
</div>
                        <?php }?>
                    </div>
                </div>
    		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    	</div>
    	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
ap_list_functions.push(function(){
	$('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carouselName']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').imagesLoaded( function() {
		$('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carouselName']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').owlCarousel({
			items :             <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['items']) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['items']), ENT_QUOTES, 'UTF-8');
} else { ?>false<?php }?>,
			itemsDesktop :      <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']) && $_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']) {?>[1200,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktop']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
			itemsDesktopSmall : <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']) && $_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']) {?>[992,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsdesktopsmall']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
			itemsTablet :       <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']) && $_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']) {?>[768,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemstablet']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
			itemsMobile :       <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']) && $_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']) {?>[576,<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['itemsmobile']), ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>false<?php }?>,
			itemsCustom :       <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['itemscustom']) && $_smarty_tpl->tpl_vars['formAtts']->value['itemscustom']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['itemscustom'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>false<?php }?>,
			singleItem :        false,       // true : show only 1 item
			itemsScaleUp :      false,
			slideSpeed :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slidespeed']) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['slidespeed']), ENT_QUOTES, 'UTF-8');
} else { ?>200<?php }?>,        //  change speed when drag and drop a item
			paginationSpeed :   <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['paginationspeed']) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['paginationspeed']), ENT_QUOTES, 'UTF-8');
} else { ?>800<?php }?>,       // change speed when go next page
			autoPlay :          <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['autoplay']) {?>true<?php } else { ?>false<?php }?>,       // time to show each item
			stopOnHover :       <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['stoponhover']) {?>true<?php } else { ?>false<?php }?>,
			navigation :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['navigation']) {?>true<?php } else { ?>false<?php }?>,
			navigationText :    ["&lsaquo;", "&rsaquo;"],
			scrollPerPage :     <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['scrollperpage']) {?>true<?php } else { ?>false<?php }?>,
			pagination :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['pagination']) {?>true<?php } else { ?>false<?php }?>,       // show bullist
			paginationNumbers : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['paginationnumbers']) {?>true<?php } else { ?>false<?php }?>,       // show number
			responsive :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['responsive']) {?>true<?php } else { ?>false<?php }?>,
			lazyLoad :          <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) {?>true<?php } else { ?>false<?php }?>,
			lazyFollow :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['lazyfollow']) {?>true<?php } else { ?>false<?php }?>,       // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
			lazyEffect :        "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['lazyeffect'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
			autoHeight :        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['autoheight']) {?>true<?php } else { ?>false<?php }?>,
			mouseDrag :         <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['mousedrag']) {?>true<?php } else { ?>false<?php }?>,
			touchDrag :         <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['touchdrag']) {?>true<?php } else { ?>false<?php }?>,
			addClassActive :    true,
			direction:          <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['rtl']) {?>'rtl'<?php } else { ?>false<?php }?>,
			afterInit: OwlLoaded,
			afterAction : SetOwlCarouselFirstLast,
		});
	});
});
function OwlLoaded(el){
    el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
};

<?php echo '</script'; ?>
><?php }
}
