<?php /* Smarty version 3.1.27, created on 2017-01-21 14:30:28
         compiled from "F:\wamp\www\6\modules\cms\views\block\items_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2850458830004153a45_85082161%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '166a7d1c57d2a7d6a3e582a356e49c3b1fa37c20' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\block\\items_index.tpl',
      1 => 1472547308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2850458830004153a45_85082161',
  'variables' => 
  array (
    'blockName' => 0,
    'canAddBlock' => 0,
    'block' => 0,
    'canDelBlock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588300041c1065_87633802',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588300041c1065_87633802')) {
function content_588300041c1065_87633802 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2850458830004153a45_85082161';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-list-ul"></i> 
			<a href="#<?php echo Router::url(array('0'=>'cms/block','1'=>false));?>
">区块管理</a>
			<span>&gt; <?php echo $_smarty_tpl->tpl_vars['blockName']->value;?>
</span>
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<?php if ($_smarty_tpl->tpl_vars['canAddBlock']->value) {?>
			<a type="button" 
					class="btn btn-labeled btn-success"
					href="#<?php echo Router::url(array('0'=>'cms/blockitem/add'));
echo $_smarty_tpl->tpl_vars['block']->value;?>
">
				<span class="btn-label">
					<i class="glyphicon glyphicon-plus"></i>
				</span>新增
			</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canDelBlock']->value) {?>
			<button type="button" 
					class="btn btn-labeled btn-danger"
					data-url="<?php echo Router::url(array('0'=>'cms/blockitem/del'));?>
"
					target="ajax"					
					data-grp="#blockitem-table tbody input.grp:checked" 
					data-arg="ids" 
					data-warn="请选择要删除的区块内容!" 
					data-confirm="你真的要删除选中的区块内容吗?"
					>
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
					id="blockitem-table"
					data-widget="nuiTable"		
					data-auto="true"
					data-source="<?php echo Router::url(array('0'=>'cms/blockitem/data'));
echo $_smarty_tpl->tpl_vars['block']->value;?>
"
					data-sort="sort,a"		 
					>
					<thead>
						<tr>
							<th width="30"><input type="checkbox" class="grp"/></th>							
							<th width="300">
								标题
							</th>							
							<th width="50">
								图片
							</th>							
							<th width="300">说明</th>
							<th width="40" data-sort="sort,d">排序</th>
							<th width="60"></th>							
						</tr>
					</thead>					
				</table>
				<div class="panel-footer">
					<div data-widget="nuiPager" data-for="#blockitem-table" data-limit="20"></div>
				</div>			
			</div>
		</article>
	</div>
</section>
<?php echo '<script'; ?>
 type="text/javascript">
	if(!window.changeBlockItemSort){
		window.changeBlockItemSort = function(){
			var sort = $(this).val();
			if(/^\d?\d?\d$/.test(sort)){
				var id = $(this).parents('tr').attr('rel');
				nUI.ajax("<?php echo Router::url(array('0'=>'cms/blockitem/csort'));?>
",{ 
						element:$(this),
						data:{ id:id,sort:sort },
						blockUI:true,
						type:'POST'
				});	
			}
		};		
	}
	$('#blockitem-table').off('change','.ch-item-sort',changeBlockItemSort);
	$('#blockitem-table').on('change','.ch-item-sort',changeBlockItemSort);	
<?php echo '</script'; ?>
><?php }
}
?>