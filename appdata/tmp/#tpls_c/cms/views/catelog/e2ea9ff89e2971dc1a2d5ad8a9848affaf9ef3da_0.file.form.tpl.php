<?php /* Smarty version 3.1.27, created on 2017-01-21 13:59:45
         compiled from "F:\wamp\www\6\modules\cms\views\catelog\form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:84455882f8d10a6244_00717634%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ea9ff89e2971dc1a2d5ad8a9848affaf9ef3da' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\catelog\\form.tpl',
      1 => 1472547308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84455882f8d10a6244_00717634',
  'variables' => 
  array (
    'catelogTitle' => 0,
    'catelogType' => 0,
    'id' => 0,
    'options' => 0,
    'upid' => 0,
    'name' => 0,
    'alias' => 0,
    'note' => 0,
    'rules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5882f8d1152070_46903427',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5882f8d1152070_46903427')) {
function content_5882f8d1152070_46903427 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '84455882f8d10a6244_00717634';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa fa-fw fa-folder-open"></i> <?php echo $_smarty_tpl->tpl_vars['catelogTitle']->value;?>

			<span>&gt; 编辑器</span>			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<a  class="btn btn-default btn-labeled" href="<?php echo Router::url(array('0'=>'cms/catelog'));
echo $_smarty_tpl->tpl_vars['catelogType']->value;?>
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
                id="wid-catelog-form"     
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
                     <h2> <?php echo $_smarty_tpl->tpl_vars['catelogTitle']->value;?>
编辑器 </h2>                     
                </header>
                <div>
                     <div class="widget-body widget-hide-overflow no-padding">
                          
                          <form name="CatelogForm"                          		
                          		data-widget="nuiValidate" action="<?php echo Router::url(array('0'=>'cms/catelog/save'));?>
" 
                          		method="post" id="model-form" class="smart-form" target="ajax"
                          		>
                          	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                          	<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['catelogType']->value;?>
"/>
							<fieldset>											
								<div class="row">
									<section class="col col-4">
										<label class="label">上级<?php echo $_smarty_tpl->tpl_vars['catelogTitle']->value;?>
</label>
										<label class="select">
											<select name="upid" id="upid">
												<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['options']->value,'selected'=>((string)$_smarty_tpl->tpl_vars['upid']->value)),$_smarty_tpl);?>

											</select>
											<i></i>
										</label>
									</section>	
									<section class="col col-4">
										<label class="label"><?php echo $_smarty_tpl->tpl_vars['catelogTitle']->value;?>
</label>
										<label class="input">									
										<input type="text" name="name" 
											id="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
										</label>
									</section>
									<section class="col col-4">
										<label class="label">别名</label>
										<label class="input">									
										<input type="text" name="alias" 
											id="alias" value="<?php echo $_smarty_tpl->tpl_vars['alias']->value;?>
"/>
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
								<a  class="btn btn-default" href="<?php echo Router::url(array('0'=>'cms/catelog'));
echo $_smarty_tpl->tpl_vars['catelogType']->value;?>
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
	nUI.validateRules['CatelogForm'] = <?php echo $_smarty_tpl->tpl_vars['rules']->value;?>
;
<?php echo '</script'; ?>
><?php }
}
?>