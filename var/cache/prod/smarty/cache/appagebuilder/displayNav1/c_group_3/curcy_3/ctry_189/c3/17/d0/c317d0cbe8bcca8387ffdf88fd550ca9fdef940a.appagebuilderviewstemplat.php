<?php
/* Smarty version 3.1.33, created on 2019-08-01 10:34:45
  from 'module:appagebuilderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d42c0451f34c7_01970498',
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
function content_5d42c0451f34c7_01970498 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
<div class="wrapper"      >
	 <div class="container">
    <div        class="row box-top-header ApRow  has-bg bg-boxed"
	        data-bg=" no-repeat"                style="background: no-repeat;"        >
                                            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div    class="col-xl-4 col-lg-3 col-md-6 col-sm-7 col-xs-8 col-sp-8 left-top-header language-hidden-flag ApColumn "
	    >
                    <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<div class="currency-selector dropdown js-dropdown popup-over" id="currency-selector-label">
  <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title"  title="Devise" aria-label="menu déroulant des devises">
    <i class="icon icon-currency"></i>
    <span class="text-title"><span class="hidden-xs-down title-hidden">Devise:</span>CFA XOF</span>
    <i class="icon-arrow-down fa fa-sort-down"></i>
  </a>
  <ul class="popup-content dropdown-menu" aria-labelledby="currency-selector-label">  
    <li >
    <a title="euro" rel="nofollow" href="http://localhost/Bosshopping/index.php?id_lang=1&amp;SubmitCurrency=1&amp;id_currency=1" class="dropdown-item">€ EUR</a>
  </li>
    <li  class="current" >
    <a title="franc CFA (BCEAO)" rel="nofollow" href="http://localhost/Bosshopping/index.php?id_lang=1&amp;SubmitCurrency=1&amp;id_currency=3" class="dropdown-item">CFA XOF</a>
  </li>
    </ul>
</div><!-- @file modules\appagebuilder\views\templates\hook\ApModule -->

    </div><!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
<div    class="col-xl-8 col-lg-9 col-md-6 col-sm-5 col-xs-4 col-sp-4 right-top-header ApColumn "
	    >
                    <!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<div class="userinfo-selector links dropdown js-dropdown popup-over logged">
  <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title" title="Compte">
    <i class="icon icon-userinfo"></i>
    <span class="text-title">Compte</span>
    <i class="icon-arrow-down fa fa-sort-down"></i>
 </a>
  <ul class="popup-content dropdown-menu user-info">
          <li>
        <a
          class="account dropdown-item" 
          href="http://localhost/Bosshopping/index.php?controller=my-account"
          title="Voir mon compte client"
          rel="nofollow"
        >
          <span>Bonjour bicaise diop</span>
        </a>
      </li>
      <li>
        <a
          class="logout dropdown-item"
          href="http://localhost/Bosshopping/index.php?mylogout="
          rel="nofollow"
        >
          <span>Déconnexion</span>
        </a>
      </li>
        <li class="my-account">
      <a
        class="myacount dropdown-item"
        href="http://localhost/Bosshopping/index.php?controller=my-account"
        title="Mon compte"
        rel="nofollow"
      >
        <span>Mon compte</span>
      </a>
    </li>
        	<li>
        <a
          class="ap-btn-wishlist dropdown-item"
          href="//localhost/Bosshopping/index.php?fc=module&module=leofeature&controller=mywishlist"
          title="liste"
          rel="nofollow"
        >
          <span>liste <span class="ap-total-wishlist ap-total"></span></span>
        </a>
       </li>
            	<li>
        <a
          class="ap-btn-compare dropdown-item"
          href="//localhost/Bosshopping/index.php?fc=module&module=leofeature&controller=productscompare"
          title="Compare"
          rel="nofollow"
        >
          <span>Compare <span class="ap-total-compare ap-total"></span></span>
         </a>
      </li>
        <li class="check-out">
      <a
        class="checkout dropdown-item"
        href="//localhost/Bosshopping/index.php?controller=cart&action=show"
        title="Check-out"
        rel="nofollow"
      >
        <span>Check-out</span>
      </a>
    </li>
  </ul>
</div>
    </div>            </div>
</div>
</div>
    <?php }
}
