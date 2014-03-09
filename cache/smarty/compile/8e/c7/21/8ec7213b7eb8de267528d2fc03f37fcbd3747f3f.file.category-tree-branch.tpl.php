<?php /* Smarty version Smarty-3.1.14, created on 2014-03-06 12:48:28
         compiled from "/var/www/shopcase.org/themes/default/modules/blockcategories/category-tree-branch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12206123405318527cd939d1-59535261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ec7213b7eb8de267528d2fc03f37fcbd3747f3f' => 
    array (
      0 => '/var/www/shopcase.org/themes/default/modules/blockcategories/category-tree-branch.tpl',
      1 => 1393527079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12206123405318527cd939d1-59535261',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'last' => 0,
    'currentCategoryId' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5318527ce01655_42799282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5318527ce01655_42799282')) {function content_5318527ce01655_42799282($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/shopcase.org/tools/smarty/plugins/modifier.escape.php';
?>

<?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0){?>
    <p class="title_block"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['node']->value['name'], 'htmlall', 'UTF-8');?>
</p>
<?php }?>

    <li <?php if (isset($_smarty_tpl->tpl_vars['last']->value)&&$_smarty_tpl->tpl_vars['last']->value=='true'){?>class="last"<?php }?>>
            
            <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0){?>
                
            <?php }else{ ?>
                <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['node']->value['link'], 'htmlall', 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['currentCategoryId']->value)&&$_smarty_tpl->tpl_vars['node']->value['id']==$_smarty_tpl->tpl_vars['currentCategoryId']->value){?>class="selected"<?php }?>
                    title="<?php echo smarty_modifier_escape(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['node']->value['desc'])), 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['node']->value['name'], 'htmlall', 'UTF-8');?>
</a>
            <?php }?>
        
            <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0){?>
                    <ul>
                    <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['categoryTreeBranch']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['categoryTreeBranch']['last']){?>
                                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

                            <?php }else{ ?>
                                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'false'), 0);?>

                            <?php }?>
                    <?php } ?>
                    </ul>
            <?php }?>
            
    </li>

<?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])>0){?>
    </p>
<?php }?>
<?php }} ?>