<?php /* Smarty version 3.1.27, created on 2017-01-18 11:36:25
         compiled from "F:\wamp\www\6\modules\system\views\role\data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28545587ee2b9c47e26_08177326%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4959df035a768940fb20d207143b26d148a34e1e' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\system\\views\\role\\data.tpl',
      1 => 1472547289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28545587ee2b9c47e26_08177326',
  'variables' => 
  array (
    'total' => 0,
    'rows' => 0,
    'row' => 0,
    'canEditRole' => 0,
    'hasAcl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587ee2b9c99ec4_41496962',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587ee2b9c99ec4_41496962')) {
function content_587ee2b9c99ec4_41496962 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28545587ee2b9c47e26_08177326';
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
	<tr name="role" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['role_id'];?>
">
		<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['role_id'];?>
" class="grp" /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['role_id'];?>
</td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['canEditRole']->value) {?>
			<a href="#<?php echo Router::url(array('0'=>'system/role/edit','1'=>false));
echo $_smarty_tpl->tpl_vars['row']->value['role_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['role_name'];?>
</a>
			<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['row']->value['role_name'];?>

			<?php }?>
		</td>
		<td class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['row']->value['role'];?>
</td>
		<td class="hidden-xs hidden-sm"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['note'], ENT_QUOTES, 'UTF-8', true);?>
</td>	
		<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['priority'];?>
" class="ch-item-sort form-control" style="width:50px" maxlength="3" /></td>
		<td class="text-right">
			<?php if ($_smarty_tpl->tpl_vars['hasAcl']->value) {?>
			<a title="权限设置" class="btn btn-xs btn-primary" href="#<?php echo Router::url(array('0'=>'system/role/acl','1'=>false));
echo $_smarty_tpl->tpl_vars['row']->value['role_id'];?>
"><i class="fa fa-sliders"></i></a>
			<?php }?>
		</td>	
	</tr>
	<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
	<tr>
		<td></td>
		<td colspan="6">无角色</td>
	</tr>
	<?php
}
?>
</tbody><?php }
}
?>