<?php /* Smarty version 3.1.27, created on 2017-01-18 11:29:10
         compiled from "F:\wamp\www\6\modules\system\views\notice\data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22533587ee106320789_79860292%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd26f0d05d7d76a10fc25a2575699b870ce495921' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\system\\views\\notice\\data.tpl',
      1 => 1472547288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22533587ee106320789_79860292',
  'variables' => 
  array (
    'total' => 0,
    'rows' => 0,
    'row' => 0,
    'canEditNotice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587ee106372819_33396836',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587ee106372819_33396836')) {
function content_587ee106372819_33396836 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '22533587ee106320789_79860292';
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
	<tr name="notice" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
		<td></td>
		<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="grp"/></td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['canEditNotice']->value) {?>
			<a href="<?php echo Router::url(array('0'=>'system/notice/edit'));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" 
			target="tag" data-tag="#content"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></td>
			<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>

			<?php }?>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nickname'];?>
</td>
		<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['create_time'],'Y-m-d');?>
</td>	
		<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['expire_time'],'Y-m-d');?>
</td>		
	</tr>
	<tr parent="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
		<td colspan="2"></td>
		<td colspan="5"><?php echo nl2br($_smarty_tpl->tpl_vars['row']->value['message']);?>
</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
	<tr>		
		<td colspan="7">暂无通知.</td>
	</tr>
	<?php
}
?>
</tbody><?php }
}
?>