<?php /* Smarty version 3.1.27, created on 2017-01-22 11:21:06
         compiled from "F:\wamp\www\6\themes\wt_pc_chinese\list_success.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3167658842522cbd3f0_49292569%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7538e003fd22f244609b80e9837e54cf9144a5a3' => 
    array (
      0 => 'F:\\wamp\\www\\6\\themes\\wt_pc_chinese\\list_success.tpl',
      1 => 1485055010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3167658842522cbd3f0_49292569',
  'variables' => 
  array (
    'title' => 0,
    'keywords' => 0,
    'description' => 0,
    'name' => 0,
    'channel' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58842522cfa2f8_53930643',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58842522cfa2f8_53930643')) {
function content_58842522cfa2f8_53930643 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3167658842522cbd3f0_49292569';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
<link rel="stylesheet"  href="/style_pc/css/style.css" type="text/css">
<link rel="stylesheet"  href="/style_pc/css/example.css" type="text/css">
</head>
<body>
<!--导航-->
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
               <li><a href="/gaoguanxiangmu">高管项目</a></li>
               <li><a href="/qingnianxiangmu">青年项目</a></li>
               <li><a href="/chenggonganli" class="on">成功案例</a></li>
            </ul>
         </div>
      </div>
   </div>
<!--内容-->
   <div class="example">
      <div class="exm_list">
        <ul>		
		<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('pages', array('model'=>'news','channel'=>$_smarty_tpl->tpl_vars['channel']->value,'sortby'=>'publish_time','order'=>'d','limit'=>8,'pp'=>'on','nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
		  <li>
              <div class="exm_img"><a href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
"><img src="<?php echo the_media_src($_smarty_tpl->tpl_vars['name']->value['image']);?>
" /></a></div>
              <div class="exm_det">
                 <a href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
</a>
                 <p><?php echo mb_substr($_smarty_tpl->tpl_vars['name']->value['description'],0,170);?>
</p>
             </div>
           </li>
          <?php } ?>
         </ul>
      </div> 
<!--页码-->
    <div class="page">
       <ul>    
	   <?php
 $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable();
$_from = $_name_data->getRenderData('default', array('var'=>'p','limit'=>'8','pp'=>'5','nocache'=>false));
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
          <li><a href="<?php echo safe_url($_smarty_tpl->tpl_vars['p']->value,false);?>
">下一页</a></li>
		  <?php }?>
		  <?php }} ?>
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