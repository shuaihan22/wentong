<?php /* Smarty version 3.1.27, created on 2017-01-18 11:26:07
         compiled from "F:\wamp\www\6\modules\cms\views\page\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5019587ee04f5a71e8_25340908%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59e925639ab28d733a32a98843ea1928ea42ce75' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\page\\index.tpl',
      1 => 1472547310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5019587ee04f5a71e8_25340908',
  'variables' => 
  array (
    'pageTitle' => 0,
    'disable_approving' => 0,
    'canSubmitPage' => 0,
    'canEditTag' => 0,
    'pageTypeName' => 0,
    'canEditPage' => 0,
    'canDelPage' => 0,
    'my' => 0,
    'is_topic' => 0,
    'channel' => 0,
    'models' => 0,
    'status' => 0,
    'pstatus' => 0,
    'widgets' => 0,
    'type' => 0,
    'channels' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587ee04f628086_41461772',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587ee04f628086_41461772')) {
function content_587ee04f628086_41461772 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '5019587ee04f5a71e8_25340908';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-copy"></i> <?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">	
			<?php echo apply_filter('on_init_pages_toolbar','','','');?>
	
			<?php if ($_smarty_tpl->tpl_vars['disable_approving']->value && $_smarty_tpl->tpl_vars['canSubmitPage']->value) {?>
			<input data-widget="nuiDatepicker" style="display:inline-block;width:100px;" class="form-control input-sm" type="text" placeholder="预定时间" id="pubdate"/>
			<input type="text" style="display:inline-block;width:70px;" class="form-control input-sm" data-widget="nuiTimepicker" id="pub_time"/>			
			<a class="btn btn-primary" target="ajax" 
					href="<?php echo Router::url(array('0'=>'cms/approve/submit/page-table'));?>
?pubdate=$#pubdate$&pubtime=$#pub_time$"
					data-grp="#page-table tbody input.grp:checked" 
					data-arg="ids" 
					data-warn="请选择要提交审核的页面!" 
					data-confirm="你真的要将选中的页面提交审核吗?"
					><i class="fa fa-w fa-legal"></i> 送审
			</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canEditTag']->value) {?>
			<button type="button" 
					class="btn btn-default"
					data-url="<?php echo Router::url(array('0'=>'cms/tag/topic2tags'));?>
"
					target="ajax"					
					data-grp="#page-table tbody input.grp:checked" 
					data-arg="ids" 
					data-warn="请选择要加入内链的<?php echo $_smarty_tpl->tpl_vars['pageTypeName']->value;?>
!" 
					data-confirm="你真的要将选中的<?php echo $_smarty_tpl->tpl_vars['pageTypeName']->value;?>
加入内链吗?"
					><i class="fa fa-link"></i> 内链
			</button>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canEditPage']->value) {?>
			<button type="button" id="btn-move-page" class="btn btn-warning"><i class="fa fa-exchange"></i> 移动</button>
			<button type="button" id="btn-change-flag" class="btn btn-success"><i class="fa fa-list"></i> 属性</button>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canDelPage']->value) {?>
			<button type="button" 
					class="btn btn-danger"
					data-url="<?php echo Router::url(array('0'=>'cms/page/del'));?>
"
					target="ajax"					
					data-grp="#page-table tbody input.grp:checked" 
					data-arg="ids" 
					data-warn="请选择要删除的<?php echo $_smarty_tpl->tpl_vars['pageTypeName']->value;?>
!" 
					data-confirm="你真的要删除选中的<?php echo $_smarty_tpl->tpl_vars['pageTypeName']->value;?>
吗?"
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
				  	<form data-widget="nuiSearchForm" data-for="#page-table" class="smart-form">
				  		<fieldset>
				  			<div class="row">
				  				<section class="col col-md-<?php if ($_smarty_tpl->tpl_vars['disable_approving']->value) {?>1<?php } else { ?>2<?php }?>">
									<label class="input">										
										<input type="text" placeholder="ID" name="pid"/>
									</label>
								</section>
				  				<section class="col col-md-2">
									<label class="input">										
										<input type="text" placeholder="关键词" name="keywords"/>
									</label>
								</section>				
								<?php if ($_smarty_tpl->tpl_vars['my']->value == 'all') {?>
								<section class="col col-md-2">
									<label class="input" for="uuname">
									<input type="hidden" 
											data-widget="nuiCombox" 
											style="width:100%"
											placeholder="作者"
											data-source="<?php echo Router::url(array('0'=>'system/ajax/autocomplete/user/user_id/nickname/r:cms'));?>
" name="uuname" id="uuname"/>
										</label>
								</section>	
								<?php }?>
								<section class="col col-md-3">
									<?php echo smarty_function_channel_tree(array('name'=>'channel','type'=>$_smarty_tpl->tpl_vars['is_topic']->value,'id'=>'channel','value'=>$_smarty_tpl->tpl_vars['channel']->value,'multi'=>1,'placeholder'=>"请选择栏目"),$_smarty_tpl);?>

								</section>
								<section class="col col-md-<?php if ($_smarty_tpl->tpl_vars['disable_approving']->value) {?>2<?php } else { ?>3<?php }?>">
									<label class="select">
										<select name="model" id="model">
											<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['models']->value),$_smarty_tpl);?>

										</select>
										<i></i>
									</label>
								</section>
								<?php if ($_smarty_tpl->tpl_vars['disable_approving']->value) {?>
								<section class="col col-md-2">
									<label class="select">
										<select name="status" id="status">
											<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['status']->value,'selected'=>$_smarty_tpl->tpl_vars['pstatus']->value),$_smarty_tpl);?>

										</select>
										<i></i>
									</label>
								</section>
								<?php }?>																
				  			</div>				  			
				  			<?php if ($_smarty_tpl->tpl_vars['widgets']->value) {
echo $_smarty_tpl->tpl_vars['widgets']->value instanceof Renderable?$_smarty_tpl->tpl_vars['widgets']->value->render():$_smarty_tpl->tpl_vars['widgets']->value;
}?>				  					  			
				  		</fieldset>				  		
				  	</form>			  
				</div>
				<table 
					id="page-table"
					data-widget="nuiTable"		
					data-auto="true"
					data-source="<?php echo Router::url(array('0'=>'cms/page/data'));
echo $_smarty_tpl->tpl_vars['my']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"
					data-sort="CP.id,d"	
					data-tfoot="true"
					data-tree="true">
					<thead>
						<tr>
							<th width="20" class="hidden-xs hidden-sm"></th>
							<th width="30"><input type="checkbox" class="grp"/></th>
							<th width="60">ID</th>
							<th><?php echo $_smarty_tpl->tpl_vars['pageTypeName']->value;?>
标题</th>
							<th width="100" data-sort="CP.channel,a" class="hidden-xs hidden-sm">栏目</th>
							<?php if ($_smarty_tpl->tpl_vars['disable_approving']->value) {?>
							<th width="100" data-sort="CP.status,d" class="hidden-xs hidden-sm">状态</th>
							<?php }?>
							<th width="120" data-sort="CP.create_time,d" class="hidden-xs hidden-sm">作者</th>
							<th width="120" data-sort="CP.update_time,d" class="hidden-xs hidden-sm">最后更新</th>
							<?php if ($_smarty_tpl->tpl_vars['canEditPage']->value) {?>
							<th width="60" data-sort="display_sort" class="hidden-xs hidden-sm">排序</th>	
							<?php }?>
							<th width="70"></th>
						</tr>
					</thead>
				</table>
				<div class="panel-footer">
					<div data-widget="nuiPager" data-for="#page-table" data-limit="20"></div>
				</div>			
			</div>
		</article>
	</div>
</section>
<div id="catalog-move-page-dialog" class="hidden">
	<div class="row smart-form">
		<section class="col col-xs-12">
			<label class="select">
				<select name="channel" class="channel2">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['channels']->value),$_smarty_tpl);?>

				</select>
				<i></i>
			</label>
		</section>				
	</div>
	<div class="row smart-form">
		<section class="col col-xs-6">									
			<div class="inline-group">
				<label class="checkbox">
					<input type="checkbox" class="update_url">
					<i></i>更新URL</label>				
			</div>
		</section>
		<?php if ($_smarty_tpl->tpl_vars['disable_approving']->value && $_smarty_tpl->tpl_vars['canSubmitPage']->value) {?>
		<section class="col col-xs-6">									
			<div class="inline-group">
				<label class="checkbox">
					<input type="checkbox" class="approveit">
					<i></i>移动后送审</label>				
			</div>
		</section>
		<?php }?>
	</div>
	<section class="text-left text-danger" style="max-width:360px;">
		目标栏目的模型必须和选定文章的模型一致,否则程序会自动忽略不符合的文章.
	</section>
</div>
<div id="catalog-page-flag-dialog" class="hidden">
	<div class="row smart-form">
		<section class="col col-xs-12">									
			<div class="inline-group">
				<label class="checkbox">
					<input type="checkbox" class="flag" value="h">
					<i></i>头条[h]</label>
				<label class="checkbox">
					<input type="checkbox" class="flag" value="c">
					<i></i>推荐[c]</label>
				<label class="checkbox">
					<input type="checkbox" class="flag" value="a">
					<i></i>特荐[a]</label>
				<label class="checkbox">
					<input type="checkbox" class="flag" value="b">
					<i></i>加粗[b]</label>
				<label class="checkbox">
					<input type="checkbox" class="flag" value="j">
					<i></i>跳转[j]</label>
			</div>
		</section>		
	</div>
	<section class="text-left text-danger" style="max-width:360px;">
		注:如果全不选,则会清空文章的所有属性.
	</section>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$('#page-table').delegate('.ch-item-sort','change',function(){
		var sort = $(this).val();
		if(/^\d?\d?\d$/.test(sort)){
			var id = $(this).parents('tr').attr('rel');
			nUI.ajax("<?php echo Router::url(array('0'=>'cms/page/csort'));?>
",{ 
					element:$(this),
					data:{ id:id,sort:sort },
					blockUI:true,
					type:'POST'
			});	
		}
	});
	function get_selected_pages(){
		var ids = [];
		$('#page-table tbody input.grp:checked').each(function(i,e){
			ids.push($(e).val());
		});
		if(ids.length == 0){
			alert('请选择要移动的文章.');			
		}
		return ids;
	}
	$('#btn-move-page').click(function(){
		var ids = get_selected_pages();
		if(ids.length == 0){
			return;
		}
		ids = ids.join(',');
		var dg = new nUI.Dialog('catalog-move-page2', '移动到', {
            model : true,
            icon:'fa fa-exchange',
            theme:'warning',            
            content:function(dg){
            	return $('#catalog-move-page-dialog').html();
            }
        });
    	dg.openLocal(false,[{
    		text:'确定',
    		cls:'btn-primary',
    		click:function(dialog){
    			var ch = dialog.find('.channel2').val();
    			if(!ch){
    				alert('请选择目的栏目.');
    				return false;
    			}
    			var update = dialog.find('.update_url:checked').length>0;
    			var approveit = dialog.find('.approveit:checked').length>0;
    			nUI.ajax("<?php echo Router::url(array('0'=>'cms/page/move'));?>
",{ element:$('#btn-move-page'), data:{ ids:ids,ch:ch,upurl:update?'1':'',approve:approveit?'1':'' } });
    			return true;
    		}
    	},{
    		text:'取消'
    	}]);
	});
	$('#btn-change-flag').click(function(){
		var ids = get_selected_pages();
		if(ids.length == 0){
			return;
		}
		ids = ids.join(',');
		var dg = new nUI.Dialog('catalog-page-flag', '修改页面属性', {
            model : true,
            icon:'fa fa-list',
            theme:'success',            
            content:function(dg){
            	return $('#catalog-page-flag-dialog').html();
            }
        });
    	dg.openLocal(false,[{
    		text:'确定',
    		cls:'btn-primary',
    		click:function(dialog){
    			var flags =[]; 
    			dialog.find('.flag:checked').each(function(i,e){
    				flags.push($(e).val());	
    			});    			
    			nUI.ajax("<?php echo Router::url(array('0'=>'cms/page/flags'));?>
",{ element:$('#btn-change-flag'), data:{ ids:ids,flags:flags.join(',') } });
    			return true;
    		}
    	},{
    		text:'取消'
    	}]);
	});
	
<?php echo '</script'; ?>
><?php }
}
?>