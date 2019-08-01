<style>

    .close_form_freecall{
        border-top-right-radius: {($settings['border_radius']-1)|escape:'htmlall':'UTF-8'}px;
    }

    {if !$settings['show_email'] && !$settings['show_comment']}
        @media (min-width: 992px) {
            .button_freecall{
                margin-top: 30px;
            }
        }
    {/if}
</style>

<div class="overlay_freecall" onclick="" style="
        background-color: {$settings['background_overlay']|escape:'htmlall':'UTF-8'};
        opacity: {$settings['opacity_overlay']|escape:'htmlall':'UTF-8'};">
</div>
<div class="freecall_form {if isset($is_mobile) && $is_mobile}is_mobile{/if}" style="
        border-radius: {$settings['border_radius']|escape:'htmlall':'UTF-8'}px;
        color: {$settings['color_form']|escape:'htmlall':'UTF-8'};">
    <div class="background_form" style="
            background-color: {$settings['background_form']|escape:'htmlall':'UTF-8'};
            opacity: {$settings['opacity_form']|escape:'htmlall':'UTF-8'};
            border-radius: {$settings['border_radius']|escape:'htmlall':'UTF-8'}px;">
    </div>
    <div class="content_form">
        <div class="header_freecall">
                <div class="title title1"  {if $click == 'false'} style="display: none;"  {/if}>
                     {$settings['title_form']|escape:'htmlall':'UTF-8'}
                </div>
                <div class="title title2"  {if $click !== 'false'} style="display: none;"  {/if}>
                     {$settings['title_question']|escape:'htmlall':'UTF-8'}
                </div>
            <div class="close_form_freecall" onclick="" style="color: {$settings['color_button']|escape:'htmlall':'UTF-8'};">
                <i class="close_icon" onclick=""></i>
            </div>
        </div>
        <div class="description_freecall desc1"  {if $click == 'false'} style="display: none;"  {/if}>
            {$settings['description']|escape:'htmlall':'UTF-8'}
        </div>
        <div class="description_freecall desc2"  {if $click !== 'false'} style="display: none;"  {/if}>
            <div class="description_question">{$settings['description_question']|escape:'htmlall':'UTF-8'}</div>
            <div class="button_question ">
                <a onclick=""  class="da-button da_button_freecall">{l s='Yes' mod='freecall'}</a>
                <a onclick=""  class="no-button no_button_freecall">{l s='No' mod='freecall'}</a>
                <div style="clear: both"></div>
            </div>
            <div style="clear: both"></div>
        </div>
        <div style="clear: both"></div>
        <div class="footer_freecall" style="{if $click == 'false'} display: none;{/if}">
            <div class="input_phone" >
                <div class="label_freecall">{l s='Phone Number' mod='freecall'}</div>
                <div class="icon">
                    <i class="icon-phone" >&#xE0B0;</i>
                </div>
                <input type="text" class="phone_user" {if $settings['show_email'] || $settings['show_comment'] || $settings['show_captcha']}style="width: 545px" {/if}>
            </div>





            <div class="button_freecall" style="  {if $settings['show_email'] || $settings['show_comment']  || $settings['show_captcha']}  width: 100%; text-align: center; {/if}">
                <button onclick="">
                    <span>
                        {l s='Call me' mod='freecall'}
                    </span>
                </button>
            </div>
            <div style="clear: both"></div>
        </div>
        <div style="clear: both"></div>
    </div>
    <div style="clear: both"></div>
</div>
<div style="clear: both"></div>
