<?php /* Smarty version Smarty-3.1.14, created on 2014-03-07 16:24:05
         compiled from "/var/www/shopcase.org/themes/default/order-opc-new-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101681430353185b8b941451-99725132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0ba95c2c73ef8b20aed446b5fa01e5a11d3be57' => 
    array (
      0 => '/var/www/shopcase.org/themes/default/order-opc-new-account.tpl',
      1 => 1394202231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101681430353185b8b941451-99725132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53185b8bb55527_64594260',
  'variables' => 
  array (
    'HOOK_CREATE_ACCOUNT_TOP' => 0,
    'guestInformations' => 0,
    'countries' => 0,
    'country' => 0,
    'state' => 0,
    'dlv_all_fields' => 0,
    'field_name' => 0,
    'b2b_enable' => 0,
    'v' => 0,
    'sl_country' => 0,
    'one_phone_at_least' => 0,
    'newsletter' => 0,
    'stateExist' => 0,
    'dniExist' => 0,
    'HOOK_CREATE_ACCOUNT_FORM' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53185b8bb55527_64594260')) {function content_53185b8bb55527_64594260($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/shopcase.org/tools/smarty/plugins/modifier.escape.php';
?>    <div id="opc_new_account" class="opc-main-block">
	<div id="opc_new_account-overlay" class="opc-overlay" style="display: none;"></div>
	<h2><span>1</span> <?php echo smartyTranslate(array('s'=>'Account'),$_smarty_tpl);?>
</h2>
	
	<form action="javascript:;" method="post" id="new_account_form" class="std" autocomplete="on" autofill="on">
		<fieldset>
			
			<div id="opc_account_choice">
				<div class="opc_float">
					<p class="title_block"><?php echo smartyTranslate(array('s'=>'Instant Checkout'),$_smarty_tpl);?>
</p>
					<p>
						<input type="button" class="exclusive_large" id="opc_guestCheckout" value="<?php echo smartyTranslate(array('s'=>'Guest checkout'),$_smarty_tpl);?>
" />
					</p>
				</div>

				<div class="opc_float">
					<p class="title_block"><?php echo smartyTranslate(array('s'=>'Create your account today and enjoy:'),$_smarty_tpl);?>
</p>
					<ul class="bullet">
						<li><?php echo smartyTranslate(array('s'=>'Personalized and secure access'),$_smarty_tpl);?>
</li>
						<li><?php echo smartyTranslate(array('s'=>'A fast and easy check out process'),$_smarty_tpl);?>
</li>
						<li><?php echo smartyTranslate(array('s'=>'Separate billing and shipping addresses'),$_smarty_tpl);?>
</li>
					</ul>
					<p>
						<input type="button" class="button_large" id="opc_createAccount" value="<?php echo smartyTranslate(array('s'=>'Create an account'),$_smarty_tpl);?>
" />
					</p>
				</div>
				<div class="clear"></div>
			</div>
			<div id="opc_account_form">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_TOP']->value;?>

				<script type="text/javascript">
				// <![CDATA[
				idSelectedCountry = <?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_state']){?><?php echo intval($_smarty_tpl->tpl_vars['guestInformations']->value['id_state']);?>
<?php }else{ ?>false<?php }?>;
				<?php if (isset($_smarty_tpl->tpl_vars['countries']->value)){?>
					<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
						<?php if (isset($_smarty_tpl->tpl_vars['country']->value['states'])&&$_smarty_tpl->tpl_vars['country']->value['contains_states']){?>
							countries[<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
] = new Array();
							<?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['country']->value['states']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value){
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
								countries[<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
].push({'id' : '<?php echo $_smarty_tpl->tpl_vars['state']->value['id_state'];?>
', 'name' : '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['state']->value['name'], 'htmlall', 'UTF-8');?>
'});
							<?php } ?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['country']->value['need_identification_number']){?>
							countriesNeedIDNumber.push(<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
);
						<?php }?>	
						<?php if (isset($_smarty_tpl->tpl_vars['country']->value['need_zip_code'])){?>
							countriesNeedZipCode[<?php echo intval($_smarty_tpl->tpl_vars['country']->value['id_country']);?>
] = <?php echo $_smarty_tpl->tpl_vars['country']->value['need_zip_code'];?>
;
						<?php }?>
					<?php } ?>
				<?php }?>
				//]]>
				
				function vat_number()
				{
					if (($('#company').length) && ($('#company').val() != ''))
						$('#vat_number_block').show();
					else
						$('#vat_number_block').hide();
				}
				function vat_number_invoice()
				{
					if (($('#company_invoice').length) && ($('#company_invoice').val() != ''))
						$('#vat_number_block_invoice').show();
					else
						$('#vat_number_block_invoice').hide();
				}
				$(document).ready(function() {
					$('#company').on('input',function(){
						vat_number();
					});
					$('#company_invoice').on('input',function(){
						vat_number_invoice();
					});
					vat_number();
					vat_number_invoice();
					
					$('.id_state option[value=<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_state'])){?><?php echo intval($_smarty_tpl->tpl_vars['guestInformations']->value['id_state']);?>
<?php }?>]').prop('selected', true);
					$('.id_state_invoice option[value=<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_state_invoice'])){?><?php echo intval($_smarty_tpl->tpl_vars['guestInformations']->value['id_state_invoice']);?>
<?php }?>]').prop('selected', true);
					
				});
				
				</script>
				<!-- Error return block -->
				<div id="opc_account_errors" class="error" style="display:none;"></div>
				<!-- END Error return block -->
				<!-- Account -->
				<input type="hidden" id="is_new_customer" name="is_new_customer" value="0" />
				<input type="hidden" id="opc_id_customer" name="opc_id_customer" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_customer']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['id_customer'];?>
<?php }else{ ?>0<?php }?>" />
				<input type="hidden" id="opc_id_address_delivery" name="opc_id_address_delivery" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery'];?>
<?php }else{ ?>0<?php }?>" />
				<input type="hidden" id="opc_id_address_invoice" name="opc_id_address_invoice" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['id_address_delivery'];?>
<?php }else{ ?>0<?php }?>" />
				
                                
                                <?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(false, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['postCodeExist'] = new Smarty_variable(false, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['dniExist'] = new Smarty_variable(false, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dlv_all_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value){
$_smarty_tpl->tpl_vars['field_name']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['field_name']->value=="company"&&$_smarty_tpl->tpl_vars['b2b_enable']->value){?>
				<p class="text">
					<label for="company"><?php echo smartyTranslate(array('s'=>'Company'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" id="company" name="company" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['company']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['company'];?>
<?php }?>" />
				</p>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="vat_number"){?>	
				<div id="vat_number_block" style="display:none;">
					<p class="text">
						<label for="vat_number"><?php echo smartyTranslate(array('s'=>'VAT number'),$_smarty_tpl);?>
</label>
						<input type="text" class="text" name="vat_number" id="vat_number" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['vat_number']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['vat_number'];?>
<?php }?>" />
					</p>
				</div>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="dni"){?>
				<?php $_smarty_tpl->tpl_vars['dniExist'] = new Smarty_variable(true, null, 0);?>
				<p class="text">
					<label for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" name="dni" id="dni" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['dni']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['dni'];?>
<?php }?>" />
					<span class="form_info"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</span>
				</p>
                                

                                
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="firstname"){?>                                    
                                    
                                
				<p class="required select">
					<label for="id_country"><?php echo smartyTranslate(array('s'=>'Country'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<select name="id_country" id="id_country">
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_country']==$_smarty_tpl->tpl_vars['v']->value['id_country'])||(!isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['sl_country']->value==$_smarty_tpl->tpl_vars['v']->value['id_country'])){?> selected="selected"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['v']->value['name'], 'htmlall', 'UTF-8');?>
</option>
						<?php } ?>
					</select>
				</p>
                                
                                <p class="required text" style="display: none;">
					<label for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<input type="text" class="text" id="customer_firstname" name="customer_firstname"  value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['customer_firstname']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['customer_firstname'];?>
<?php }?>" />
				</p>
				<p class="required text" style="display: none;">
					<label for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<input type="text" class="text" id="customer_lastname" name="customer_lastname"  value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['customer_lastname']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['customer_lastname'];?>
<?php }?>" />
				</p>
                                
                                <p class="required text">
					<label for="firstname"><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
 <sup>*</sup></label>
                                        <input type="text" class="text" id="firstname" placeholder="Иван" name="firstname" onblur="$('#customer_firstname').val($(this).val());" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['firstname']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['firstname'];?>
<?php }?>" />
				</p>
				<?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="lastname"){?>
				<p class="required text">
					<label for="lastname"><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<input type="text" class="text" id="lastname" placeholder="Иванов" name="lastname" onblur="$('#customer_lastname').val($(this).val());" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['lastname']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['lastname'];?>
<?php }?>" />
				</p>
                                
                                
				<?php $_smarty_tpl->tpl_vars['stateExist'] = new Smarty_variable(true, null, 0);?>
				<p class="required id_state select" style="display:none;">
					<label for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<select name="id_state" id="id_state">
						<option value="">Выбирете свой регион</option>
					</select>
				</p>
                                
                                
                                
                                
                                   
                                
                                
                                <?php }elseif($_smarty_tpl->tpl_vars['field_name']->value=="address1"){?>
				<p class="required text">
					<label for="address1"><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
 <sup>*</sup></label>
                                        <input type="text" class="text" name="address1" placeholder="г. Фастов, Центральная, 1" id="address1" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['address1']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['address1'];?>
<?php }?>" />
				</p>
                                
                                
				
                                
                                
                                
				<?php }?>
				<?php } ?>
                                
                                
				<p class="required password is_customer_param">
					<label for="passwd"><?php echo smartyTranslate(array('s'=>'Password'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<input type="password" class="text" name="passwd" id="passwd" />
					<span class="form_info"><?php echo smartyTranslate(array('s'=>'(five characters min.)'),$_smarty_tpl);?>
</span>
				</p>
				
                                
                                
                                <p class="<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value){?>required <?php }?>text">
					<label for="phone_mobile"><?php echo smartyTranslate(array('s'=>'Mobile phone'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value){?> <sup>*</sup><?php }?></label>
                                        <input type="text" class="text" name="phone_mobile" placeholder="065-421-12-45"  id="phone_mobile" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile'];?>
<?php }?>" />
				</p>
				
				<?php if (isset($_smarty_tpl->tpl_vars['newsletter']->value)&&$_smarty_tpl->tpl_vars['newsletter']->value){?>
				<p class="checkbox">
					<input type="checkbox" name="newsletter" id="newsletter" value="1" <?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['newsletter']){?>checked="checked"<?php }?> autocomplete="off"/>
					<label for="newsletter"><?php echo smartyTranslate(array('s'=>'Sign up for our newsletter!'),$_smarty_tpl);?>
</label>
				</p>
				<p class="checkbox" >
					<input type="checkbox"name="optin" id="optin" value="1" <?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['optin']){?>checked="checked"<?php }?> autocomplete="off"/>
					<label for="optin"><?php echo smartyTranslate(array('s'=>'Receive special offers from our partners!'),$_smarty_tpl);?>
</label>
				</p>
				<?php }?>				
				
                                
				<?php if (!$_smarty_tpl->tpl_vars['stateExist']->value){?>
				<p class="required id_state select hidden">
					<label for="id_state"><?php echo smartyTranslate(array('s'=>'State'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<select name="id_state" id="id_state">
						<option value="">-</option>
					</select>
				</p>
				<?php }?>
				<?php if (!$_smarty_tpl->tpl_vars['dniExist']->value){?>
				<p class="required text dni">
					<label for="dni"><?php echo smartyTranslate(array('s'=>'Identification number'),$_smarty_tpl);?>
 <sup>*</sup></label>
					<input type="text" class="text" name="dni" id="dni" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['dni']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['dni'];?>
<?php }?>" />
					<span class="form_info"><?php echo smartyTranslate(array('s'=>'DNI / NIF / NIE'),$_smarty_tpl);?>
</span>
				</p>
				<?php }?>
				<p class="textarea is_customer_param">
					<label for="other"><?php echo smartyTranslate(array('s'=>'Additional information'),$_smarty_tpl);?>
</label>
					<textarea name="other" id="other" cols="26" rows="3"></textarea>
				</p>
				<?php if (isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)&&$_smarty_tpl->tpl_vars['one_phone_at_least']->value){?>
					<p class="inline-infos required is_customer_param"><?php echo smartyTranslate(array('s'=>'You must register at least one phone number.'),$_smarty_tpl);?>
</p>
				<?php }?>								
				<p class="text is_customer_param">
					<label for="phone"><?php echo smartyTranslate(array('s'=>'Home phone'),$_smarty_tpl);?>
</label>
					<input type="text" class="text" name="phone" id="phone" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['guestInformations']->value['phone']){?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['phone'];?>
<?php }?>" />
				</p>
				<input type="hidden" name="alias" id="alias" value="<?php echo smartyTranslate(array('s'=>'My address'),$_smarty_tpl);?>
"/>

				<?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_FORM']->value;?>

				<p class="submit">
					<input type="submit" class="exclusive button" name="submitAccount" id="submitAccount" value="<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
" />
				</p>
				<p style="display: none;" id="opc_account_saved">
					<?php echo smartyTranslate(array('s'=>'Account information saved successfully'),$_smarty_tpl);?>

				</p>
				<p class="required opc-required" style="clear: both;">
					<sup>*</sup><?php echo smartyTranslate(array('s'=>'Required field'),$_smarty_tpl);?>

				</p>
				<!-- END Account -->
			</div>
		</fieldset>
	</form>
	<div class="clear"></div>
</div>
<?php }} ?>