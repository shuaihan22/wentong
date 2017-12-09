<?php /* Smarty version 3.1.27, created on 2017-01-18 11:36:19
         compiled from "F:\wamp\www\6\modules\cms\views\cts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12939587ee2b3a81656_14380781%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07eedf8b39a352f4a8d0ef399c763065710cb2dc' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\cts.tpl',
      1 => 1472547304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12939587ee2b3a81656_14380781',
  'variables' => 
  array (
    'providers' => 0,
    'provider' => 0,
    'widgets' => 0,
    'widget' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587ee2b3adb3e4_47902774',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587ee2b3adb3e4_47902774')) {
function content_587ee2b3adb3e4_47902774 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '12939587ee2b3a81656_14380781';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-columns"></i> 模板调用			
		</h1>
	</div>
</div>
<section id="widget-grid">
	<div class="row">
		<article class="col-xs-12 col-md-6">
			<div class="jarviswidget"
                id="wid-cts-form"     
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
                     <h2> 条件编辑器 </h2>                     
                </header>
                <div>
                     <div class="widget-body widget-hide-overflow no-padding">
                          
                          <form name="CtsCondForm"                          		
                          		action="<?php echo Router::url(array('0'=>'cms/cts'));?>
" 
                          		method="post" id="CtsCondForm-form" class="smart-form" target="ajax">
                          	
							<fieldset>
								<section>
									<label class="label">数据源</label>
									<label class="select">
										<select name="provider" id="provider" target="tag" data-tag="#content" data-url="<?php echo Router::url(array('0'=>'cms/cts'));?>
$provider$">
											<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['providers']->value,'selected'=>$_smarty_tpl->tpl_vars['provider']->value),$_smarty_tpl);?>

										</select>
										<i></i>
									</label>
								</section>
								<?php
$_from = $_smarty_tpl->tpl_vars['widgets']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['widget']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->_loop = true;
$foreach_widget_Sav = $_smarty_tpl->tpl_vars['widget'];
?>								
								<section>
									<label class="label"><?php echo $_smarty_tpl->tpl_vars['widget']->value['label'];
if ($_smarty_tpl->tpl_vars['widget']->value['note']) {?>(<?php echo $_smarty_tpl->tpl_vars['widget']->value['note'];?>
)<?php }?></label>
									<?php echo $_smarty_tpl->tpl_vars['widget']->value['widget']->render($_smarty_tpl->tpl_vars['widget']->value,'');?>

								</section>
								<?php
$_smarty_tpl->tpl_vars['widget'] = $foreach_widget_Sav;
}
?>												
							</fieldset>
							<footer>								
								<button type="submit" class="btn btn-primary">
									预览数据
								</button>
							</footer>
						</form>

                     </div>
                </div>
           </div>
		</article>
		<article class="col-xs-12 col-md-6">
			<div class="row">
				<article class="col-sm-12">
					<div class="jarviswidget"
		                id="wid-data-preview"     
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
		                     <h2> 数据预览 </h2>                     
		                </header>
		                <div>
		                     <div class="widget-body widget-hide-overflow no-padding">
		                     	<table class="table table-bordered table-striped">
		                     		<thead>
		                     			<tr>
		                     				<th width="80">ID</th>
		                     				<th>数据</th>
		                     			</tr>
		                     		</thead>
		                     		<tbody id="preview-body">
		                     			<tr>
		                     				<td colspan="2">暂无数据</td>
		                     			</tr>
		                     		</tbody>
		                     	</table>
		                     </div>
		                </div>
		           </div>
				</article>
				<article class="col-sm-12">
					<div class="jarviswidget"
		                id="wid-cst-preview"     
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
		                     <h2> 调用标签 </h2>                     
		                </header>
		                <div>
		                     <div class="widget-body widget-hide-overflow">
		                     	<div class="smart-form">
		                     		<label class="textarea">
		                     			<textarea readonly="readonly" id="cts-val" cols="30" rows="3"></textarea>
		                     		</label>
		                     	</div>
		                     </div>
		                </div>
		           </div>
				</article>
				<article class="col-sm-12">
					<div class="jarviswidget"
		                id="wid-data-fields-preview"     
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
		                     <h2> 数据字段</h2>                     
		                </header>
		                <div>
		                     <div class="widget-body widget-hide-overflow">
		                     	<pre id="pre-cts-data-fields" style="display:none;"></pre>
		                     </div>
		                </div>
		           </div>
				</article>
			</div>			
		</article>
	</div>
</section>
<?php echo '<script'; ?>
 type="text/javascript">
	nUI.ajaxCallbacks['setPreviewData'] = function(data){
		$('#preview-body').empty().html(data.data);
		$('#cts-val').val(data.cts);
		$('#pre-cts-data-fields').html(data.fields).show();
	};
<?php echo '</script'; ?>
><?php }
}
?>