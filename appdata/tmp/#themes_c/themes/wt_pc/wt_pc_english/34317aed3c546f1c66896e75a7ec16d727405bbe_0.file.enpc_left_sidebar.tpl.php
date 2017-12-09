<?php /* Smarty version 3.1.27, created on 2017-10-27 14:12:12
         compiled from "C:\phpStudy\PHPTutorial\WWW\wentong\themes\wt_pc\wt_pc_english\enpc_left_sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:263659f2ce3cdf7a68_31040033%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34317aed3c546f1c66896e75a7ec16d727405bbe' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\wentong\\themes\\wt_pc\\wt_pc_english\\enpc_left_sidebar.tpl',
      1 => 1508306999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263659f2ce3cdf7a68_31040033',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59f2ce3ce697d1_14416810',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59f2ce3ce697d1_14416810')) {
function content_59f2ce3ce697d1_14416810 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '263659f2ce3cdf7a68_31040033';
?>
<!--侧栏-->  
   <div class="floating_ck">
	<dl>
    	<dt></dt>
        <dd class="consult">
        	<span>在线咨询</span>
        	<div class="floating_left"><a href="#">文通在线咨询</a></div>
        </dd>
        <dd class="words">
        	<span>QQ</span>
            <div class="floating_left"><a href="#">QQ：1234567890</a></div>
        </dd>
        <dd class="quote">
        	<span>微信</span>
            <div class="floating_left floating_ewm">
                <i><img src="/style_pc/images/erweima.png" /></i>
                <p class="qrcord_p01">扫一扫</p>
            </div>
        </dd>
        <dd class="qrcord" style="border-bottom:0px;">
        	<span>电话</span>
            <div class="floating_left">
            	<a href="#" style="line-height:40px;">美国：1857-334-0594</a>
                <a href="#" style="line-height:40px;">中国：8610-88481223</a>
            </div>
        </dd>
    </dl>
</div><?php }
}
?>