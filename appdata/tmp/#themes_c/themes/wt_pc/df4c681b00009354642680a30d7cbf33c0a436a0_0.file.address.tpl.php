<?php /* Smarty version 3.1.27, created on 2017-12-09 14:52:02
         compiled from "C:\phpStudy\PHPTutorial\WWW\wentong\themes\wt_pc\address.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:101945a2b881258fa78_52434416%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df4c681b00009354642680a30d7cbf33c0a436a0' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\wentong\\themes\\wt_pc\\address.tpl',
      1 => 1510036051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101945a2b881258fa78_52434416',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2b88125bab06_83803402',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2b88125bab06_83803402')) {
function content_5a2b88125bab06_83803402 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '101945a2b881258fa78_52434416';
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