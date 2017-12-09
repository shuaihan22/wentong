<?php /* Smarty version 3.1.27, created on 2017-01-22 08:59:38
         compiled from "F:\wamp\www\6\themes\wt_pc_chinese\article.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15652588403fa6a2d11_59819653%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c943b9ded8f8f5a381b9af8abb62b71347414e70' => 
    array (
      0 => 'F:\\wamp\\www\\6\\themes\\wt_pc_chinese\\article.tpl',
      1 => 1484980845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15652588403fa6a2d11_59819653',
  'variables' => 
  array (
    'title' => 0,
    'description' => 0,
    'keywords' => 0,
    'crumbs' => 0,
    'cb' => 0,
    'author' => 0,
    'view_count' => 0,
    'content' => 0,
    'p' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_588403fa759a18_07544729',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_588403fa759a18_07544729')) {
function content_588403fa759a18_07544729 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15652588403fa6a2d11_59819653';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
<link rel="stylesheet"  href="/style_pc/css/style.css" type="text/css">
<link rel="stylesheet"  href="/style_pc/css/example.css" type="text/css">
</head>

<body>
<!--导航-->
   <div class="nav">
      <div class="nav_list">
         <div class="logo"><img src="/style_pc/images/logo.png" /></div>
         <div class="nav_l">
            <ul>
                <li><a href="/" class="on">首页</a></li>
               <li><a href="/about.html">关于文通</a></li>
               <li><a href="/gaoguanxiangmu">高管项目</a></li>
               <li><a href="/qingnianxiangmu">青年项目</a></li>
               <li><a href="/chenggonganli">成功案例</a></li>
            </ul>
         </div>
      </div>
   </div>
<!--内容-->
  <div class="article">
  <!--正文-->
    <div class="hot">
       <div class="hot_img"><img src="/style_pc/images/hot.png" /></div>
       <div class="hot_list">
          <ul>
             <li><a href="#">第八届中美国际青少年艺术节即将开幕</a></li>
             <li><a href="#">第八届中美国际青少年艺术节</a></li>
             <li><a href="#">第八届中美国际青少年艺术节即将开幕</a></li>
             <li><a href="#">第八届中美国际青少年艺术节</a></li>
          </ul>
       </div>
    </div>
  <!--位置-->
    <div class="pos">
       <p>
          您的当前位置：
          <a href="/">首页</a>&nbsp;<span>—</span>
		  <?php
$_from = $_smarty_tpl->tpl_vars['crumbs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cb'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cb']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cb']->value) {
$_smarty_tpl->tpl_vars['cb']->_loop = true;
$foreach_cb_Sav = $_smarty_tpl->tpl_vars['cb'];
?>
          <a href="<?php echo safe_url($_smarty_tpl->tpl_vars['cb']->value,false);?>
"><?php echo $_smarty_tpl->tpl_vars['cb']->value['name'];?>
</a>&nbsp;<span>—</span>
		  <?php
$_smarty_tpl->tpl_vars['cb'] = $foreach_cb_Sav;
}
?>
          <a href="#" style="color:#fc8404;">正文</a>&nbsp;
       </p>
    </div>
  <!--正文-->
    <div class="neirong">
       <div class="wz">
           <div class="wz_tit"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
           <div class="wz_author">
              <ul>
                 <li>2017-1-12</li>
                 <li>责任编辑：<?php echo (($tmp = @$_smarty_tpl->tpl_vars['author']->value)===null||$tmp==='' ? 'admin' : $tmp);?>
</li>
                 <li>点击数：<?php echo number_format($_smarty_tpl->tpl_vars['view_count']->value);?>
</li>
              </ul>
           </div>
           <div class="zw"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
            <!--页码-->
          <div class="page">
            <ul>
			<?php
 $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_from = $_smarty_tpl->tpl_vars['__this_data']->value->getRenderData('default', array('var'=>'p','limit'=>1,'pp'=>'5','nocache'=>false));
if (is_string($_from)){ echo $_from; } else {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){?>

			<?php if ($_smarty_tpl->tpl_vars['p']->key == 'prev') {?>
              <li><a href="<?php echo safe_url($_smarty_tpl->tpl_vars['p']->value,false);?>
">上一页</a></li><?php }?>
              <?php if (is_numeric($_smarty_tpl->tpl_vars['p']->key)) {?>
			  <li><a href="<?php echo safe_url($_smarty_tpl->tpl_vars['p']->value,false);?>
"><?php echo $_smarty_tpl->tpl_vars['p']->key;?>
</a></li><?php }?>
			  <?php if ($_smarty_tpl->tpl_vars['p']->key == 'next') {?>
              <li><a href="#">下一页</a></li><?php }?>
			  <?php }} ?>
           </ul>
          </div>
       </div>
  <!--右边-->
      <div class="tj_right">
       <div class="rebo">
				<p>相关推荐</p>
				<ul>
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('pages', array('model'=>'news','sortby'=>'publish_time','order'=>'d','limit'=>10,'pp'=>'off','nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
					<li><span>•</span><a href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
</a></li>
					<?php } ?>
				</ul>
		</div>
        <div class="retu">
				<p>其他人还看</p>
				<ul>
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('pages', array('model'=>'news','sortby'=>'view_count','order'=>'d','limit'=>5,'pp'=>'off','nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
					<li>
					<a href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
"><img src="<?php echo the_media_src($_smarty_tpl->tpl_vars['name']->value['image']);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"></a>
					<p><a href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
" ><?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
</a></p>
					</li>
					<?php } ?>
				</ul>			
	   </div>
        
      </div>
    
    </div>   
  </div>
<!--copyright-->
    <div class="copy">
	<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('block', array('refid'=>'site_Copyright','sortby'=>'sort','order'=>'d','limit'=>1,'nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
       <p><?php echo $_smarty_tpl->tpl_vars['name']->value['com_txt'];?>
</p><?php } ?>
    </div>
<!--侧栏-->  
<?php echo $_smarty_tpl->getSubTemplate ('./left_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="/style_pc/js/top.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>