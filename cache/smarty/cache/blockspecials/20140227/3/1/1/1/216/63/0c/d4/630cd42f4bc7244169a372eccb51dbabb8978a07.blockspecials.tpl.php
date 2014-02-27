<?php /*%%SmartyHeaderCode:718355663530f3ac040e139-17215382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '630cd42f4bc7244169a372eccb51dbabb8978a07' => 
    array (
      0 => '/var/www/shopcase.org/themes/default/modules/blockspecials/blockspecials.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '718355663530f3ac040e139-17215382',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'mediumSize' => 0,
    'PS_CATALOG_MODE' => 0,
    'specific_prices' => 0,
    'priceDisplay' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f3ac04cb002_48398160',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f3ac04cb002_48398160')) {function content_530f3ac04cb002_48398160($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block products_block exclusive blockspecials">
	<p class="title_block"><a href="http://shopcase.org/index.php?controller=prices-drop" title="Скидки">Скидки</a></p>
	<div class="block_content">

		<ul class="products clearfix">
			<li class="product_image">
				<a href="http://shopcase.org/index.php?id_product=1&amp;controller=product&amp;id_lang=1"><img src="http://shopcase.org/img/p/1/5/15-medium_default.jpg" alt="iPod Nano" height="58" width="58" title="iPod Nano" /></a>
			</li>
			<li>
																												<span class="reduction"><span>-5%</span></span>
															
					<p class="s_title_block"><a href="http://shopcase.org/index.php?id_product=1&amp;controller=product&amp;id_lang=1" title="iPod Nano">iPod Nano</a></p>
									<span class="price-discount">199,67 ₴</span>
					<span class="price">189,68 ₴</span>
							</li>
		</ul>
		<p>
			<a href="http://shopcase.org/index.php?controller=prices-drop" title="Все скидки">&raquo; Все скидки</a>
		</p>
	</div>
</div>
<!-- /MODULE Block specials --><?php }} ?>