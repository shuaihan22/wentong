<?php /* Smarty version 3.1.27, created on 2017-01-18 11:22:39
         compiled from "F:\wamp\www\6\modules\media\views\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3718587edf7f180f65_34426846%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cee7549c55a832666f45fabfa1c00284e317adc1' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\media\\views\\index.tpl',
      1 => 1472547299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3718587edf7f180f65_34426846',
  'variables' => 
  array (
    'canUploadMedia' => 0,
    'types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587edf7f29a3a0_11756183',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587edf7f29a3a0_11756183')) {
function content_587edf7f29a3a0_11756183 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '3718587edf7f180f65_34426846';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-picture-o"></i> 媒体库			
		</h1>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['canUploadMedia']->value) {?>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<a  class="btn btn-default btn-success" href="#<?php echo Router::url(array('0'=>'media/add','1'=>false));?>
">
				<i class="glyphicon glyphicon-cloud-upload"></i>
			</a>			
		</div>
	</div>
	<?php }?>
</div>
<section id="widget-grid">	
	<div class="row">		
		<article class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-body no-padding">			  
				  	<form data-widget="nuiSearchForm" data-for="#media-table" class="smart-form">
				  		<fieldset>
				  			<div class="row">
				  				<section class="col col-2">
									<label class="select">
										<select name="type">
											<option value="">-全部-</option>											
											<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['types']->value),$_smarty_tpl);?>

										</select>
										<i></i>										
									</label>
								</section>
				  				<section class="col col-3">
									<label class="input">
										<i class="icon-prepend fa fa-file"></i>
										<input type="text" placeholder="文件" name="file"/>
									</label>
								</section>								
								<section class="col col-2">
									<label class="input">
										<i class="icon-prepend fa fa-user"></i>
										<input type="text" placeholder="用户名" name="user"/>
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
										<i class="fa fa-search"></i> 搜索
									</button>
								</section>
				  			</div>
				  		</fieldset>				  		
				  	</form>			  
				</div>
				<table 
					id="media-table"
					data-widget="nuiTable"		
					data-auto="true"
					data-source="<?php echo Router::url(array('0'=>'media/data'));?>
"
					data-sort="M.id,d"	
					data-tfoot="true"
					>
					<thead>
						<tr>
							<th width="30"><input type="checkbox" class="grp"/></th>
							<th data-sort="filename,d">文件</th>
							<th width="100" data-sort="type,d">类型</th>											
							<th width="150" data-sort="uid,d">作者</th>						
							<th width="160" data-sort="M.create_time,d">日期</th>							
						</tr>
					</thead>					
				</table>
				<div class="panel-footer">
					<div data-widget="nuiPager" data-for="#media-table" data-limit="10"></div>
				</div>
			</div>
		</article>
	</div>
</section><?php }
}
?>