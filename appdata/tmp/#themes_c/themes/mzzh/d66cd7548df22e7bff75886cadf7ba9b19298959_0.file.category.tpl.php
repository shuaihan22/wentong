<?php /* Smarty version 3.1.27, created on 2016-08-30 16:27:18
         compiled from "/data/wwwroot/www.minzhuzhihun.com/themes/mzzh/category.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:45603382357c5436685a2d7_52414607%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd66cd7548df22e7bff75886cadf7ba9b19298959' => 
    array (
      0 => '/data/wwwroot/www.minzhuzhihun.com/themes/mzzh/category.tpl',
      1 => 1471412168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45603382357c5436685a2d7_52414607',
  'variables' => 
  array (
    'title' => 0,
    'channel_name' => 0,
    'channel' => 0,
    'name' => 0,
    'p' => 0,
    '_cpn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57c5436691abd4_62681239',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57c5436691abd4_62681239')) {
function content_57c5436691abd4_62681239 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '45603382357c5436685a2d7_52414607';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<link href="/ssmay/style.css" rel="stylesheet" type="text/css" />
	<!--[if IE 6]>
	<link href="/ssmay/ie6.css" rel="stylesheet" type="text/css" />
	<?php echo '<script'; ?>
 src="http://letskillie6.googlecode.com/svn/trunk/letskillie6.zh_CN.pack.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/ssmay/js/PNG.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>DD_belatedPNG.fix('.png_bg');<?php echo '</script'; ?>
>
	<![endif]-->
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 &laquo;  民族之魂钱币收藏网 </title>
		<meta name="keywords" content="第三套人民币" />
	<meta name="description" content="" />
	<meta name="author" content="钱币收藏"/>

<!-- START of style generated by wp-thumbnails 3.2.1 ，powered by niaolei.org.cn -->
<link rel="stylesheet" href="/ssmay/plugins/wp-thumbnails/style.css" type="text/css" media="screen" />
<!-- END of style generated by wp-thumbnails 3.2.1 ，powered by niaolei.org.cn -->
	<meta name="google-site-verification" content="Y6bxDsaSqdHB9bJ0SBL_m5QULJPrwtR77cdY9TJ2X-E" />
</head>
<body class="archive category">
<div id="zhu_beijin">
<?php echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div id="wrapper" class="clearfix">
		<div id="breadcrumbs" class="con_box clearfix">
		<div class="bcrumbs"><strong><a href="http://www.minzuzhihun.com" title="返回首页">home</a></strong>
									<a><?php echo $_smarty_tpl->tpl_vars['channel_name']->value;?>
</a>
								</div>
	</div>
		
	
 		<div id="art_container clearfix">
 			<div id="art_main" class="fl"> 
			<!--分类页图片广告-->
			<p align="center"><?php echo '<script'; ?>
 type="text/javascript">
/*710*100*/
var cpro_id = "u1051173";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"><?php echo '</script'; ?>
></p>
			<div class="clear"></div>
			
			
				 <!--示-->
		     <!-- blog列表-->
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('pages', array('channel'=>$_smarty_tpl->tpl_vars['channel']->value,'sortby'=>'id','order'=>'d','limit'=>10,'pp'=>'on','nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
			  <div class="art_img_box clearfix">
				<div class="fl innerimg_box">
				  <a href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
" title="<?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
" target="_blank">
					<img src="<?php echo the_media_src($_smarty_tpl->tpl_vars['name']->value['image']);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
" width="200" height="154" />
				  </a>
				</div>
			    <div class="fr box_content">
					<h2><a href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
" title="<?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
</a></h2>        		
					   <div class="info">                    	                       
						<span>点击：<small> <?php echo number_format($_smarty_tpl->tpl_vars['name']->value['view_count']);?>
 次</small></span>
						</div>
                        <ul class="clearfix">
                  	 	<li>所属栏目：<a href="<?php echo channel_url($_smarty_tpl->tpl_vars['name']->value);?>
" rel="category tag"><?php echo $_smarty_tpl->tpl_vars['name']->value['channel_name'];?>
</a></li>
                  	 	<?php if ($_smarty_tpl->tpl_vars['name']->value['tag']) {?>
                   		<li class="art_tag"><a href="<?php echo tags_get_tag_url($_smarty_tpl->tpl_vars['name']->value['tag']);?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value['tag'];?>
</a></li>
                   		<?php }?>
                   </ul>  
					<p class="intro"><?php echo $_smarty_tpl->tpl_vars['name']->value['description'];?>
</p>
                </div>
             </div>
             <?php } ?>
             <div class="page_navi">
             	<?php
 $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_from = $_name_data->getRenderData('default', array('var'=>'p','limit'=>10,'nocache'=>false));
if (is_string($_from)){ echo $_from; } else {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){?>

             	<?php if ($_smarty_tpl->tpl_vars['p']->key == 'first') {?>
             	<a title="跳转到首页" class="extend" href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"> 返回首页 </a>
             	<?php } elseif ($_smarty_tpl->tpl_vars['p']->key == 'prev') {?>
             	<a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"> 上一页 </a>
             	<?php } elseif ($_smarty_tpl->tpl_vars['p']->key == 'last') {?>
             	<a href='<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
' class='extend' title='跳转到最后一页'> 最后一页 </a>
             	<?php } elseif ($_smarty_tpl->tpl_vars['p']->key == 'next') {?>
             	<a href="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
" > 下一页 </a>
             	<?php } elseif (is_numeric($_smarty_tpl->tpl_vars['p']->key)) {?>
             	<a href='<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['p']->key == $_smarty_tpl->tpl_vars['_cpn']->value) {?>class='current'<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->key;?>
</a>
             	<?php }?>
             	<?php }} ?>
             </div>
<!--blog列表结束 -->			 		
		            </div><!--内容-->
         <!--侧边栏-->
<div id="sider" class="fr">
	<?php echo $_smarty_tpl->getSubTemplate ('./sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</div>
</div> 
</div><!-- //wrapper -->
<!-- //底部模板 -->
<?php echo $_smarty_tpl->getSubTemplate ('./foot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>
<!-- 头部JS -->
	<?php echo '<script'; ?>
 type="text/javascript" src="/ssmay/js/jquery.min.js"><?php echo '</script'; ?>
>	
		<?php echo '<script'; ?>
 type="text/javascript">HcmsLazyload("/ssmay/images/space.gif");<?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
 type="text/javascript">window.jQuery || document.write('<?php echo '<script'; ?>
 type="text/javascript" src="/ssmay/js/jquery.js">\x3C/script>')<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/ssmay/js/jquery_ssmay.js"><?php echo '</script'; ?>
>
<!-- 头部JS -->


<?php echo '<script'; ?>
>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"4","bdPos":"right","bdTop":"100"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    /*图加*/
var cpro_id = "u1688336";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://cpro.baidustatic.com/cpro/ui/i.js" type="text/javascript"><?php echo '</script'; ?>
>
</body>
</html>	<?php }
}
?>