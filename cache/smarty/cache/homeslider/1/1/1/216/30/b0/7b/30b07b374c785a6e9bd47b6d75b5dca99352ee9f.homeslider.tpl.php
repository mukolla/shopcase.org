<?php /*%%SmartyHeaderCode:1750854946530f3ac0554316-80310630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30b07b374c785a6e9bd47b6d75b5dca99352ee9f' => 
    array (
      0 => '/var/www/shopcase.org/modules/homeslider/homeslider.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1750854946530f3ac0554316-80310630',
  'variables' => 
  array (
    'homeslider' => 0,
    'homeslider_slides' => 0,
    'slide' => 0,
    'module_dir' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f3ac05b7941_44502535',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f3ac05b7941_44502535')) {function content_530f3ac05b7941_44502535($_smarty_tpl) {?>
<!-- Module HomeSlider -->
<script type="text/javascript">
			var homeslider_loop = true;
	var homeslider_speed = 500;
var homeslider_pause = 3000;
</script>
<ul id="homeslider">
			<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="http://shopcase.org/modules/homeslider/images/sample-1.jpg" alt="sample-1" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="http://shopcase.org/modules/homeslider/images/sample-2.jpg" alt="sample-2" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="http://shopcase.org/modules/homeslider/images/sample-3.jpg" alt="sample-3" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="http://shopcase.org/modules/homeslider/images/sample-4.jpg" alt="sample-4" height="300" width="535" />
			</a>
		</li>
				<li>
			<a href="http://www.prestashop.com" title="This is a sample picture">
			<img src="http://shopcase.org/modules/homeslider/images/sample-5.jpg" alt="sample-5" height="300" width="535" />
			</a>
		</li>
	</ul>
<!-- /Module HomeSlider -->
<?php }} ?>