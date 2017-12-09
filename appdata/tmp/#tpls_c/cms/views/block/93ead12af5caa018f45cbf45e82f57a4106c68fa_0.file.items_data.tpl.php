<?php /* Smarty version 3.1.27, created on 2017-01-21 14:30:28
         compiled from "F:\wamp\www\6\modules\cms\views\block\items_data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2680158830004288414_01421718%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93ead12af5caa018f45cbf45e82f57a4106c68fa' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\block\\items_data.tpl',
      1 => 1472547307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2680158830004288414_01421718',
  'variables' => 
  array (
    'total' => 0,
    'rows' => 0,
    'row' => 0,
    'canEditBlock' => 0,
    'canDelBlock' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58830004399b51_53292288',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58830004399b51_53292288')) {
function content_58830004399b51_53292288 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2680158830004288414_01421718';
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
	<tr name="blockitem" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
		<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="grp" /></td>			
		<td>			
			<a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>			
			<?php if ($_smarty_tpl->tpl_vars['row']->value['page_id']) {?>[<?php echo $_smarty_tpl->tpl_vars['row']->value['page_id'];?>
]<?php }?>
		</td>		
		<td><?php if ($_smarty_tpl->tpl_vars['row']->value['image']) {?>有<?php }?></td>
		<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</td>
		<td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sort'];?>
" class="ch-item-sort form-control" style="width:50px" maxlength="3" /></td>
		<td class="text-center">	
			<div class="btn-group">	
			<?php if ($_smarty_tpl->tpl_vars['canEditBlock']->value) {?>
			<a class="btn btn-xs btn-primary"  href="#<?php echo Router::url(array('0'=>'cms/blockitem/edit','1'=>false));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
				<i class="fa fa-pencil-square-o"></i></a>
			<?php }?>	
			<?php if ($_smarty_tpl->tpl_vars['canDelBlock']->value) {?>
			<a title="删除" class="btn btn-xs btn-danger" 
				href="<?php echo Router::url(array('0'=>'cms/blockitem/del'));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="ajax"
				data-confirm="你确定要删除这个内容吗?">
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
		<td colspan="7" class="text-center">无结果,
			<a href="#<?php echo Router::url(array('0'=>'cms/blockitem/add','1'=>false));
echo $_smarty_tpl->tpl_vars['block']->value;?>
">立即新增</a>.
		</td>
	</tr>
	<?php
}
?>
</tbody><?php }
}
?>