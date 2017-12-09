<?php /* Smarty version 3.1.27, created on 2017-01-20 14:07:06
         compiled from "F:\wamp\www\6\modules\cms\views\channel\data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:178575881a90ab92582_63845304%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea8022a6348cac105ba19caf1c322a38ea05e9f6' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\channel\\data.tpl',
      1 => 1472547305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178575881a90ab92582_63845304',
  'variables' => 
  array (
    'total' => 0,
    'search' => 0,
    'items' => 0,
    'item' => 0,
    'canEditChannel' => 0,
    'type' => 0,
    'canAddChannel' => 0,
    'canUpdateURL' => 0,
    'canDeleteChannel' => 0,
    'channelType' => 0,
    '_tid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881a90ac1b127_76736584',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881a90ac1b127_76736584')) {
function content_5881a90ac1b127_76736584 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '178575881a90ab92582_63845304';
?>
<tbody data-total="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" data-disable-tree="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
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
" parent="<?php echo $_smarty_tpl->tpl_vars['item']->value['upid'];?>
" data-parent="<?php if ($_smarty_tpl->tpl_vars['item']->value['child_cnt'] > 0) {?>true<?php }?>">	
		<td>
			<a href="<?php echo safe_url($_smarty_tpl->tpl_vars['item']->value,false);?>
?preview" target="_blank">
			<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
								
			</a>		
			<?php if ($_smarty_tpl->tpl_vars['item']->value['hidden']) {?>[隐]<?php }?>				
		</td>
		<td><?php if (!$_smarty_tpl->tpl_vars['item']->value['isfinal']) {?><span class="label label-success">是</span><?php }?></td>
		<td class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['item']->value['modelName'];?>
</td>
		<td class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['item']->value['refid'];?>
</td>
		<td class="hidden-xs hidden-sm"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['sort'];?>
" class="ch-item-sort form-control" style="width:50px" maxlength="3" /></td>						
		<td class="text-right">
			<div class="btn-group">
				<?php if ($_smarty_tpl->tpl_vars['canEditChannel']->value) {?>
					<a href="#<?php echo Router::url(array('0'=>'cms/channel/edit','1'=>false));
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-primary btn-xs">
					<i class="fa fa-pencil-square-o"></i></a>									
				<?php } else { ?>
					<a href="#<?php echo Router::url(array('0'=>'cms/page','1'=>false));
if ($_smarty_tpl->tpl_vars['type']->value) {?>all/topic/<?php }?>?channel=<?php echo $_smarty_tpl->tpl_vars['item']->value['refid'];?>
" class="btn btn-primary btn-xs">
						<i class="fa fa-files-o"></i></a>
				<?php }?>									
				<button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu pull-right">
				<?php if ($_smarty_tpl->tpl_vars['canEditChannel']->value) {?>
				<li><a href="#<?php echo Router::url(array('0'=>'cms/page','1'=>false));
if ($_smarty_tpl->tpl_vars['type']->value) {?>all/topic/<?php }?>?channel=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
				   <i class="fa fa-files-o"></i> 查看页面</a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['canAddChannel']->value && !$_smarty_tpl->tpl_vars['type']->value) {?>
				<li><a href="#<?php echo Router::url(array('0'=>'cms/channel/add','1'=>false));
if ($_smarty_tpl->tpl_vars['type']->value) {?>1<?php } else { ?>0<?php }?>/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"
					title="添加子分类"><i class="glyphicon glyphicon-plus txt-color-green"></i> 添加子栏目</a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['canUpdateURL']->value) {?>
				<li>
					<a href="#" rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="更新页面URL" class="update_page_url txt-color-orange">
						<i class="glyphicon glyphicon-link"></i> 更新页面URL</a>
				</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['canDeleteChannel']->value) {?>
				<li><a href="<?php echo Router::url(array('0'=>'cms/channel/del'));
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" 									
					data-confirm="你真的要删除这个<?php echo $_smarty_tpl->tpl_vars['channelType']->value;?>
吗？"
					target="ajax" class="txt-color-red"><i class="fa fa-trash-o"></i> 删除</a></li>
				<?php }?>
				</ul>
			</div>
		</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>

	<tr>
		<td colspan="6">
			<?php if ($_smarty_tpl->tpl_vars['search']->value) {?>无结果<?php } else { ?>
			无栏目.立即
			<?php if ($_smarty_tpl->tpl_vars['canAddChannel']->value) {?>
			<a href="#<?php echo Router::url(array('0'=>'cms/channel/add','1'=>false));
if ($_smarty_tpl->tpl_vars['type']->value) {?>1<?php } else { ?>0/<?php echo $_smarty_tpl->tpl_vars['_tid']->value;
}?>">
				新增
			</a>
			<?php }?>
			<?php }?>
		</td>
	</tr>
	<?php
}
?>	
</tbody><?php }
}
?>