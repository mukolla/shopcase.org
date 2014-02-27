<?php /*%%SmartyHeaderCode:1158408171530f3ac083d347-61927737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a57709ef0a2f13f780c95680e02d7c2653f43567' => 
    array (
      0 => '/var/www/shopcase.org/themes/default/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1158408171530f3ac083d347-61927737',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f3ac08ca3e8_60276159',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f3ac08ca3e8_60276159')) {function content_530f3ac08ca3e8_60276159($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://shopcase.org/index.php?controller=my-account" title="Управление моей зачетной записью" rel="nofollow">Моя учетная запись</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://shopcase.org/index.php?controller=history" title="Список моих заказов" rel="nofollow">Мои заказы</a></li>
						<li><a href="http://shopcase.org/index.php?controller=order-slip" title="Список моих кредитных квитанций" rel="nofollow">Мои кредитные квитанции</a></li>
			<li><a href="http://shopcase.org/index.php?controller=addresses" title="Список моих адресов" rel="nofollow">Мои адреса</a></li>
			<li><a href="http://shopcase.org/index.php?controller=identity" title="Управление моей личной информацией" rel="nofollow">Моя личная информация</a></li>
						
		</ul>
		<p class="logout"><a href="http://shopcase.org/index.php?mylogout" title="Выйти" rel="nofollow">Выйти</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>