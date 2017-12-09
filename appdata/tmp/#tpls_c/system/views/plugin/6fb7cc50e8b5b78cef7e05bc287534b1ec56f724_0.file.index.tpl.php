<?php /* Smarty version 3.1.27, created on 2017-01-18 11:22:12
         compiled from "F:\wamp\www\6\modules\system\views\plugin\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24769587edf64a8b5f1_87446809%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb7cc50e8b5b78cef7e05bc287534b1ec56f724' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\system\\views\\plugin\\index.tpl',
      1 => 1472547291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24769587edf64a8b5f1_87446809',
  'variables' => 
  array (
    'status' => 0,
    'installed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587edf64b04792_32976709',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587edf64b04792_32976709')) {
function content_587edf64b04792_32976709 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24769587edf64a8b5f1_87446809';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa-fw fa fa-puzzle-piece"></i> 插件管理			
		</h1>
	</div>	
</div>

<section id="widget-grid">
	<div class="row">
		<article class="col-sm-12">
			<div class="panel panel-default">
				<ul class="nav nav-tabs in" id="plugin-type-tab">
					<li <?php if ($_smarty_tpl->tpl_vars['status']->value == 'installed') {?>class="active"<?php }?>>
						<a href="#<?php echo Router::url(array('0'=>'system/plugin','1'=>false));?>
installed/" class="txt-color-green"><i class="fa fa-puzzle-piece"></i> <span class="hidden-mobile hidden-tablet">已安装</span></a>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['status']->value == 'uninstalled') {?>class="active"<?php }?>>
						<a href="#<?php echo Router::url(array('0'=>'system/plugin','1'=>false));?>
uninstalled/" class="txt-color-blueLight"><i class="fa fa-puzzle-piece"></i> <span class="hidden-mobile hidden-tablet">未安装</span></a>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['status']->value == 'upgrade') {?>class="active"<?php }?>>
						<a href="#<?php echo Router::url(array('0'=>'system/plugin','1'=>false));?>
installed/?status=upgrade" class="txt-color-orange" rel="upgrade"><i class="fa fa-puzzle-piece"></i> <span class="hidden-mobile hidden-tablet">可升级</span></a>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['status']->value == 'disabled') {?>class="active"<?php }?>>
						<a href="#<?php echo Router::url(array('0'=>'system/plugin','1'=>false));?>
installed/?status=disabled" class="txt-color-redLight" rel="disable"><i class="fa fa-puzzle-piece"></i> <span class="hidden-mobile hidden-tablet">已禁用</span></a>
					</li>
					<li <?php if ($_smarty_tpl->tpl_vars['status']->value == 'system') {?>class="active"<?php }?>>
						<a href="#<?php echo Router::url(array('0'=>'system/plugin','1'=>false));?>
installed/?status=system" class="txt-color-magenta" rel="upgrade"><i class="fa fa-gears"></i> <span class="hidden-mobile hidden-tablet">系统内核</span></a>
					</li>
				</ul>
				<table 
					id="plugin-table"
					data-widget="nuiTable"
					data-auto="true"
					data-source="<?php echo Router::url(array('0'=>'system/plugin/data'));?>
?installed=<?php echo $_smarty_tpl->tpl_vars['installed']->value;?>
&status=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
">
					<thead>
						<tr>									
							<th width="400">插件名</th>							
							<th width="80">安装版本</th>							
							<th class="hidden-xs hidden-sm">描述</th>
							<th width="140"></th>							
						</tr>
					</thead>
				</table>	
				<div class="panel-footer">
					<div data-widget="nuiPager" data-for="#plugin-table" data-limit="10"></div>
				</div>			
			</div>
		</article>
	</div>
</section><?php }
}
?>