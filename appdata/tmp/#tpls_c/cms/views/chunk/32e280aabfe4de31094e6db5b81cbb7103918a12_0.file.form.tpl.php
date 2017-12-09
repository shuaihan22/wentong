<?php /* Smarty version 3.1.27, created on 2017-01-21 14:25:54
         compiled from "F:\wamp\www\6\modules\cms\views\chunk\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:180285882fef21c6360_89046874%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32e280aabfe4de31094e6db5b81cbb7103918a12' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\chunk\\form.tpl',
      1 => 1472547308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180285882fef21c6360_89046874',
  'variables' => 
  array (
    'id' => 0,
    'options' => 0,
    'catelog' => 0,
    'name' => 0,
    'keywords' => 0,
    'istpl' => 0,
    'inline' => 0,
    'html' => 0,
    'rules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5882fef2227e02_71629378',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5882fef2227e02_71629378')) {
function content_5882fef2227e02_71629378 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '180285882fef21c6360_89046874';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-code"></i> 碎片管理
			<span>&gt; 编辑碎片</span>			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<a  class="btn btn-default btn-labeled" href="<?php echo Router::url(array('0'=>'cms/chunk'));?>
" 
				target="tag" data-tag="#content">
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
                id="wid-chunk-w"     
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
                     <h2> 碎片编辑器 </h2>                     
                </header>
                <div>
                     <div class="widget-body widget-hide-overflow no-padding">
                          
                          <form name="ChunkForm"                          		
                          		data-widget="nuiValidate" action="<?php echo Router::url(array('0'=>'cms/chunk/save'));?>
" 
                          		method="post" id="chunk-form" class="smart-form" target="ajax"
                          		>
                          	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
							<fieldset>												
								<div class="row">
									<section class="col col-4">
										<label class="label">分类</label>
										<label class="select">
											<select name="catelog" id="catelog">
												<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>$_smarty_tpl->tpl_vars['catelog']->value),$_smarty_tpl);?>

											</select>
											<i></i>
										</label>
										
									</section>
									<section class="col col-8">
										<label class="label">碎片名</label>
										<label class="input">
										<input type="text" name="name" 
											id="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
										</label>
									</section>
								</div>
								<section>
									<label class="label">关键词</label>
									<label class="input">
									<input type="text" name="keywords" 
										id="keywords" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"/>
									</label>
								</section>
								<div class="row">
									<section class="col col-3">
										<label class="checkbox">
											<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['istpl']->value) {?>checked="checked"<?php }?>  name="istpl"/>
											<i></i>启用模板解析</label>
									</section>
									<section class="col col-3">
										<label class="checkbox">
											<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['inline']->value) {?>checked="checked"<?php }?>  name="inline"/>
											<i></i>启用内链解析</label>
									</section>
								</div>
								
								<section>
									<label class="label">内容</label>
									<label class="textarea">
										<textarea rows="6" name="html" id="html"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									</label>
								</section>
							</fieldset>
							
							<footer>								
								<button type="submit" class="btn btn-primary">
									保存
								</button>
								<a  class="btn btn-default" href="<?php echo Router::url(array('0'=>'cms/chunk'));?>
" 
									target="tag" data-tag="#content">
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
	nUI.validateRules['ChunkForm'] = <?php echo $_smarty_tpl->tpl_vars['rules']->value;?>
;
<?php echo '</script'; ?>
><?php }
}
?>