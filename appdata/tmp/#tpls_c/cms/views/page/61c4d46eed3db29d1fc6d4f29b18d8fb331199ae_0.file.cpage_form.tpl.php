<?php /* Smarty version 3.1.27, created on 2017-01-20 14:35:27
         compiled from "F:\wamp\www\6\modules\cms\views\page\cpage_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:319975881afaf56d2c8_53880560%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c4d46eed3db29d1fc6d4f29b18d8fb331199ae' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\page\\cpage_form.tpl',
      1 => 1472547310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319975881afaf56d2c8_53880560',
  'variables' => 
  array (
    'id' => 0,
    'create_time' => 0,
    'title_color' => 0,
    'title2' => 0,
    'tag' => 0,
    'is_tpl_page' => 0,
    'url' => 0,
    'template_file' => 0,
    'expire' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'rules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881afaf628af3_28677675',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881afaf628af3_28677675')) {
function content_5881afaf628af3_28677675 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '319975881afaf56d2c8_53880560';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-copy"></i> 自定义页面
			<span>&gt; 编辑页面</span>			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<a  class="btn btn-default btn-labeled" href="#<?php echo Router::url(array('0'=>'cms/cpage','1'=>false));?>
">
				<span class="btn-label">
					<i class="glyphicon glyphicon-circle-arrow-left"></i>
				</span> 返回
			</a>			
		</div>
	</div>
</div>

<section id="widget-grid">
	<div class="row">
		<article class="col-sm-12">
			<div class="jarviswidget"
                id="wid-cpage-form"     
                data-widget-colorbutton="false"
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="false"
				data-widget-sortable="false">
                <header>
                     <span class="widget-icon">
                          <i class="fa fa-edit"></i>
                     </span>
                     <h2> 自定义页面编辑器 </h2>                     
                </header>
                <div>
                     <div class="widget-body widget-hide-overflow no-padding">
                          
                          <form name="CPageForm"                          		
                          		data-widget="nuiValidate" action="<?php echo Router::url(array('0'=>'cms/cpage/save'));?>
" 
                          		method="post" id="page-form" class="smart-form" target="ajax"
                          		>
                          	<input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                          	<input type="hidden" id="create_time" name="create_time" value="<?php echo $_smarty_tpl->tpl_vars['create_time']->value;?>
"/>
                          	<input type="hidden" name="title_color" id="title_color" value="<?php echo $_smarty_tpl->tpl_vars['title_color']->value;?>
"/>
							<fieldset>												
								<div class="row">									
									<section class="col col-8">
										<label class="label">页面名称</label>
										<label class="input">
										<i class="icon-append fa fa-square" 
											data-plugin="colorpicker"
											data-widget="nuiKindEditor"
											data-for="#title_color"></i>
										<input type="text" name="title2" id="title2" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title2']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
										</label>
									</section>									
									<section class="col col-4">
										<label class="label">标签</label>
										<label class="input">
										<input type="text" name="tag" id="tag" value="<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
"/>
										</label>
									</section>									
								</div>	
								<div class="row">
									<section class="col col-2">
										<label class="label">&nbsp;</label>
										<div class="inline-group">
											<label class="checkbox">
												<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['is_tpl_page']->value) {?>checked="checked"<?php }?>  name="is_tpl_page"/>
												<i></i>模板页</label>
										</div>
									</section>
									<section class="col col-6">
										<label class="label">页面URL(必填)</label>
										<label class="input">
											<input type="text" id="url" name="url" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"/>
											<b class="tooltip tooltip-top-left">
												
												1. html 页面可以使用.shtml,.html,.html做为扩展名<br/>
												2. xml 页面请使用.xml做为扩展名<br/>
												3. js 脚本请使用.jsp做为扩展名<br/>
												4. json 数据请使用.json做为扩展名<br/>
												5. 如果此页面为模板页，URL中可以包含命名的正则表达式										
																								
											</b>
										</label>
									</section>									
									<section class="col col-2">
										<label class="label">页面模板(必填)</label>
										<label class="input" for="template_file">
											<input type="hidden" data-widget="nuiCombox" style="width:100%"	data-source="<?php echo Router::url(array('0'=>'system/ajax/tpl'));?>
"
												   name="template_file" id="template_file" value="<?php echo $_smarty_tpl->tpl_vars['template_file']->value;?>
"/>											
										</label>
									</section>
									<section class="col col-2">
										<label class="label">缓存时间</label>
										<label class="input">
											<input type="text" name="expire" id="expire" value="<?php echo $_smarty_tpl->tpl_vars['expire']->value;?>
"/>
											<b class="tooltip tooltip-top-left">
												
												-1表示不缓存<br/>
												0或不填写表示使用系统设置的缓存时间<br/>
												其它数值表示此页面的缓存时间										
																								
											</b>
										</label>
									</section>
								</div>															
								<div class="row">
									<section class="col col-6">
										<label class="label">SEO标题</label>
										<label class="input">
										<input type="text" name="title" 
											id="title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
										</label>									
									</section>
									<section class="col col-6">
										<label class="label">SEO关键词(以','分开.)</label>
										<label class="input">
										<input type="text" name="keywords" 
											id="keywords" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
										</label>										
									</section>
								</div>
								<section>
									<label class="label">SEO描述</label>
									<label class="textarea">
									<textarea class="custom-scroll" name="description" rows="3" id="description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									</label>
								</section>	
								
							</fieldset>
							
							<footer>								
								<button type="submit" class="btn btn-primary">
									保存
								</button>
								<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
								<a style="display:none" class="btn btn-success" href="<?php echo Router::url(array('0'=>'cms/cpage/add'));?>
" target="tag" data-tag="#content" id="btn-c-add">
									再建一篇
								</a>
								<?php }?>
								<a class="btn btn-default" href="#<?php echo Router::url(array('0'=>'cms/cpage','1'=>false));?>
">
									返回
								</a>
							</footer>
						</form>

                     </div>
                </div>
           </div>
		</article>
	</div>
</section>
<?php echo '<script'; ?>
 type="text/javascript">	
	nUI.validateRules['CPageForm'] = <?php echo $_smarty_tpl->tpl_vars['rules']->value;?>
;
	nUI.ajaxCallbacks.pageSaved = function(args){
		var page = args.page;
		if(page){
			if(page.is_new){
				$('#id').val(page.id);
				nUI.validateRules['CPageForm'].rules.url.remote = nUI.validateRules['CPageForm'].rules.url.remote+page.id;
				$('#url').rules('remove','remote');
				$('#url').rules('add',{
					remote:nUI.validateRules['CPageForm'].rules.url.remote					
				});
			}
			$('#create_time').val(page.create_time);			
		}
		$('#btn-c-add').show();
	};
	window.add_next_page = function(){
		nUI.closeAjaxDialog();
		$('#btn-c-add').click();
		return false;
	};	
	window.modify_current_page = function(){
		nUI.closeAjaxDialog();	
		$('#btn-c-add').hide();	
		return false;
	};
<?php echo '</script'; ?>
><?php }
}
?>