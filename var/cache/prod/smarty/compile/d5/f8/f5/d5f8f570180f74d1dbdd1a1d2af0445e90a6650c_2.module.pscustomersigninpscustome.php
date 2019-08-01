<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:45
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0451eabf7_36674223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1564655392,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d42c0451eabf7_36674223 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="userinfo-selector links dropdown js-dropdown popup-over <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>logged<?php }?>">
  <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
    <i class="icon icon-userinfo"></i>
    <span class="text-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <i class="icon-arrow-down fa fa-sort-down"></i>
 </a>
  <ul class="popup-content dropdown-menu user-info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <li>
        <a
          class="account dropdown-item" 
          href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
          title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
          rel="nofollow"
        >
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hello','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
      </li>
      <li>
        <a
          class="logout dropdown-item"
          href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
          rel="nofollow"
        >
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
      </li>
    <?php } else { ?>
      <li>
        <a
          class="signin dropdown-item"
          href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
          title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
          rel="nofollow"
        >
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
      </li>
    <?php }?>
    <li class="my-account">
      <a
        class="myacount dropdown-item"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
        rel="nofollow"
      >
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
      </a>
    </li>
    <?php if (Configuration::get('LEOFEATURE_ENABLE_PRODUCTWISHLIST')) {?>
    	<li>
        <a
          class="ap-btn-wishlist dropdown-item"
          href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'leofeature','controller'=>'mywishlist'),$_smarty_tpl ) );?>
"
          title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
          rel="nofollow"
        >
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <span class="ap-total-wishlist ap-total"></span></span>
        </a>
       </li>
    <?php }?>
    <?php if (Configuration::get('LEOFEATURE_ENABLE_PRODUCTCOMPARE')) {?>
    	<li>
        <a
          class="ap-btn-compare dropdown-item"
          href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'leofeature','controller'=>'productscompare'),$_smarty_tpl ) );?>
"
          title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
          rel="nofollow"
        >
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <span class="ap-total-compare ap-total"></span></span>
         </a>
      </li>
    <?php }?>
    <li class="check-out">
      <a
        class="checkout dropdown-item"
        href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cart','params'=>array('action'=>'show')),$_smarty_tpl ) );?>
"
        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
        rel="nofollow"
      >
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      </a>
    </li>
  </ul>
</div><?php }
}
