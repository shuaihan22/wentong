<?php /* Smarty version 3.1.27, created on 2017-01-21 14:15:29
         compiled from "F:\wamp\www\6\modules\cms\views\block\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:209785882fc81371003_65701466%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '125c4212af19b66436619cef40c24fa31d08fb39' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\block\\index.tpl',
      1 => 1472547307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209785882fc81371003_65701466',
  'variables' => 
  array (
    'canAddBlock' => 0,
    'canDelBlock' => 0,
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5882fc814400b4_11289388',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5882fc814400b4_11289388')) {
function content_5882fc814400b4_11289388 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '209785882fc81371003_65701466';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-list-ul"></i> 区块管理			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<?php if ($_smarty_tpl->tpl_vars['canAddBlock']->value) {?>
			<a type="button" 
					class="btn btn-labeled btn-success"
					href="#<?php echo Router::url(array('0'=>'cms/block/add','1'=>false));?>
">
				<span class="btn-label">
					<i class="glyphicon glyphicon-plus"></i>
				</span>新增
			</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canDelBlock']->value) {?>
			<button type="button" 
					class="btn btn-labeled btn-danger"
					data-url="<?php echo Router::url(array('0'=>'cms/block/del'));?>
"
					target="ajax"					
					data-grp="#block-table tbody input.grp:checked" 
					data-arg="ids" 
					data-warn="请选择要删除的区块!" 
					data-confirm="你真的要删除选中的区块吗?"
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
				<div class="panel-body no-padding">			  
				  	<form data-widget="nuiSearchForm" data-for="#block-table" class="smart-form">
				  		<fieldset>
				  			<div class="row">
				  				<section class="col col-3">
									<label class="input">
										<i class="icon-prepend fa fa-filter"></i>
										<input type="text" placeholder="名称" name="name"/>
									</label>
								</section>
								<section class="col col-3">
									<label class="input">
										<i class="icon-prepend fa fa-filter"></i>
										<input type="text" placeholder="引用ID" name="refid"/>
									</label>
								</section>							
								<section class="col col-3">
									<label class="select">
										<select name="catelog" id="catelog">
											<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['options']->value),$_smarty_tpl);?>

										</select>
										<i></i>
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
					id="block-table"
					data-widget="nuiTable"		
					data-auto="true"
					data-source="<?php echo Router::url(array('0'=>'cms/block/data'));?>
"
					data-sort="CB.id,d"	
					data-tfoot="true"			 
					>
					<thead>
						<tr>
							<th width="30"><input type="checkbox" class="grp"/></th>
							<th data-sort="CB.name,d">
								区块名称
							</th>
							<th width="150" data-sort="CB.refid,d">
								引用ID
							</th>
							<th width="150" data-sort="catelog,d">区块分类</th>
							<th width="200">说明</th>
							<th width="150"></th>							
						</tr>
					</thead>					
				</table>
				<div class="panel-footer">
					<div data-widget="nuiPager" data-for="#block-table" data-limit="20"></div>
				</div>			
			</div>
		</article>
	</div>
</section><?php }
}
?>