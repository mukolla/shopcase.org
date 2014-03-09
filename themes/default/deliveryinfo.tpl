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

{capture name=path}{l s='Оплата и доставка'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}

{*<h1>{l s='Sitemap'}</h1>*}
<div id="content-deliveryinfo" class="clearfix">
	<h2>{l s='Оплата и доставка'}</h2>
        
        <p>
            В нашем магазине Вы можете произвести оплату двумя способами:
            <ul id="payment-info">
                <li>
                    - <a href="#p1">Оплата наличными («Наложенный платеж»)</a>. 
                </li>
                
                <li>
                    - <a href="#p2">Безналичным расчетом («Предоплата на карту ПриватБанка.»)</a>
                </li>
            </ul>
        </p>
        
        <p>
            Способ влияет на общую стоимость доставки. <br/> При выборе «Наложенного платежа» необходимо платить дополнительную комиссию службам доставки.
        </p>
        
        <br />
        
        <h3 id="p1">Оплата наличными</h3>
        <hr>
        
        <p>
            <img src="/modules/cashondelivery/cashondelivery.gif" style="float: left; margin-right: 10px;" />
            Оплата наличными доступна при покупке в нашем магазине по адресу ул. Базарная 1, г.  Луцк, а также при доставке курьером.
        </p>
        
        <p>Для всех жителей Киева, Харькова, Днепропетровска, Донецка, Одессы и остальных городов Украины <b>оплатить наличными можно при получении товара в отделении службы доставки. </b> <br /> (НоваПочта или УкрПочта)</p>
        
        <p>Чтобы выбрать этот способ оплаты необходимо при оформлении заказа сообщить менеджеру что Вы выбираете оплату «наложенный платеж».</p>
        
        <p>Этот способ оплаты удобный тем что Вы можете сперва осмотреть а потом заплатить за товар. <br /> Общая стоимость доставки товара составит <b>≈ 35 грн.</b></p>
        
        <b>Для оплаты на "Оплата наличными" необходимо:</b>
        <ul>
            <li>- оформляя заказ сказать менеджеру что хотите произвести оплату <b>«Наложенный платежом»</b></li>
            <li>- оплатить стоимость товара и доставки в отделении службы доставки (Нова Почта или УкрПочта).</li>
        </ul>
        
        <br />
        <p>Как только Ваш заказ будет отправлен, Вы получите <b>СМС-уведомление</b> с адресом отделения выдачи службы доставки и <b>номером товарно-транспортной накладной</b>. </p>
            
        <br />
        <br />
        <h3 id="p2">Оплата Безналичным расчетом</h3>
        <hr>
        
        <p>
            <img src="/modules/bankwire/bankwire.png" style="float: left; margin-right: 10px; width: 160px;" />
            Тем кому важна минимальная стоимость доставки предлагаем воспользоваться возможностью оплатить купленный товар на наш банковский счет в Приват Банке.</p>
        <p>При этом <b>стоимость доставки</b> будет примерно в <b>два раза ниже</b> чем в случаи оплаты при получении (наложенного платежа).</p>
        
        <br />
        <p>
            Общая стоимость доставки товара при выборе <b>"Безналичного расчета"</b> составит <b> ≈ 18 Грн.</b>
        </p>
        
        <b>Для оплаты на "Безналичным расчетом" необходимо:</b>
        <ul>
            <li>- оформляя заказ сказать менеджеру что хотите сделать предоплата на карту ПриватБанка</li>
            <li>- менеджер сообщит необходимые для оплаты реквизиты и продублирует в SMS сообщении.</li>   
            <li>- оплатить счет через систему Приват24, кассу ПриватБанка и терминалы самообслуживания ПриватБанка.</li>
        </ul>
        
        <br />
        <p>Как только Ваш заказ будет отправлен, Вы получите <b>СМС-уведомление</b> с адресом отделения выдачи службы доставки и <b>номером товарно-транспортной накладной</b>. </p>
        
	<br class="clear" />
</div>
