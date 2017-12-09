<?php /* Smarty version 3.1.27, created on 2017-01-21 14:17:05
         compiled from "F:\wamp\www\6\modules\system\views\catalog\type.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:181125882fce1718916_57023289%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c2a641d14024c7d6fa0e84d389b82c07670579c' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\system\\views\\catalog\\type.tpl',
      1 => 1472547290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181125882fce1718916_57023289',
  'variables' => 
  array (
    'canAdd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5882fce17eb842_18373314',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5882fce17eb842_18373314')) {
function content_5882fce17eb842_18373314 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '181125882fce1718916_57023289';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-9 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-database"></i> 数据定义		
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
	<?php if ($_smarty_tpl->tpl_vars['canAdd']->value) {?>
		<div class="pull-right margin-top-5 margin-bottom-5">
			<a class="btn btn-success"
					href="#<?php echo Router::url(array('0'=>'system/catatype/add','1'=>false));?>
">
					<i class="glyphicon glyphicon-plus"></i> 新增
			</a>			
		</div>
	<?php }?>
	</div>
</div>
<section id="widget-grid">	
	<div class="row">		
		<article class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-body no-padding">			  
				  	<form data-widget="nuiSearchForm" data-for="#catatype-table" class="smart-form">
				  		<fieldset>	
				  			<div class="row">
				  				<section class="col col-6">
				  					<label class="input">
										<i class="icon-prepend fa fa-filter"></i>
										<input type="text" placeholder="变量名称或标识" name="keywords"/>
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
					id="catatype-table"
					data-widget="nuiTable"
					data-source="<?php echo Router::url(array('0'=>'system/catatype/data'));?>
"
					data-sort="type,a"
					data-auto="true">
					<thead>
						<tr>					
							<th width="150" data-sort="name,a">数据名称</th>
							<th width="150" data-sort="type,a">数据标识</th>
							<th width="100" data-sort="is_enum,name">列表数据?</th>
							<th class="hidden-xs hidden-sm">备注</th>
							<th width="80"></th>
						</tr>
					</thead>
				</table>	
				<div class="panel-footer">
					<div data-widget="nuiPager" data-for="#catatype-table" data-limit="15"></div>
				</div>			
			</div>
		</article>
	</div>
</section><?php }
}
?>