<?php /* Smarty version Smarty-3.1.14, created on 2014-03-06 12:48:29
         compiled from "/var/www/shopcase.org/themes/default/modules/blocksocial/blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13363525875318527d54a4a6-59465160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cfb4fee1e80bdf138bd1369ee9da8b6291410ce' => 
    array (
      0 => '/var/www/shopcase.org/themes/default/modules/blocksocial/blocksocial.tpl',
      1 => 1393789420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13363525875318527d54a4a6-59465160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'vkontakte_url' => 0,
    'odnoklasniki_url' => 0,
    'mailru_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5318527d59ca20_70136873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5318527d59ca20_70136873')) {function content_5318527d59ca20_70136873($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/shopcase.org/tools/smarty/plugins/modifier.escape.php';
?>

<div id="social_block">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial'),$_smarty_tpl);?>
</p>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!=''){?><li class="facebook"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['facebook_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!=''){?><li class="twitter"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['twitter_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		
                <?php if ($_smarty_tpl->tpl_vars['vkontakte_url']->value!=''){?><li class=""><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['vkontakte_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Vkontakte','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['odnoklasniki_url']->value!=''){?><li class=""><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['odnoklasniki_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Odnoklasniki','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['mailru_url']->value!=''){?><li class=""><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mailru_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Mail.ru','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['rss_url']->value!=''){?><li class="rss"><a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rss_url']->value, 'html', 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
	</ul>
</div>
<?php }} ?>