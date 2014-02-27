<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 13:03:39
         compiled from "/var/www/shopcase.org/themes/default/mobile/errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:513713137530f37ab0c6251-50720244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3f13a0469c87d24e9bd4636778f6ab8d8c8d02d' => 
    array (
      0 => '/var/www/shopcase.org/themes/default/mobile/errors.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '513713137530f37ab0c6251-50720244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f37ab0efb48_03931308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f37ab0efb48_03931308')) {function content_530f37ab0efb48_03931308($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value){?>
	<script type="text/javascript">
		
		function popErrorMessage(errorTitle, errorMessage)
		{
			$('<div class="error-box"><h1>'+errorTitle+'</h1>'+errorMessage+'</div>').appendTo('body');
			var close_bt = '';
			close_bt += '<a href="#" data-role="button" data-icon="delete" data-iconpos="notext" data-theme="e" class="close-bt" >delete</a>';
			$('.error-box').append(close_bt);
			$('.error-box').find('.close-bt').button();
			$('.error-box').find('.close-bt').bind('click', function(e)
			{
				e.preventDefault();
				$('.error-box').fadeOut(400, function() {
					$(this).remove();
				})
			});
		}
		$(function()
		{
			var errorTitle = '<?php if (count($_smarty_tpl->tpl_vars['errors']->value)>1){?><?php echo smartyTranslate(array('s'=>'There are %d errors:','js'=>1,'sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There is %d error:','js'=>1,'sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }?>';
			var errorMessage = '<ol>';
			
			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
			errorMessage += '<li><?php echo addslashes($_smarty_tpl->tpl_vars['error']->value);?>
</li>';
			<?php } ?>
			
			errorMessage += '</ol>';
			popErrorMessage(errorTitle, errorMessage);
		});
		
	</script>
<?php }?>
<?php }} ?>