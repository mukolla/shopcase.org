<?php /*%%SmartyHeaderCode:750771679530f3abfc4d227-10271111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5847342b0066176dabefd4d7711c9db76bb21fc2' => 
    array (
      0 => '/var/www/shopcase.org/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1390204460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '750771679530f3abfc4d227-10271111',
  'variables' => 
  array (
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f3abfc7d775_95755144',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f3abfc7d775_95755144')) {function content_530f3abfc7d775_95755144($_smarty_tpl) {?>
<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="http://shopcase.org/index.php?controller=contact" title="контакты">контакты</a></li>
	<li id="header_link_sitemap"><a href="http://shopcase.org/index.php?controller=sitemap" title="карта сайта">карта сайта</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('http://shopcase.org/index.php', 'Shopcase.org - магазин женских сумочек', 'в закладки');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>