<?php /* Smarty version 3.1.27, created on 2017-01-22 11:20:51
         compiled from "F:\wamp\www\6\themes\wt_pc_chinese\address.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1921958842513c9b852_47629053%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b41416c8f99c53466ab70e9e99d4690e17f50fdb' => 
    array (
      0 => 'F:\\wamp\\www\\6\\themes\\wt_pc_chinese\\address.tpl',
      1 => 1484984450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1921958842513c9b852_47629053',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58842513cd8758_43231759',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58842513cd8758_43231759')) {
function content_58842513cd8758_43231759 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1921958842513c9b852_47629053';
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