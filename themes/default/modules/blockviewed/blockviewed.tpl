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

<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block products_block">
	<p class="title_block">{l s='Viewed products' mod='blockviewed'}</p>
	<div class="block_content">
		<ul class="products clearfix">
			{foreach from=$productsViewedObj item=viewedProduct name=myLoop}
				<li class="clearfix{if $smarty.foreach.myLoop.last} last_item{elseif $smarty.foreach.myLoop.first} first_item{else} item{/if}">
					<a href="{$viewedProduct->product_link|escape:'html'}" title="{l s='More about' mod='blockviewed'} {$viewedProduct->name|escape:html:'UTF-8'}" class="content_img">
                                            <img src="{if isset($viewedProduct->id_image) && $viewedProduct->id_image}{$link->getImageLink($viewedProduct->link_rewrite, $viewedProduct->cover, 'home_default')}{else}{$img_prod_dir}{$lang_iso}-default-medium_default.jpg{/if}" alt="{$viewedProduct->legend|escape:html:'UTF-8'}" />
					</a>
                                        {*
                                        <p class="s_title_block">
                                            <a href="{$viewedProduct->product_link|escape:'html'}" title="{l s='More about' mod='blockviewed'} {$viewedProduct->name|escape:html:'UTF-8'}">
                                                {$viewedProduct->name|escape:html:'UTF-8'}
                                            </a>
                                        </p>
                                        *}
                                        
                                        <h5 class="s_title_block">
                                            <a href="{$viewedProduct->product_link|escape:'html'}" title="{l s='More about' mod='blockviewed'} {$viewedProduct->name|escape:html:'UTF-8'}">
                                                {$viewedProduct->name|escape:html:'UTF-8'}
                                            </a>
                                        </h5>
                                        
                                       <div>
                                           {* 
                                           {if $viewedProduct.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}
                                                <p class="price_container">
                                                    <span class="price">
                                                        {if !$priceDisplay}{convertPrice price=$viewedProduct.price}{else}{convertPrice price=$viewedProduct.price_tax_exc}{/if}
                                                    </span>
                                                </p>
                                            {else}
                                                <div style="height:21px;"></div>
                                            {/if}    
                                            *}
                                            
                                           

                                            <a class="lnk_more" href="{$viewedProduct->product_link|escape:'html'}" title="{l s='Посмотреть' mod='homefeatured'}">{l s='Посмотреть' mod='homefeatured'}</a>
					</div>
                                                
				</li>
			{/foreach}
		</ul>
	</div>
</div>
