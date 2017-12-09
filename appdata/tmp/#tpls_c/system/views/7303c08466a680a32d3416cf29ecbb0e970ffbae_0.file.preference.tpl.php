<?php /* Smarty version 3.1.27, created on 2016-08-30 16:27:15
         compiled from "/data/wwwroot/www.minzhuzhihun.com/modules/system/views/preference.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:212894387557c54363a28908_02990867%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7303c08466a680a32d3416cf29ecbb0e970ffbae' => 
    array (
      0 => '/data/wwwroot/www.minzhuzhihun.com/modules/system/views/preference.tpl',
      1 => 1465304738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212894387557c54363a28908_02990867',
  'variables' => 
  array (
    '_g' => 0,
    'groups' => 0,
    'key' => 0,
    'g' => 0,
    'formName' => 0,
    'widgets' => 0,
    'rules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57c54363a90113_53044734',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57c54363a90113_53044734')) {
function content_57c54363a90113_53044734 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '212894387557c54363a28908_02990867';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
		<h1 class="txt-color-blueDark">
			<i class="fa-fw fa fa-cog"></i> 系统设置
			<span>&gt; 通用设置</span>			
		</h1>
	</div>	
</div>

<section id="widget-grid">
	<div class="row">
		<article class="col-sm-12">
			<div class="jarviswidget"
                id="wid-<?php echo $_smarty_tpl->tpl_vars['_g']->value;?>
-preference"     
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
                     <h2> 通用设置 </h2> 
                     <ul class="nav nav-tabs pull-right in">
                     	<?php
$_from = $_smarty_tpl->tpl_vars['groups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['g']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$foreach_g_Sav = $_smarty_tpl->tpl_vars['g'];
?>
						<li <?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['_g']->value) {?>class="active"<?php }?>>
							<a href="<?php echo Router::url(array('0'=>'system/preference'));?>
?_g=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" target="tag" data-tag="#content">
								<i class="fa fa-fw <?php echo $_smarty_tpl->tpl_vars['g']->value['icon'];?>
"></i> 
								<span class="hidden-mobile hidden-tablet"><?php echo $_smarty_tpl->tpl_vars['g']->value['name'];?>
</span>
							</a>
						</li>
						<?php
$_smarty_tpl->tpl_vars['g'] = $foreach_g_Sav;
}
?>										
					 </ul>                    
                </header>
                <div>
                     <div class="widget-body no-padding">                          
                          <form name="<?php echo $_smarty_tpl->tpl_vars['formName']->value;?>
"                          		
                          		data-widget="nuiValidate" action="<?php echo Router::url(array('0'=>'system/preference'));?>
" 
                          		method="post" id="preference-form" class="smart-form" target="ajax">
                          		<input type="hidden" name="_g" value="<?php echo $_smarty_tpl->tpl_vars['_g']->value;?>
"/>                      	
							<fieldset>
								<?php echo $_smarty_tpl->tpl_vars['widgets']->value instanceof Renderable?$_smarty_tpl->tpl_vars['widgets']->value->render():$_smarty_tpl->tpl_vars['widgets']->value;?>

							</fieldset>
							<footer>								
								<button type="submit" class="btn btn-primary">
									保存
								</button>
								<button type="reset" class="btn btn-default">
									重置
								</button>
								<?php echo apply_filter('get_preference_button','',$_smarty_tpl->tpl_vars['_g']->value,'');?>
									
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
	nUI.validateRules['<?php echo $_smarty_tpl->tpl_vars['formName']->value;?>
'] = <?php echo $_smarty_tpl->tpl_vars['rules']->value;?>
;	
<?php echo '</script'; ?>
><?php }
}
?>