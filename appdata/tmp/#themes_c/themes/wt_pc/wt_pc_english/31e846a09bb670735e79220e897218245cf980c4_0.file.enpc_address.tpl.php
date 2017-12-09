<?php /* Smarty version 3.1.27, created on 2017-10-27 14:12:12
         compiled from "C:\phpStudy\PHPTutorial\WWW\wentong\themes\wt_pc\wt_pc_english\enpc_address.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3135959f2ce3cb67b60_09296727%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31e846a09bb670735e79220e897218245cf980c4' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\wentong\\themes\\wt_pc\\wt_pc_english\\enpc_address.tpl',
      1 => 1508306999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3135959f2ce3cb67b60_09296727',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f2ce3cc9c515_35047026',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f2ce3cc9c515_35047026')) {
function content_59f2ce3cc9c515_35047026 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3135959f2ce3cb67b60_09296727';
?>
                   <div class="w1000 adr">
                      <div class="address white">
					  <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('block', array('refid'=>'site_Copyright','sortby'=>'sort','order'=>'d','limit'=>'1,1','nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
                         <span class="orange">美国总部:</span>
                         <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_txt'];?>
</p>
                         <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_one'];?>
</p>
                         <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_two'];?>
</p>
                         <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_three'];?>
</p><?php } ?>
                         <div style="margin-top:20px"></div>
						  <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('block', array('refid'=>'site_Copyright','sortby'=>'sort','order'=>'d','limit'=>'3,1','nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
                         <span class="orange">青岛分公司:</span>
                         <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_txt'];?>
</p>
                         <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_one'];?>
</p>
                         <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_two'];?>
</p>
                         <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_three'];?>
</p><?php } ?>
                      </div>
                      <div class="address white">
					  <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('block', array('refid'=>'site_Copyright','sortby'=>'sort','order'=>'d','limit'=>'2,1','nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
                         <span class="orange">北京分公司:</span>
                         <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_txt'];?>
</p>
                         <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_one'];?>
</p> 
                         <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_two'];?>
</p>
                         <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_three'];?>
</p>
                         <!--<p>传真: 86-10-88481223</p>-->
                         <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_four'];?>
</p><?php } ?>
                      </div>
                  </div> <?php }
}
?>