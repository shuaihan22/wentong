<?php /* Smarty version 3.1.27, created on 2017-01-20 13:58:47
         compiled from "F:\wamp\www\6\modules\system\views\syslog\data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:102245881a7177d70d0_37986804%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ce154aa6fd3ad433ae04e23dec222cf1b02ace8' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\system\\views\\syslog\\data.tpl',
      1 => 1472547289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102245881a7177d70d0_37986804',
  'variables' => 
  array (
    'total' => 0,
    'rows' => 0,
    'row' => 0,
    'types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881a7178252e9_80438380',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881a7178252e9_80438380')) {
function content_5881a7178252e9_80438380 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '102245881a7177d70d0_37986804';
?>
<tbody data-total="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
	<?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
	<tr name="log" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
		<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="grp" /></td>
		<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['create_time'],'Y-m-d H:i:s');?>
</td>			
		<td class="hidden-mobile hidden-tablet"><?php echo $_smarty_tpl->tpl_vars['row']->value['nickname'];?>
</td>	
		<td class="hidden-mobile hidden-tablet"><?php echo $_smarty_tpl->tpl_vars['row']->value['ip'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['row']->value['activity']];?>
</td>
		<td><div><?php echo $_smarty_tpl->tpl_vars['row']->value['meta'];?>
</div></td>	
	</tr>
	<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
	<tr>
		<td colspan="6">无活动日志</td>
	</tr>
	<?php
}
?>
</tbody><?php }
}
?>