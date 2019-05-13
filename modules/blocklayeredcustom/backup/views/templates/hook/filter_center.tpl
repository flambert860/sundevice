{**
* 2015-2017 Crystals Services
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
*  @author    Crystals Services Sarl <contact@crystals-services.com>
*  @copyright 2015-2017 Crystals Services Sarl
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of Crystals Services Sarl
*}
<script type="text/javascript">
	var orderColumnTypeConst = {$orderColumnTypeConst|json_encode};
	var orderWayConst = {$orderWayConst|json_encode};
</script>
{if $hasNoCombinations}
	{l s='There are no combinations' mod='blocklayeredcustom'}
{else}
<div class="row attributes-filter-head">
	<div class="col-lg-3 products-block">
        <h3 class="filter-title1">{l s='Sort By :' mod='blocklayeredcustom'}</h3>
	</div>
	<div class="col-lg-5 attributes-groups-block">
		{include file="{$templateFolder}attribute_groups_list.tpl"}
	</div>
	<div class="col-lg-4 price-filter-block">
        {$priceOrderWayAsc = false}
		{$priceOrderWayDesc = false}
		{$priceOrderWay = false}
		{$priceOrderWayLabel = {l s='Price:' mod='blocklayeredcustom'}}
		{if ($selectedOrderColumnType==$orderColumnTypeConst.ORDER_COLUMN_TYPE_PRICE) && ($selectedOrderWay==$orderWayConst.ORDER_WAY_ASC)}
			{$priceOrderWayAsc = true}
			{$priceOrderWay = $orderWayConst.ORDER_WAY_ASC}
			{$priceOrderWayLabel = {l s='Price: Low to high' mod='blocklayeredcustom'}}
		{elseif ($selectedOrderColumnType==$orderColumnTypeConst.ORDER_COLUMN_TYPE_PRICE) && ($selectedOrderWay==$orderWayConst.ORDER_WAY_DESC)}
			{$priceOrderWayDesc = true}
			{$priceOrderWay = $orderWayConst.ORDER_WAY_DESC}
			{$priceOrderWayLabel = {l s='Price: High to low' mod='blocklayeredcustom'}}
		{/if}
        <div class="dropdown attribute-order field-attribute-order{if $selectedOrderColumnType==$orderColumnTypeConst.ORDER_COLUMN_TYPE_PRICE} active{/if}" data-way-selected="{$priceOrderWay|intval}">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
			  <span class="selected-name">{$priceOrderWayLabel}</span>
              <i class="fa fa-angle-down"></i>
          </button>
		  
          <ul class="dropdown-menu">
		      <li><a href="#" data-name-order-way="{l s='Price:' mod='blocklayeredcustom'}" data-way="{$orderWayConst.ORDER_WAY_NONE}" class="order-item {if !$priceOrderWayAsc && $priceOrderWayDesc}active{/if}">{l s='Price:' mod='blocklayeredcustom'}</a></li>
              <li><a href="#" data-name-order-way="{l s='Price: Low to high' mod='blocklayeredcustom'}" data-way="{$orderWayConst.ORDER_WAY_ASC}" class="order-item {if $priceOrderWayAsc}active{/if}">{l s='Price: Low to high' mod='blocklayeredcustom'}</a></li>
              <li><a href="#" data-name-order-way="{l s='Price: High to low' mod='blocklayeredcustom'}" data-way="{$orderWayConst.ORDER_WAY_DESC}" class="order-item {if $priceOrderWayDesc}active{/if}">{l s='Price: High to low' mod='blocklayeredcustom'}</a></li>
          </ul>
        </div>
	</div>
	<input type="hidden" class="selected-order-way" value="{$selectedOrderWay|intval}"/>
	<input type="hidden" class="selected-order-column" value="{$selectedOrderColumn|intval}"/>
	<input type="hidden" class="selected-order-column-type" value="{$selectedOrderColumnType|intval}"/>
</div>
<div class="attributes-filter-content">
	<div class="loading-attributes"  style="display:none;">
		<img src="{$blcImgDir}loader.gif" alt="">
		<br>{l s='Loading...' mod='blocklayeredcustom'}
	</div>
	<div class="attributes-list grid">
		{include file="{$templateFolder}product_attributes_list.tpl"}
	</div>
	<div class="attributes-load-more">
		<a href="#" class="load-more-action"><i class="load-more-icon fa fa-refresh icone_refresh" aria-hidden="true"></i>{l s='Load more products' mod='blocklayeredcustom'}</a>
	</div>
</div>
{/if}