<?php /* Smarty version 3.1.27, created on 2017-10-19 14:19:29
         compiled from "C:\phpStudy\PHPTutorial\WWW\wentong\themes\default\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3099759e843f17668b9_74201918%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbafb3795b312cf3bbfe45e57aa20e5122d2d9b4' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\wentong\\themes\\default\\index.tpl',
      1 => 1508306999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3099759e843f17668b9_74201918',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59e843f19a3f84_36550701',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59e843f19a3f84_36550701')) {
function content_59e843f19a3f84_36550701 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3099759e843f17668b9_74201918';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Coming soon ...</title>
<?php $_smarty_tpl->_capture_stack[0][] = array("css"); ob_start(); ?>
<link href="<?php echo safe_url(ASSETS_URL.'bootstrap/css/bootstrap.min.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo safe_url(ASSETS_URL.'bootstrap/css/font-awesome.min.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo safe_url(ASSETS_URL.'bootstrap/css/smartadmin-production.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo safe_url(ASSETS_URL.'bootstrap/css/smartadmin-skins.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>
<link href="<?php echo safe_url(ASSETS_URL.'kindeditor/themes/default/default.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>	
<link href="<?php echo safe_url(ASSETS_URL.'nui/nUI.css',true);?>
" rel="stylesheet"/>
<link href="<?php echo safe_url(ASSETS_URL.'google/fonts.css',true);?>
" rel="stylesheet"/>
<?php list($_capture_buffer) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
echo(combinate_resources(ob_get_clean(),$_capture_buffer));
}?>
</head>
<body>
<h1>Coming soon ...</h1>
</body>
</html><?php }
}
?>