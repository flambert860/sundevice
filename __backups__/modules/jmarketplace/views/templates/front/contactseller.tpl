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

{capture name=path}
    <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}">
        {l s='My account' mod='jmarketplace'}
    </a>
    <span class="navigation-pipe">
        {$navigationPipe|escape:'htmlall':'UTF-8'}
    </span>
    <span class="navigation_page">
        {l s='Messages' mod='jmarketplace'}
    </span>
{/capture}

{if isset($confirmation) && $confirmation}
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success">{l s='Your issue has been successfully sent.' mod='jmarketplace'}</div>
        </div>
    </div>
{else}
    {if isset($errors) && $errors}
        {include file="./errors.tpl"}
    {/if}
{/if}

<div class="box">
    {if $logged}
        {if $id_seller == 0 AND $id_product == 0}
            {if $incidences && count($incidences)}
                <h1 class="page-subheading">
                    {l s='Messages' mod='jmarketplace'}
                </h1>
                <div class="table-responsive">
                    <table id="order-list" class="table table-bordered footab">
                        <thead>
                            <tr>
                                <th class="first_item">
                                    {l s='Date add' mod='jmarketplace'}
                                </th>
                                <th class="first_item">
                                    {l s='Date upd' mod='jmarketplace'}
                                </th>
                                <th class="item">
                                    {l s='Incidence reference' mod='jmarketplace'}
                                </th>
                                <th class="item_last">
                                    {l s='Order ID - Ref' mod='jmarketplace'}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$incidences item=incidence name=jmarketplace}
                                <tr>
                                    <td class="first_item{if ($incidence.messages_not_readed > 0)} not_readed{/if}">
                                        <i class="icon-calendar fa fa-calendar"></i> 
                                        - {dateFormat date=$incidence.date_add full=0} 
                                        - <i class="icon-time fa fa-clock-o"></i> 
                                        {$incidence.date_add|escape:'htmlall':'UTF-8'|substr:11:5}
                                    </td>
                                    <td class="item{if ($incidence.messages_not_readed > 0)} not_readed{/if}">
                                        <i class="icon-calendar fa fa-calendar"></i> 
                                        - {dateFormat date=$incidence.date_upd full=0} 
                                        - <i class="icon-time fa fa-clock-o"></i> 
                                        {$incidence.date_upd|escape:'htmlall':'UTF-8'|substr:11:5}
                                    </td>
                                    <td class="item{if ($incidence.messages_not_readed > 0)} not_readed{/if}">
                                        {$incidence.reference|escape:'htmlall':'UTF-8'}
                                    </td>
                                    {if $incidence.id_order == 0}
                                        <td class="item{if ($incidence.messages_not_readed > 0)} not_readed{/if}">
                                            {l s='No order' mod='jmarketplace'}
                                        </td>
                                    {else}
                                        <td class="item{if ($incidence.messages_not_readed > 0)} not_readed{/if}">
                                            {$incidence.id_order|intval} 
                                            - {$incidence.order_ref|escape:'htmlall':'UTF-8'}
                                        </td>
                                    {/if}
                                    <td class="last_item">
                                        <a class="btn btn-xs open_incidence" data="{$incidence.id_seller_incidence|intval}" href="#">
                                            <i class="fa fa-eye"></i> 
                                            {l s='View' mod='jmarketplace'}
                                        </a>
                                    </td> 
                                </tr>
                                <tr id="incidence_{$incidence.id_seller_incidence|intval}" style="display:none;">
                                    <td class="incidence_messages" colspan="7">
                                        {if $incidence.id_product != 0}
                                            <h3>
                                                {l s='Messages about' mod='jmarketplace'} 
                                                {$incidence.product_name|escape:'htmlall':'UTF-8'}
                                            </h3>
                                        {else}
                                            <h3>
                                                {l s='Messages' mod='jmarketplace'}
                                            </h3>
                                        {/if}
                                        {foreach from=$incidence.messages item=message name=messages}
                                            <div class="message{if $message.id_seller != 0} seller{else if $message.id_customer != 0} customer{else} employee{/if}">
                                                <div class="author">
                                                    {if $message.id_customer != 0}
                                                        {l s='Customer' mod='jmarketplace'} 
                                                        {$message.customer_firstname|escape:'html':'UTF-8'} 
                                                        {$message.customer_lastname|escape:'html':'UTF-8'}
                                                    {else if $message.id_seller != 0}
                                                        {l s='Seller' mod='jmarketplace'} 
                                                        {$message.seller_name|escape:'html':'UTF-8'} 
                                                    {else}
                                                        {l s='Administrator' mod='jmarketplace'} 
                                                        {$message.employee_firstname|escape:'html':'UTF-8'} 
                                                        {$message.employee_lastname|escape:'html':'UTF-8'}
                                                    {/if}
                                                    - <i class="icon-calendar fa fa-calendar"></i> 
                                                    - {dateFormat date=$message.date_add full=0} 
                                                    - <i class="icon-time fa fa-clock-o"></i> 
                                                    {$message.date_add|escape:'htmlall':'UTF-8'|substr:11:5}
                                                </div>
                                                <div class="description">
                                                    {$message.description|nl2br nofilter} {*This html content*}
                                                </div>
                                                {if $message.attachment}
                                                    <div class="attachment">
                                                        <a href="{$base_dir|escape:'htmlall':'UTF-8'}modules/jmarketplace/attachment/{$message.id_seller_incidence|intval}/{$message.attachment|escape:'html':'UTF-8'}" target="_blank">
                                                            <i class="fa fa-paperclip"></i> 
                                                            {$message.attachment|escape:'html':'UTF-8'}
                                                        </a>
                                                    </div>
                                                {/if}
                                            </div>
                                        {/foreach}    
                                        <form action="{$url_contact_seller|escape:'html':'UTF-8'}" method="post" class="std" enctype="multipart/form-data">
                                            <input type="hidden" name="id_incidence" id="id_incidence" value="{$message.id_seller_incidence|intval}" />
                                            <fieldset>
                                                <div class="form-group">
                                                    <label for="description">
                                                        {l s='Add response' mod='jmarketplace'} 
                                                    </label>
                                                    <textarea class="form-control" name="description" cols="40" rows="7"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" name="submitResponse" class="btn btn-default button button-medium">
                                                        <span>
                                                            {l s='Send' mod='jmarketplace'} 
                                                            <i class="icon-chevron-right right fa fa-chevron-right"></i>
                                                        </span>
                                                    </button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </td> 
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            {else}
                <p class="alert alert-info">
                    {l s='There are not messages.' mod='jmarketplace'}
                </p>
            {/if}
        {/if}
        
        <div class="form_incidences" style="width:100%; display:block;">
            <form action="{$url_contact_seller|escape:'html':'UTF-8'}" method="post" class="std" enctype="multipart/form-data">
                <fieldset>
                    {if ($num_orders > 0 AND $id_seller == 0 AND $id_product == 0)}
                        <h1 class="page-subheading">
                            {l s='Add new message' mod='jmarketplace'}
                        </h1>
                        <div class="required form-group">
                            <label for="order">
                                {l s='Order/Product' mod='jmarketplace'} 
                            </label>
                            <select id="id_order_product" class="form-control" name="id_order_product">
                                {foreach from=$orders_products item=order}
                                    <option value="{$order.id_order_product|escape:'html':'UTF-8'}">
                                        {$order.order_reference|escape:'html':'UTF-8'} 
                                        - {$order.order_date_add|escape:'html':'UTF-8'} 
                                        - {$order.product_name|escape:'html':'UTF-8'}
                                    </option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">
                                {l s='Message' mod='jmarketplace'} 
                            </label>
                            <textarea class="form-control" name="description" cols="40" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="fileUpload">
                                {l s='File attachment' mod='jmarketplace'}
                            </label>
                            <input type="file" name="attachment" class="form-control" />
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submitAddIncidence" class="btn btn-default button button-medium">
                                <span>
                                    {l s='Send' mod='jmarketplace'} 
                                    <i class="icon-chevron-right right fa fa-chevron-right"></i>
                                </span>
                            </button>
                        </div>
                    {else if (isset($id_seller))}
                        <h1 class="page-subheading">
                            {if ($id_product != 0)}
                                {l s='Add new message' mod='jmarketplace'} 
                                {l s='about' mod='jmarketplace'} 
                                "{$product->name|escape:'htmlall':'UTF-8'}"
                            {else if ($id_seller != 0)}
                                {l s='Send new message to' mod='jmarketplace'} 
                                "{$seller->name|escape:'htmlall':'UTF-8'}"
                            {else}
                                {l s='Add new message' mod='jmarketplace'}
                            {/if}
                        </h1>
                        
                        <input type="hidden" name="id_seller" value="{$id_seller|intval}" />
                        <input type="hidden" name="id_product" value="{$id_product|intval}" />
                        
                        <div class="form-group">
                            <label for="description">
                                {l s='Message' mod='jmarketplace'} 
                            </label>
                            <textarea class="form-control" name="description" cols="40" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submitAddIncidence" class="btn btn-default button button-medium">
                                <span>
                                    {l s='Send' mod='jmarketplace'} 
                                    <i class="icon-chevron-right right fa fa-chevron-right"></i>
                                </span>
                            </button>
                        </div>
                    {/if}
                </fieldset>
            </form>
        </div>
    {else}
        <p class="alert alert-info">
            {l s='You must be logged in to contact the seller.' mod='jmarketplace'} 
            <a href="{$link->getPageLink('my-account', true)|escape:'htmlall':'UTF-8'}">
                {l s='Login or register' mod='jmarketplace'}
            </a>
        </p>
    {/if}
</div>

<ul class="footer_links clearfix">
    {if ($id_product != 0)}
        <li>
            <a class="btn btn-default button button-small btn-secondary" href="{$link->getProductLink($id_product)|escape:'htmlall':'UTF-8'}">
                <span>
                    <i class="icon-chevron-left fa fa-chevron-left"></i> 
                    {l s='Back to ' mod='jmarketplace'} 
                    {$product->name|escape:'htmlall':'UTF-8'}
                </span>
            </a>
        </li>
    {/if}
    <li>
        <a class="btn btn-default button btn-secondary" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}">
            <span>
                <i class="icon-chevron-left fa fa-chevron-left"></i> 
                {l s='Back to your account' mod='jmarketplace'}
            </span>
        </a>
    </li>
</ul>         
<script type="text/javascript">
var sellermessages_controller_url = '{$link->getModuleLink('jmarketplace', 'contactseller', array(), true)|escape:'html':'UTF-8'}';
var PS_REWRITING_SETTINGS = "{$PS_REWRITING_SETTINGS|intval}";
</script>          