<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>{$title}</title>
<meta name="keywords" content="{$keywords}">
<meta name="description" content="{$description}">
<link href="/style_pc/css/index.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/style_pc/css/jquery.fullPage.css" type="text/css">
<link rel="stylesheet"  href="/style_pc/css/style.css" type="text/css">
<script src="/style_pc/js/jquery-1.8.3.min.js"></script>
<script src="/style_pc/js/jquery-ui-1.10.3.min.js"></script>
<script src="/style_pc/js/jquery.fullPage.min.js"></script>
<script src="/style_pc/js/jquery.mobile.touchsupport.js"></script> 
<script src="/style_pc/js/jquery.phoenix.js"></script> 
{literal}
<script>
$(document).ready(function() {
	$.fn.fullpage({
		slidesColor: ['#fff', '#fff', '#fff', ],
		anchors: ['page1', 'page2', 'page3'],
		navigation: true
	});
});
</script>
<script>
$(function(){
	$(document).ready(function(){
		$('.phoenix-slider').phoenix({
			fullscreen: true,
			height: '85%'
		});
	});	
});
</script>
{/literal}
</head>

<body>
<!--导航-->
    <div class="nav_top">
        <!--<div class="nav_top_a p20">
         <a href="/">Chinese</a>
         <a href="#">English</a>
        </div>-->
      </div>
   <div class="nav">
      <div class="nav_list"><a href="/english_index.html">
	  {cts var=name from=block refid='com_logo' sortby='sort' order='d' limit=1}
         <div class="logo"><img src="{$name.image|media}" /></div>{/cts}</a>
         <div class="nav_l">
            <ul>
               <li><a href="/english_index.html" class="on">Home</a></li>
               <li><a href="/en_about.html">About Us</a></li>
               <li><a href="/Executive%20Education">Executive Education</a></li>
               <li><a href="/Youth%20Programs">Youth Program</a></li>
               <li><a href="/Case">Case</a></li>
			    <li><a href="/en_team.html">Advisors&Team </a></li>
            </ul>
         </div>
      </div>
   </div>
<!--内容-->
   <!--第一屏-->
        <div class="section">
           <div class="phoenix-slider">
		   		{cts var=name from=block refid='index_carousel' sortby='sort' order='d'}
              <div class="phoenix-feather"> 
                 <img src="{$name.image|media}" alt="{$name.title}" /> 
                 <div class="banner_bg">
					<!--<div class="banner_wz">
                      <img src="/style_pc/images/banner_wz.png">
                    </div>--><a href="{$name|url}"></a>
                 </div>
              </div>{/cts}
          </div>
          
        </div>
   <!--第二屏-->
        <div class="section">
	       <div class="choice">
              <div class="jieshao">
                 <div class="tit w1000">
                    <p class="orange">Why choose here</p>
                 </div>
                 <div class="liyou">
                    <div class="ly_01 top">
                       <span>Integrity</span>
                       <p>Being honest in purpose and act</p>
                    </div>
                    <div class="ly_01 right">
                       <span> Teamwork</span>
                       <p>Working together to achieve our common goals</p>
                    </div>
                    <div class="ly_01 bottom ">
                       <span> Diversity</span>
                       <p>Fostering an open and equal multi-cultural environment</p>
                    </div>
                    <div class="ly_01 left">
                       <span> Global Citizen  </span>
                       <p>Making the world a little different</p>
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
                   {include './enpc_address.tpl'}
				  {cts var=name from=block refid='site_Copyright' sortby='sort' order='d' limit=1}
                  <p class="w1000 text_center white font4">{$name.com_one}</p>{/cts}
                </div>
               
             </div>              
           </div>
        </div>
<!--侧栏-->  
{include './enpc_left_sidebar.tpl'}
</body>
</html>