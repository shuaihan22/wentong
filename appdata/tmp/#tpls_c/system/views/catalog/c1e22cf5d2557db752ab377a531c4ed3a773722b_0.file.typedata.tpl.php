<?php /* Smarty version 3.1.27, created on 2017-01-21 14:17:05
         compiled from "F:\wamp\www\6\modules\system\views\catalog\typedata.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:204735882fce1d52681_30795882%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1e22cf5d2557db752ab377a531c4ed3a773722b' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\system\\views\\catalog\\typedata.tpl',
      1 => 1472547290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204735882fce1d52681_30795882',
  'variables' => 
  array (
    'total' => 0,
    'items' => 0,
    'item' => 0,
    'canEdit' => 0,
    'canDel' => 0,
    'search' => 0,
    'canAdd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5882fce1dac425_98213228',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5882fce1dac425_98213228')) {
function content_5882fce1dac425_98213228 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '204735882fce1d52681_30795882';
?>
<tbody data-total="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
	<?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
	<tr rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
		<td>
			<a href="#<?php echo Router::url(array('0'=>'system/catalog/','1'=>false));
echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
/">
				<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

			</a>
		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['type'];?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['item']->value['is_enum']) {?><span class="badge txt-color-green">是</span><?php }?></td>
		<td class="hidden-xs hidden-sm"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['note'], ENT_QUOTES, 'UTF-8', true);?>
</td>							
		<td class="text-right">
			<div class="btn-group">
			<?php if ($_smarty_tpl->tpl_vars['canEdit']->value) {?>
				<a class="btn btn-primary btn-xs" href="#<?php echo Router::url(array('0'=>'system/catatype/edit','1'=>false));
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
					<i class="fa fa-pencil-square-o"></i>
				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canDel']->value) {?>
			<a href="<?php echo Router::url(array('0'=>'system/catatype/del'));
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" 
				class="btn btn-danger btn-xs"
				data-confirm="你真的要删除这个数据吗？"
				target="ajax"><i class="fa fa-trash-o"></i></a>
			<?php }?>
			</div>
		</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
	<tr>
		<td colspan="5">
			<?php if ($_smarty_tpl->tpl_vars['search']->value) {?>未找到<?php } else { ?>还未定义<?php }?>数据项.
			<?php if ($_smarty_tpl->tpl_vars['canAdd']->value) {?>
			你可立即
			<a href="#<?php echo Router::url(array('0'=>'system/catatype/add','1'=>false));?>
">定义一个数据项</a>	
			<?php }?>				
		</td>
	</tr>
	<?php
}
?>	
</tbody><?php }
}
?>