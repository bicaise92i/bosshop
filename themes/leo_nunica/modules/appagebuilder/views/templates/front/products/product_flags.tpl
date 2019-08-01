{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->
{block name='product_flags'}
	<ul class="product-flags">
	  	{foreach from=$product.flags item=flag}
	  		{if $flag.type != 'new'}
	    		<li class="product-flag {$flag.type}">{$flag.label}</li>
	    	{/if}
	  	{/foreach}
	</ul>
{/block}
