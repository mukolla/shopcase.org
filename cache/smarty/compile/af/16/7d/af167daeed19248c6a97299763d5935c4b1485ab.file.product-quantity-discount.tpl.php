<?php /* Smarty version Smarty-3.1.14, created on 2014-02-27 13:03:50
         compiled from "/var/www/shopcase.org/themes/default/mobile/product-quantity-discount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1600305683530f37b619cfe3-03786693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af167daeed19248c6a97299763d5935c4b1485ab' => 
    array (
      0 => '/var/www/shopcase.org/themes/default/mobile/product-quantity-discount.tpl',
      1 => 1390204462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1600305683530f37b619cfe3-03786693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'quantity_discounts' => 0,
    'quantity_discount' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530f37b61f0bb8_15514086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530f37b61f0bb8_15514086')) {function content_530f37b61f0bb8_15514086($_smarty_tpl) {?>

<?php if ((isset($_smarty_tpl->tpl_vars['quantity_discounts']->value)&&count($_smarty_tpl->tpl_vars['quantity_discounts']->value)>0)){?>
<!-- quantity discount -->
<ul class="idTabs clearfix">
	<li><a href="#discount" style="cursor: pointer" class="selected" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Sliding scale pricing'),$_smarty_tpl);?>
</a></li>
</ul>
<div id="quantityDiscount">
	<table class="std">
		<thead>
			<tr>
				<th><?php echo smartyTranslate(array('s'=>'product'),$_smarty_tpl);?>
</th>
				<th><?php echo smartyTranslate(array('s'=>'from (qty)'),$_smarty_tpl);?>
</th>
				<th><?php echo smartyTranslate(array('s'=>'discount'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
			<tr id="noQuantityDiscount">
				<td colspan='3'><?php echo smartyTranslate(array('s'=>'There is no quantity discount for this product.'),$_smarty_tpl);?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['quantity_discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quantity_discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quantity_discounts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->key => $_smarty_tpl->tpl_vars['quantity_discount']->value){
$_smarty_tpl->tpl_vars['quantity_discount']->_loop = true;
?>
			<tr id="quantityDiscount_<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute'];?>
">
				<td>
					<?php if ((isset($_smarty_tpl->tpl_vars['quantity_discount']->value['attributes'])&&($_smarty_tpl->tpl_vars['quantity_discount']->value['attributes']))){?>
						<?php echo $_smarty_tpl->tpl_vars['product']->value->getProductName($_smarty_tpl->tpl_vars['quantity_discount']->value['id_product'],$_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute']);?>

					<?php }else{ ?>
						<?php echo $_smarty_tpl->tpl_vars['product']->value->getProductName($_smarty_tpl->tpl_vars['quantity_discount']->value['id_product']);?>

					<?php }?>
				</td>
				<td><?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price']!=0||$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type']=='amount'){?>
						-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl);?>

					<?php }else{ ?>
						-<?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
%
					<?php }?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<?php }?>
<?php }} ?>