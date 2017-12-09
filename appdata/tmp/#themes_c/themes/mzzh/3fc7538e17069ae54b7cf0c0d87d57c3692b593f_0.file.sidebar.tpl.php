<?php /* Smarty version 3.1.27, created on 2016-08-30 16:27:18
         compiled from "/data/wwwroot/www.minzhuzhihun.com/themes/mzzh/sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:143057864057c5436698c8e3_59136187%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fc7538e17069ae54b7cf0c0d87d57c3692b593f' => 
    array (
      0 => '/data/wwwroot/www.minzhuzhihun.com/themes/mzzh/sidebar.tpl',
      1 => 1471412166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143057864057c5436698c8e3_59136187',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57c543669e7067_40282025',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57c543669e7067_40282025')) {
function content_57c543669e7067_40282025 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/data/wwwroot/www.minzhuzhihun.com/includes/vendors/smarty/plugins/modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '143057864057c5436698c8e3_59136187';
?>
<!-- 公告 -->	
<div class="feed-mail">
<div class="gg">
<p>------======<strong> 本站公告 </strong>======------<br/>
欢迎来到民族之魂钱币收藏网，本站提供人民币收藏钱币收藏等最新资讯与钱币收藏价格表，古玩钱币市场交易信息与新闻资讯，所有内容均来自网络，并非为本站观点，如有侵权请联系客服修改。
关注：www.minzuzhihun.com</p>
			<div class="clear"></div>
</div></div><div class="clear"></div>

<div class="huanden4"> <!--广告-->				         
		
<?php echo '<script'; ?>
>QIHOO_UNION_SLOT={w:250, h:250, ls:"s3c9fc2e88e"};<?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="http://s.lianmeng.360.cn/so/inlay.js" charset="utf-8"><?php echo '</script'; ?>
>
<!-- 广告2 -->

</div><div class="clear"></div>
	<div class="con_box htabs_art clearfix"> 
		<ul class="cooltab_nav sj_nav clearfix">	
		    <li><a href="#" class="active" title="new_art">热评信息</a></li>			
			<li><a href="#" title="hot_art">最新信息</a></li>
					
		</ul>   
		<div id="new_art" class="com_cont">   
			<ul>
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('pages', array('model'=>'news','sortby'=>'id','order'=>'d','limit'=>'0,8','pp'=>'off','nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
			    <li>
				<a target="_blank" href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
" class="title" title="<?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['name']->value['title'],18);?>
</a>
				</li><?php } ?>
			</ul>                    
		</div>
        <div id="hot_art" class="com_cont">  
            <ul>
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('pages', array('model'=>'news','sortby'=>'id','order'=>'d','limit'=>'9,8','pp'=>'off','nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
			    <li>
				<a target="_blank" href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
" class="title" title="<?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['name']->value['title'],18);?>
</a>
				</li><?php } ?>
			</ul>      
		</div>		
	</div>
	<!-- 侧边栏(上)广告开始-->  
		
				<div class="con_box hot_box" >
	
		<div class="ads">
		<?php echo '<script'; ?>
 type="text/javascript">
/*民族之魂左侧*/
var cpro_id = "u1585608";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"><?php echo '</script'; ?>
>		</div>
</div>		<div class="clear"></div>
		
		
	

<div class="twitbar-2"><!-- 图片缩略图-->

</div>	
	
	<div class="con_box hot_box"> 				
			<h3>随机推荐</h3>		
		<div id="rand_art" >  
			<ul>
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('pages', array('model'=>'news','flags'=>'j','random'=>'on','sortby'=>'id','order'=>'d','limit'=>'0,8','pp'=>'off','nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
				<li>
				<a target="_blank" href="<?php echo safe_url($_smarty_tpl->tpl_vars['name']->value,false);?>
" class="title" title="<?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['name']->value['title'],18);?>
</a>
				</li>
				<?php } ?>
			</ul>
		</div>   
	</div>
	
	<!-- 侧边栏(下)广告开始-->
<div class="clear"></div>
	

<!-- 小工具 你可以根据自己的需要把它移动到其它地方 -->	
  		
<!-- 小工具 -->	

	
	
	<div id="rollstart"></div>
	<?php }
}
?>