<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:45
  from '/var/www/html/Bosshopping/themes/leo_nunica/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0451cfd77_00995874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85fe5cebc5f7190d97914ef6d75f69de25a7ede7' => 
    array (
      0 => '/var/www/html/Bosshopping/themes/leo_nunica/templates/_partials/header.tpl',
      1 => 1564655392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c0451cfd77_00995874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5768067385d42c0451c7de8_90072320', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14371669045d42c0451ca0d4_44525873', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4449251915d42c0451cdc17_77220284', 'header_top');
}
/* {block 'header_banner'} */
class Block_5768067385d42c0451c7de8_90072320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_5768067385d42c0451c7de8_90072320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'] == 0) {?>
      <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'] == 0) {?>
      </div>
      <?php }?>
  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_14371669045d42c0451ca0d4_44525873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_14371669045d42c0451ca0d4_44525873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="topnav">
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'] == 0) {?>
      <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>
</div>
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'] == 0) {?>
      </div>
      <?php }?>
    </div>
    <div class="bottomnav">
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'] == 0) {?>
        <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>
</div>
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'] == 0) {?>
        </div>
      <?php }?>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_4449251915d42c0451cdc17_77220284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_4449251915d42c0451cdc17_77220284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'] == 0) {?>
          <div class="container">
        <?php }?>
      <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>
</div>
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'] == 0) {?>
          </div>
        <?php }?>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
