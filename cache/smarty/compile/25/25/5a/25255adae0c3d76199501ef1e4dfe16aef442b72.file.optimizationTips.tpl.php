<?php /* Smarty version Smarty-3.1.14, created on 2014-03-06 12:39:49
         compiled from "/var/www/shopcase.org/admin0094/themes/default/template/controllers/home/optimizationTips.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70445809653185075602c25-50762199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25255adae0c3d76199501ef1e4dfe16aef442b72' => 
    array (
      0 => '/var/www/shopcase.org/admin0094/themes/default/template/controllers/home/optimizationTips.tpl',
      1 => 1390204460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70445809653185075602c25-50762199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hide_tips' => 0,
    'opti_list' => 0,
    'i' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5318507565e837_03904722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5318507565e837_03904722')) {function content_5318507565e837_03904722($_smarty_tpl) {?>
<div class="admin-box1">
<h5><?php echo smartyTranslate(array('s'=>'Configuration checklist'),$_smarty_tpl);?>

	<span style="float:right">
	<a id="optimizationTipsFold" href="#">
		<img alt="v" src="../img/admin/<?php if ($_smarty_tpl->tpl_vars['hide_tips']->value){?>arrow-down.png<?php }else{ ?>arrow-up.png<?php }?>" />
	</a>
	</span>
</h5>
			<ul id="list-optimization-tips" class="admin-home-box-list" <?php if ($_smarty_tpl->tpl_vars['hide_tips']->value){?>style="display:none"<?php }?> >
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['opti_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
				<li>
				<img src="../img/admin/<?php echo $_smarty_tpl->tpl_vars['i']->value['image'];?>
" class="pico" />
					<a  style="color:<?php echo $_smarty_tpl->tpl_vars['i']->value['color'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['i']->value['href'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a>
				</li>

			<?php } ?>
			</ul>

</div>

<script type="text/javascript">
$(document).ready(function(){
	<?php if (!$_smarty_tpl->tpl_vars['hide_tips']->value){?>
		$("#optimizationTipsFold").click(function(e){
			e.preventDefault();
			$.ajax({
						url: "ajax-tab.php",
						type: "POST",
						data:{
							token: "<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
",
							ajax: "1",
							controller : "AdminHome",
							action: "hideOptimizationTips"
						},
						dataType: "json",
						success: function(json){
							if(json.result == "ok")
								showSuccessMessage(json.msg);
							else
								showErrorMessage(json.msg);

						} ,
						error: function(XMLHttpRequest, textStatus, errorThrown)
						{

						}
					});

		});
	<?php }?>
	$("#optimizationTipsFold").click(function(e){
		e.preventDefault();
		$("#list-optimization-tips").toggle(function(){
			if($("#optimizationTipsFold").children("img").attr("src") == "../img/admin/arrow-up.png")
				$("#optimizationTipsFold").children("img").attr("src","../img/admin/arrow-down.png");
			else
				$("#optimizationTipsFold").children("img").attr("src","../img/admin/arrow-up.png");
		});
	})
});
</script>
<?php }} ?>