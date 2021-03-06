<?php /* Smarty version 3.1.27, created on 2017-01-20 16:51:01
         compiled from "F:\wamp\www\6\modules\cms\views\model\field_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:234875881cf755952b8_41112672%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60bb25de001d2b40894af70e974b7eae38101a79' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\model\\field_form.tpl',
      1 => 1472547306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234875881cf755952b8_41112672',
  'variables' => 
  array (
    'modelName' => 0,
    'model' => 0,
    'id' => 0,
    'name' => 0,
    'label' => 0,
    'tip' => 0,
    'data_types' => 0,
    'data_type' => 0,
    'default_value' => 0,
    'required' => 0,
    'searchable' => 0,
    'cstore' => 0,
    'group' => 0,
    'col' => 0,
    'sort' => 0,
    'tab_acc' => 0,
    'widgets' => 0,
    'widget' => 0,
    'wtype' => 0,
    'type' => 0,
    'defaults' => 0,
    'defaultFormat' => 0,
    'rules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881cf7580e045_73455725',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881cf7580e045_73455725')) {
function content_5881cf7580e045_73455725 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '234875881cf755952b8_41112672';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa-fw fa fa-list-alt"></i> <?php echo $_smarty_tpl->tpl_vars['modelName']->value;?>

			<span>&gt; 编辑自定义字段</span>			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<a id="gobackmodel"  class="btn btn-default btn-labeled" href="#<?php echo Router::url(array('0'=>'cms/modelfield','1'=>false));
echo $_smarty_tpl->tpl_vars['model']->value;?>
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
                id="wid-modelfield-w"     
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
                     <h2> 自定义字段编辑器 </h2>                     
                </header>
                <div>
                     <div class="widget-body widget-hide-overflow no-padding">
                          
                          <form name="ModelFieldForm"                          		
                          		data-widget="nuiValidate" action="<?php echo Router::url(array('0'=>'cms/modelfield/save'));?>
" 
                          		method="post" id="modelfield-form" class="smart-form" target="ajax"
                          		>
                          	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                          	<input type="hidden" name="model" value="<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
"/>
							<fieldset>												
								<div class="row">
									<section class="col col-6">
										<label class="label">字段(最好以field_开头)</label>
										<label class="input">
										<input type="text" name="name" 
											id="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>readonly="readonly"<?php }?>/>
										</label>
									</section>
									<section class="col col-6">
										<label class="label">名称</label>
										<label class="input">
										<input type="text" name="label" 
											id="label" value="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
"/>
										</label>
									</section>
								</div>
								<div class="row">
									<section class="col col-6">
										<label class="label">提示文本</label>
										<label class="input">
										<input type="text" name="tip" 
											id="tip" value="<?php echo $_smarty_tpl->tpl_vars['tip']->value;?>
"/>
										</label>
									</section>
									<div class="col col-3">
										<label class="label">值类型</label>
										<label class="select">
											<select name="data_type" id="data_type">
												<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['data_types']->value,'selected'=>$_smarty_tpl->tpl_vars['data_type']->value),$_smarty_tpl);?>

											</select>
											<i></i>
										</label>
									</div>	
									<section class="col col-3">
										<label class="label">默认值</label>
										<label class="input">
										<input type="text" name="default_value" 
											id="default_value" value="<?php echo $_smarty_tpl->tpl_vars['default_value']->value;?>
"/>
										</label>
									</section>
								</div>
								<section>
									<div class="inline-group">
										<label class="checkbox">
											<input type="checkbox" name="required" <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>checked="checked"<?php }?>/>
											<i></i>必须填写字段
										</label>
										<label class="checkbox">
											<input type="checkbox" name="searchable" <?php if ($_smarty_tpl->tpl_vars['searchable']->value) {?>checked="checked"<?php }?>/>
											<i></i>可搜索字段
										</label>
										<label class="checkbox">
											<input type="checkbox" name="cstore" <?php if ($_smarty_tpl->tpl_vars['cstore']->value) {?>checked="checked"<?php }?>/>
											<i></i>自定义存储
										</label>
									</div>				
								</section>											
								<section>
									<span class="timeline-seperator text-center text-primary"> 
										<span class="font-sm">表单控件与布局</span> 
									</span>
								</section>
								<div class="row">
									<section class="col col-3">
										<label class="label">所在组</label>
										<label class="input">
										<input type="text" name="group" 
											id="group" value="<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
"/>
										</label>
										<div class="note">同一组的组件将在同一行显示.</div>
									</section>
									<section class="col col-3">
										<label class="label">宽度</label>
										<label class="input">
										<input type="text" name="col" 
											id="col" value="<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
"/>
										</label>
										<div class="note">同一组的宽度加起来的和应该小于等于12.</div>
									</section>
									<section class="col col-3">
										<label class="label">排序</label>
										<label class="input">
										<input type="text" name="sort" 
											id="sort" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
"/>
										</label>
										<div class="note">字段在表单中出现顺序，越小越靠前.</div>
									</section>
									<section class="col col-3">
										<label class="label">折叠/标签组</label>
										<label class="input">
										<input type="text" name="tab_acc" 
											id="tab_acc" value="<?php echo $_smarty_tpl->tpl_vars['tab_acc']->value;?>
"/>
										</label>
										<div class="note">tab:标签组名,acc:折叠组名</div>
									</section>
								</div>
								<section>				
									<label class="label">输入组件</label>					
									<div class="row">
										<?php
$_from = $_smarty_tpl->tpl_vars['widgets']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['widget']->_loop = false;
$_smarty_tpl->tpl_vars['wtype'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['wtype']->value => $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->_loop = true;
$foreach_widget_Sav = $_smarty_tpl->tpl_vars['widget'];
?>
										<?php if ($_smarty_tpl->tpl_vars['widget']->value->getName()) {?>
										<div class="col col-2">
										<label class="radio">
											<input title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget']->value->getDataProvidor('')->getOptionsFormat(), ENT_QUOTES, 'UTF-8', true);?>
" type="radio" name="type" value="<?php echo $_smarty_tpl->tpl_vars['wtype']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['wtype']->value) {?>checked="checked"<?php }?>/>
											<i></i><?php echo $_smarty_tpl->tpl_vars['widget']->value->getName();?>
</label>
										</div>
										<?php }?>
										<?php
$_smarty_tpl->tpl_vars['widget'] = $foreach_widget_Sav;
}
?>
									</div>
								</section>
								<section>
									<label class="label">数据源(此组件可使用的数据)</label>
									<label class="textarea">
										<textarea rows="4" name="defaults" id="defaults"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['defaults']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									</label>
									<div class="note" id="defaults_help"><?php echo $_smarty_tpl->tpl_vars['defaultFormat']->value;?>
</div>
								</section>
							</fieldset>							
							<footer>								
								<button type="submit" class="btn btn-primary">
									保存
								</button>
									<a  class="btn btn-default" href="#<?php echo Router::url(array('0'=>'cms/modelfield','1'=>false));
echo $_smarty_tpl->tpl_vars['model']->value;?>
">返回</a>
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
	nUI.validateRules['ModelFieldForm'] = <?php echo $_smarty_tpl->tpl_vars['rules']->value;?>
;
	$('input[name="type"]').click(function(){
		$('#defaults').val('');
		$('#defaults_help').html($(this).attr('title'));
	});
<?php echo '</script'; ?>
><?php }
}
?>