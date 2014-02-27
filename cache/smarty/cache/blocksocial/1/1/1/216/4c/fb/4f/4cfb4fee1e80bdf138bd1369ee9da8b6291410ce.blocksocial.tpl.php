<?php /*%%SmartyHeaderCode:361092780530f3ac08dce35-61212513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cfb4fee1e80bdf138bd1369ee9da8b6291410ce' => 
    array (
      0 => '/var/www/shopcase.org/themes/default/modules/blocksocial/blocksocial.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '361092780530f3ac08dce35-61212513',
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f3ac0913457_86293511',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f3ac0913457_86293511')) {function content_530f3ac0913457_86293511($_smarty_tpl) {?>
<div id="social_block">
	<p class="title_block">Подпишитесь на наши боновления</p>
	<ul>
		<li class="facebook"><a href="http://www.facebook.com/prestashop">Facebook</a></li>		<li class="twitter"><a href="http://www.twitter.com/prestashop">Twitter</a></li>		<li class="rss"><a href="http://www.prestashop.com/blog/en/feed/">RSS</a></li>	</ul>
</div>
<?php }} ?>