<?php /* Smarty version 3.1.27, created on 2017-01-20 14:22:26
         compiled from "F:\wamp\www\6\modules\cms\views\channel\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:196235881aca2562be7_67418715%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae1834d954ef141070157fc68ab72b0c9675bbfa' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\channel\\form.tpl',
      1 => 1472547305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196235881aca2562be7_67418715',
  'variables' => 
  array (
    'channelType' => 0,
    'type' => 0,
    'id' => 0,
    'list_page' => 0,
    'index_page' => 0,
    'oupid' => 0,
    'upid' => 0,
    'name' => 0,
    'models' => 0,
    'default_model' => 0,
    'enable_group_bind' => 0,
    'groups' => 0,
    'gid' => 0,
    'sort' => 0,
    'refid' => 0,
    'basedir' => 0,
    'isfinal' => 0,
    'hidden' => 0,
    'catalog' => 0,
    'index_page_tpl' => 0,
    'page_name' => 0,
    'page_cache' => 0,
    'default_template' => 0,
    'default_url_pattern' => 0,
    'default_cache' => 0,
    'list_page_tpl' => 0,
    'list_page_name' => 0,
    'list_cache' => 0,
    'default_page' => 0,
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'rules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881aca2639998_77012234',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881aca2639998_77012234')) {
function content_5881aca2639998_77012234 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '196235881aca2562be7_67418715';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa-fw fa fa-sitemap"></i> <?php echo $_smarty_tpl->tpl_vars['channelType']->value;?>

			<span>&gt; 编辑<?php echo $_smarty_tpl->tpl_vars['channelType']->value;?>
</span>			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<a  class="btn btn-default" href="#<?php echo Router::url(array('0'=>'cms/channel','1'=>false));
if ($_smarty_tpl->tpl_vars['type']->value) {
echo $_smarty_tpl->tpl_vars['type']->value;
}?>" id="rtnbtn">
				<i class="glyphicon glyphicon-circle-arrow-left"></i> 返回
			</a>			
		</div>
	</div>
</div>

<section id="widget-grid">
	<div class="row">
		<article class="col-sm-12">
			<div class="jarviswidget"
                id="wid-id-1"     
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
                     <h2> <?php echo $_smarty_tpl->tpl_vars['channelType']->value;?>
编辑器 </h2>                     
                </header>
                <div>
                     <div class="widget-body widget-hide-overflow no-padding">
                          
                          <form name="ChannelForm"                          		
                          		data-widget="nuiValidate" action="<?php echo Router::url(array('0'=>'cms/channel/save'));?>
" 
                          		method="post" id="channel-form" class="smart-form" target="ajax"
                          		>
                          	<input type="hidden" id="channel_id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                          	<input type="hidden" name="is_topic_channel" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"/>
                          	<input type="hidden" name="list_page" value="<?php echo $_smarty_tpl->tpl_vars['list_page']->value;?>
"/>
                          	<input type="hidden" name="index_page" value="<?php echo $_smarty_tpl->tpl_vars['index_page']->value;?>
"/>
                          	<input type="hidden" name="oupid" value="<?php echo $_smarty_tpl->tpl_vars['oupid']->value;?>
">
							<fieldset>								
								<div class="row">
									<?php if (!$_smarty_tpl->tpl_vars['type']->value) {?>
									<section class="col col-4">
										<label class="label">上级网站栏目</label>
										<?php echo smarty_function_channel_tree(array('name'=>'upid','id'=>'upid','value'=>$_smarty_tpl->tpl_vars['upid']->value,'cid'=>$_smarty_tpl->tpl_vars['id']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value,'placeholder'=>"顶级栏目"),$_smarty_tpl);?>

									</section>
									<?php } else { ?>
									<input type="hidden" name="upid" value="0"/>
									<?php }?>
									<section class="col col-8">
										<label class="label"><?php echo $_smarty_tpl->tpl_vars['channelType']->value;?>
名称</label>
										<label class="input">
										<input type="text" name="name" 
											id="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" />
										</label>
									</section>
								</div>
											
								<div class="row">
									<section class="col col-4">
										<label class="label">内容模型</label>
										<label class="select">
											<select name="default_model" id="default_model">
												<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['models']->value,'selected'=>$_smarty_tpl->tpl_vars['default_model']->value),$_smarty_tpl);?>

											</select><i></i>
										</label>
									</section>
									<?php if ($_smarty_tpl->tpl_vars['enable_group_bind']->value) {?>
									<section class="col col-4">
										<label class="label">绑定到用户组</label>
										<label class="select">
											<select name="gid" id="gid">
												<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['groups']->value,'selected'=>$_smarty_tpl->tpl_vars['gid']->value),$_smarty_tpl);?>

											</select><i></i>
										</label>
									</section>
									<?php } else { ?>
									<input type="hidden" name="gid" id="gid" value="<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
"/>
									<?php }?>
									<section class="col col-4">
										<label class="label">显示排序</label>
										<label class="input">
										<input type="text" name="sort" 
											id="sort" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
" />
										</label>
										<div class="note">取值范围0-999,值越小越靠前。</div>
									</section>									
								</div>
								<div class="row">
									<section class="col col-4">
										<label class="label">识别ID</label>
										<label class="input">
										<input type="text" name="refid" 
											id="refid" value="<?php echo $_smarty_tpl->tpl_vars['refid']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>readonly="readonly"<?php }?>/>
										</label>
									</section>
									<section class="col col-4">
										<label class="label">页面保存目录(不填时使用名称的拼音)</label>
										<label class="input">
										<input type="text" name="basedir" 
											id="basedir" value="<?php echo $_smarty_tpl->tpl_vars['basedir']->value;?>
" />
										</label>
									</section>	
								</div>
								<?php if (!$_smarty_tpl->tpl_vars['type']->value) {?>								
								<section>									
									<div class="inline-group">										
										<label class="checkbox">
											<input type="checkbox" name="isfinal" <?php if ($_smarty_tpl->tpl_vars['isfinal']->value) {?>checked="checked"<?php }?>/>
											<i></i>最终列表栏目（允许在本栏目发布文档，并生成文档列表）
										</label>																	
										<label class="checkbox">
											<input type="checkbox" name="hidden" <?php if ($_smarty_tpl->tpl_vars['hidden']->value) {?>checked="checked"<?php }?>/>
											<i></i>创建时不可见(包括子栏目).
										</label>
										<label class="checkbox">
											<input type="checkbox" name="catalog" <?php if ($_smarty_tpl->tpl_vars['catalog']->value) {?>checked="checked"<?php }?>/>
											<i></i>信息分类栏目.
										</label>
									</div>
								</section>
								<?php } else { ?>
								<input type="hidden" name="isfinal" value="on"/>
								<input type="hidden" name="hidden" value=""/>
								<?php }?>
								<section class="timeline-seperator txt-primary"> 
									<span>模板与默认页设置</span>
								</section>								
								<div class="row">
									<section class="col col-4">
										<label class="label">封面页模板</label>
										<label class="input" for="index_page_tpl">										
											<input type="hidden" data-widget="nuiCombox" style="width:100%"	data-source="<?php echo Router::url(array('0'=>'system/ajax/tpl'));?>
"
												   name="index_page_tpl" id="index_page_tpl" value="<?php echo $_smarty_tpl->tpl_vars['index_page_tpl']->value;?>
"/>										
										</label>
									</section>
									<section class="col col-6">									
										<label class="label">
											默认页的名称											
										</label>
										<label class="input">
										<i class="icon-append fa fa-question-circle"></i>
										<input type="text" name="page_name" 
											id="page_name" value="<?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
" />
											<b class="tooltip tooltip-top-left">
																						
											{path} 全路径(默认)<br/>
											{rpath} 退一格路径（用于二级域名时）<br/>
											
										</b>
										</label>
									</section>
									<section class="col col-2">
										<label class="label">缓存时间</label>
										<label class="input">
										<input type="text" name="page_cache" 
											id="page_cache" value="<?php echo $_smarty_tpl->tpl_vars['page_cache']->value;?>
" />
											<b class="tooltip tooltip-top-left">												
												-1表示不缓存<br>
												0或不填写表示使用上级设置<br>
												其它数值表示此页面的缓存时间					
											</b>
										</label>
									</section>
								</div>
								<div class="row">
									<section class="col col-4">
										<label class="label">文章页模板</label>
										<label class="input" for="default_template">
											<input type="hidden" data-widget="nuiCombox" style="width:100%"	data-source="<?php echo Router::url(array('0'=>'system/ajax/tpl'));?>
"
												   name="default_template" id="default_template" value="<?php echo $_smarty_tpl->tpl_vars['default_template']->value;?>
"/>										
										</label>
									</section>
									<section class="col col-6">									
										<label class="label">文章页命名规则</label>
										<label class="input">
										<i class="icon-append fa fa-question-circle"></i>
										<input type="text" name="default_url_pattern" 
											id="default_url_pattern" value="<?php echo $_smarty_tpl->tpl_vars['default_url_pattern']->value;?>
" />
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
									<section class="col col-2">
										<label class="label">缓存时间</label>
										<label class="input">
										<input type="text" name="default_cache" 
											id="default_cache" value="<?php echo $_smarty_tpl->tpl_vars['default_cache']->value;?>
" />
											<b class="tooltip tooltip-top-left">												
												-1表示不缓存<br>
												0或不填写表示使用上级设置<br>
												其它数值表示此页面的缓存时间					
											</b>
										</label>
									</section>
								</div>
								<div class="row">
									<section class="col col-4">
										<label class="label">列表页模板</label>
										<label class="input" for="list_page_tpl">
											<input type="hidden" data-widget="nuiCombox" style="width:100%"	data-source="<?php echo Router::url(array('0'=>'system/ajax/tpl'));?>
"
												   name="list_page_tpl" id="list_page_tpl" value="<?php echo $_smarty_tpl->tpl_vars['list_page_tpl']->value;?>
"/>
										</label>
									</section>
									<section class="col col-6">									
										<label class="label">列表页命名规则</label>
										<label class="input">
										<i class="icon-append fa fa-question-circle"></i>
										<input type="text" name="list_page_name" 
											id="list_page_name" value="<?php echo $_smarty_tpl->tpl_vars['list_page_name']->value;?>
" />
										<b class="tooltip tooltip-top-left">
											
											{pinyin} 拼音+文章ID<br/>
											{py} 拼音部首+文章ID<br/>
											{typedir} 栏目目录<br/>
											{path} 全路径<br/>
											{rpath} 退一格路径（用于二级域名时）<br/>
											{cc} 日期+ID混编后用转换为适合的字母<br/>
											{page} 列表的页码<br/>
											{tid} 栏目编号<br/>
											{cid} 栏目识别ID 
											
										</b>
										</label>
									</section>
									<section class="col col-2">
										<label class="label">缓存时间</label>
										<label class="input">
										<input type="text" name="list_cache" 
											id="list_cache" value="<?php echo $_smarty_tpl->tpl_vars['list_cache']->value;?>
" />
											<b class="tooltip tooltip-top-left">												
												-1表示不缓存<br>
												0或不填写表示使用上级设置<br>
												其它数值表示此页面的缓存时间					
											</b>
										</label>
									</section>
								</div>
								
								<section>									
									<div class="inline-group">										
										<label class="checkbox">
											<input type="checkbox" name="default_page" <?php if ($_smarty_tpl->tpl_vars['default_page']->value) {?>checked="checked"<?php }?>/>
											<i></i> 默认链接到列表第一页(不选使用封面页)
										</label>
									</div>
								</section>
								<section class="timeline-seperator"> 
									<span>SEO</span>
								</section>
								<div class="row">
									<section class="col col-6">
										<label class="label">标题</label>
										<label class="input">										
										<input type="text" name="title" 
											id="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />
										</label>
									</section>
									<section class="col col-6">
										<label class="label">关键词</label>
										<label class="input">										
										<input type="text" name="keywords" 
											id="keywords" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
										</label>
									</section>
								</div>								
								<section>
									<label class="label">描述</label>
									<label class="textarea">										
										<textarea rows="4" 
											name="description" id="description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									</label>									
								</section>
							</fieldset>

							<footer>
								<button type="submit" class="btn btn-primary">
									保存
								</button>
								<a  class="btn btn-default" href="#<?php echo Router::url(array('0'=>'cms/channel','1'=>false));
if ($_smarty_tpl->tpl_vars['type']->value) {
echo $_smarty_tpl->tpl_vars['type']->value;
}?>">
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
	nUI.validateRules['ChannelForm'] = <?php echo $_smarty_tpl->tpl_vars['rules']->value;?>
;
	nUI.ajaxCallbacks['InvalidListPagePattern'] = function(data){
		alert(data.id);
		$('#channel_id').val(data.id);
	};
<?php echo '</script'; ?>
><?php }
}
?>