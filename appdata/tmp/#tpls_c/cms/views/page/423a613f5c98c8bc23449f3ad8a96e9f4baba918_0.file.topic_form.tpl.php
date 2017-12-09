<?php /* Smarty version 3.1.27, created on 2017-01-20 15:18:32
         compiled from "F:\wamp\www\6\modules\cms\views\page\topic_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:117215881b9c83c6b48_14866940%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '423a613f5c98c8bc23449f3ad8a96e9f4baba918' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\page\\topic_form.tpl',
      1 => 1472547309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117215881b9c83c6b48_14866940',
  'variables' => 
  array (
    'modelName' => 0,
    'id' => 0,
    'model' => 0,
    'keywords' => 0,
    'create_time' => 0,
    'title_color' => 0,
    'url_key' => 0,
    'options' => 0,
    'channel' => 0,
    'title2' => 0,
    'tag' => 0,
    'image' => 0,
    'flag_h' => 0,
    'flag_c' => 0,
    'flag_a' => 0,
    'flag_b' => 0,
    'cwidgets' => 0,
    'widgets' => 0,
    'title' => 0,
    'description' => 0,
    'content' => 0,
    'related_pages' => 0,
    'url' => 0,
    'template_file' => 0,
    'expire' => 0,
    'rules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881b9c84ff389_84569902',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881b9c84ff389_84569902')) {
function content_5881b9c84ff389_84569902 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '117215881b9c83c6b48_14866940';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-copy"></i> 专题管理
			<span>&gt; 编辑<?php echo $_smarty_tpl->tpl_vars['modelName']->value;?>
</span>			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<a  class="btn btn-default btn-labeled" href="#<?php echo Router::url(array('0'=>'cms/page/my/topic','1'=>false));?>
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
                id="wid-topic-form"     
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
                     <h2> <?php echo $_smarty_tpl->tpl_vars['modelName']->value;?>
编辑器 </h2>                     
                </header>
                <div>
                     <div class="widget-body widget-hide-overflow no-padding">
                          
                          <form name="PageForm"                          		
                          		data-widget="nuiValidate" action="<?php echo Router::url(array('0'=>'cms/page/save'));?>
" 
                          		method="post" id="page-form" class="smart-form" target="ajax"
                          		>
                          	<input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                          	<input type="hidden" name="model" value="<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
"/>
                          	<input type="hidden" name="page_type" value="topic"/>
                          	<input type="hidden" id="okeywords" name="okeywords" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
                          	<input type="hidden" id="create_time" name="create_time" value="<?php echo $_smarty_tpl->tpl_vars['create_time']->value;?>
"/>
                          	<input type="hidden" name="title_color" id="title_color" value="<?php echo $_smarty_tpl->tpl_vars['title_color']->value;?>
"/>
                          	<input type="hidden" name="url_key" id="url_key" value="<?php echo $_smarty_tpl->tpl_vars['url_key']->value;?>
"/>
							<fieldset>												
								<div class="row">
									<section class="col col-3">
										<label class="label">栏目</label>
										<label class="select">
											<select name="channel" id="channel">
												<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>$_smarty_tpl->tpl_vars['channel']->value),$_smarty_tpl);?>

											</select>
											<i></i>
										</label>
									</section>
									<section class="col col-6">
										<label class="label">名称</label>
										<label class="input">
										<i class="icon-append fa fa-square" 
											data-plugin="colorpicker"
											data-widget="nuiKindEditor"
											data-for="#title_color"></i>
										<input type="text" name="title2" id="title2" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title2']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
										</label>
									</section>
									<section class="col col-3">
										<label class="label">标签</label>
										<label class="input">
										<input type="text" name="tag" id="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
										</label>
									</section>									
								</div>								
								<section>
									<label class="label">缩略图</label>
									<label class="input input-file" for="image">
										<div class="button" id="uploadImg" data-widget="nuiAjaxUploader" for="#image" data-water="0">
											<i class="fa fa-lg fa-cloud-upload"></i>
										</div>
										<a for="image" class="button" <?php if ($_smarty_tpl->tpl_vars['image']->value) {?>href="<?php echo the_media_src($_smarty_tpl->tpl_vars['image']->value);?>
" rel="superbox[image]"<?php } else { ?>href="javascript:;" style="display:none"<?php }?>><i class="fa fa-lg fa-eye txt-color-blue"></i></a>
										<input type="text" name="image" id="image" value="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" />
									</label>
								</section>
								<section>
									<label class="label">页面属性</label>
									<div class="inline-group">
										<label class="checkbox">
											<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['flag_h']->value) {?>checked="checked"<?php }?>  name="flag_h"/>
											<i></i>头条[h]</label>
										<label class="checkbox">
											<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['flag_c']->value) {?>checked="checked"<?php }?>  name="flag_c"/>
											<i></i>推荐[c]</label>
										<label class="checkbox">
											<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['flag_a']->value) {?>checked="checked"<?php }?>  name="flag_a"/>
											<i></i>特荐[a]</label>
										<label class="checkbox">
											<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['flag_b']->value) {?>checked="checked"<?php }?>  name="flag_b"/>
											<i></i>加粗[b]</label>
									</div>
								</section>
								<?php if ($_smarty_tpl->tpl_vars['cwidgets']->value) {?>								
								<?php echo $_smarty_tpl->tpl_vars['cwidgets']->value instanceof Renderable?$_smarty_tpl->tpl_vars['cwidgets']->value->render():$_smarty_tpl->tpl_vars['cwidgets']->value;?>

								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['widgets']->value) {?>								
								<?php echo $_smarty_tpl->tpl_vars['widgets']->value instanceof Renderable?$_smarty_tpl->tpl_vars['widgets']->value->render():$_smarty_tpl->tpl_vars['widgets']->value;?>

								<?php }?>
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
								<section>
									<label class="label">专题描述</label>
									<label class="textarea">
									<textarea class="custom-scroll" name="content" rows="3" id="topic_content"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									</label>
								</section>
								<section>
									<label class="label">相关文章</label>
									<label class="input input-file" for="related_pages">
										<div class="button" target="dialog"
											 dialog-title="选择文章"
											 dialog-model="true"
											 dialog-width="450"
											 data-url="<?php echo Router::url(array('0'=>'cms/page/browsedialog'));?>
" 
											 data-for="#related_pages">选择</div>
										<input type="text" name="related_pages" id="related_pages" value="<?php echo $_smarty_tpl->tpl_vars['related_pages']->value;?>
"/>
									</label>
								</section>
								<div class="row">
									<section class="col col-6">
										<label class="label">自定义URL(留空时则由系统自动生成)</label>
										<label class="input">
											<input type="text" id="url" name="url" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"/>
											<b class="tooltip tooltip-top-left">
												
												{Y}、{M}、{D} 年月日<br/>
												{timestamp} INT类型的UNIX时间戳<br/>
												{aid} 文章ID<br/>
												{pinyin}、{py} 拼音、拼音首母<br/>
												{typedir} 栏目目录<br/>
												{path} 全路径<br/>
												{rpath} 退一格路径（用于二级域名时）<br/>
												{cc} 日期+ID混编后用转换为适合的字母<br/>
												{tid}、{cid} 栏目编号、栏目识别ID<br/>
												{title}、{title2} 标题、短标题
																								
											</b>
										</label>
									</section>
									<section class="col col-3">
										<label class="label">自定义模板</label>
										<label class="input" for="template_file">
											<input type="hidden" data-widget="nuiCombox" style="width:100%"	data-source="<?php echo Router::url(array('0'=>'system/ajax/tpl'));?>
?n=1"
												   name="template_file" id="template_file" value="<?php echo $_smarty_tpl->tpl_vars['template_file']->value;?>
"/>
											</label>
									</section>
									<section class="col col-3">
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
								
							</fieldset>
							
							<footer>								
								<button type="submit" class="btn btn-primary">
									保存
								</button>
								<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
								<a style="display:none" class="btn btn-success" href="<?php echo Router::url(array('0'=>'cms/page/add/topic'));
echo $_smarty_tpl->tpl_vars['model']->value;?>
/$channel$" target="tag" data-tag="#content" id="btn-c-add">
									再建一篇
								</a>
								<?php }?>
								<a class="btn btn-default" href="#<?php echo Router::url(array('0'=>'cms/page/my/topic','1'=>false));?>
">
									返回
								</a>
							</footer>
						</form>

                     </div>
                </div>
           </div>
		</article>
		<?php echo '<script'; ?>
 type="text/javascript">	
			nUI.validateRules['PageForm'] = <?php echo $_smarty_tpl->tpl_vars['rules']->value;?>
;
			nUI.ajaxCallbacks.pageSaved = function(args){
				var page = args.page;
				if(page){
					if(page.is_new){
						$('#id').val(page.id);
						nUI.validateRules['PageForm'].rules.url.remote = nUI.validateRules['PageForm'].rules.url.remote+page.id;
						$('#url').rules('remove','remote');
						$('#url').rules('add',{
							remote:nUI.validateRules['PageForm'].rules.url.remote					
						});
					}
					$('#create_time').val(page.create_time);
					$('#okeywords').val(page.keywords);
					$('#url_key').val(page.url_key);
					$('#url').val(page.url);
					if(page.image){
						$('#image').val(page.image);
					}			
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
>
	</div>	
</section><?php }
}
?>