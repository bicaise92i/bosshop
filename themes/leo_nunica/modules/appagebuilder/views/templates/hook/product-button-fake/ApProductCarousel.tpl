{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->
{if isset($formAtts.lib_has_error) && $formAtts.lib_has_error}
    {if isset($formAtts.lib_error) && $formAtts.lib_error}
        <div class="alert alert-warning leo-lib-error">{$formAtts.lib_error}</div>
    {/if}
{else}
    {assign var=_expand_id value=10|mt_rand:100000}
    <div id="product_button_fake_{$_expand_id}" class="block products_block exclusive appagebuilder {(isset($formAtts.class)) ? $formAtts.class : ''|escape:'html':'UTF-8'}">
        {($apLiveEdit)?$apLiveEdit:'' nofilter}{* HTML form , no escape necessary *}
        {if isset($formAtts.title)&&!empty($formAtts.title)}
            <h4 class="title_block">
                {$formAtts.title|rtrim|escape:'html':'UTF-8'}
            </h4>
        {/if}
        {if isset($formAtts.sub_title) && $formAtts.sub_title}
            <div class="sub-title-widget">{$formAtts.sub_title nofilter}</div>
        {/if}
        <div class="block_content">	
            {if ($formAtts.carousel_type != "boostrap" && $formAtts.navigation) || $formAtts.carousel_type == "boostrap"}
                <div class="group-button-carousel">
                    <div class="button-left">
                        <i class="icon-prev"></i>
                        <span>{l s='Previous Deal' d='Shop.Theme.Global'}</span>
                    </div>
                    <div class="button-right">
                        <span>{l s='Next Deal' d='Shop.Theme.Global'}</span>
                        <i class="icon-next"></i>
                    </div>
                </div>
            {/if}
			{if !empty($products)}
                {if $formAtts.carousel_type == "slickcarousel"}
                    {assign var=leo_include_file value=$leo_helper->getTplTemplate('ProductSlickCarousel.tpl', $formAtts['override_folder'])}
                    {include file=$leo_include_file}
                {else}
    				{if $formAtts.carousel_type == "boostrap"}
    					{assign var=leo_include_file value=$leo_helper->getTplTemplate('ProductCarousel.tpl', $formAtts['override_folder'])}
    					{include file=$leo_include_file}
    				{else}
    					{assign var=leo_include_file value=$leo_helper->getTplTemplate('ProductOwlCarousel.tpl', $formAtts['override_folder'])}
    					{include file=$leo_include_file}
    				{/if}
                {/if}
			{else}
				<p class="alert alert-info">{l s='No products at this time.' mod='appagebuilder'}</p>	
			{/if}
        </div>
        {($apLiveEditEnd)?$apLiveEditEnd:'' nofilter}{* HTML form , no escape necessary *}
    </div>
{/if}

<script  type="text/javascript">
    ap_list_functions.push(function(){
        $("#product_button_fake_{$_expand_id} .group-button-carousel .button-left").click(function() {
            {if $formAtts.carousel_type == "boostrap"}
                $('#{$carouselName|escape:'html':'UTF-8'}').carousel('prev');
            {else}
                $('#{$carouselName|escape:'html':'UTF-8'}').trigger('owl.prev');
            {/if}
        });

        $("#product_button_fake_{$_expand_id} .group-button-carousel .button-right").click(function() {
            {if $formAtts.carousel_type == "boostrap"}
                $('#{$carouselName|escape:'html':'UTF-8'}').carousel('next');
            {else}
                $('#{$carouselName|escape:'html':'UTF-8'}').trigger('owl.next');
            {/if}
        });
    });
</script>           