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

<!-- MODULE Block new products -->
<div id="new-products_block_right" class="block products_block">
	<p class="title_block"><a href="{$link->getPageLink('new-products')|escape:'html'}" title="{l s='New products' mod='blocknewproducts'}">{l s='New products' mod='blocknewproducts'}</a></p>
	<div class="block_content">
	{if $new_products !== false}
		<ul class="product_images clearfix">
		{foreach from=$new_products item='product' name='newProducts'}
			 {* {if $smarty.foreach.newProducts.index < 4} *}
				<li{if $smarty.foreach.newProducts.first} class="first"{/if}>
                                    <a href="{$product.link|escape:'html'}" title="{$product.legend|escape:html:'UTF-8'}">
                                        <img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" height="{$homeSize.height}" width="{$homeSize.width}" alt="{$product.legend|escape:html:'UTF-8'}" />
                                        
                                        {* {$product.name|escape:html:'UTF-8'} *}
                                        
                                        <h5 class="s_title_block"><a href="{$product.link|escape:'html'}" title="{$product.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h5>
                                        
                                        <div>
						
						{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<p class="price_container"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span></p>{else}<div style="height:21px;"></div>{/if}
						
                                                {*
						{if ($product.id_product_attribute == 0 OR (isset($add_prod_display) AND ($add_prod_display == 1))) AND $product.available_for_order AND !isset($restricted_country_mode) AND $product.minimal_quantity == 1 AND $product.customizable != 2 AND !$PS_CATALOG_MODE}
							{if ($product.quantity > 0 OR $product.allow_oosp)}
							<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_{$product.id_product}" href="{$link->getPageLink('cart')|escape:'html'}?qty=1&amp;id_product={$product.id_product}&amp;token={$static_token}&amp;add" title="{l s='Add to cart' mod='homefeatured'}">{l s='Add to cart' mod='homefeatured'}</a>
							{else}
							<span class="exclusive">{l s='Add to cart' mod='homefeatured'}</span>
							{/if}
						{else}
							<div style="height:23px;"></div>
						{/if}
                                                *}
                                                
                                                <a class="lnk_more" href="{$product.link|escape:'html'}" title="{l s='Посмотреть' mod='homefeatured'}">{l s='Посмотреть' mod='homefeatured'}</a>
					</div>
                                        
                                    </a>
                                </li>
			{* {/if} *}
		{/foreach}
		</ul>
		{*
                <dl class="products">
		{foreach from=$new_products item=newproduct name=myLoop}
			<dt class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if}"><a href="{$newproduct.link|escape:'html'}" title="{$newproduct.name|escape:html:'UTF-8'}">{$newproduct.name|strip_tags|escape:html:'UTF-8'}</a></dt>
			{if $newproduct.description_short}<dd class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if}"><a href="{$newproduct.link|escape:'html'}">{$newproduct.description_short|strip_tags:'UTF-8'|truncate:75:'...'}</a><br /><a href="{$newproduct.link}" class="lnk_more">{l s='Read more' mod='blocknewproducts'}</a></dd>{/if}
		{/foreach}
		</dl><br />
                *}
                
		{*
                <p>
                    <a href="{$link->getPageLink('new-products')|escape:'html'}" title="{l s='All new products' mod='blocknewproducts'}" class="button_large">&raquo; {l s='All new products' mod='blocknewproducts'}</a>
                </p>
                *}
                
	{else}
		<p>&raquo; {l s='No new products at this time' mod='blocknewproducts'}</p>
	{/if}
	</div>
</div>
<!-- /MODULE Block new products -->