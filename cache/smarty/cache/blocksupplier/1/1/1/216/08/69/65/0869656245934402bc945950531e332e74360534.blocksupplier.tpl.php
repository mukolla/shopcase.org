<?php /*%%SmartyHeaderCode:916744089530f3abff27775-48931705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0869656245934402bc945950531e332e74360534' => 
    array (
      0 => '/var/www/shopcase.org/themes/default/modules/blocksupplier/blocksupplier.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '916744089530f3abff27775-48931705',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f3ac0076993_00605118',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f3ac0076993_00605118')) {function content_530f3ac0076993_00605118($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://shopcase.org/index.php?controller=supplier" title="Поставщики">Поставщики</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://shopcase.org/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1" title="Подробнее о AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://shopcase.org/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1" title="Подробнее о Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">Все поставщики</option>
									<option value="http://shopcase.org/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1">AppleStore</option>
									<option value="http://shopcase.org/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>