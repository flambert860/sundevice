<!-- Block Newsletter module-->
<div class="block-newsletter">
	<div class="container">
		<h2>Inscrivez-vous à notre newsletter hebdomadaire</h2>
		<p>Entrez votre adresse email dans le champs ci-après et recevez nos annonces et informations privilégiées.</p>
		<form id="newsletter_form" class="newsletter_form" action="{$link->getPageLink('index', null, null, null, false, null, true)|escape:'html':'UTF-8'}" method="post">
			<div class="form-group{if isset($msg) && $msg } {if $nw_error}form-error{else}form-ok{/if}{/if}">
				<input type="hidden" name="action" value="0" />
				<input  class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{if isset($msg) && $msg}{$msg}{elseif isset($value) && $value}{$value}{else}{l s='Votre adresse mail...' mod='blocknewsletter'}{/if}"/>
				<input type="submit" class="btn button" name="submitNewsletter" value="{l s='S\'inscrire' mod='blocknewsletter'}"/>
			</div>
		</form>
		{hook h="displayBlockNewsletterBottom" from='blocknewsletter'}
	</div>
</div>
<!-- /Block Newsletter module-->
{strip}
{if isset($msg) && $msg}
{addJsDef msg_newsl=$msg|@addcslashes:'\''}
{/if}
{if isset($nw_error)}
{addJsDef nw_error=$nw_error}
{/if}
{addJsDefL name=placeholder_blocknewsletter}{l s='Enter your e-mail' mod='blocknewsletter' js=1}{/addJsDefL}
{if isset($msg) && $msg}
	{addJsDefL name=alert_blocknewsletter}{l s='Newsletter : %1$s' sprintf=$msg js=1 mod="blocknewsletter"}{/addJsDefL}
{/if}
{/strip}