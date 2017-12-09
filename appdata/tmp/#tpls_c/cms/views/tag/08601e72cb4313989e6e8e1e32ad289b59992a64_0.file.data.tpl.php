<?php /* Smarty version 3.1.27, created on 2017-01-20 14:07:01
         compiled from "F:\wamp\www\6\modules\cms\views\tag\data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:37875881a90505de04_38404956%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08601e72cb4313989e6e8e1e32ad289b59992a64' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\tag\\data.tpl',
      1 => 1472547307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37875881a90505de04_38404956',
  'variables' => 
  array (
    'total' => 0,
    'rows' => 0,
    'row' => 0,
    'canEditTag' => 0,
    'canDelTag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881a9050ac010_86565875',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881a9050ac010_86565875')) {
function content_5881a9050ac010_86565875 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '37875881a90505de04_38404956';
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
	<tr name="tag" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
		<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="grp" /></td>		
		<td>
			<?php if ($_smarty_tpl->tpl_vars['canEditTag']->value) {?>
			<a href="#<?php echo Router::url(array('0'=>'cms/tag/edit','1'=>false));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['row']->value['tag'];?>
</a>
			<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['row']->value['tag'];?>

			<?php }?>
		</td>
		<td class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
		<td class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
</td>
		<td class="text-right">			
			<?php if ($_smarty_tpl->tpl_vars['canDelTag']->value) {?>
			<a title="删除" class="btn btn-xs btn-danger" 
				href="<?php echo Router::url(array('0'=>'cms/tag/del'));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="ajax"
				data-confirm="你确定要删除这个内链吗?">
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
		<td colspan="5">无结果,立即新增.</td>
	</tr>
	<?php
}
?>
</tbody><?php }
}
?>