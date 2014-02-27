<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 15:16:47
         compiled from "/var/www/shopcase.org/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:918411123530f3abfb4d7f4-98587129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '925fa9344931477b32028b4905f6d31d96040717' => 
    array (
      0 => '/var/www/shopcase.org/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '918411123530f3abfb4d7f4-98587129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f3abfb81ea0_46044346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f3abfb81ea0_46044346')) {function content_530f3abfb81ea0_46044346($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false));?>
';
	var favorite_products_url_remove = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false));?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>