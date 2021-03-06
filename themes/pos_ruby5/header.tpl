{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<html{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}>
	<head>
		<meta charset="utf-8" />
		<title>{$meta_title|escape:'html':'UTF-8'}</title>
		{if isset($meta_description) AND $meta_description}
			<meta name="description" content="{$meta_description|escape:'html':'UTF-8'}" />
		{/if}
		{if isset($meta_keywords) AND $meta_keywords}
			<meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}" />
		{/if}
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
		<link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
		{if isset($css_files)}
			{foreach from=$css_files key=css_uri item=media}
				{if $css_uri == 'lteIE9'}
					<!--[if lte IE 9]>
					{foreach from=$css_files[$css_uri] key=css_uriie9 item=mediaie9}
					<link rel="stylesheet" href="{$css_uriie9|escape:'html':'UTF-8'}" type="text/css" media="{$mediaie9|escape:'html':'UTF-8'}" />
					{/foreach}
					<![endif]-->
				{else}
					<link rel="stylesheet" href="{$css_uri|escape:'html':'UTF-8'}" type="text/css" media="{$media|escape:'html':'UTF-8'}" />
				{/if}
			{/foreach}
		{/if}
		{if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
			{$js_def}
			{foreach from=$js_files item=js_uri}
			<script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
			{/foreach}
		{/if}
		{$HOOK_HEADER}
		{*
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,600&amp;subset=latin,latin-ext" type="text/css" media="all" />
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
		*}
		<!--[if IE 8]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		<link rel="stylesheet" href="{$css_dir|escape:'html':'UTF-8'}custom-style.css" type="text/css" media="all" />
	</head>
	<body{if isset($page_name)} id="{$page_name|escape:'html':'UTF-8'}"{/if} itemscope itemtype="http://schema.org/WebPage" class="{if isset($page_name)}{$page_name|escape:'html':'UTF-8'}{/if}{if isset($body_classes) && $body_classes|@count} {implode value=$body_classes separator=' '}{/if}{if $hide_left_column} hide-left-column{else} show-left-column{/if}{if $hide_right_column} hide-right-column{else} show-right-column{/if}{if isset($content_only) && $content_only} content_only{/if} lang_{$lang_iso}">
	{if !isset($content_only) || !$content_only}
		{if isset($restricted_country_mode) && $restricted_country_mode}
			<div id="restricted-country">
				<p>{l s='You cannot place a new order from your country.'}{if isset($geolocation_country) && $geolocation_country} <span class="bold">{$geolocation_country|escape:'html':'UTF-8'}</span>{/if}</p>
			</div>
		{/if}
		<div id="page">
		<div id="page_inner">
			<div class="container layer_cart_container">
				{hook h="blockposition5"}
			</div>
			<div class="header-container scroll_menu">
				<header id="header">
					{hook h='displayHeader'}
					{capture name='displayNav'}{hook h='displayNav'}{/capture}
					{if $smarty.capture.displayNav}
						<div class="top-navigation">
							<div class="container clearfix clear">
								{if isset($id_shop) && $id_shop == 1}
								<div class="freeshipping-by-orderprice-text pull-left">
									{assign var='orderPriceForFreeShipping' value=20}
									{l s='Livraison express pour seulement'}&nbsp;<span>{convertPrice price=$orderPriceForFreeShipping|floatval}</span>
								</div>
								{/if}
								<div class="pull-right">
									{$smarty.capture.displayNav}
								</div>
							</div>
						</div>
					{/if}
					{capture name='displayBanner'}{hook h='displayBanner'}{/capture}
					{if $smarty.capture.displayBanner}
						<div class="banner">
							<div class="container">
								<div class="row">
									{$smarty.capture.displayBanner}
								</div>
							</div>
						</div>
					{/if}
					<div class="header_container container">
						<div class="row clearfix">
							<div id="header_logo" class="col-md-3">
								<a href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}">
									<img class="logo img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/>
								</a>
							</div>
							<div id="header_search" class="col-md-6 pull-left">
								{hook h='displayTop' mod="blocksearch"}
							</div>
							<div id="header_custom_info" class="col-md-3 pull-right">
								{hook h='displayTop' mod="cscustomize"}
							</div>
						</div>
					</div>
					<div id="header_cart">
						<div class="container clearfix clear">
							<div class="header_cart">
								{hook h='displayTop' mod="blockcart"}
							</div>
						</div>
					</div>
					<div id="header_menu">
						<div class="container">
							<div class="megamenu_container">
								{hook h="displayTop" mod="menupro"}
							</div>
						</div>
					</div>
				</header>
			</div>
			{if $page_name == 'index'}
				<div class="clearfix">
					<div id="slider_row" class="row">
						{capture name='displayTopColumn'}{hook h='displayTopColumn'}{/capture}
						{if $smarty.capture.displayTopColumn}
							<div id="top_column" class="center_column col-xs-12 col-sm-12">{$smarty.capture.displayTopColumn}</div>
						{/if}
					</div>
				</div>
				
				<div class="container clearfix">
					<div id="home_encart_row" class="row center_column clearfix">
						{capture name='displayHomeTop'}{hook h='displayHomeTop'}{/capture}
						{if $smarty.capture.displayHomeTop}
							{$smarty.capture.displayHomeTop}
						{/if}
					</div>
				</div>
				
				{if isset($featuredCatObts) && $featuredCatObts|count}
				<div class="container clearfix">
					<div id="home_categories" class="center_column clearfix">
						<div id="home_categories_list">
							<ul class="clearfix">
							{foreach from=$featuredCatObts item=cat}
								<li class="text-center">
									<div class="home_category-image">
										<a href="{$cat.link|escape:'html':'UTF-8'}" title="{$cat.name|escape:'html':'UTF-8'}" class="img text-center">
											<img  class="img-responsive" src="{$cat.image|escape:'html':'UTF-8'}" alt="{$cat.name|escape:'html':'UTF-8'}" />
										</a>
									</div>
									<h5 class="home_category-name" >
										{$cat.name|escape:'html':'UTF-8'}
									</h5>
									<a class="home_category-btn" href="{$cat.link|escape:'html':'UTF-8'}">
										{l s="Découvrir"}
									</a>
								</li>
							{/foreach}
							</ul>
						</div>
					</div>
				</div>
				{/if}
				
				<div class="lined-title">
					<h2>{l s="Les"} <i>+</i> {l s="de"} sun<span>device</span></h2>
				</div>
				
				<div id="sundevice_plus_header"  class="sundevice_plus container">
					<ul class="row clearfix">
						<li class="col-lg-3 text-center">
							<div class="sundevice_plus-image">
								<img  class="img-responsive" src="{$css_dir|escape:'html':'UTF-8'}../img/new-images/1-qualite-garantie.png" alt="{l s='Qualité garantie'}" />
							</div>
							<h5>{l s='Qualité garantie'}</h5>
						</li>
						<li class="col-lg-3 text-center">
							<div class="sundevice_plus-image">
								<img  class="img-responsive" src="{$css_dir|escape:'html':'UTF-8'}../img/new-images/2-meilleures-offres-du-marche.png" alt="{l s='Meilleures offres du marché'}" />
							</div>
							<h5>{l s='Meilleures offres'}<br/>{l s='du marché'}</h5>
						</li>
						<li class="col-lg-3 text-center">
							<div class="sundevice_plus-image">
								<img  class="img-responsive" src="{$css_dir|escape:'html':'UTF-8'}../img/new-images/livraison-rapide.png" alt="{l s='Livraison rapide'}" />
							</div>
							<h5>{l s='Livraison rapide'}</h5>
						</li>
						<li class="col-lg-3 text-center">
							<div class="sundevice_plus-image">
								<img  class="img-responsive" src="{$css_dir|escape:'html':'UTF-8'}../img/new-images/service-client.png" alt="{l s='Service client à l\'écoute & disponible'}" />
							</div>
							<h5>{l s="Service client à l'écoute & disponible"}</h5>
						</li>
					</ul>
				</div>

				{*hook h="bannerSequence"}
				<div class="clearfix"></div>
				{hook h="vegamenu"}
				{hook h="blockposition1"}
				{hook h="testimonials"}
				{hook h="blockposition2"}
				{hook h="blockposition3"}
				{hook h="blockposition4"}
				{hook h="productExtraRight"*}
			{/if}
			{*if isset($category)}
				{if $category->id AND $category->active}
					{if $category->description || $category->id_image}
							<div class="category_cover_content">
								<img src="{$link->getCatImageLink($category->link_rewrite, $category->id_image, 'category_default')|escape:'html':'UTF-8'}" alt="" class="category-cover-image img-responsive">
								<div class="text_inline">
									<span class="cat-name fontcustom1 hidden-xs">{$category->name|escape:'html':'UTF-8'}{if isset($categoryNameComplement)}&nbsp;{$categoryNameComplement|escape:'html':'UTF-8'}{/if}</span>
									{include file="$tpl_dir./breadcrumb.tpl"}
								</div>
							</div>
					{else}
						{include file="$tpl_dir./breadcrumb.tpl"}
					{/if}
				{/if}
			{/if*}
			{*if $page_name !='index' && $page_name !='pagenotfound' && $page_name !='category' && $page_name !='product'}
				{include file="$tpl_dir./breadcrumb.tpl"}
			{/if*}
			<div class="columns-container">
				{if $page_name =='index'}
					<div class="lined-title">
						<h2>{l s="Top des ventes"}</h2>
					</div>
				{/if}

				<div id="columns" class="container">
					<div class="row">
						{if isset($left_column_size) && !empty($left_column_size)}
						<div id="left_column" class="column col-xs-12 col-sm-{$left_column_size|intval}">{$HOOK_LEFT_COLUMN}</div>
						{/if}
						{if isset($left_column_size) && isset($right_column_size)}{assign var='cols' value=(12 - $left_column_size - $right_column_size)}{else}{assign var='cols' value=12}{/if}
						<div id="center_column" class="center_column col-xs-12 col-sm-{$cols|intval}">
	{/if}
