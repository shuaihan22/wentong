<?php /* Smarty version 3.1.27, created on 2016-08-30 16:27:18
         compiled from "/data/wwwroot/www.minzhuzhihun.com/themes/mzzh/foot.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:52841910557c54366a1a4f8_44072812%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e23b1e9e288425f913c8256e81888b91385ed00' => 
    array (
      0 => '/data/wwwroot/www.minzhuzhihun.com/themes/mzzh/foot.tpl',
      1 => 1471412166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52841910557c54366a1a4f8_44072812',
  'variables' => 
  array (
    'tags' => 0,
    'tg' => 0,
    'tagstyles' => 0,
    'flink' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57c54366a57f57_01999866',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57c54366a57f57_01999866')) {
function content_57c54366a57f57_01999866 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '52841910557c54366a1a4f8_44072812';
?>
<div id="footer" class="clearfix">

     <div class="con_box ">
        <div class="flink">
		        <ul class="tagcloudy"> 		    
				<li><strong>热门标签:</strong>
				<?php
$_from = $_smarty_tpl->tpl_vars['tags']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tg'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tg']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tg']->value) {
$_smarty_tpl->tpl_vars['tg']->_loop = true;
$foreach_tg_Sav = $_smarty_tpl->tpl_vars['tg'];
?>
				<a href='<?php echo safe_url($_smarty_tpl->tpl_vars['tg']->value,false);?>
' style="<?php echo $_smarty_tpl->tpl_vars['tagstyles']->value[array_rand($_smarty_tpl->tpl_vars['tagstyles']->value)];?>
"><?php echo $_smarty_tpl->tpl_vars['tg']->value['tag'];?>
</a>
				<?php
$_smarty_tpl->tpl_vars['tg'] = $foreach_tg_Sav;
}
?>
				</li>
				</ul>
	    </div> 
	</div>

    <div class="con_box ">
    <?php if ($_smarty_tpl->tpl_vars['flink']->value) {?>
		<div class="flink">
			    <strong>友情链接:</strong>
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['name']->_loop = false;
 $_name_data = get_data_from_cts_provider('block', array('refid'=>'flinks','sortby'=>'sort','order'=>'a','limit'=>'0,200','nocache'=>false),$_smarty_tpl->tpl_vars);
 $_smarty_tpl->tpl_vars['name_total'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['name_total']->value = $_name_data['size'];
 $_from = $_name_data;
if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
        		<a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['name']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value['title'];?>
</a>
				<?php } ?>
		        <a target="_blank" rel="nofollow" href="http://wpa.qq.com/msgrd?v=3&uin=346149715&site=qq&menu=yes" class="curflink">申请链接</a>
          </div>
 	           <?php }?> 
          <div class="footer_bug">
			 <a target="_blank" href="http://www.minzuzhihun.com">网站首页</a> | <a href="http://www.minzuzhihun.com/renminbidaxi">人民币大系</a> | <a href="http://www.minzuzhihun.com/rmb3">第三套人民币</a> | <a href="http://www.minzuzhihun.com/6rmb">第六套人民币</a> | <a href="http://www.minzuzhihun.com/jinianchao">纪念钞</a> | <a href="http://www.minzuzhihun.com/jinianbi">纪念币</a> | <a target="_blank" href="/sitemap.html">网站地图</a>
          </div>
    </div>

    <div class="copyright">
	    <p>
		    版权所有: <a href="/" target="_parent">钱币收藏</a><?php echo '<script'; ?>
 src="http://s6.cnzz.com/stat.php?id=5516351&web_id=5516351" language="JavaScript"><?php echo '</script'; ?>
>
		</p>
		<p>广告联系QQ：346149715 广告服务 意见反馈 E-mail： 346149715@qq.com</p>
		<p>
		郑重声明：未经授权，禁止转载、摘编、复制或建立镜像，如有违反，追究法律责任
		</p>
        <p>
		    <!-- 百度统计 -->
            钱币收藏_民族之魂 
			<!-- 量子统计 -->    Copyright (c) 2012-<?php echo date('Y');?>
 www.minzuzhihun.com All rights reserved 
        </p>
<!-- /powered -->
   </div>
   <div class="footer_right">
    <a target="_blank" href="http://www.minzuzhihun.com/"><img alt="钱币收藏" src="/ssmay/images/logo.gif" width="150" height="60"></a>
	<p>Powered by <a rel="nofollow" href="http://www.minzuzhihun.com"  target="_blank">民族之魂</a>.</p>
	</div>
   		<div id="shangxia"><div id="shang" title="↑ 返回顶部"></div>
				<div id="xia" title="↓ 移至底部"></div>
		<div id="myrss" title="Hi! 我是民族之魂钱币收藏网，欢迎光临我的博客，赶快订阅一下吧O(∩_∩)O~" onClick="window.open('http://www.minzuzhihun.com/feed/','_blank');"></div>
		</div>

</div>

<?php }
}
?>