<?php /* Smarty version 3.1.27, created on 2017-01-21 16:26:43
         compiled from "F:\wamp\www\6\modules\cms\views\page\browser.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:382058831b433a5389_71831542%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'add854bc1c69148d7dae8e6327ac20048ab0680e' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\page\\browser.tpl',
      1 => 1472547310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '382058831b433a5389_71831542',
  'variables' => 
  array (
    'model' => 0,
    'models' => 0,
    'ss' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58831b434417b4_85369471',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58831b434417b4_85369471')) {
function content_58831b434417b4_85369471 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '382058831b433a5389_71831542';
?>
<div class="panel-body no-padding">			  
	<form data-widget="nuiSearchForm" data-for="#page-browser-table" class="form-horizontal">
		<fieldset>
			<div class="form-group">												
				<section class="col-sm-12">					
					<div class="row">
						<div class="col col-sm-4">
							<?php if ($_smarty_tpl->tpl_vars['model']->value) {?>
								<input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['models']->value[$_smarty_tpl->tpl_vars['model']->value];?>
" readonly="readonly"/>
								<input type="hidden" name="model" value="<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
"/>
							<?php } else { ?>
							<select name="model" id="model" class="form-control">
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['models']->value),$_smarty_tpl);?>

							</select>
							<?php }?>			
						</div>
						<div class="col col-sm-8">
							<div class="input-group">						
								<input type="text" class="form-control" placeholder="关键词" name="keywords"/>
								<div class="input-group-btn">
									<button type="submit" class="btn btn-primary">
										<i class="fa fa-search"></i>
									</button>									
								</div>
							</div>
						</div>
					</div>					
				</section>					
			</div>
		</fieldset>				  		
	</form>
</div>
<table id="page-browser-table"
	   data-widget="nuiGrid"
	   data-height="200"
	   data-source="<?php echo Router::url(array('0'=>'cms/page/browsedata'));?>
?ss=<?php echo $_smarty_tpl->tpl_vars['ss']->value;?>
">
	<thead>
		<tr>
			<th>标题</th>
			<th width="30">
				<?php if (!$_smarty_tpl->tpl_vars['ss']->value) {?><input type="checkbox" class="grp"/><?php }?>
			</th>			
		</tr>
	</thead>	
</table>
<div class="panel-footer">
	<div class="row">
		<div class="col col-sm-8">
			<div data-widget="nuiPager" class="left" data-hidden-tip="true" data-for="#page-browser-table" data-limit="10" data-pp="3"></div>
		</div>
		<div class="col col-sm-4 text-right">			
			<a class="btn btn-xs btn-success nui-insert-btn <?php if ($_smarty_tpl->tpl_vars['ss']->value) {?>single-select<?php }?>">选择</a>
			<a class="btn btn-xs btn-primary nui-insert-btn <?php if ($_smarty_tpl->tpl_vars['ss']->value) {?>single-select<?php }?> close-after">确定</a>			
		</div>
	</div>
</div><?php }
}
?>