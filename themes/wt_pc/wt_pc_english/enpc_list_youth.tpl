<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>{$title}</title>
<meta name="keywords" content="{$keywords}">
<meta name="description" content="{$description}">
<link rel="stylesheet" href="/style_pc/css/project.css" type="text/css">
<link rel="stylesheet" href="/style_pc/css/jquery.fullPage.css">
<link rel="stylesheet"  href="/style_pc/css/style.css" type="text/css">
<script src="/style_pc/js/jquery-1.8.3.min.js"></script>
<script src="/style_pc/js/jquery-ui-1.10.3.min.js"></script>
<script src="/style_pc/js/jquery.fullPage.min.js"></script>
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
<script src="/style_pc/js/jq_scroll.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
        $("#scrollDiv").Scroll({line:1,speed:500,timer:5000,up:"but_up",down:"but_down"});
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
               <li><a href="/en_about.html">About Us</a></li>
               <li><a href="/Executive%20Education">Executive Education</a></li>
               <li><a href="/Youth%20Programs" class="on">Youth Programs</a></li>
               <li><a href="/Case">Case</a></li>
			   <li><a href="/en_team.tpl">Advisors&Team </a></li>
            </ul>
         </div>
      </div>
   </div>
<!--内容-->
   <!--第一屏-->
        <div class="section">
		{cts var=name from=block refid='youth_pic' sortby='sort' order='d' limit='1,1'}
           <div class="project">
              <div class="pro_img"><img src="{$name.image|media}"></div>
              <div class="pro_one">
                 <div class="detail w1000">
                    <a href="{$name|url}" class="orange">
                    <div class="teen_tit w1000">{$name.title}</div>
                    <div class="intro white">
                       <ul>
                          <li>{$name.youth_txtone}</li>
                          <li>{$name.youth_txttwo}</li>
                          <li style="border-right:none;">{$name.youth_txtthree}</li>
                       </ul>
                    </div>
                    </a>
                 </div>
              </div>
           </div>
		   {/cts}
        </div>
   <!--第二屏-->
        <div class="section">
           <div class="news">
            <div class="tit w1000">
               <p class="orange">青年项目/Projects</p>
            </div>
            <div class="scrollbox">
               <div id="scrollDiv">
                 <ul>
				
				 {cts var=name from=pages model='news' channel=$channel sortby='publish_time' order='d' pp='off'}
				     <li>
                      <div class="news_img"><a href="{$name|url}"><img src="{$name.image|media}"></a></div>
                      <div class="news_xj">
                         <a href="{$name|url}">{$name.title}</a>
                         <a href="{$name|url}"><p><span>Target：</span>{$name.object}</p>
                         <p><span>SITE AND TIME：</span>{$name.object_time}</p>
                         <p class="font5">{$name.description|mb_substr:0:70}</p></a>
                      </div>
                   </li>
				{/cts}
                </ul>
               </div>
               <div class="scroltit"><div class="updown" id="but_down">up</div><div class="updown" id="but_up">down</div></div>
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