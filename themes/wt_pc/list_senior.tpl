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
        $("#scrollDiv").Scroll({line:1,speed:500,timer:3000,up:"but_up",down:"but_down"});
});
</script>
{/literal}
</head>

<body>
<!--导航-->
    <div class="nav_top">
        <div class="nav_top_a p20">

        </div>
      </div>
   <div class="nav">
      <div class="nav_list"><a href="/">
	  {cts var=name from=block refid='com_logo' sortby='sort' order='d' limit=1}
         <div class="logo"><img style="height:30px;width:120px; margin-top: 18px; margin-left: 15px;" src="/style_pc/images/logo_02.png" /></div>{/cts}</a>
         <div class="nav_l">
            <ul>
               <li><a href="/">首页</a></li>
               <li><a href="/about.html">关于文通</a></li>
               <li><a href="/gaoguanxiangmu" class="on">高管项目</a></li>
               <li><a href="/qingnianxiangmu">青年项目</a></li>
               <li><a href="/chenggonganli">成功案例</a></li>
			   <li><a href="/team.html">团队与师资</a></li>
            </ul>
         </div>
      </div>
   </div>
<!--内容-->
   <!--第一屏-->
        <div class="section">
		{cts var=name from=block refid='senior_pic' sortby='sort' order='d' limit=1}
           <div class="project">
              <div class="pro_img"><img src="{$name.image|media}"></div>
              <div class="pro_one">
                 <div class="detail w1000">
                    <a href="{$name|url}" class="orange"><div class="teen_tit w1000">{$name.title}</div>
                    <p class="w1000 text_center orange font5">{$name.senior_abstract}</p>
                    <p class="w1000 text_center white font6">{$name.senior_detail}</p></a>
                 </div>
              </div>
           </div>
		   {/cts}
        </div>
   <!--第二屏-->
        <div class="section">
           <div class="news">
            <div class="tit w1000">
               <p class="orange">高管项目/Projects</p>
            </div>
            <div class="scrollbox">
               <div id="scrollDiv">
                 <ul>
				  {cts var=name from=pages model='news' channel=$channel sortby='publish_time' order='d' pp='off'}
                   <li>
                      <div class="news_img"><a href="{$name|url}"><img src="{$name.image|media}"></a></div>
                      <div class="news_xj">
                         <a href="{$name|url}">{$name.title}</a>
                         <p><span>招生对象：</span>{$name.object}</p>
                         <p><span>地点及时间：</span>{$name.object_time}</p>
                         <p class="font5">{$name.description|mb_substr:0:70}</p>
                      </div>
                   </li>
				   {/cts}
                </ul>
               </div>
               <div class="scroltit"><div class="updown" id="but_down">向上</div><div class="updown" id="but_up">向下</div></div>
            </div>
            
          </div>
	
        </div>
   <!--第三屏-->
        <div class="section">
           <div class="pro_foot">
             <div class="footer_bg">
                <div class="footer white w1000">
                   <div class="foot_logo text_center w1000"><img style="height:80px;width:300px;" src="/style_pc/images/logo_02.png"></div>
                   <p class="font1 text_center w1000">美国文通国际创新合作中心</p>
                   <p class="font2 text_center w1000">UNITED  CULTURES  INNOVATION  CENTER<br> FOR  INTERNATIONAL  COOPER</p>
                   <p class="font3 text_center w1000 orange">沟通中美交流的平台</p>
                   <p class="font3 text_center w1000 orange">Platform  for  U.S.-China  Communications</p>
					{include './address.tpl'}
				  {cts var=name from=block refid='site_Copyright' sortby='sort' order='d' limit=1}
                  <p class="w1000 text_center white font4">{$name.com_txt}</p>{/cts}
                </div>
               
             </div>              
           </div>
        </div>
<!--侧栏-->  
{include './left_sidebar.tpl'}
</body>
</html>