<?php /* Smarty version 3.1.27, created on 2017-01-18 11:20:06
         compiled from "F:\wamp\www\6\modules\dashboard\views\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6705587edee60ed7c0_36077882%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a12e9302cfc084cc3bbef56e177f89d3cead685c' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\dashboard\\views\\login.tpl',
      1 => 1472547348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6705587edee60ed7c0_36077882',
  'variables' => 
  array (
    'KISS_VERSION' => 0,
    'KISS_RELEASE_VER' => 0,
    'HomeURL' => 0,
    'errorMsg' => 0,
    'username' => 0,
    'captcha' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587edee61cc283_82848907',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587edee61cc283_82848907')) {
function content_587edee61cc283_82848907 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6705587edee60ed7c0_36077882';
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>  
  <meta charset="utf-8"> 
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
  <title>登录 - <?php echo cfg('site_name', '');?>
 - Powered by KissCMS! - <?php echo $_smarty_tpl->tpl_vars['KISS_VERSION']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['KISS_RELEASE_VER']->value;?>
</title>
  <link href="<?php echo safe_url(ASSETS_URL.'bootstrap/css/bootstrap.min.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>
  <link href="<?php echo safe_url(ASSETS_URL.'bootstrap/css/font-awesome.min.css',true);?>
" media="screen" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="<?php echo safe_url ('modules/dashboard/views/'.'assets/login.css',true);?>
">
  <link href="<?php echo safe_url('favicon.ico',true);?>
" rel="shortcut icon" type="image/x-icon"/>
  <link href="<?php echo safe_url('favicon.ico',true);?>
" rel="icon" type="image/x-icon"/>
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="<?php echo safe_url(ASSETS_URL.'html5shiv.js',true);?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo safe_url(ASSETS_URL.'respond.min.js',true);?>
"><?php echo '</script'; ?>
>
  <![endif]-->
</head>

<body class="account-bg">
<hr class="account-header-divider">
<div class="account-wrapper">
  <div class="account-logo">
    <a href="<?php echo $_smarty_tpl->tpl_vars['HomeURL']->value;?>
"><img src="<?php echo safe_url ('modules/dashboard/views/'.'assets/logo.png',true);?>
" alt="KissCMS!"/></a>
  </div>
    <div class="account-body">
      <h3 class="account-body-title">欢迎使用KissCMS!建站.</h3>
	  <?php if ($_smarty_tpl->tpl_vars['errorMsg']->value) {?>
		<div class="alert alert-danger" style="margin:0 25px;">
			<button data-dismiss="alert" class="close">×</button>			
			<?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>

		</div>
		<?php } else { ?>
      <h5 class="account-body-subtitle">请使用您的账户登录</h5>
		<?php }?>
      <form class="form account-form" method="POST" action="<?php echo Router::url(array('0'=>'dashboard'));?>
">
        <div class="form-group">
          <label for="username" class="placeholder-hidden">用户名</label>
          <input class="form-control" tabindex="1" placeholder="用户名(或邮箱)" type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
">
		</div>

        <div class="form-group">
          <label for="login-password" class="placeholder-hidden">密码</label>
          <input type="password" class="form-control" placeholder="密码" name="passwd" id="passwd" tabindex="2">
        </div>
		<?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?>
        <div class="form-group clearfix">
          <div class="pull-left">         
            <label for="captcha" class="placeholder-hidden">验证码</label>
            <input class="form-control" tabindex="3" placeholder="验证码" type="text" name="captcha" id="captcha">
          </div>
          <div class="pull-right">
            <img id="captcha-img" src="<?php echo Router::url(array('0'=>'system/captcha/png/95x30/14'));?>
"/>
          </div>
        </div> 
		<?php }?>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4">
          	 登录 &nbsp; <i class="fa fa-play-circle"></i>
          </button>
        </div>
      </form>

    </div>
    <div class="account-footer">
      <p>
     	 本站点由 <a href="http://www.crudq.com/" target="_blank">KissCMS!</a> - <?php echo $_smarty_tpl->tpl_vars['KISS_VERSION']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['KISS_RELEASE_VER']->value;?>
 驱动.
      </p>
    </div> 
  </div>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'jquery/jquery-2.1.1.min.js',true);?>
"><?php echo '</script'; ?>
>	
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo safe_url(ASSETS_URL.'bootstrap/bootstrap.min.js',true);?>
"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
	    $(function(){	    	
		    if($('#captcha-img').length>0){		    	
			    var imgSrc = $('#captcha-img').attr('src');
				$('#captcha-img').click(function(){ 
					$(this).attr('src',imgSrc+'&_t='+(new Date().getTime()));
				});
			}			
	    });
	<?php echo '</script'; ?>
>  
</body>
</html>
<?php }
}
?>