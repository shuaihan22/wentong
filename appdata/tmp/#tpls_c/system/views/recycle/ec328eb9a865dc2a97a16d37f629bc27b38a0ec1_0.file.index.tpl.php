<?php /* Smarty version 3.1.27, created on 2017-01-21 14:26:33
         compiled from "F:\wamp\www\6\modules\system\views\recycle\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:51735882ff19ca86e3_21035710%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec328eb9a865dc2a97a16d37f629bc27b38a0ec1' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\system\\views\\recycle\\index.tpl',
      1 => 1472547290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51735882ff19ca86e3_21035710',
  'variables' => 
  array (
    'canEmptyRecycle' => 0,
    'canRestoreRecycle' => 0,
    'types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5882ff19d8b012_88640322',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5882ff19d8b012_88640322')) {
function content_5882ff19d8b012_88640322 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '51735882ff19ca86e3_21035710';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-trash-o"></i> 回收站			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">			
			<?php if ($_smarty_tpl->tpl_vars['canEmptyRecycle']->value) {?>
			<button type="button" 
					class="btn btn-labeled btn-danger"
					data-url="<?php echo Router::url(array('0'=>'system/recycle/del'));?>
"
					target="ajax"					
					data-grp="#recycle-log-table tbody input.grp:checked" 
					data-arg="id" 
					data-warn="请选择要删除的内容!" 
					data-confirm="你真的要删除选中的内容?"
					>
				<span class="btn-label">
					<i class="glyphicon glyphicon-trash"></i>
				</span>删除
			</button>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canRestoreRecycle']->value) {?>
			<button type="button" 
					class="btn btn-labeled btn-success"
					data-url="<?php echo Router::url(array('0'=>'system/recycle/restore'));?>
"
					target="ajax"					
					data-grp="#recycle-log-table tbody input.grp:checked" 
					data-arg="id" 
					data-warn="请选择要还原的内容!" 
					data-confirm="你真的要还原选中的内容?"
					>
				<span class="btn-label">
					<i class="fa fa-fw fa-undo"></i>
				</span>还原
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
				  	<form data-widget="nuiSearchForm" data-for="#recycle-log-table" class="smart-form">
				  		<fieldset>
				  			<div class="row">
				  				<section class="col col-3">
									<label class="input">
										<i class="icon-prepend fa fa-user"></i>
										<i class="icon-append fa fa-search"></i>
										<input type="text" placeholder="用户名" name="user"/>
									</label>
								</section>
								<section class="col col-2">
									<label class="select">										
										<select id="log-type" name="recycle_type">
											<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['types']->value),$_smarty_tpl);?>

									    </select><i></i>
									</label>
								</section>
								<section class="col col-2">
									<label class="input">
										<i class="icon-prepend fa fa-filter"></i>
										<i class="icon-append fa fa-calendar"></i>
										<input id="log-from-date" data-widget="nuiDatepicker"
											   data-range-to ="log-to-date"
											   type="text" placeholder="开始时间" name="bd"/>
									</label>
								</section>
								<section class="col col-2">
									<label class="input">
										<i class="icon-prepend fa fa-filter"></i>
										<i class="icon-append fa fa-calendar"></i>
										<input id="log-to-date" data-widget="nuiDatepicker" 
											   data-range-from ="log-from-date"
											   type="text" placeholder="结束时间" name="sd"/>
									</label>
								</section>
								<section class="col col-1">
									<button class="btn btn-sm btn-primary" type="submit">
										<i class="fa fa-search"></i> 搜索
									</button>
								</section>
				  			</div>
				  		</fieldset>				  		
				  	</form>			  
				</div>
				<table 
					id="recycle-log-table"
					data-widget="nuiTable"		
					data-auto="true"
					data-source="<?php echo Router::url(array('0'=>'system/recycle/data'));?>
"
					data-sort="id,d"	
					data-tfoot="true"
					>
					<thead>
						<tr>
							<th width="30"><input type="checkbox" class="grp"/></th>
							<th width="150" data-sort="recycle_time,d">
								时间
							</th>											
							<th width="150" data-sort="role,d">用户</th>
							<th width="150">内容类型</th>
							<th>详细</th>
							<th width="80"></th>							
						</tr>
					</thead>					
				</table>
				<div class="panel-footer">
					<div data-widget="nuiPager" data-for="#recycle-log-table" data-limit="50"></div>
				</div>			
			</div>
		</article>
	</div>
</section><?php }
}
?>