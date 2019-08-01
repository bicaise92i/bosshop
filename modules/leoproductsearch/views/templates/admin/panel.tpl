{* 
* @Module Name: Leo Product Search
* @Website: leotheme.com.com - prestashop template provider
* @author Leotheme <leotheme@gmail.com>
* @copyright  2007-2018 Leotheme
*}

<div class="panel form-horizontal">
	<div class="form-group">					
		<div class="col-lg-1">
			<a class="megamenu-correct-module btn btn-success" href="{$url_admin}&success=correct&correctmodule=1">
				<i class="icon-AdminParentPreferences"></i>{l s='Correct module' mod='leoproductsearch'}
			</a>
		</div>
		<label class="control-label col-lg-3">* {l s='Please backup the database before run correct module to safe' mod='leoproductsearch'}</label>							
	</div>
</div>


<div id="leoproductsearch-group">

	<div class="panel panel-default">
		<div class="panel-heading"><i class="icon-cogs"></i> {l s='Leo Product Search Global Config' mod='leoproductsearch'}</div>
		
		<div class="panel-content" id="leoquicklogin-setting">		
			<div class="tab-content">
				{$globalform}{* HTML form , no escape necessary *}
			</div>
		</div>	

	</div>
		
</div>