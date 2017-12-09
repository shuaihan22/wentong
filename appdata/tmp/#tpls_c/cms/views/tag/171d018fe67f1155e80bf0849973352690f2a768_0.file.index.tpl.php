<?php /* Smarty version 3.1.27, created on 2017-01-20 14:07:00
         compiled from "F:\wamp\www\6\modules\cms\views\tag\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:219145881a904c024a4_79298496%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '171d018fe67f1155e80bf0849973352690f2a768' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\tag\\index.tpl',
      1 => 1472547306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219145881a904c024a4_79298496',
  'variables' => 
  array (
    'canAddTag' => 0,
    'canUpdateDict' => 0,
    'canDelTag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881a904d3acf1_03216635',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881a904d3acf1_03216635')) {
function content_5881a904d3acf1_03216635 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '219145881a904c024a4_79298496';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-8 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-tags"></i> 
			内链库			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<?php if ($_smarty_tpl->tpl_vars['canAddTag']->value) {?>
			<a class="btn btn-success"
					href="#<?php echo Router::url(array('0'=>'cms/tag/add','1'=>false));?>
"><i class="glyphicon glyphicon-plus"></i> 新增
			</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canUpdateDict']->value) {?>
			<a class="btn btn-primary"
					href="<?php echo Router::url(array('0'=>'cms/tag/update_dict'));?>
" target="ajax" data-confirm="你确定要更新字典文件吗?"><i class="glyphicon glyphicon-book"></i> 更新字典
			</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canDelTag']->value) {?>
			<button type="button" 
					class="btn btn-danger"
					data-url="<?php echo Router::url(array('0'=>'cms/tag/del'));?>
"
					target="ajax"					
					data-grp="#tag-table tbody input.grp:checked" 
					data-arg="ids" 
					data-warn="请选择要删除的内链!" 
					data-confirm="你真的要删除选中的内链吗?"
					><i class="glyphicon glyphicon-trash"></i> 删除
			</button>
			<?php }?>
		</div>
	</div>
</div>
<section id="widget-grid">	
	<div class="row">		
		<article class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-body no-padding">			  
				  	<form data-widget="nuiSearchForm" data-for="#tag-table" class="smart-form">
				  		<fieldset>
				  			<div class="row">
				  				<section class="col col-3">
									<label class="input">
										<i class="icon-prepend fa fa-filter"></i>
										<input type="text" placeholder="标签" name="tag"/>
									</label>
								</section>								
								<section class="col col-3">
									<button class="btn btn-sm btn-primary" type="submit">
										<i class="fa fa-search"></i> 搜索
									</button>
								</section>
				  			</div>
				  		</fieldset>				  		
				  	</form>			  
				</div>
				<table 
					id="tag-table"
					data-widget="nuiTable"		
					data-auto="true"
					data-source="<?php echo Router::url(array('0'=>'cms/tag/data'));?>
"
					data-sort="id,d"		 
					>
					<thead>
						<tr>
							<th width="30"><input type="checkbox" class="grp"/></th>
							<th width="150" data-sort="tag,d">标签</th>
							<th class="hidden-xs hidden-sm" width="250" data-sort="title,d">标题</th>
							<th class="hidden-xs hidden-sm">链接</th>							
							<th width="30"></th>							
						</tr>
					</thead>					
				</table>
				<div class="panel-footer">
					<div data-widget="nuiPager" data-for="#tag-table" data-limit="20"></div>
				</div>			
			</div>
		</article>
	</div>
</section><?php }
}
?>