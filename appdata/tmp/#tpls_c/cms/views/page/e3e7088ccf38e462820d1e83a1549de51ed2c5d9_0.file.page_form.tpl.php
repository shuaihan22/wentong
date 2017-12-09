<?php /* Smarty version 3.1.27, created on 2017-01-18 11:26:03
         compiled from "F:\wamp\www\6\modules\cms\views\page\page_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11178587ee04bd3bbe0_39032822%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3e7088ccf38e462820d1e83a1549de51ed2c5d9' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\page\\page_form.tpl',
      1 => 1472547310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11178587ee04bd3bbe0_39032822',
  'variables' => 
  array (
    'pageTypeName' => 0,
    'modelName' => 0,
    'id' => 0,
    'model' => 0,
    'create_time' => 0,
    'keywords' => 0,
    'title_color' => 0,
    'url_key' => 0,
    'title' => 0,
    'title2' => 0,
    'image' => 0,
    'source' => 0,
    'author' => 0,
    'options' => 0,
    'channel' => 0,
    'tag' => 0,
    'topic' => 0,
    'chunk' => 0,
    'flag_h' => 0,
    'flag_c' => 0,
    'flag_a' => 0,
    'flag_b' => 0,
    'flag_j' => 0,
    'redirect' => 0,
    'description' => 0,
    'cwidgets' => 0,
    'widgets' => 0,
    'gkeywords' => 0,
    'content' => 0,
    'img_pagination' => 0,
    'img_next_page' => 0,
    'img_follow' => 0,
    'allow_comment' => 0,
    'view_count' => 0,
    'publish_date' => 0,
    'publish_time' => 0,
    'expire' => 0,
    'related_pages' => 0,
    'url' => 0,
    'template_file' => 0,
    'rules' => 0,
    '_SessionName' => 0,
    '_SessionID' => 0,
    'editor_css' => 0,
    'editor_plugins' => 0,
    'editor_layout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587ee04be16810_24461219',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587ee04be16810_24461219')) {
function content_587ee04be16810_24461219 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '11178587ee04bd3bbe0_39032822';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-copy"></i> <?php echo $_smarty_tpl->tpl_vars['pageTypeName']->value;?>
管理
			<span>&gt; 编辑<?php echo $_smarty_tpl->tpl_vars['modelName']->value;?>
</span>			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<a  class="btn btn-default btn-labeled" href="#<?php echo Router::url(array('0'=>'cms/page/my','1'=>false));?>
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
                id="wid-page-form"     
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
                          		style="position: relative;"
                          		>
                          	<input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                          	<input type="hidden" name="model" value="<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
"/>
                          	<input type="hidden" name="page_type" value="page"/>
                          	<input type="hidden" id="create_time" name="create_time" value="<?php echo $_smarty_tpl->tpl_vars['create_time']->value;?>
"/>
                          	<input type="hidden" id="okeywords" name="okeywords" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
                          	<input type="hidden" name="title_color" id="title_color" value="<?php echo $_smarty_tpl->tpl_vars['title_color']->value;?>
"/>
                          	<input type="hidden" name="url_key" id="url_key" value="<?php echo $_smarty_tpl->tpl_vars['url_key']->value;?>
"/>
							<fieldset>												
								<div class="row">
									<section class="col col-8">
										<label class="label">标题</label>
										<label class="input">
											<i class="icon-append fa fa-square" 
											data-plugin="colorpicker"
											data-widget="nuiKindEditor"
											data-for="#title_color"></i>
											<input type="text" name="title" id="title" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
										</label>					
									</section>									
									<section class="col col-4">
										<label class="label">短标题</label>
										<label class="input">
											<input type="text" name="title2" id="title2" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title2']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
										</label>
									</section>
								</div>
								<div class="row">
									<section class="col col-6">
										<label class="label">缩略图</label>
										<label class="input input-file" for="image">
											<div class="button" id="uploadImg" data-widget="nuiAjaxUploader" for="#image"  data-water="0">
												<i class="fa fa-lg fa-cloud-upload"></i>
											</div>
											<a for="image" class="button" <?php if ($_smarty_tpl->tpl_vars['image']->value) {?>href="<?php echo the_media_src($_smarty_tpl->tpl_vars['image']->value);?>
" rel="superbox[image]"<?php } else { ?>href="javascript:;" style="display:none"<?php }?>><i class="fa fa-lg fa-eye txt-color-blue"></i></a>
											<input type="text" name="image" id="image" value="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" />
										</label>
									</section>
									<section class="col col-3">
										<label class="label">来源</label>
										<label class="input">
											<input type="hidden" 
											data-widget="nuiCombox" 
											style="width:99%"
											data-source="<?php echo Router::url(array('0'=>'cms/page/auto_source'));?>
"
											name="source" id="source" value="<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
"/>
										</label>
									</section>
									<section class="col col-3">
										<label class="label">作者</label>
										<label class="input">
											<input type="hidden" 
											data-widget="nuiCombox" 
											style="width:99%"
											data-source="<?php echo Router::url(array('0'=>'cms/page/auto_author'));?>
" 
											name="author" id="author" value="<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
"/>
										</label>
									</section>
								</div>
								<div class="row">
									<section class="col col-4">
										<label class="label">栏目</label>
										<label class="select">
											<select name="channel" id="channel">
												<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>$_smarty_tpl->tpl_vars['channel']->value),$_smarty_tpl);?>

											</select>
											<i></i>
										</label>
									</section>
									<section class="col col-2">
										<label class="label">标签</label>
										<label class="input">
										<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
" id="tag" name="tag"/>
										</label>
									</section>
									<section class="col col-3">
										<label class="label">绑定专题</label>
										<input type="hidden" data-widget="nuiCombox"
										 style="width:99%"
										 data-source="<?php echo Router::url(array('0'=>'cms/page/auto_topic'));?>
" 
										 value="<?php echo $_smarty_tpl->tpl_vars['topic']->value;?>
" id="topic" name="topic"/>
									</section>
									<section class="col col-3">
										<label class="label">绑定碎片</label>
										<input type="hidden" data-widget="nuiCombox"
										 style="width:99%"
										 data-source="<?php echo Router::url(array('0'=>'cms/chunk/auto_chunk'));?>
" 
										 value="<?php echo $_smarty_tpl->tpl_vars['chunk']->value;?>
" id="chunk" name="chunk"/>
									</section>
								</div>
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
										<label class="checkbox">
											<input type="checkbox" id="flag_j" <?php if ($_smarty_tpl->tpl_vars['flag_j']->value) {?>checked="checked"<?php }?>  name="flag_j"/>
											<i></i>跳转[j]</label>
									</div>
								</section>
								<section id="redirectWrapper" <?php if (!$_smarty_tpl->tpl_vars['flag_j']->value) {?>style="display:none"<?php }?>>
									<label class="label">跳转到</label>
									<label class="input">
										<input type="text" name="redirect" 
										id="redirect" value="<?php echo $_smarty_tpl->tpl_vars['redirect']->value;?>
"/></label>
								</section>
								<div class="row">
									<section class="col col-4">
										<label class="label">关键词(以','分开.)</label>
										<label class="textarea textarea-expandable">
										<textarea 
										class="custom-scroll" 
										name="keywords" rows="3" 
										id="keywords"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										</label>										
									</section>
									<section class="col col-8">
										<label class="label">页面描述</label>
										<label class="textarea textarea-expandable">
										<textarea class="custom-scroll" name="description" rows="3" id="description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										</label>										
									</section>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['cwidgets']->value) {?>								
								<?php echo $_smarty_tpl->tpl_vars['cwidgets']->value instanceof Renderable?$_smarty_tpl->tpl_vars['cwidgets']->value->render():$_smarty_tpl->tpl_vars['cwidgets']->value;?>

								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['widgets']->value) {?>								
								<?php echo $_smarty_tpl->tpl_vars['widgets']->value instanceof Renderable?$_smarty_tpl->tpl_vars['widgets']->value->render():$_smarty_tpl->tpl_vars['widgets']->value;?>

								<?php }?>
								<section>
									<div class="inline-group">
										<?php if ($_smarty_tpl->tpl_vars['gkeywords']->value) {?>
										<label class="checkbox">
											<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['gkeywords']->value) {?>checked="checked"<?php }?>  name="gkeywords"/>
											<i></i>自动从标题提取关键词</label>
										<?php }?>
										<label class="checkbox">
											<input type="checkbox" name="firstimage"/>
											<i></i>提取第一个图片为缩略图</label>										
										<?php echo apply_filter('page_checkbox_options','','','');?>

									</div>
								</section>

								<section id="pageEditorWrapper" <?php if ($_smarty_tpl->tpl_vars['flag_j']->value) {?>style="display:none"<?php }?>>
									<textarea id="page_content" name="content" type="text/plain" style="height:300px;width:100%" rows="20" cols="100"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea> 
								</section>
								<div class="row">
									<section class="col col-2">
										<label class="label">图片分页</label>
										<div class="inline-group">										
											<label class="checkbox">
											<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['img_pagination']->value) {?>checked="checked"<?php }?>  name="img_pagination"/>
											<i></i></label>										
										</div>
									</section>
									<section class="col col-10">
										<label class="label">图片分页无下一页时跳转页面</label>
										<label class="input">
										<input type="text" name="img_next_page" 
										id="img_next_page" value="<?php echo $_smarty_tpl->tpl_vars['img_next_page']->value;?>
"/></label>
									</section>
								</div>
								<section>
									<label class="label">图片跟随内容</label>
									<label class="textarea textarea-expandable">
									<textarea class="custom-scroll" name="img_follow" rows="3" id="img_follow"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_follow']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									</label>										
								</section>
								<div class="row">									
									<section class="col col-2">
										<label class="label">评论选项</label>
										<label class="checkbox">
											<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['allow_comment']->value) {?>checked="checked"<?php }?> name="allow_comment"/>
											<i></i>允许评论</label>
									</section>
									<section class="col col-2">
										<label class="label">浏览次数</label>
										<label class="input">
											<input type="text" name="view_count" id="view_count" value="<?php echo $_smarty_tpl->tpl_vars['view_count']->value;?>
"/>
										</label>
									</section>
									<section class="col col-3">
										<label class="label">发布时间</label>
										<label class="input">
											<i class="icon-append fa fa-calendar"></i>
											<input type="text" name="publish_date" 
											data-widget="nuiDatepicker" 
											id="publish_date" value="<?php echo $_smarty_tpl->tpl_vars['publish_date']->value;?>
"/>
										</label>							
									</section>
									<section class="col col-2">
										<label class="label">&nbsp;</label>
										<label class="input">
											<i class="icon-append fa fa-clock-o"></i>
											<input type="text" name="publish_time"
											data-widget="nuiTimepicker"
											id="publish_time" value="<?php echo $_smarty_tpl->tpl_vars['publish_time']->value;?>
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
										<label class="label">自定义URL(自动生成时请留空)</label>
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
									<section class="col col-6">
										<label class="label">自定义模板</label>
										<label class="input" for="template_file">
											<input type="hidden" data-widget="nuiCombox" style="width:100%"	data-source="<?php echo Router::url(array('0'=>'system/ajax/tpl'));?>
?n=1"
												   name="template_file" id="template_file" value="<?php echo $_smarty_tpl->tpl_vars['template_file']->value;?>
"/>
											</label>
									</section>
								</div>								
							</fieldset>
							
							<footer id="handy-btns">								
								<button type="submit" class="btn btn-primary">
									保存
								</button>
								<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
								<a style="display:none" class="btn btn-success" href="<?php echo Router::url(array('0'=>'cms/page/add/page'));
echo $_smarty_tpl->tpl_vars['model']->value;?>
/$channel$" target="tag" data-tag="#content" id="btn-c-add">
									再建一篇
								</a>
								<?php }?>
								<a class="btn btn-default" href="#<?php echo Router::url(array('0'=>'cms/page/my','1'=>false));?>
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
			var wrapper = $('#pageEditorWrapper'),ftbtn=$('#handy-btns'),ftbtn1=null;
				
			$(window).scroll(function(){
				var etop = wrapper.offset().top,ht = wrapper.outerHeight(),ftop=ftbtn.offset().top,fw=ftbtn.width();
				var wtop = $(window).scrollTop()+$(window).height();
				if((etop+ht) < wtop && wtop < ftop){
					if(!ftbtn1){
						ftbtn1 = ftbtn.clone();
						ftbtn1.insertAfter(ftbtn);
					}
					ftbtn1.css('position','fixed').css({
					'bottom':0,'right':15,width:fw
					});
				}else{
					if(ftbtn1){
						ftbtn1.remove();
						ftbtn1 = null;
					}
				}
			});		
			$('input[name=flag_j]').change(function(){ 
				if($(this).prop('checked')){
					$('#redirectWrapper').show();
					$('#pageEditorWrapper').hide();
				}else{
					$('#pageEditorWrapper').show();
					$('#redirectWrapper').hide();
				}
			});	
			var pageEditor = KindEditor.create('#page_content',{ 
				basePath:"<?php echo safe_url(ASSETS_URL.'kindeditor',true);?>
/",
				resizeType:1,
				filePostName:'file',
				pagebreakHtml:'[page]',
				uploadJson:KissCms.AjaxUploadURL + "?<?php echo $_smarty_tpl->tpl_vars['_SessionName']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['_SessionID']->value;?>
",
				fillDescAfterUploadImage:false,
				imageTabIndex:1,
				indentChar:'',	
				cssData:'<?php echo $_smarty_tpl->tpl_vars['editor_css']->value;?>
',
				items:['source','|', 'undo', 'redo', '|', 'justifyleft', 'justifycenter', 'justifyright',
				'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent','|',
				,'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
				'italic', 'underline', 'strikethrough','|', 'image', 'multiimage','|','link', 'unlink','|','pagebreak'<?php echo $_smarty_tpl->tpl_vars['editor_plugins']->value;?>
,'fullscreen'],
				layout:'<?php echo $_smarty_tpl->tpl_vars['editor_layout']->value;?>
'
			});
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
					$('#keywords').val(page.keywords);
					$('#url_key').val(page.url_key);
					$('#url').val(page.url);
					$('#description').val(page.description);
					if(page.image){
						$('#image').val(page.image);
					}
					if(page.content){
						pageEditor.html(page.content);
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