<?php /* Smarty version 3.1.27, created on 2017-01-20 14:07:13
         compiled from "F:\wamp\www\6\modules\cms\views\catelog\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:126465881a911c208a6_70745726%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a94632d2418db7112626d69f7b47602b86b8dd5d' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\catelog\\index.tpl',
      1 => 1472547308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126465881a911c208a6_70745726',
  'variables' => 
  array (
    'catelogTitle' => 0,
    'canAdd' => 0,
    'catelogType' => 0,
    'items' => 0,
    'item' => 0,
    'canDeleteCatelog' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881a911d12be6_58844903',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881a911d12be6_58844903')) {
function content_5881a911d12be6_58844903 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '126465881a911c208a6_70745726';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-9 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-folder-open"></i> <?php echo $_smarty_tpl->tpl_vars['catelogTitle']->value;?>
			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<?php if ($_smarty_tpl->tpl_vars['canAdd']->value) {?>
			<button type="button" 
					class="btn btn-labeled btn-success"
					data-url="<?php echo Router::url(array('0'=>'cms/catelog/add'));
echo $_smarty_tpl->tpl_vars['catelogType']->value;?>
"
					target="tag"
					data-tag="#content"
					>
				<span class="btn-label">
					<i class="glyphicon glyphicon-plus"></i>
				</span>新增
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
					id="catelog-table"
					data-widget="nuiTable" 
					data-tree="true"
					data-expend="true"										 
					>
					<thead>
						<tr>					
							<th width="300">分类</th>
							<th width="50">ID</th>
							<th width="120">别名</th>
							<th class="hidden-xs hidden-sm">说明</th>
							<th width="70"></th>
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
						<tr data-parent="true" rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" parent="<?php echo $_smarty_tpl->tpl_vars['item']->value['upid'];?>
">	
							<td>
								<a href="<?php echo Router::url(array('0'=>'cms/catelog/edit'));
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" 
								   target="tag" data-tag="#content">
									<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

								</a>							
							</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['item']->value['alias'];?>
</td>
							<td class="hidden-xs hidden-sm"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['note'], ENT_QUOTES, 'UTF-8', true);?>
</td>							
							<td class="text-right">
								<?php if ($_smarty_tpl->tpl_vars['canAdd']->value) {?>
								<a href="<?php echo Router::url(array('0'=>'cms/catelog/add'));
echo $_smarty_tpl->tpl_vars['catelogType']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-primary btn-xs" target="tag" data-tag="#content"><i class="glyphicon glyphicon-plus"></i></a>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['canDeleteCatelog']->value) {?>
								<a href="<?php echo Router::url(array('0'=>'cms/catelog/del'));
echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" 
									class="btn btn-danger btn-xs"
									data-confirm="你真的要删除这个分类吗？"
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
							<td colspan="5">暂无<?php echo $_smarty_tpl->tpl_vars['catelogTitle']->value;?>

								<?php if ($_smarty_tpl->tpl_vars['canAdd']->value) {?>，立即
								<a href="<?php echo Router::url(array('0'=>'cms/catelog/add'));
echo $_smarty_tpl->tpl_vars['catelogType']->value;?>
" target="tag" data-tag="#content">添加一个<?php echo $_smarty_tpl->tpl_vars['catelogTitle']->value;?>
</a>.
								<?php }?>
							</td>
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