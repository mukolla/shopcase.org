{*
* 2007-2013 PrestaShop
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
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{capture name=path}{l s='Bank-wire payment.' mod='bankwire'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}

{*<h2>{l s='Order summary' mod='bankwire'}</h2>*}

{assign var='current_step' value='payment'}
{include file="$tpl_dir./order-steps.tpl"}

{if $nbProducts <= 0}
	<p class="warning">{l s='Your shopping cart is empty.' mod='bankwire'}</p>
{else}
    <div id="prepay-privatbank">
        {*<h3>{l s='Bank-wire payment.' mod='bankwire'}</h3>*}

        <h3>{l s='Предоплата на карту ПриватБанка.' mod='bankwire'}</h3>

        <form action="{$link->getModuleLink('bankwire', 'validation', [], true)|escape:'html'}" method="post">
        <p>
                <img src="{$this_path_bw}bankwire.png" alt="{l s='Bank wire' mod='bankwire'}" width="101" height="100" style="float:left; margin: 0px 10px 5px 0px;" />
                {*{l s='You have chosen to pay by bank wire.' mod='bankwire'}*}
                {l s='Вы выбрали способ оплаты: предоплата на карту ПриватБанка. ' mod='bankwire'}
                <br/>
                {*{l s='Here is a short summary of your order:' mod='bankwire'}*}
                {l s='The total amount of your order is' mod='bankwire'} <b> <span id="amount" class="price">{displayPrice price=$total}</span> </b>
                <br /><br />
                <b>{l s='Номер карты вам сообщит менеджер при согласовании заказа.' mod='bankwire'} </b>
        </p>
        <p>
                
                {*<b> <span id="amount" class="price">{displayPrice price=$total}</span> </b>*}
                {*{if $use_taxes == 1}
                    {l s='(tax incl.)' mod='bankwire'}
                {/if}*}
        </p>
        {*<p>
                -
                {if $currencies|@count > 1}
                        {l s='We allow several currencies to be sent via bank wire.' mod='bankwire'}
                        <br /><br />
                        {l s='Choose one of the following:' mod='bankwire'}
                        <select id="currency_payement" name="currency_payement" onchange="setCurrency($('#currency_payement').val());">
                                {foreach from=$currencies item=currency}
                                        <option value="{$currency.id_currency}" {if $currency.id_currency == $cust_currency}selected="selected"{/if}>{$currency.name}</option>
                                {/foreach}
                        </select>
                {else}
                        {l s='We allow the following currency to be sent via bank wire:' mod='bankwire'}&nbsp;<b>{$currencies.0.name}</b>
                        <input type="hidden" name="currency_payement" value="{$currencies.0.id_currency}" />
                {/if}
        </p>*}
        <p style="margin-top: 20px;">
                {*{l s='Bank wire account information will be displayed on the next page.' mod='bankwire'}*}
                
                

                {*<br />*}
                {l s='Оплатить можно через систему Приват24, кассу ПриватБанка ' mod='bankwire'}
                <br />
                {l s='и терминалы самообслуживания ПриватБанка.' mod='bankwire'}
                {*<br />
                {l s='После подтверждения заказа с Вами свяжеться менеджер, чтобы уточнить условия заказа.' mod='bankwire'}*}
                <br />
                 <br />
                <b>{l s='Банковские реквизити' mod='bankwire'}</b> {l s='для проведения платежа сообщит менеджер и продублирует ' mod='bankwire'} <b>{l s='в SMS сообщении.' mod='bankwire'}</b>

                <br />
                <br />
                {l s='Как только Ваш заказ будет отправлен, Вы получите ' mod='cashondelivery'}
                <b>
                {l s='СМС-уведомление' mod='cashondelivery'}
                </b>
                {l s='с адресом отделения выдачи службы доставки и номером товарно-транспортной накладной.' mod='cashondelivery'}
                
                
                
                
                <br /><br />
                <b>{l s='Please confirm your order by clicking "Place my order."' mod='bankwire'}.</b>
        </p>
        <p class="cart_navigation" id="cart_navigation">
                <input type="submit" value="{l s='Place my order' mod='bankwire'}" class="exclusive_large" />
                <a href="{$link->getPageLink('order', true, NULL, "step=3")|escape:'html'}" class="button_large">{l s='Назад' mod='bankwire'}</a>
        </p>
        </form>
    </div>
{/if}
