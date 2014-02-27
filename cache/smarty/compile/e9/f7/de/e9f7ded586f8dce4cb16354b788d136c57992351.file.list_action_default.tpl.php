<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 13:03:44
         compiled from "/var/www/shopcase.org/admin/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:838805411530f37b09cedc1-36370357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9f7ded586f8dce4cb16354b788d136c57992351' => 
    array (
      0 => '/var/www/shopcase.org/admin/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1390204460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '838805411530f37b09cedc1-36370357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f37b09e0c37_20976906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f37b09e0c37_20976906')) {function content_530f37b09e0c37_20976906($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>>
	<img src="../img/admin/asterisk.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>