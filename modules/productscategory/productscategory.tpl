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

{if isset($categoryProducts) && count($categoryProducts) > 0 && $categoryProducts !== false}
<div class="clearfix blockproductscategory">
	<h2 class="productscategory_h2">{*{$categoryProducts|@count}*} {l s='other products in the same category:' mod='productscategory'}</h2>
	<div id="{if count($categoryProducts) > 5}productscategory{else}productscategory_noscroll{/if}">
	{if count($categoryProducts) > 5}<a id="productscategory_scroll_left" title="{l s='Previous' mod='productscategory'}" href="javascript:{ldelim}{rdelim}">{l s='Previous' mod='productscategory'}</a>{/if}
	<div id="productscategory_list">
		<ul {if count($categoryProducts) > 5}style="width: {math equation="width * nbImages" width=105 nbImages=$categoryProducts|@count}px"{/if}>
			{*
                        {foreach from=$categoryProducts item='categoryProduct' name=categoryProduct}
			<li {if count($categoryProducts) < 6}style="width:60px"{/if}>
				<a href="{$link->getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)}" class="lnk_img" title="{$categoryProduct.name|htmlspecialchars}"><img src="{$link->getImageLink($categoryProduct.link_rewrite, $categoryProduct.id_image, 'home_default')|escape:'html'}" alt="{$categoryProduct.name|htmlspecialchars}" /></a>
				<p class="product_name">
					<a href="{$link->getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)|escape:'html'}" title="{$categoryProduct.name|htmlspecialchars}">{$categoryProduct.name|truncate:32:'...'|escape:'htmlall':'UTF-8'}</a>
				</p>
				{if $ProdDisplayPrice AND $categoryProduct.show_price == 1 AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}
				<p class="price_display">
					<span class="price">{convertPrice price=$categoryProduct.displayed_price}</span>
				</p>
				{else}
				<br />
				{/if}
			</li>
			{/foreach}
                        *}
                        
                        {foreach from=$categoryProducts item='product' name='newProducts'}
				<li{if $smarty.foreach.newProducts.first} class="first"{/if}>
                                    <a href="{$product.link|escape:'html'}" title="{$product.legend|escape:html:'UTF-8'}">
                                        <img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home_default')|escape:'html'}" height="{$homeSize.height}" width="{$homeSize.width}" alt="{$product.legend|escape:html:'UTF-8'}" />
                                        
                                        {* {$product.name|escape:html:'UTF-8'} *}
                                        
                                        <h5 class="s_title_block"><a href="{$product.link|escape:'html'}" title="{$product.name|truncate:50:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:35:'...'|escape:'htmlall':'UTF-8'}</a></h5>
                                        
                                        <div>
						
						{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}<p class="price_container"><span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span></p>{else}<div style="height:21px;"></div>{/if}
						                                                
                                                <a class="lnk_more" href="{$product.link|escape:'html'}" title="{l s='Посмотреть' mod='homefeatured'}">{l s='Посмотреть' mod='homefeatured'}</a>
					</div>
                                        
                                    </a>
                                </li>
                    {/foreach}
                        
                        
                        
		</ul>
	</div>
	{if count($categoryProducts) > 5}<a id="productscategory_scroll_right" title="{l s='Next' mod='productscategory'}" href="javascript:{ldelim}{rdelim}">{l s='Next' mod='productscategory'}</a>{/if}
	</div>
	<script type="text/javascript">
		$('#productscategory_list').trigger('goto', [{$middlePosition}-3]);
	</script>
</div>
{/if}
