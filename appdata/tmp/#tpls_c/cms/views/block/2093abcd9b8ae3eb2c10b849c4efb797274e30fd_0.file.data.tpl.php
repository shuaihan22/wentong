<?php /* Smarty version 3.1.27, created on 2017-01-21 14:15:29
         compiled from "F:\wamp\www\6\modules\cms\views\block\data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:205475882fc8191e368_19412453%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2093abcd9b8ae3eb2c10b849c4efb797274e30fd' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\block\\data.tpl',
      1 => 1472547308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205475882fc8191e368_19412453',
  'variables' => 
  array (
    'total' => 0,
    'rows' => 0,
    'row' => 0,
    'canEditBlock' => 0,
    'canAddBlock' => 0,
    'canDelBlock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5882fc8198b974_01795653',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5882fc8198b974_01795653')) {
function content_5882fc8198b974_01795653 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '205475882fc8191e368_19412453';
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
	<tr name="block" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
		<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="grp" /></td>		
		<td>
			<?php if ($_smarty_tpl->tpl_vars['canEditBlock']->value) {?>
			<a  href="#<?php echo Router::url(array('0'=>'cms/blockitem/','1'=>false));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">			
				<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</a>
			<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['mcnt']) {?>(<?php echo $_smarty_tpl->tpl_vars['row']->value['mcnt'];?>
)<?php }?>
		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['refid'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['catelogName'];?>
</td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['note'], ENT_QUOTES, 'UTF-8', true);?>
</td>	
		<td class="text-right">
			<div class="btn-group">
			<?php if ($_smarty_tpl->tpl_vars['canAddBlock']->value) {?>
			<a href="#<?php echo Router::url(array('0'=>'cms/block/edit','1'=>false));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-primary">			
				<i class="fa fa-pencil-square-o"></i></a>
			<a class="btn btn-success btn-xs"
					href="#<?php echo Router::url(array('0'=>'cms/blockfield','1'=>false));
echo $_smarty_tpl->tpl_vars['row']->value['refid'];?>
" title="自定义字段"> <i class="fa fa-book"></i>
				</a> 
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canDelBlock']->value) {?>
			<a title="删除" class="btn btn-xs btn-danger" 
				href="<?php echo Router::url(array('0'=>'cms/block/del'));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="ajax"
				data-confirm="你确定要删除这个碎片吗?">
				<i class="glyphicon glyphicon-trash"></i></a>
			<?php }?>
			</div>
		</td>	
	</tr>
	<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
	<tr>
		<td colspan="6" class="text-center">无结果</td>
	</tr>
	<?php
}
?>
</tbody><?php }
}
?>