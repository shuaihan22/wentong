<?php /* Smarty version 3.1.27, created on 2017-01-22 11:57:07
         compiled from "F:\wamp\www\6\themes\wt_pc\list_senior.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:71158842d9380e690_64428613%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6001ff2679785f10d5f63b89a865e800a091d7dc' => 
    array (
      0 => 'F:\\wamp\\www\\6\\themes\\wt_pc\\list_senior.tpl',
      1 => 1485055794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71158842d9380e690_64428613',
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'name' => 0,
    'channel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58842d93849014_29940896',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58842d93849014_29940896')) {
function content_58842d93849014_29940896 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '71158842d9380e690_64428613';
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
<link rel="stylesheet" href="/style_pc/css/project.css" type="text/css">
<link rel="stylesheet" href="/style_pc/css/jquery.fullPage.css">
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
 src="/style_pc/js/jq_scroll.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
        $("#scrollDiv").Scroll({line:1,speed:500,timer:3000,up:"but_up",down:"but_down"});
});
<?php echo '</script'; ?>
>

</head>

<body>
<!--导航-->
    <div class="nav_top">
        <div class="nav_top_a p20">
         <a href="/">中文版</a>
         <a href="/english_index.html">英文版</a>
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
               <li><a href="/">首页</a></li>
               <li><a href="/about.html">关于文通</a></li>
               <li><a href="/gaoguanxiangmu" class="on">高管项目</a></li>
               <li><a href="/qingnianxiangmu">青年项目</a></li>
               <li><a href="/chenggonganli">成功案例</a></li>
            </ul>
         </div>
      </div>
   </div>
<!--内容-->
   <!--第一屏-->
        <div class="section">
		<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('block', array('refid'=>'senior_pic','sortby'=>'sort','order'=>'d','limit'=>1,'nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
           <div class="project">
              <div class="pro_img"><img src="<?php echo the_media_src($_smarty_tpl->tpl_vars['name']->value['image']);?>
"></div>
              <div class="pro_one">
                 <div class="detail w1000">
                    <a href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
" class="orange"><div class="teen_tit w1000"><?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
</div>
                    <p class="w1000 text_center orange font5"><?php echo $_smarty_tpl->tpl_vars['name']->value['senior_abstract'];?>
</p>
                    <p class="w1000 text_center white font6"><?php echo $_smarty_tpl->tpl_vars['name']->value['senior_detail'];?>
</p></a>
                 </div>
              </div>
           </div>
		   <?php } ?>
        </div>
   <!--第二屏-->
        <div class="section">
           <div class="news">
            <div class="tit w1000">
               <p class="orange">高管项目/Projects</p>
            </div>
            <div class="scrollbox">
               <div id="scrollDiv">
                 <ul>
				  <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('pages', array('model'=>'news','channel'=>$_smarty_tpl->tpl_vars['channel']->value,'sortby'=>'publish_time','order'=>'d','pp'=>'off','nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
                   <li>
                      <div class="news_img"><a href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
"><img src="<?php echo the_media_src($_smarty_tpl->tpl_vars['name']->value['image']);?>
"></a></div>
                      <div class="news_xj">
                         <a href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
</a>
                         <p><span>招生对象：</span><?php echo $_smarty_tpl->tpl_vars['name']->value['object'];?>
</p>
                         <p><span>项目长度：</span><?php echo $_smarty_tpl->tpl_vars['name']->value['object_time'];?>
</p>
                         <p class="font5"><?php echo mb_substr($_smarty_tpl->tpl_vars['name']->value['description'],0,70);?>
</p>
                      </div>
                   </li>
				   <?php } ?>
                </ul>
               </div>
               <div class="scroltit"><div class="updown" id="but_down">向上</div><div class="updown" id="but_up">向下</div></div>
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
					<?php echo $_smarty_tpl->getSubTemplate ('./address.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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
<?php echo $_smarty_tpl->getSubTemplate ('./left_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
</html><?php }
}
?>