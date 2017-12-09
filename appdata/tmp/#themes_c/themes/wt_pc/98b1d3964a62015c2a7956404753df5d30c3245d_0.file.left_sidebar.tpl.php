<?php /* Smarty version 3.1.27, created on 2017-01-22 16:16:42
         compiled from "F:\wamp\www\6\themes\wt_pc\left_sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:475058846a6a33e333_57486817%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98b1d3964a62015c2a7956404753df5d30c3245d' => 
    array (
      0 => 'F:\\wamp\\www\\6\\themes\\wt_pc\\left_sidebar.tpl',
      1 => 1484901161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '475058846a6a33e333_57486817',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58846a6a33e333_99118948',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58846a6a33e333_99118948')) {
function content_58846a6a33e333_99118948 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '475058846a6a33e333_57486817';
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