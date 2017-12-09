<?php /* Smarty version 3.1.27, created on 2017-01-18 11:03:11
         compiled from "F:\wamp\www\6\themes\default\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21228587edaefe10bf4_74741229%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd8a99a0768e620664b2e9760f73b4f1196ba745' => 
    array (
      0 => 'F:\\wamp\\www\\6\\themes\\default\\index.tpl',
      1 => 1472546046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21228587edaefe10bf4_74741229',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587edaefea5313_09802879',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587edaefea5313_09802879')) {
function content_587edaefea5313_09802879 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21228587edaefe10bf4_74741229';
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