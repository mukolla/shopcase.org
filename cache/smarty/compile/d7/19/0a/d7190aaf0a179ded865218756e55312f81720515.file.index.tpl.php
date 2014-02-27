<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 13:03:50
         compiled from "/var/www/shopcase.org/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:888321484530f37b6e8b9b3-54754700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7190aaf0a179ded865218756e55312f81720515' => 
    array (
      0 => '/var/www/shopcase.org/themes/default/mobile/index.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '888321484530f37b6e8b9b3-54754700',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f37b6e92296_25330261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f37b6e92296_25330261')) {function content_530f37b6e92296_25330261($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>