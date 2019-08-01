{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<div id="block_newsletter" class="block_newsletter block">
  <div class="box-title col-xl-7 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-sp-12">
    <h3 class="title" id="block-newsletter-label">
      <span class="text-footer">{l s='Join Our Newsletter' d='Shop.Theme.Global'}</span>
      <span class="text-bg">{l s='Newsletter' d='Shop.Theme.Global'}</span>
    </h3>
    {if $conditions}
      <p class="description">{$conditions}</p>
    {/if} 
  </div>
  <div class="block_content col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12 col-sp-12">
    <div class="row">
      <div class="col-xs-12">
        <form action="{$urls.pages.index}#footer" method="post">
          <div class="form-group">
            <div class="input-wrapper">
              <input
                name="email"
                type="email"
                value="{$value}"
                placeholder="{l s='Your email...' d='Shop.Theme.Global'}"
                aria-labelledby="block-newsletter-label"
              >
            </div>
            <button
              class="btn btn-outline"
              name="submitNewsletter"
              type="submit"
            >
              <i class="fa fa-envelope"></i><span>{l s='Sign in' d='Shop.Theme.Global'}</span>
            </button>
            <input type="hidden" name="action" value="0">
          </div>
        </form>
      </div>
      <div class="col-xs-12">
        {if $msg}
          <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
            {$msg}
          </p>
        {/if}
        {if isset($id_module)}
          {hook h='displayGDPRConsent' id_module=$id_module}
        {/if}
      </div>
    </div>
  </div>
</div>
