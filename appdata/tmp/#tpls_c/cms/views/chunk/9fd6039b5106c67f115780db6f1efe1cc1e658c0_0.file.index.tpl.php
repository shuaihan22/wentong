<?php /* Smarty version 3.1.27, created on 2017-01-21 14:25:51
         compiled from "F:\wamp\www\6\modules\cms\views\chunk\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:99185882feefeecec8_88099268%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fd6039b5106c67f115780db6f1efe1cc1e658c0' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\chunk\\index.tpl',
      1 => 1472547308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99185882feefeecec8_88099268',
  'variables' => 
  array (
    'canAddChunk' => 0,
    'canDelChunk' => 0,
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5882fef001fde4_60244780',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5882fef001fde4_60244780')) {
function content_5882fef001fde4_60244780 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '99185882feefeecec8_88099268';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-code"></i> 碎片管理			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<?php if ($_smarty_tpl->tpl_vars['canAddChunk']->value) {?>
			<button type="button" 
					class="btn btn-labeled btn-success"
					data-url="<?php echo Router::url(array('0'=>'cms/chunk/add'));?>
"
					target="tag"
					data-tag="#content"
					>
				<span class="btn-label">
					<i class="glyphicon glyphicon-plus"></i>
				</span>新增
			</button>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canDelChunk']->value) {?>
			<button type="button" 
					class="btn btn-labeled btn-danger"
					data-url="<?php echo Router::url(array('0'=>'cms/chunk/del'));?>
"
					target="ajax"					
					data-grp="#chunk-table tbody input.grp:checked" 
					data-arg="ids" 
					data-warn="请选择要删除的碎片!" 
					data-confirm="你真的要删除选中的碎片吗?"
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
				  	<form data-widget="nuiSearchForm" data-for="#chunk-table" class="smart-form">
				  		<fieldset>
				  			<div class="row">
				  				<section class="col col-3">
									<label class="input">
										<i class="icon-prepend fa fa-filter"></i>
										<input type="text" placeholder="关键词" name="keywords"/>
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
					id="chunk-table"
					data-widget="nuiTable"		
					data-auto="true"
					data-source="<?php echo Router::url(array('0'=>'cms/chunk/data'));?>
"
					data-sort="CK.id,d"	
					data-tfoot="true"			 
					>
					<thead>
						<tr>
							<th width="30"><input type="checkbox" class="grp"/></th>
							<th width="70" data-sort="CK.id,d">ID</th>					
							<th width="200" data-sort="CK.name,d">
								名称
							</th>						
							<th width="100" data-sort="catelog,d">分类</th>
							<th class="hidden-xs hidden-sm">关键词</th>
							<th width="30"></th>							
						</tr>
					</thead>					
				</table>
				<div class="panel-footer">
					<div data-widget="nuiPager" data-for="#chunk-table" data-limit="20"></div>
				</div>			
			</div>
		</article>
	</div>
</section><?php }
}
?>