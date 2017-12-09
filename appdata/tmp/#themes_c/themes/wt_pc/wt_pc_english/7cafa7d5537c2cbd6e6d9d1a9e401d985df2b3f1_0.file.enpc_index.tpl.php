<?php /* Smarty version 3.1.27, created on 2017-10-27 14:12:12
         compiled from "C:\phpStudy\PHPTutorial\WWW\wentong\themes\wt_pc\wt_pc_english\enpc_index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:399859f2ce3c9c9ad4_71904882%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cafa7d5537c2cbd6e6d9d1a9e401d985df2b3f1' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\wentong\\themes\\wt_pc\\wt_pc_english\\enpc_index.tpl',
      1 => 1508306999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '399859f2ce3c9c9ad4_71904882',
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f2ce3cac6af5_25287184',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f2ce3cac6af5_25287184')) {
function content_59f2ce3cac6af5_25287184 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '399859f2ce3c9c9ad4_71904882';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<link href="/style_pc/css/index.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/style_pc/css/jquery.fullPage.css" type="text/css">
<link rel="stylesheet"  href="/style_pc/css/style.css" type="text/css">
<?php echo '<script'; ?>
 src="/style_pc/js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/style_pc/js/jquery-ui-1.10.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/style_pc/js/jquery.fullPage.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/style_pc/js/jquery.mobile.touchsupport.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="/style_pc/js/jquery.phoenix.js"><?php echo '</script'; ?>
> 

<?php echo '<script'; ?>
>
$(document).ready(function() {
	$.fn.fullpage({
		slidesColor: ['#fff', '#fff', '#fff', ],
		anchors: ['page1', 'page2', 'page3'],
		navigation: true
	});
});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){
	$(document).ready(function(){
		$('.phoenix-slider').phoenix({
			fullscreen: true,
			height: '85%'
		});
	});	
});
<?php echo '</script'; ?>
>

</head>

<body>
<!--导航-->
    <div class="nav_top">
        <div class="nav_top_a p20">
         <a href="/">Chinese</a>
         <a href="#">English</a>
        </div>
      </div>
   <div class="nav">
      <div class="nav_list">
	  <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('block', array('refid'=>'com_logo','sortby'=>'sort','order'=>'d','limit'=>1,'nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
         <div class="logo"><img src="<?php echo the_media_src($_smarty_tpl->tpl_vars['name']->value['image']);?>
" /></div><?php } ?>
         <div class="nav_l">
            <ul>
               <li><a href="/" class="on">Home</a></li>
               <li><a href="/about.html">About</a></li>
               <li><a href="/gaoguanxiangmu">Executive Project</a></li>
               <li><a href="/qingnianxiangmu">Youth Project</a></li>
               <li><a href="/chenggonganli">Successful Case</a></li>
            </ul>
         </div>
      </div>
   </div>
<!--内容-->
   <!--第一屏-->
        <div class="section">
           <div class="phoenix-slider">
		   		<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('block', array('refid'=>'index_carousel','sortby'=>'sort','order'=>'d','nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
              <div class="phoenix-feather"> 
                 <img src="<?php echo the_media_src($_smarty_tpl->tpl_vars['name']->value['image']);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
" /> 
                 <div class="banner_bg">
					<!--<div class="banner_wz">
                      <img src="/style_pc/images/banner_wz.png">
                    </div>--><a href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
"></a>
                 </div>
              </div><?php } ?>
          </div>
          
        </div>
   <!--第二屏-->
        <div class="section">
	       <div class="choice">
              <div class="jieshao">
                 <div class="tit w1000">
                    <p class="orange">为什么首选文通</p>
                 </div>
                 <div class="liyou">
                    <div class="ly_01 top">
                       <span>诚信</span>
                       <p>言必行，行必果</p>
                    </div>
                    <div class="ly_01 right">
                       <span> 团队合作</span>
                       <p>协作 实现共同目标</p>
                    </div>
                    <div class="ly_01 bottom ">
                       <span> 效率</span>
                       <p>用最少的资源，追求最大化的投资回报率</p>
                    </div>
                    <div class="ly_01 left">
                       <span> 多样性  </span>
                       <p>多样性- 融合中西 文化，打造多样性 文化的工作环境和 员工群体</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
   <!--第三屏-->
        <div class="section">
           <div class="pro_foot">
             <div class="footer_bg">
                <div class="footer white w1000">
                   <div class="foot_logo text_center w1000"><img src="/style_pc/images/logo_02.png"></div>
                   <p class="font1 text_center w1000">美国国际文通创新合作中心</p>
                   <p class="font2 text_center w1000">UNITED  CULTURES  INNOVATION  CENTER<br> FOR  INTERNATIONAL  COOPER</p>
                   <p class="font3 text_center w1000 orange">沟通中美交流的平台</p>
                   <p class="font3 text_center w1000 orange">Platform  for  U.S.-China  Communications</p>
                   <?php echo $_smarty_tpl->getSubTemplate ('./enpc_address.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

				  <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('block', array('refid'=>'site_Copyright','sortby'=>'sort','order'=>'d','limit'=>1,'nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
                  <p class="w1000 text_center white font4"><?php echo $_smarty_tpl->tpl_vars['name']->value['com_txt'];?>
</p><?php } ?>
                </div>
               
             </div>              
           </div>
        </div>
<!--侧栏-->  
<?php echo $_smarty_tpl->getSubTemplate ('./enpc_left_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html><?php }
}
?>