<?php /* Smarty version 3.1.27, created on 2017-01-22 09:12:09
         compiled from "F:\wamp\www\6\modules\dashboard\views\dashboard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22354588406e95ab198_40727612%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '039e84f60123168e0ada98bd8c002b09a02015e3' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\dashboard\\views\\dashboard.tpl',
      1 => 1485047526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22354588406e95ab198_40727612',
  'variables' => 
  array (
    'noticeClosed' => 0,
    'noticeTitle' => 0,
    'noticeMessage' => 0,
    'noticeUser' => 0,
    'noticeTime' => 0,
    'dashboardUI' => 0,
    'devMod' => 0,
    'logLevel' => 0,
    'serverName' => 0,
    'phpInfo' => 0,
    'dbInfo' => 0,
    'gdInfo' => 0,
    'sessionManager' => 0,
    'scwsInfo' => 0,
    'rtcacheInfo' => 0,
    'KISS_VERSION' => 0,
    'KISS_RELEASE_VER' => 0,
    'KISS_BUILD_ID' => 0,
    'kernelVer' => 0,
    'cpVer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588406e961c627_45380917',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588406e961c627_45380917')) {
function content_588406e961c627_45380917 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22354588406e95ab198_40727612';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			<i class="fa-fw fa fa-home"></i> 控制面板			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<?php echo apply_filter('dashboard_right_bar','','','');?>

		<ul id="sparks"><?php echo apply_filter('dashboard_sparks_bar','','','');?>
</ul>	
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<?php if (!$_smarty_tpl->tpl_vars['noticeClosed']->value) {?>
		<div class="alert alert-warning fade in">
			<button data-dismiss="alert" class="close" 
					data-blockUI="false" 
					data-url="<?php echo Router::url(array('0'=>'dashboard/closenotice'));?>
" 
					target="ajax">×</button>
			<p><i class="fa-fw fa fa-info"></i><strong><?php echo $_smarty_tpl->tpl_vars['noticeTitle']->value;?>
:</strong></p>
			<div><?php echo $_smarty_tpl->tpl_vars['noticeMessage']->value;?>
</div>	
			<div class="text-right"><?php echo $_smarty_tpl->tpl_vars['noticeUser']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['noticeTime']->value;?>
</div>	
		</div>		
		<?php }?>
		<div id="shortcut-wrap">			
			<ul><?php echo apply_filter('on_render_dashboard_shortcut','','','');?>
</ul>			
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->tpl_vars['dashboardUI']->value instanceof Renderable?$_smarty_tpl->tpl_vars['dashboardUI']->value->render():$_smarty_tpl->tpl_vars['dashboardUI']->value;?>

<?php echo apply_filter('render_dashboard_panel','','','');?>

<div class="row">
	<div class="col-sm-12">
		<div class="alert alert-success fade in">
			<i class="fa-fw fa fa-info"></i>
			<strong>运行时信息:</strong><br/>
			<p> 开发模式: <?php echo $_smarty_tpl->tpl_vars['devMod']->value;?>
</p>
			<p> 日志级别: <?php echo $_smarty_tpl->tpl_vars['logLevel']->value;?>
</p>
			<p> HTTP Server: <?php echo $_smarty_tpl->tpl_vars['serverName']->value;?>
</p>
			<p> PHP: <?php echo $_smarty_tpl->tpl_vars['phpInfo']->value;?>
</p>
			<p> 数据库: <?php echo $_smarty_tpl->tpl_vars['dbInfo']->value;?>
</p>
			<p> GD: <?php echo $_smarty_tpl->tpl_vars['gdInfo']->value;?>
</p>
			<p> 会话管理器: <?php echo $_smarty_tpl->tpl_vars['sessionManager']->value;?>
</p>			
			<p> 分词系统: <?php echo $_smarty_tpl->tpl_vars['scwsInfo']->value;?>
</p>
			<p> 运行时缓存: <?php echo $_smarty_tpl->tpl_vars['rtcacheInfo']->value;?>
</p>
			<?php echo apply_filter('show_system_info','','','');?>
		
		</div>	
		<div class="alert alert-info fade in">
			<i class="fa-fw fa fa-info"></i>
			<strong>程序信息:</strong><br/>
			<p> 设计开发: 子明</p>
			<p> 功能需求: 子明、倩倩</p>
			<p> 程序版本: <?php echo $_smarty_tpl->tpl_vars['KISS_VERSION']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['KISS_RELEASE_VER']->value;?>
, BUILD:<?php echo $_smarty_tpl->tpl_vars['KISS_BUILD_ID']->value;?>
, 内核版本:<?php echo $_smarty_tpl->tpl_vars['kernelVer']->value;?>
, 界面版本:<?php echo $_smarty_tpl->tpl_vars['cpVer']->value;?>
</p>
		</div>
	</div>
</div>
<?php }
}
?>