<?php /* Smarty version 3.1.27, created on 2016-08-30 16:27:21
         compiled from "/data/wwwroot/www.minzhuzhihun.com/modules/memcached/views/preference.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:159219990657c543692f07d9_68399194%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0783f49372229cb85d440a7c24937f2621a87266' => 
    array (
      0 => '/data/wwwroot/www.minzhuzhihun.com/modules/memcached/views/preference.tpl',
      1 => 1435891362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159219990657c543692f07d9_68399194',
  'variables' => 
  array (
    'errorTip' => 0,
    'widgets' => 0,
    'rules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57c5436930ceb4_79107186',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57c5436930ceb4_79107186')) {
function content_57c5436930ceb4_79107186 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '159219990657c543692f07d9_68399194';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
		<h1 class="txt-color-blueDark">
			<i class="fa-fw fa fa-cog"></i> 系统设置
			<span>&gt; cache设置</span>			
		</h1>
	</div>	
</div>

<section id="widget-grid">
	<div class="row">
		<article class="col-sm-12">
			<div class="jarviswidget"
                id="wid-mem-preference"     
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
                     <h2> cache设置 </h2>                     
                </header>
                <div>
                     <div class="widget-body no-padding">                          

                          <form name="MemPreferenceForm"                          		
                          		data-widget="nuiValidate" action="<?php echo Router::url(array('0'=>'memcached'));?>
" 
                          		method="post" id="preference-form" class="smart-form" target="ajax">                          	
							<fieldset>
								<?php if ($_smarty_tpl->tpl_vars['errorTip']->value) {?>
								<section>
									<div class="alert alert-warning">										
										<i class="fa-fw fa fa-info"></i>
										<strong>Warning!</strong> <?php echo $_smarty_tpl->tpl_vars['errorTip']->value;?>

									</div>
								</section>	
								<?php }?>													
								<?php echo $_smarty_tpl->tpl_vars['widgets']->value instanceof Renderable?$_smarty_tpl->tpl_vars['widgets']->value->render():$_smarty_tpl->tpl_vars['widgets']->value;?>

							</fieldset>
							<footer>								
								<button type="submit" class="btn btn-primary">
									保存
								</button>
								<button type="reset" class="btn btn-default">
									重置
								</button>									
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
	nUI.validateRules['MemPreferenceForm'] = <?php echo $_smarty_tpl->tpl_vars['rules']->value;?>
;	
<?php echo '</script'; ?>
><?php }
}
?>