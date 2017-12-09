<?php /* Smarty version 3.1.27, created on 2017-01-21 14:25:52
         compiled from "F:\wamp\www\6\modules\cms\views\chunk\data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:48955882fef0423457_75332079%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cebc1a714aa99cfbc2b0fec8f06f1ad473fa6070' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\chunk\\data.tpl',
      1 => 1472547309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48955882fef0423457_75332079',
  'variables' => 
  array (
    'total' => 0,
    'rows' => 0,
    'row' => 0,
    'canEditChunk' => 0,
    'canDelChunk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5882fef0471663_55337506',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5882fef0471663_55337506')) {
function content_5882fef0471663_55337506 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '48955882fef0423457_75332079';
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
	<tr name="chunk" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
		<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="grp" /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['canEditChunk']->value) {?>
			<a href="<?php echo Router::url(array('0'=>'cms/chunk/edit'));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="tag" data-tag="#content">
				<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</a>
			<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>

			<?php }?>
		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['catelogName'];?>
</td>
		<td class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['row']->value['keywords'];?>
</td>	
		<td class="text-right">
			<?php if ($_smarty_tpl->tpl_vars['canDelChunk']->value) {?>
			<a title="删除" class="btn btn-xs btn-danger" 
				href="<?php echo Router::url(array('0'=>'cms/chunk/del'));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="ajax"
				data-confirm="你确定要删除这个碎片吗?">
				<i class="glyphicon glyphicon-trash"></i></a>
			<?php }?>
		</td>	
	</tr>
	<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
	<tr>
		<td colspan="6">无结果</td>
	</tr>
	<?php
}
?>
</tbody><?php }
}
?>