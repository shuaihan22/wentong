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
{literal}
<script>
$(document).ready(function() {
	$.fn.fullpage({
		slidesColor: ['#fff', '#fff', '#fff','#fff','#fff', '#fff', '#fff', ],
		anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7'],
		navigation: true
	});
});
</script>
<script type="text/javascript" src="/style_pc/js/mySystem.js"></script>
<script>
$(function(){
	//回调函数计数
	var callbackIndex = 0;
	$('.silder-box-1').mySilder({
		width:250, //容器的宽度 必选参数!!!!!!
		height:300, //容器的高度 必选参数!!!!!!
		auto:true,//是否自动滚动
		autoTime:5, //自动滚动时，时间间隙，即多长滚动一次,单位(秒)
		direction:'x',//滚动方向,默认X方向
		autoType:'left', //滚动方向，auto为true时生效
		few:1,//一次滚动几个，默认滚动1张
		showFew:3, //显示几个,就不用调css了,默认显示一个
		clearance:50, //容器之间的间隙，默认为 0
		silderMode:'linear' ,//滚动方式
		timeGap:650,//动画间隙，完成一次动画需要多长时间，默认700ms
		buttonPre:'.silder-button.btl',//上一个，按钮
		buttonNext:'.silder-button.btr',//下一个，按钮
		jz:true, //点击时，是否等待动画完成
		runEnd:function(){//回调函数
			callbackIndex ++ ;
			$('.cj em').text(callbackIndex);
		}
	});
});
</script>
{/literal}
</head>

<body>
<!--导航-->
   <div class="nav">
      <div class="nav_list"><a href="/english_index.html">
	  {cts var=name from=block refid='com_logo' sortby='sort' order='d' limit=1}
         <div class="logo"><img src="{$name.image|media}" /></div>{/cts}</a>
         <div class="nav_l">
            <ul>
               <li><a href="/english_index.html">Home</a></li>
               <li><a href="/en_about.html" class="on">About Us</a></li>
               <li><a href="/Executive%20Education">Executive Education</a></li>
               <li><a href="/Youth%20Programs">Youth Programs</a></li>
               <li><a href="/Case">Case</a></li>
			    <li><a href="/en_team.html">Advisors&Team </a></li>
            </ul>
         </div>
      </div>
   </div>
<!--内容-->
   <!--第一屏-->
        <div class="section">
		{cts var=name from=block refid='about_pic' sortby='sort' order='d' limit=1}
           <div class="abo_01">
              <img src="{$name.image|media}" alt="{$name.title}">{/cts}
              <div class="banner_bg">
                 <div class="abo_logo">
                    <img src="/style_pc/images/logo_02.png" alt="" class="img_logo">
                 </div>
              </div>
            </div>  
        </div>
   <!--第二屏-->
        <div class="section">
	       <div class="about_us">
              <div class="about_intro w1000">
                  <div class="about_title w1000">关于我们&nbsp;&nbsp;/&nbsp;&nbsp;ABOUT &nbsp;US</div>
				 {cts var=name from=block refid='aboutus' sortby='id' order='d' limit='0,1'}
                  <div class="line"></div>
				  {$name.about_us}</div>{/cts}
		
           </div>
        </div>
   <!--第三屏-->
        <div class="section">
           <div class="smyj">
              <div class="smyj_intro w1000">
                  <div class="about_title w1000">Mission</div>
                  <div class="line"></div>
                  <div class="smyj_list text_center">
                     <ul>
                        <li>
                          <img src="/style_pc/images/zan.png" alt="">
                          <span>Integrity</span>
                          <p></p>
                        </li>
                        <li>
                          <img src="/style_pc/images/team.png" alt="">
                          <span> Teamwork</span>
                          <p></p>
                        </li>
                        <li>
                          <img src="/style_pc/images/xl.png" alt="">
                          <span> Efficiency</span>
                          <p></p>
                        </li>
                        <li>
                          <img src="/style_pc/images/dyx.png" alt="">
                          <span> Diversity </span>
                          <p></p>
                        </li>
                        <li>
                          <img src="/style_pc/images/sjgm.png" alt="">
                          <span>Global Citizen</span>
                          <p></p>
                        </li>
                     </ul>
                  </div>
              </div>
           </div>
	       
        </div>
  <!--第四屏-->
       <!-- <div class="section">
           <div class="wttd">
              <div class="wttd_intro w1000">
                <div class="about_title w1000">Advisors&Team  </div>
                <div class="line"></div>
	    
                    <div class='silder-box silder-box-1'>
                    	<div class='silder'>
                    		<ul>
							{cts var=name from=block refid='super_teacher' sortby='sort' order='d'}
                    			<li>
                    				<img src="{$name.image|media}">
                                     <a href="#">{$name.title}</a>
                    			</li>
                    			{/cts}
                    		</ul>
                    	</div>
                    	<div class='silder-button btl'></div>
                    	<div class='silder-button btr'></div>
                    </div>
                                 
              </div>
           </div>
           
        </div>
   <!--第五屏-->
     <!--    <div class="section">
	       <div class="wttd">
              <div class="wttd_intro w1000">
                <div class="about_title w1000">Team</div>
                <div class="line"></div>
                    <div class="team">
	                    <div class="worker">
		                    <div class="workerPic">
							{cts var=name from=block refid='about_super' sortby='sort' order='d'}
							{if $name@index==0}
			                  <div class="content" style="margin-left:0px;">
				                <img src="{$name.image|media}" alt="{$name.title}" />
				                <div class="txt">
				                <a href="#">
                                <h3>{$name.title}</h3>
				                <h4>{$name.super_txt}</h4>
				                <p>{$name.description}</p>
                                </a>
				                </div>
			               </div>
                           {else}
                           <div class="content">
				                <img src="{$name.image|media}" alt="{$name.title}" />
				                <div class="txt">
				                <a href="#">
                                <h3>{$name.title}</h3>
				                <h4>{$name.super_txt}</h4>
				                <p>{$name.description}</p>
				                </a>
                                </div>
			               </div>{/if}
                           {/cts}             
			
		                </div>
                        <div style="clear:both;"></div>
                    </div>
                 </div>  
              </div>
           </div>
        </div>
   <!--第六屏-->
        <div class="section">
           <div class="hzhb">
              <div class="hzhb_intro">
                 <div class="about_title w1100">Partners</div>
                 <div class="line"></div>
	             <div class="partner">
                     <div id="four_flash">
			            <div class="flashBg">
				           <ul class="mobile">
						   {cts var=name from=block refid='super_friend' sortby='sort' order='d'}
                             <li>
						         <img src="{$name.image|media}"/>
						         <a href="#">{$name.title}</a>
					          </li>{/cts}
				           </ul>
			           </div>
			           <div class="but_left"><img src="/style_pc/images/qianxleft.png" /></div>
			           <div class="but_right"><img src="/style_pc/images/qianxr.png" /></div>
		            </div> 
	            </div>
              </div>
           </div>  
        </div>
   <!--第七屏-->
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
{literal}
<script type="text/javascript">
	$(".content") .hover(function(){
			$(this) .children(".txt").stop() .animate({height:"250px"},200);
			$(this) .find(".txt h3").stop() .animate({paddingTop:"0px"},550);
			$(this) .find(".txt p").stop() .show();
	},function(){
			$(this) .children(".txt").stop() .animate({height:"105px"},200);
			$(this) .find(".txt h3").stop().animate({paddingTop:"0px"},550);
			$(this) .find(".txt p").stop() .hide();
		})
</script>
<script type="text/javascript">
var _index5=0;
$("#four_flash .but_right img").click(function(){
	_index5++;
	var len=$(".flashBg ul.mobile li").length;
	if(_index5+5>len){
		$("#four_flash .flashBg ul.mobile").stop().append($("ul.mobile").html());
	}
	$("#four_flash .flashBg ul.mobile").stop().animate({left:-_index5*326},1000);
	});

	
$("#four_flash .but_left img").click(function(){
	if(_index5==0){
		$("ul.mobile").prepend($("ul.mobile").html());
		$("ul.mobile").css("left","-1380px");
		_index5=6
	}
	_index5--;
	$("#four_flash .flashBg ul.mobile").stop().animate({left:-_index5*326},1000);
	});
</script>	
{/literal}
</body>
</html>