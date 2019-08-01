<?php
/* Smarty version 3.1.33, created on 2019-08-01 13:25:19
  from 'module:leoslideshowviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42e83f012e05_55101849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1f970750dff499e163b1d902db88edb2395b21c' => 
    array (
      0 => 'module:leoslideshowviewstemplate',
      1 => 1564655392,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:./leoslideshow.tpl' => 1,
    'module:leoslideshow/views/templates/front/leoslideshow.tpl' => 1,
  ),
),false)) {
function content_5d42e83f012e05_55101849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11625836815d42e83f011385_65903242', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'content'} */
class Block_11625836815d42e83f011385_65903242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11625836815d42e83f011385_65903242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['leoslideshow_tpl']->value == 1) {?>
		<?php $_smarty_tpl->_subTemplateRender('file:./leoslideshow.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender('module:leoslideshow/views/templates/front/leoslideshow.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }
}
}
/* {/block 'content'} */
}
