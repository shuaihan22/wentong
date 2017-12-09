<?php /* Smarty version 3.1.27, created on 2017-12-09 14:52:04
         compiled from "C:\phpStudy\PHPTutorial\WWW\wentong\themes\wt_pc\left_sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:83555a2b8814d15282_62610182%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc57667a60c447e3b79dd2acdd43ae3e19e5dcc2' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\WWW\\wentong\\themes\\wt_pc\\left_sidebar.tpl',
      1 => 1510036051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83555a2b8814d15282_62610182',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2b8814d220a3_49049207',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2b8814d220a3_49049207')) {
function content_5a2b8814d220a3_49049207 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '83555a2b8814d15282_62610182';
?>
<!--侧栏-->  
   <div class="floating_ck">
	<dl>
    	<dt></dt>
       <a href="/"> <dd class="consult">
        	<span>中文</span>
        	<!--<div class="floating_left"><a href="#">文通在线咨询</a></div>-->
        </dd></a>
        <a href="/english_index.html"><dd class="consult">
        	<span>English</span>
            <!--<div class="floating_left"><a href="#">QQ：1234567890</a></div>-->
        </dd></a>
        <dd class="quote">
        	<span>微信</span>
            <div class="floating_left floating_ewm">
                <i><img src="/style_pc/images/erweima.png" /></i>
                <p class="qrcord_p01">扫一扫</p>
            </div>
        </dd>
       <!-- <dd class="qrcord" style="border-bottom:0px;">
        	<span>电话</span>
            <div class="floating_left">
            	<a href="#" style="line-height:40px;">美国：1857-334-0594</a>
                <a href="#" style="line-height:40px;">中国：8610-88481223</a>
            </div>
        </dd>-->
    </dl>
</div><?php }
}
?>