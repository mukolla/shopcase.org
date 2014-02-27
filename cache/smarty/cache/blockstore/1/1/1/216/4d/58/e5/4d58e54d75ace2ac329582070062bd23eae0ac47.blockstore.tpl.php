<?php /*%%SmartyHeaderCode:610722940530f3ac04d88c2-44465769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d58e54d75ace2ac329582070062bd23eae0ac47' => 
    array (
      0 => '/var/www/shopcase.org/themes/default/modules/blockstore/blockstore.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '610722940530f3ac04d88c2-44465769',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f3ac0519402_65139736',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f3ac0519402_65139736')) {function content_530f3ac0519402_65139736($_smarty_tpl) {?><!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block"><a href="http://shopcase.org/index.php?controller=stores" title="Наши магазины">Наши магазины</a></p>
	<div class="block_content blockstore">
		<p class="store_image"><a href="http://shopcase.org/index.php?controller=stores" title="Наши магазины"><img src="http://shopcase.org/modules/blockstore/store.jpg" alt="Наши магазины" width="174" height="115" /></a></p>
		<p>
			<a href="http://shopcase.org/index.php?controller=stores" title="Наши магазины">&raquo; Найти наши магазины</a>
		</p>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>