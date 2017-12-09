<?php /* Smarty version 3.1.27, created on 2017-01-18 11:36:25
         compiled from "F:\wamp\www\6\modules\system\views\role\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3944587ee2b99f61a3_96757658%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f843621fc9400f3ab9be55ce45a8fa3cff7acb50' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\system\\views\\role\\index.tpl',
      1 => 1472547289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3944587ee2b99f61a3_96757658',
  'variables' => 
  array (
    'canAddRole' => 0,
    'canDelRole' => 0,
    'types' => 0,
    'type' => 0,
    't' => 0,
    'tname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587ee2b9a443b7_21356991',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587ee2b9a443b7_21356991')) {
function content_587ee2b9a443b7_21356991 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3944587ee2b99f61a3_96757658';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-user-md"></i> 角色管理			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<?php if ($_smarty_tpl->tpl_vars['canAddRole']->value) {?>
			<a  class="btn btn-success" id="add-role-btn"
				href="#<?php echo Router::url(array('0'=>'system/role/add','1'=>false));?>
">
				<i class="glyphicon glyphicon-plus"></i> 新增</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canDelRole']->value) {?>
			<button type="button" 
					class="btn btn-labeled btn-danger"
					data-url="<?php echo Router::url(array('0'=>'system/role/del'));?>
"
					target="ajax"					
					data-grp="#role-table tbody input.grp:checked" 
					data-arg="rid" 
					data-warn="请选择要删除的角色!" 
					data-confirm="你真的要删除选中的角色吗?"
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
					<ul class="nav nav-tabs in" id="role-type-tab">
						<?php
$_from = $_smarty_tpl->tpl_vars['types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tname'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tname']->_loop = false;
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value => $_smarty_tpl->tpl_vars['tname']->value) {
$_smarty_tpl->tpl_vars['tname']->_loop = true;
$foreach_tname_Sav = $_smarty_tpl->tpl_vars['tname'];
?>					
						<li <?php if ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['t']->value) {?>class="active"<?php }?>>
							<a href="#" class="txt-color-blue" rel="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
"><i class="fa fa-user-md"></i> <span class="hidden-mobile hidden-tablet"><?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
</span></a>
						</li>
						<?php
$_smarty_tpl->tpl_vars['tname'] = $foreach_tname_Sav;
}
?>
					</ul>		  
				  	<form data-widget="nuiSearchForm" id="role-search-form" data-for="#role-table" class="smart-form">
				  		<fieldset>
				  			<input type="hidden" name="type" id="role_type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"/>
				  			<div class="row">
				  				<section class="col col-3">
									<label class="input">
										<i class="icon-prepend fa fa-filter"></i>
										<input type="text" placeholder="角色名" name="role_name"/>
									</label>
								</section>
								<section class="col col-3">
									<label class="input">
										<i class="icon-prepend fa fa-filter"></i>
										<input type="text" placeholder="角色" name="role"/>
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
					id="role-table"
					data-widget="nuiTable"		
					data-auto="true"
					data-source="<?php echo Router::url(array('0'=>'system/role/data'));?>
"
					data-sort="role_id,d"	
					data-tfoot="true"			 
					>
					<thead>
						<tr>
							<th width="30"><input type="checkbox" class="grp"/></th>
							<th width="70" data-sort="role_id,d">ID</th>					
							<th width="200" data-sort="role_name,d">
								角色名
							</th>						
							<th  class="hidden-xs hidden-sm" width="100" data-sort="role,d">角色</th>							
							<th  class="hidden-xs hidden-sm">说明</th>
							<th width="60">权重</th>
							<th width="30"></th>							
						</tr>
					</thead>					
				</table>
				<div class="panel-footer">
					<div data-widget="nuiPager" data-for="#role-table" data-limit="20"></div>
				</div>			
			</div>
		</article>
	</div>
</section>
<?php echo '<script'; ?>
 type="text/javascript">
	var add_role_url = $('#add-role-btn').attr('href');
	$('#add-role-btn').attr('href',add_role_url+'<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
');
	$('.ch-item-sort').change(function(){
		var sort = $(this).val();
		if(/^\d?\d?\d$/.test(sort)){
			var id = $(this).parents('tr').attr('rel');
			nUI.ajax("<?php echo Router::url(array('0'=>'system/role/csort'));?>
",{ 
					element:$(this),
					data:{ id:id,priority:sort },
					blockUI:true,
					type:'POST'
			});	
		}
	});
	$('#role-type-tab a').click(function(){ 
		$('#role-type-tab li').removeClass('active');
		$(this).parents('li').addClass('active');
		var rel = $(this).attr('rel');
		$('#role_type').val(rel);
		$('#add-role-btn').attr('href',add_role_url+rel);
		$('#role-search-form').submit();
		return false;
	});
	
<?php echo '</script'; ?>
>
<?php }
}
?>