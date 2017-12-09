<?php /* Smarty version 3.1.27, created on 2017-01-20 13:58:47
         compiled from "F:\wamp\www\6\modules\system\views\syslog\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:143875881a717225ef0_81882061%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4524bef5575e5e1ccc4a9370b745f7cb55249011' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\system\\views\\syslog\\index.tpl',
      1 => 1472547288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143875881a717225ef0_81882061',
  'variables' => 
  array (
    'canDelLog' => 0,
    'types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881a71755a4b5_98235260',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881a71755a4b5_98235260')) {
function content_5881a71755a4b5_98235260 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '143875881a717225ef0_81882061';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-book"></i> 系统活动日志			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">			
			<?php if ($_smarty_tpl->tpl_vars['canDelLog']->value) {?>
			<button type="button" 
					class="btn btn-labeled btn-danger"
					data-url="<?php echo Router::url(array('0'=>'system/syslog/del'));?>
"
					target="ajax"					
					data-grp="#activity-log-table tbody input.grp:checked" 
					data-arg="id" 
					data-warn="请选择要删除的系统活动日志!" 
					data-confirm="你真的要删除选中的系统活动日志吗?"
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
				  	<form data-widget="nuiSearchForm" data-for="#activity-log-table" class="smart-form">
				  		<fieldset>
				  			<div class="row">
				  				<section class="col col-3">
									<label class="input">
										<i class="icon-prepend fa fa-user"></i>										
										<input type="text" placeholder="用户名" name="user"/>
									</label>
								</section>
								<section class="col col-2">
									<label class="select">										
										<select id="log-type" name="activity">
											<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['types']->value),$_smarty_tpl);?>

									    </select><i></i> 
									</label>
								</section>
								<section class="col col-2">
									<label class="select">										
										<select id="log-level" name="level">
											<option value="">所有级别</option>
											<option value="d">调试</option>
											<option value="i">信息</option>
											<option value="w">警告</option>
											<option value="e">错误</option>
									    </select><i></i> 
									</label>
								</section>
								<section class="col col-2">
									<label class="input">										
										<i class="icon-append fa fa-calendar"></i>
										<input id="log-from-date" data-widget="nuiDatepicker"
											   data-range-to ="log-to-date"
											   type="text" placeholder="开始时间" name="bd"/>
									</label>
								</section>
								<section class="col col-2">
									<label class="input">										
										<i class="icon-append fa fa-calendar"></i>
										<input id="log-to-date" data-widget="nuiDatepicker" 
											   data-range-from ="log-from-date"
											   type="text" placeholder="结束时间" name="sd"/>
									</label>
								</section>
								<section class="col col-1">
									<button class="btn btn-sm btn-primary" type="submit">
										<i class="fa fa-search"></i>
									</button>
								</section>
				  			</div>
				  		</fieldset>				  		
				  	</form>			  
				</div>
				<table 
					id="activity-log-table"
					data-widget="nuiTable"		
					data-auto="true"
					data-source="<?php echo Router::url(array('0'=>'system/syslog/data'));?>
"
					data-sort="id,d"	
					data-tfoot="true"
					>
					<thead>
						<tr>
							<th width="30"><input type="checkbox" class="grp"/></th>
							<th width="150" data-sort="create_time,d">
								时间
							</th>											
							<th width="150" data-sort="user_id,d" class="hidden-mobile hidden-tablet">用户</th>
							<th width="130" class="hidden-mobile hidden-tablet">IP</th>
							<th width="150">活动</th>
							<th>日志</th>							
						</tr>
					</thead>					
				</table>
				<div class="panel-footer">
					<div data-widget="nuiPager" data-for="#activity-log-table" data-limit="50"></div>
				</div>			
			</div>
		</article>
	</div>
</section><?php }
}
?>