<?php /* Smarty version 3.1.27, created on 2017-01-20 14:49:35
         compiled from "F:\wamp\www\6\modules\cms\views\page\cpage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:211845881b2ff78e237_43259203%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97842489194f80c0f3d12cb5ff86ecfa5ca50549' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\page\\cpage.tpl',
      1 => 1472547309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211845881b2ff78e237_43259203',
  'variables' => 
  array (
    'enable_approving' => 0,
    'canSubmitPage' => 0,
    'canAddPage' => 0,
    'canDelPage' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881b2ff880570_41492630',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881b2ff880570_41492630')) {
function content_5881b2ff880570_41492630 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '211845881b2ff78e237_43259203';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-copy"></i> 自定义页面			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">			
			<?php if ($_smarty_tpl->tpl_vars['enable_approving']->value && $_smarty_tpl->tpl_vars['canSubmitPage']->value) {?>
			<input data-widget="nuiDatepicker" style="display:inline-block;width:100px;" class="form-control input-sm" type="text" placeholder="预定时间" id="pubdate"/>
			<input type="text" style="display:inline-block;width:70px;" class="form-control input-sm" data-widget="nuiTimepicker" id="pub_time"/>			
			<a class="btn btn-primary" target="ajax" 
					href="<?php echo Router::url(array('0'=>'cms/approve/submit/cpage-table'));?>
?pubdate=$#pubdate$&pubtime=$#pub_time$"
					data-grp="#cpage-table tbody input.grp:checked" 
					data-arg="ids" 
					data-warn="请选择要提交审核的页面!" 
					data-confirm="你真的要将选中的页面提交审核吗?"
					><i class="fa fa-w fa-legal"></i> 送审
			</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canAddPage']->value) {?>
			<a class="btn btn-success" href="#<?php echo Router::url(array('0'=>'cms/cpage/add','1'=>false));?>
">				
					<i class="glyphicon glyphicon-plus"></i> 新增
			</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canDelPage']->value) {?>
			<button type="button" 
					class="btn btn-danger"
					data-url="<?php echo Router::url(array('0'=>'cms/page/del'));?>
"
					target="ajax"					
					data-grp="#cpage-table tbody input.grp:checked" 
					data-arg="ids" 
					data-warn="请选择要删除的自定义页面!" 
					data-confirm="你真的要删除选中的自定义页面吗?"
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
				  	<form data-widget="nuiSearchForm" data-for="#cpage-table" class="smart-form">
				  		<fieldset>
				  			<div class="row">
				  				<section class="col col-4">
									<label class="input">
										<i class="icon-prepend fa fa-filter"></i>
										<input type="text" placeholder="关键词" name="keywords"/>
									</label>
								</section>
								<section class="col col-3">
									<label class="input" for="uuname">
									<input type="hidden" 
											data-widget="nuiCombox" 
											style="width:99%"
											data-source="<?php echo Router::url(array('0'=>'system/ajax/autocomplete/user/user_id/nickname/r:cms'));?>
" name="uuname" id="uuname"/>
										</label>
								</section>
								<?php if ($_smarty_tpl->tpl_vars['enable_approving']->value) {?>
								<section class="col col-2">
									<label class="select">
										<select name="status" id="status">
											<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['status']->value),$_smarty_tpl);?>

										</select>
										<i></i>
									</label>
								</section>
								<?php }?>	  			
								<section class="col col-md-2 text-right">
									<button class="btn btn-sm btn-primary" type="submit">
										<i class="fa fa-search"></i> 搜索
									</button>
								</section>
				  			</div>				  			
				  		</fieldset>				  		
				  	</form>			  
				</div>
				<table 
					id="cpage-table"
					data-widget="nuiTable"		
					data-auto="true"
					data-source="<?php echo Router::url(array('0'=>'cms/cpage/data'));?>
"
					data-sort="PG.id,d"	
					data-tfoot="true"
					data-tree="true"			 
					>
					<thead>
						<tr>
							<th width="20" class="hidden-xs hidden-sm"></th>
							<th width="30"><input type="checkbox" class="grp"/></th>
							<th width="60">ID</th>
							<th>页面标题</th>			
							<th width="120">模板</th>				
							<?php if ($_smarty_tpl->tpl_vars['enable_approving']->value) {?>
							<th width="100" data-sort="PG.status,d" class="hidden-xs hidden-sm">状态</th>
							<?php }?>
							<th width="140" data-sort="PG.update_time,d" class="hidden-xs hidden-sm">最后更新</th>
							<th width="100"></th>							
						</tr>
					</thead>					
				</table>
				<div class="panel-footer">
					<div data-widget="nuiPager" data-for="#cpage-table" data-limit="20"></div>
				</div>			
			</div>
		</article>
	</div>
</section><?php }
}
?>