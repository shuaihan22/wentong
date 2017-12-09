<?php /* Smarty version 3.1.27, created on 2017-01-21 14:33:23
         compiled from "F:\wamp\www\6\modules\cms\views\model\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21609588300b32e2248_00350336%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9aceb46cb3a6a946f5b9f073ce9697d6d2d4ac15' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\model\\form.tpl',
      1 => 1472547306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21609588300b32e2248_00350336',
  'variables' => 
  array (
    'id' => 0,
    'addon_table' => 0,
    'models' => 0,
    'upid' => 0,
    'status' => 0,
    'is_topic_model' => 0,
    'creatable' => 0,
    'is_list_model' => 0,
    'name' => 0,
    'refid' => 0,
    'template' => 0,
    'groups' => 0,
    'role' => 0,
    'note' => 0,
    'rules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588300b3395d61_92349095',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588300b3395d61_92349095')) {
function content_588300b3395d61_92349095 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '21609588300b32e2248_00350336';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa-fw fa fa-list-alt"></i> 模型管理
			<span>&gt; 新增模型</span>			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<a  id="btn2model" class="btn btn-default btn-labeled" href="#<?php echo Router::url(array('0'=>'cms/model','1'=>false));?>
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
                id="wid-model-form"     
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
                     <h2> 内容模型编辑器 </h2>                     
                </header>
                <div>
                     <div class="widget-body widget-hide-overflow no-padding">
                          
                          <form name="ModelForm"                          		
                          		data-widget="nuiValidate" action="<?php echo Router::url(array('0'=>'cms/model/save'));?>
" 
                          		method="post" id="model-form" class="smart-form" target="ajax"
                          		>
                          	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                          	<input type="hidden" name="addon_table" id="addon_table" value="<?php echo $_smarty_tpl->tpl_vars['addon_table']->value;?>
"/>
							<fieldset>
								<div class="row">
									<section class="col col-4">
										<label class="label">上级模型</label>
										<label class="select">
											<select name="upid" id="upid">
												<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['models']->value,'selected'=>$_smarty_tpl->tpl_vars['upid']->value),$_smarty_tpl);?>

											</select><i></i>
										</label>
									</section>
									<section class="col col-2">	
										<label class="label">&nbsp;</label>								
										<label class="checkbox">
											<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['status']->value) {?>checked="checked"<?php }?>  name="status"/>
											<i></i>启用</label>
									</section>
									<section class="col col-2">	
										<label class="label">&nbsp;</label>									
										<label class="checkbox">
											<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['is_topic_model']->value) {?>checked="checked"<?php }?>  name="is_topic_model"/>
											<i></i>此模型为专题模型</label>
									</section>
									<section class="col col-2">	
										<label class="label">&nbsp;</label>									
										<label class="checkbox">
											<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['creatable']->value) {?>checked="checked"<?php }?>  name="creatable"/>
											<i></i>可创建页面</label>
									</section>
									<section class="col col-2">	
										<label class="label">&nbsp;</label>								
										<label class="checkbox">
											<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['is_list_model']->value) {?>checked="checked"<?php }?>  name="is_list_model"/>
											<i></i>列表显示</label>
									</section>
									
								</div>
												
								<div class="row">
									<section class="col col-4">
										<label class="label">内容模型名称</label>
										<label class="input">									
										<input type="text" name="name" 
											id="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
										</label>
									</section>
									<section class="col col-2">
										<label class="label">识别ID</label>
										<label class="input">
										<input type="text" name="refid" 
											id="refid" value="<?php echo $_smarty_tpl->tpl_vars['refid']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>readonly="readonly"<?php }?>/>
										</label>
									</section>
									<section class="col col-4">
										<label class="label">编辑表单模板</label>
										<label class="input">									
										<input type="text" name="template" 
											id="template" value="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
"/>
										</label>
									</section>
									<section class="col col-2">	
										<label class="label">菜单组</label>									
										<label class="select">
											<select name="role" id="role">
												<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['groups']->value,'selected'=>$_smarty_tpl->tpl_vars['role']->value),$_smarty_tpl);?>

											</select><i></i>
										</label>
									</section>
								</div>															
															
								<section>
									<label class="label">说明</label>
									<label class="textarea">
										<i class="icon-append fa fa-comment"></i>
										<textarea rows="4" 
											name="note" id="note"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['note']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									</label>
								</section>
							</fieldset>
							
							<footer>
								<button type="submit" class="btn btn-primary">
									保存
								</button>
								<a  class="btn btn-default" href="#<?php echo Router::url(array('0'=>'cms/model','1'=>false));?>
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
	nUI.validateRules['ModelForm'] = <?php echo $_smarty_tpl->tpl_vars['rules']->value;?>
;
<?php echo '</script'; ?>
><?php }
}
?>