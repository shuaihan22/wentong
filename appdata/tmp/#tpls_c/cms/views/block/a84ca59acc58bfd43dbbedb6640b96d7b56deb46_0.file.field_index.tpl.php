<?php /* Smarty version 3.1.27, created on 2017-01-21 14:29:48
         compiled from "F:\wamp\www\6\modules\cms\views\block\field_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:130025882ffdcd60a26_87268107%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a84ca59acc58bfd43dbbedb6640b96d7b56deb46' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\block\\field_index.tpl',
      1 => 1472547307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130025882ffdcd60a26_87268107',
  'variables' => 
  array (
    'blockId' => 0,
    'blockName' => 0,
    'canAddModel' => 0,
    'block' => 0,
    'canDelModel' => 0,
    'items' => 0,
    'item' => 0,
    'widgets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5882ffdcdf5141_32796971',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5882ffdcdf5141_32796971')) {
function content_5882ffdcdf5141_32796971 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '130025882ffdcd60a26_87268107';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-list-alt"></i> 
			<a href="#<?php echo Router::url(array('0'=>'cms/block','1'=>false));?>
">区块管理</a>
			<span>&nbsp;&gt;&nbsp;<a href="#<?php echo Router::url(array('0'=>'cms/blockitem','1'=>false));
echo $_smarty_tpl->tpl_vars['blockId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['blockName']->value;?>
</a></span>
			<span>&nbsp;&gt;&nbsp;字段管理</span>			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<?php if ($_smarty_tpl->tpl_vars['canAddModel']->value) {?>
			<a class="btn btn-labeled btn-success"
					href="#<?php echo Router::url(array('0'=>'cms/blockfield/add','1'=>false));
echo $_smarty_tpl->tpl_vars['block']->value;?>
">
				<span class="btn-label">
					<i class="glyphicon glyphicon-plus"></i>
				</span>新增
			</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canDelModel']->value) {?>
			<button type="button" 
					class="btn btn-labeled btn-danger"
					data-url="<?php echo Router::url(array('0'=>'cms/blockfield/del'));?>
"
					target="ajax"					
					data-grp="#blockfield-table tbody input.grp:checked" 
					data-arg="ids" 
					data-warn="请选择要删除的自定义字段!" 
					data-confirm="你真的要删除选中的自定义字段吗?">
				<span class="btn-label">
					<i class="glyphicon glyphicon-trash"></i>
				</span>删除
			</button>
			<?php }?>
		</div>
	</div>
</div>
<section id="widget-grid">	
	<div class="row">		
		<article class="col-sm-12">
			<div class="panel panel-default">				
				<table 
					id="blockfield-table"
					data-widget="nuiTable"							
					data-sort="id,d"
					>
					<thead>
						<tr>
							<th width="30"><input type="checkbox" class="grp"/></th>
							<th width="150" data-sort="name,d">字段名</th>
							<th width="250">标题</th>
							<th width="50" class="hidden-xs hidden-sm">必填</th>						
							<th class="hidden-xs hidden-sm">组件类型</th>
							<th width="50" class="hidden-xs hidden-sm">组</th>
							<th width="50" class="hidden-xs hidden-sm">宽</th>	
							<th width="50" class="hidden-xs hidden-sm">排序</th>
							<th width="30"></th>							
						</tr>
					</thead>
					<tbody>
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
						<tr name="field" rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
							<td><input type="checkbox" class="grp" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"/></td>
							<td>
								<a href="#<?php echo Router::url(array('0'=>'cms/blockfield/edit','1'=>false));
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

								</a>							
							</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</td>
							<td class="hidden-xs hidden-sm"><?php if ($_smarty_tpl->tpl_vars['item']->value['required']) {?>是<?php }?></td>							
							<td class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['widgets']->value->getWidgetName($_smarty_tpl->tpl_vars['item']->value['type']);?>
</td>
							<td class="hidden-xs hidden-sm"><?php if ($_smarty_tpl->tpl_vars['item']->value['group']) {
echo $_smarty_tpl->tpl_vars['item']->value['group'];
}?></td>
							<td class="hidden-xs hidden-sm"><?php if ($_smarty_tpl->tpl_vars['item']->value['col']) {
echo $_smarty_tpl->tpl_vars['item']->value['col'];
}?></td>
							<td class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['item']->value['sort'];?>
</td>
							<td class="text-right">
								<?php if ($_smarty_tpl->tpl_vars['canDelModel']->value) {?>
								<a href="<?php echo Router::url(array('0'=>'cms/blockfield/del'));
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" 
									class="btn btn-danger btn-xs"
									data-confirm="你真的要删除这个字段吗？"
									target="ajax"><i class="fa fa-trash-o"></i></a>
								<?php }?>
							</td>						
						</tr>
						<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
						<tr>
							<td colspan="11">无自定义字段</td>
						</tr>
						<?php
}
?>
					</tbody>
				</table>							
			</div>
		</article>
	</div>
</section><?php }
}
?>