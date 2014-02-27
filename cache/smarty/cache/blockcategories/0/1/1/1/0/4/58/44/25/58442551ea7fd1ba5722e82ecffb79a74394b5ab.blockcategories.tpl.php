<?php /*%%SmartyHeaderCode:591969435530f3abfe9c3f7-41237773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58442551ea7fd1ba5722e82ecffb79a74394b5ab' => 
    array (
      0 => '/var/www/shopcase.org/themes/default/modules/blockcategories/blockcategories.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
    '8ec7213b7eb8de267528d2fc03f37fcbd3747f3f' => 
    array (
      0 => '/var/www/shopcase.org/themes/default/modules/blockcategories/category-tree-branch.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '591969435530f3abfe9c3f7-41237773',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f3caf316723_98001407',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f3caf316723_98001407')) {function content_530f3caf316723_98001407($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Категории</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://shopcase.org/index.php?id_category=3&amp;controller=category&amp;id_lang=1" 		title="Now that you can buy movies from the iTunes Store and sync them to your iPod, the whole world is your theater.">iPods</a>
	</li>

												
<li >
	<a href="http://shopcase.org/index.php?id_category=4&amp;controller=category&amp;id_lang=1" class="selected"		title="Wonderful accessories for your iPod">Accessories</a>
	</li>

												
<li class="last">
	<a href="http://shopcase.org/index.php?id_category=5&amp;controller=category&amp;id_lang=1" 		title="The latest Intel processor, a bigger hard drive, plenty of memory, and even more new features all fit inside just one liberating inch. The new Mac laptops have the performance, power, and connectivity of a desktop computer. Without the desk part.">Laptops</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>