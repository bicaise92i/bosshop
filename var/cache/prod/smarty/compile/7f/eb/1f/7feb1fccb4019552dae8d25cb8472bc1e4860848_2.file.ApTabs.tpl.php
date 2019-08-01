<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:41
  from '/var/www/html/Bosshopping/themes/leo_nunica/modules/appagebuilder/views/templates/hook/product-tabs/ApTabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0417e1209_87445639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7feb1fccb4019552dae8d25cb8472bc1e4860848' => 
    array (
      0 => '/var/www/html/Bosshopping/themes/leo_nunica/modules/appagebuilder/views/templates/hook/product-tabs/ApTabs.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c0417e1209_87445639 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- @file modules\appagebuilder\views\templates\hook\ApTabs -->
<?php if ($_smarty_tpl->tpl_vars['tab_name']->value == 'ApTabs') {
echo '<script'; ?>
 type="text/javascript">
    ap_list_functions.push(function(){
        <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['fade_effect']) && $_smarty_tpl->tpl_vars['formAtts']->value['fade_effect']) {?>
            // ACTION USE EFFECT
            $("#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .tab-pane").addClass("fade");
        <?php }?>
            
        <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['active_tab'] >= 0) {?>
            // ACTION SET ACTIVE
            $('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .nav a:eq(<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['active_tab'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)').trigger('click');
        <?php }?>

        $(document).ready(function() {
            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['is_toggle']) && $_smarty_tpl->tpl_vars['formAtts']->value['is_toggle']) {?>
                $("#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .nav a").click(function (e) {
                    e.preventDefault();
                    if(!$(this).hasClass("active")) {
                        $("#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .nav-tabs li a").removeClass("active");
                    }
                    $(this).toggleClass("active");
                    if($(this).hasClass("active")) {
                        $("#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .tab-pane").addClass("in");
                        $($(this).attr("href")).addClass("in active");
                    } else {
                        $($(this).attr("href")).removeClass("in active");
                    }
                });
            <?php } else { ?>
                $('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .nav a').click(function (e) {
                    e.preventDefault();
                    $(this).tab('show');
                });
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['active_tab'] >= 0) {?>
                apTabHref = $('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .nav a:eq(<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['active_tab'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)').tab('show');
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['fade_effect']) && $_smarty_tpl->tpl_vars['formAtts']->value['fade_effect']) {?>
                $("#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .tab-pane").addClass("fade");
                $($(apTabHref).attr("href")).addClass("in");
            <?php }?>
            
            ////js toggle tabs
            $('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ul.nav-tabs li a').click(function(){
                if($(this).hasClass('active'))
                {
                    var tab_active = $(this).attr('data-tab');;
                    $('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .product-tab-option option[value="' + tab_active + '"]').prop('selected', true);
                }
            });
            
            $('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .product-tab-option').change(function(){
                var option_checked = $(this).find(':selected').attr('value');
                $('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ul.nav-tabs li a[data-tab="' + option_checked + '"]').trigger('click');
            });

            //show tab when first load mobile
            $('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ul.nav-tabs li').each(function(){
                if($(this).hasClass('active')){
                    $('#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 .product-tab-option option.' + $(this).find('a').attr('value')).attr('selected','selected');
                }
            });

        });
    });
<?php echo '</script'; ?>
>
<div<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['id'])) {?> id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ApTab <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">

    <?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>

    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
        <h4 class="title_block"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
    <?php }?>
    <!-- toggle tab -->
    <p class="box-select">
        <select class="product-tab-option form-control">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subTabContent']->value, 'subTab', false, NULL, 'tab_option', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_tab_option']->value['index']++;
?>
                <option  value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_tab_option']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tab_option']->value['index'] : null) == 0) {?>selected="selected"<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </p>
    <!-- end toggle tab -->
    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_type'] == 'tabs-left') {?>
        <div class="block_content">
            <div class="row">
                <ul class="nav nav-tabs col-xl-2 col-lg-2-4 col-md-12 col-sm-12 col-xs-12 col-sp-12" role="tablist">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subTabContent']->value, 'subTab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->value) {
?>
                        <li class="nav-item <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['subTab']->value['css_class']) ? $_smarty_tpl->tpl_vars['subTab']->value['css_class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            <a href="#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="nav-link <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" role="tab" data-tab="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab">
                                <div class="left-block">
                                    <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['image']) && $_smarty_tpl->tpl_vars['subTab']->value['image']) {?><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subTab']->value['title'], ENT_QUOTES, 'UTF-8');?>
"/><?php }?>
                                </div>
                                <div class="right-block">
                                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                    <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['sub_title']) && $_smarty_tpl->tpl_vars['subTab']->value['sub_title']) {?>
                                        <span class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['subTab']->value['sub_title'];?>
</span>
                                    <?php }?>
                                </div>
                            </a>
                        </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <div class="tab-content col-xl-10 col-lg-9-6 col-md-12 col-sm-12 col-xs-12 col-sp-12">
                    <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
                </div>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_type'] == 'tabs-right') {?>
        <div class="block_content">
            <div class="row">
                <div class="tab-content col-xl-10 col-lg-9-6 col-md-12 col-sm-12 col-xs-12 col-sp-12">
                    <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
                </div>
                <ul class="nav nav-tabs col-xl-2 col-lg-2-4 col-md-12 col-sm-12 col-xs-12 col-sp-12" role="tablist">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subTabContent']->value, 'subTab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->value) {
?>
                        <li class="nav-item <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['subTab']->value['css_class']) ? $_smarty_tpl->tpl_vars['subTab']->value['css_class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            <a href="#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="nav-link <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" role="tab" data-tab="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab">
                                <div class="left-block">
                                    <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['image']) && $_smarty_tpl->tpl_vars['subTab']->value['image']) {?><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subTab']->value['title'], ENT_QUOTES, 'UTF-8');?>
"/><?php }?>
                                </div>
                                <div class="right-block">
                                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                    <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['sub_title']) && $_smarty_tpl->tpl_vars['subTab']->value['sub_title']) {?>
                                        <span class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['subTab']->value['sub_title'];?>
</span>
                                    <?php }?>
                                </div>
                            </a>
                        </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_type'] == 'tabs-below') {?>
        <div class="block_content">
            <div class="tab-content">
                <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
            </div>
            <ul class="nav nav-tabs" role="tablist">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subTabContent']->value, 'subTab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->value) {
?>
                    <li class="nav-item <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['subTab']->value['css_class']) ? $_smarty_tpl->tpl_vars['subTab']->value['css_class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                        <a href="#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="nav-link <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" role="tab" data-tab="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab">
                            <div class="left-block">
                                <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['image']) && $_smarty_tpl->tpl_vars['subTab']->value['image']) {?><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subTab']->value['title'], ENT_QUOTES, 'UTF-8');?>
"/><?php }?>
                            </div>
                            <div class="right-block">
                                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['sub_title']) && $_smarty_tpl->tpl_vars['subTab']->value['sub_title']) {?>
                                    <span class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['subTab']->value['sub_title'];?>
</span>
                                <?php }?>
                            </div>
                        </a>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['tab_type'] == 'tabs-top') {?>
        <ul class="nav nav-tabs " role="tablist">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subTabContent']->value, 'subTab');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subTab']->value) {
?>
                <li class="nav-item <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['subTab']->value['css_class']) ? $_smarty_tpl->tpl_vars['subTab']->value['css_class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    <a href="#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="nav-link <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" role="tab" data-tab="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab">
                        <div class="left-block">
                            <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['image']) && $_smarty_tpl->tpl_vars['subTab']->value['image']) {?><img class="img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subTab']->value['title'], ENT_QUOTES, 'UTF-8');?>
"/><?php }?>
                        </div>
                        <div class="right-block">
                            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subTab']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                            <?php if (isset($_smarty_tpl->tpl_vars['subTab']->value['sub_title']) && $_smarty_tpl->tpl_vars['subTab']->value['sub_title']) {?>
                                <span class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['subTab']->value['sub_title'];?>
</span>
                            <?php }?>
                        </div>
                    </a>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <div class="clearfix border-title"></div>
        <div class="block_content">
            <div class="tab-content">
                <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
            </div>
        </div>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['tab_name']->value == 'ApTab') {?>
    <div id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tabID']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="tab-pane">
        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
    </div>
<?php }
}
}
