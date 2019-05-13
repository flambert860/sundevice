{*
* 2007-2018 PrestaShop
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if ($is_seller == 0 AND $customer_can_be_seller)}
    <li>
        <a class="open_seller_account" title="{l s='Create seller account' mod='jmarketplace'}" href="{$link->getModuleLink('jmarketplace', 'addseller', array(), true)|escape:'html':'UTF-8'}">
            <i class="icon-user fa fa-user"></i>
            <span>{l s='Create seller account' mod='jmarketplace'}</span>
        </a>
    </li>  
{else if $is_seller == 1 AND $is_active_seller == 0}
    <li>
        <a class="open_seller_account" href="#">
            <i class="icon-user fa fa-user"></i>
            <span>{l s='Your seller account is pending approval.' mod='jmarketplace'}</span>
        </a>
    </li>  
{else if $is_seller == 1 AND $is_active_seller == 1}  
    <li>
        <a class="open_seller_account" title="{l s='Your seller account' mod='jmarketplace'}" href="{$link->getModuleLink('jmarketplace', 'selleraccount', array(), true)|escape:'html':'UTF-8'}">
            <i class="icon-user fa fa-user"></i>
            <span>{l s='Seller account' mod='jmarketplace'}</span>
        </a>
    </li> 
{/if}
{if ($show_contact)}
    <li>
        <a title="{l s='Seller messages' mod='jmarketplace'}" href="{$link->getModuleLink('jmarketplace', 'contactseller', array(), true)|escape:'html':'UTF-8'}">
            <i class="icon-envelope fa fa-envelope-o"></i>
            <span>{l s='Seller messages' mod='jmarketplace'}</span>
        </a>
    </li>
{/if}
{if $show_seller_favorite}
    <li>
        <a title="{l s='Favorite sellers' mod='jmarketplace'}" href="{$link->getModuleLink('jmarketplace', 'favoriteseller', array(), true)|escape:'html':'UTF-8'}">
            <i class="icon-heart fa fa-heart"></i>
            <span>{l s='Favorite sellers' mod='jmarketplace'}</span>
        </a>
    </li>
{/if}