<?php /* Smarty version 3.1.27, created on 2016-08-30 16:27:11
         compiled from "/data/wwwroot/www.minzhuzhihun.com/modules/dashboard/views/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:125196614657c5435fc7b7a5_35491844%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f5745592d37b6125cd9ec3e4bcbfc69dcadbcc0' => 
    array (
      0 => '/data/wwwroot/www.minzhuzhihun.com/modules/dashboard/views/index.tpl',
      1 => 1458883246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125196614657c5435fc7b7a5_35491844',
  'variables' => 
  array (
    'cp_theme' => 0,
    'KISS_VERSION' => 0,
    'KISS_RELEASE_VER' => 0,
    'menu_on_top' => 0,
    'validateURL' => 0,
    'passport' => 0,
    'layoutManager' => 0,
    'HomeURL' => 0,
    'AppURL' => 0,
    'SiteURL' => 0,
    'SiteName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57c5435fe4a008_87797590',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57c5435fe4a008_87797590')) {
function content_57c5435fe4a008_87797590 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '125196614657c5435fc7b7a5_35491844';
?>
<!DOCTYPE html>
<html lang="en-us" class="<?php echo $_smarty_tpl->tpl_vars['cp_theme']->value;?>
">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<title>管理后台 - <?php echo cfg('site_name', '');?>
 - Powered by KissCMS!(<?php echo $_smarty_tpl->tpl_vars['KISS_VERSION']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['KISS_RELEASE_VER']->value;?>
)</title>
<meta content="kisscms" name="description"/>
<meta content="ninGf" name="author"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
<?php $_smarty_tpl->_capture_stack[0][] = array("css"); ob_start(); ?>
<link href="<?php echo safe_url(ASSETS_URL.'bootstrap/css/bootstrap.min.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo safe_url(ASSETS_URL.'bootstrap/css/font-awesome.min.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo safe_url(ASSETS_URL.'bootstrap/css/smartadmin-production-plugins.min.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo safe_url(ASSETS_URL.'bootstrap/css/smartadmin-production.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo safe_url(ASSETS_URL.'bootstrap/css/smartadmin-skins.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo safe_url(ASSETS_URL.'kindeditor/themes/default/default.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>	
<link href="<?php echo safe_url(ASSETS_URL.'jquery/plugins/ztree/css/style.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>	
<link href="<?php echo safe_url(ASSETS_URL.'nui/nUI.css',true);?>
" rel="stylesheet"/>
<link href="<?php echo safe_url(ASSETS_URL.'quicktags.css',true);?>
" rel="stylesheet"/>
<link href="<?php echo safe_url(ASSETS_URL.'google/fonts.css',true);?>
" rel="stylesheet"/>
<?php echo apply_filter('on_load_dashboard_css_file','','','');?>

<link href="<?php echo safe_url ('modules/dashboard/views/'.'assets/cp.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>
<?php list($_capture_buffer) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
echo(combinate_resources(ob_get_clean(),$_capture_buffer));
}?>
<style type="text/css">
<?php echo apply_filter('on_load_dashboard_css','','','');?>

</style>
<link href="<?php echo safe_url('favicon.ico',true);?>
" rel="shortcut icon" type="image/x-icon"/>
<link href="<?php echo safe_url('favicon.ico',true);?>
" rel="icon" type="image/x-icon"/>
</head>

<body class="<?php echo $_smarty_tpl->tpl_vars['cp_theme']->value;
if ($_smarty_tpl->tpl_vars['menu_on_top']->value) {?> menu-on-top<?php }?>" data-validateURL="<?php echo $_smarty_tpl->tpl_vars['validateURL']->value;?>
">

	<header id="header">	
	<div id="logo-group">		
		<span id="logo"><img alt="KissCms" src="<?php echo safe_url(ASSETS_URL.'img/logo.png',true);?>
"></span>		
	</div>
	<!-- pulled right: nav area --> 
	<div class="pull-right">			 
		<div class="btn-header pull-right" id="hide-menu">
			<span>
				<a href="javascript:void(0);" title="显示/隐藏导航菜单" data-action="toggleMenu">
					<i class="fa fa-reorder"></i>
				</a>
			</span>
		</div> 
		<ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
			<li class="">
				<a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown"> 
					<img src="<?php echo safe_url(ASSETS_URL.'avatars/male.png',true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['passport']->value->getUserName();?>
" class="online" />  
				</a>
				<ul class="dropdown-menu pull-right">
					<?php echo $_smarty_tpl->tpl_vars['layoutManager']->value->renderLink('user');?>
					
				</ul>
			</li>
		</ul>
		<div class="btn-header transparent pull-right">
			<span>
				<a data-action="logoutUser" data-logout-msg="你确定要注销吗?" href="<?php echo Router::url(array('0'=>'dashboard/signout'));?>
" title="退出">
					<i class="fa fa-sign-out"></i>
				</a>
			</span>
		</div> 
		<div class="btn-header transparent pull-right">
			<span>
				<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['HomeURL']->value;?>
" title="网站首页">
					<i class="fa fa-fw fa-home"></i>
				</a>
			</span>
		</div>
		<?php echo apply_filter('on_render_navi_btns','','','');?>

		<?php if ($_smarty_tpl->tpl_vars['layoutManager']->value->hasLinkes('model')) {?>
		<ul class="header-dropdown-list hidden-xs" style="padding-left: 10px;">
			<li>
				<a data-toggle="dropdown" class="dropdown-toggle bg-color-red" href="#" id="fbnews">					
					<i class="fa fa-lg fa-file-text"></i> 
					新建
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu multi-level pull-right">
					<?php echo $_smarty_tpl->tpl_vars['layoutManager']->value->renderLink('model');?>

				</ul>
			</li>
		</ul>
		<?php }?>
		<form onsubmit="return doQuickSearch()" class="header-search pull-right">
			<input id="search-fld" name="param" placeholder="快速查找" type="text" style="min-width: 300px;"/>
			<button type="button" id="search-form-submitter">
				<i class="fa fa-search"></i>
			</button>			
		</form>
		
	</div>
	</header>
	<!-- END HEADER -->
	<aside id="left-panel">
		 <!-- User info -->
		<div class="login-info">
			<span data-toggle="dropdown" class="dropdown-toggle">				
				<a href="javascript:void(0);" id="show-shortcut">
					<img alt="me" class="online" src="<?php echo safe_url(ASSETS_URL.'avatars/male.png',true);?>
"/>
					<span><?php echo $_smarty_tpl->tpl_vars['passport']->value->getUserName();?>
</span>
					<i class="fa fa-angle-down"></i>
				</a>				
			</span>
			<ul class="dropdown-menu">
				<?php echo $_smarty_tpl->tpl_vars['layoutManager']->value->renderLink('user');?>
				
			</ul>
		</div>
		<!-- end user info -->
		<nav>
			<ul>
				<li>
					<a href="<?php echo Router::url(array('0'=>'dashboard/cp','1'=>false));?>
" title="控制面板">
						<i class="fa fa-lg fa-fw fa-home"></i>
						<span class="menu-item-parent">开始</span>
					</a>
				</li>
				<?php echo $_smarty_tpl->tpl_vars['layoutManager']->value->renderNaviMenu();?>
				
			</ul>
		</nav>
		<span class="minifyme" data-action="minifyMenu">
			<i class="fa fa-arrow-circle-left hit"></i>
		</span>
	</aside>
	<!-- END ASIDE -->
	<!-- MAIN PANEL -->
	<div id="main" role="main">
		<!-- RIBBON -->
		<div id="ribbon">
			<span class="ribbon-button-alignment">
				<span class="ribbon-button-alignment btn btn-ribbon" data-html="true" data-placement="bottom" data-title="refresh" id="refresh">
					<i class="fa fa-refresh"></i>
				</span>
			</span>			
			<ol class="breadcrumb"></ol>			
		</div>
		<div id="content"></div>
		<div class="layoutp demo">
			<span id="layoutp-setting">
				<i class="fa fa-cog txt-color-blueDark"></i>
			</span> 
			<form>
				<legend class="no-padding margin-bottom-10">布局设置</legend>
				<section>
					<label>
						<input name="subscription" id="smart-fixed-nav" type="checkbox" class="checkbox style-0"/>
						<span>固定头部</span>
					</label>
					<label>
						<input type="checkbox" name="terms" id="smart-fixed-ribbon" class="checkbox style-0">
						<span>固定导航条</span>
					</label>
					<label>
						<input type="checkbox" name="terms" id="smart-fixed-navigation" class="checkbox style-0">
						<span>固定导航菜单</span>
					</label>
					<label><input type="checkbox" class="checkbox style-0" id="smart-topmenu"><span>菜单<b>置顶</b></span></label>
				</section>										
				<h6 class="margin-top-10 semi-bold margin-bottom-5">皮肤</h6>
				<section id="smart-styles">
					<a href="javascript:void(0);" id="smart-style-0" 
						data-skinlogo="<?php echo safe_url(ASSETS_URL.'img/logo.png',true);?>
" class="btn btn-block btn-xs txt-color-white margin-right-5" style="background-color:#4E463F;">
						<i class="fa fa-check fa-fw" id="skin-checked"></i>默认</a>
					<a href="javascript:void(0);" id="smart-style-1" 
						data-skinlogo="<?php echo safe_url(ASSETS_URL.'img/logo-white.png',true);?>
" class="btn btn-block btn-xs txt-color-white" 
						style="background:#3A4558;">Dark Elegance</a>
					<a href="javascript:void(0);" id="smart-style-2" 
						data-skinlogo="<?php echo safe_url(ASSETS_URL.'img/logo-blue.png',true);?>
" class="btn btn-xs btn-block txt-color-darken margin-top-5" style="background:#fff;">Ultra Light</a>
					<a href="javascript:void(0);" id="smart-style-3" 
						data-skinlogo="<?php echo safe_url(ASSETS_URL.'img/logo-pale.png',true);?>
" class="btn btn-xs btn-block txt-color-white margin-top-5" style="background:#f78c40">Google Skin</a>
					<a href="javascript:void(0);" id="smart-style-4" 
					data-skinlogo="<?php echo safe_url(ASSETS_URL.'img/logo-pale.png',true);?>
" class="btn btn-xs btn-block txt-color-white margin-top-5" style="background:#bbc0cf">PixelSmash</a>
					<a href="javascript:void(0);" id="smart-style-5" 
						data-skinlogo="<?php echo safe_url(ASSETS_URL.'img/logo-pale.png',true);?>
" class="btn btn-xs btn-block txt-color-white margin-top-5" style="background:rgb(153,179,204,0.2);border:1px solid rgb(121,161,221,0.8);color:#172730 !important">Glass</a>
				</section>
				<br/>
				<section class="margin-top-10">						
					<span id="reset-smart-widget-style" 
						class="btn btn-xs btn-block btn-primary"
						data-reset-msg="你确定要重置组件样式吗?">
						<i class="fa fa-refresh"></i> 重置小部件
					</span>
				</section>
			</form>
		</div>
	</div>
	<div class="page-footer">
		<div class="row">
			<div class="col-xs-12 col-sm-6"><span class="txt-color-white">KissCms <?php echo $_smarty_tpl->tpl_vars['KISS_VERSION']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['KISS_RELEASE_VER']->value;?>
 <span class="hidden-xs"> - Powered by <a href="#">KissGO!</a> </span> &copy; 2014 - <?php echo date('Y');?>
</span></div>
		</div>
	</div>
	<!-- END MAIN PANEL -->	
	<?php $_smarty_tpl->_capture_stack[0][] = array("js"); ob_start(); ?>	
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/jquery-2.1.1.min.js',true);?>
"><?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/jquery-ui-1.10.4.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'quicktags.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/jquery-touch/jquery.ui.touch-punch.min.js',true);?>
"><?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'bootstrap/bootstrap.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'bootstrap/SmartNotification.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'bootstrap/jarvis.widget.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/easy-pie-chart/jquery.easy-pie-chart.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/sparkline/jquery.sparkline.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/jquery-validate/jquery.validate.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/jquery-validate/validate_method.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js',true);?>
"><?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/select2/select2.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/jquery-nestable/jquery.nestable.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/bootstrap-slider/bootstrap-slider.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/x-editable/x-editable.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/msie-fix/jquery.mb.browser.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/fastclick/fastclick.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/jquery-superbox/jquery.superbox-min.js',true);?>
"><?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/flot/jquery.flot.cust.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/flot/jquery.flot.resize.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/flot/jquery.flot.tooltip.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'kindeditor/kindeditor-all.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/plupload.full.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/ztree/jquery.ztree.core.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/plugins/ztree/jquery.ztree.excheck.min.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'nui/nUI.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'nui/widgets/dialog.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'nui/widgets/ajax.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'nui/widgets/table.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'nui/widgets/grid.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'nui/widgets/pager.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'nui/widgets/combox.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'nui/widgets/searchform.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'nui/widgets/validate.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'nui/widgets/ajaxupload.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'nui/widgets/kindeditor.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'nui/widgets/tagwrapper.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'nui/widgets/treeview.js',true);?>
"><?php echo '</script'; ?>
>
	<?php echo apply_filter('on_load_dashboard_js_file','','','');?>

	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url ('modules/dashboard/views/'.'assets/cp.js',true);?>
"><?php echo '</script'; ?>
>
	<?php list($_capture_buffer) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
echo(combinate_resources(ob_get_clean(),$_capture_buffer));
}?>
	<?php echo apply_filter('on_load_dashboard_js','','','');?>

	<?php echo '<script'; ?>
 type="text/javascript">	
		window.KissCms = { 'AppURL':'<?php echo $_smarty_tpl->tpl_vars['AppURL']->value;?>
','SiteURL':'<?php echo $_smarty_tpl->tpl_vars['SiteURL']->value;?>
' };
	    $.sound_path = "<?php echo safe_url(ASSETS_URL.'sound',true);?>
/";
	    window.KissCms.assetsURL = "<?php echo safe_url(ASSETS_URL.'',true);?>
";
	    $.siteName = '<?php echo $_smarty_tpl->tpl_vars['SiteName']->value;?>
 - Powered by KissCMS!(<?php echo $_smarty_tpl->tpl_vars['KISS_VERSION']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['KISS_RELEASE_VER']->value;?>
)';
	    $(function(){
	    	KindEditor.options.basePath = "<?php echo safe_url(ASSETS_URL.'kindeditor',true);?>
/";
	    	nUI.init({ debug:false });
		    if ($('nav').length) {		    	
			    checkURL();
		    }
		    $('#<?php echo $_smarty_tpl->tpl_vars['cp_theme']->value;?>
').click();
		    <?php echo apply_filter('on_dashboard_window_ready_scripts','','','');?>

	    });
	    function doQuickSearch(){
	    	$('#search-form-submitter').click();
			return false;
		}
	<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>