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
{$i = 1}
{foreach $blockFilter.selectables as $selectables}
{assign var=attr_img value=$img_ps_dir|cat:'co/':$selectables.id_attribute:'.jpg'}
<div class="selectable-item{if in_array($selectables.value, $blockFilter.selecteds)} selected{/if}{if ($maxFilterItems>0) && ($i>$maxFilterItems)} unvisible{/if}">
	{$i = $i+1}
	<input id="selectable_{$blockFilter.block_type}_{$selectables.value}" class="selectable-field selectable-field-color" type="button" value="{$selectables.value}" style="background-color:{$selectables.color};color:{$selectables.color};{if $attr_img|@file_get_contents}background-image:url('{$attr_img}');background-repeat:no-repeat;background-size:100%;font-size:0;background-position-y: -2px;{/if}"/>
	<label for="selectable_{$blockFilter.block_type}_{$selectables.value}">{$selectables.title} {if isset($selectables.count) && $showProductQuantity} ({$selectables.count|intval}){/if}</label>
</div>
{/foreach}