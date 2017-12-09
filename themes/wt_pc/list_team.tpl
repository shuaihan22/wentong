<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$title}</title>
<meta name="keywords" content="{$keywords}">
<meta name="description" content="{$description}">
<link rel="stylesheet"  href="/style_pc/css/style.css" type="text/css">
<link rel="stylesheet"  href="/style_pc/css/example.css" type="text/css">
</head>
<body>
<!--导航-->
    <div class="nav_top">
       <!-- <div class="nav_top_a p20">
         <a href="/">中文版</a>
         <a href="/english_index.html">英文版</a>
        </div>-->
      </div>
   <div class="nav">
      <div class="nav_list"><a href="/">
	  {cts var=name from=block refid='com_logo' sortby='sort' order='d' limit=1}
         <div class="logo"><img style="height:30px;width:120px; margin-top: 18px; margin-left: 15px;" src="/style_pc/images/logo_02.png" /></div>{/cts}</a>
         <div class="nav_l">
            <ul>
               <li><a href="/">首页</a></li>
               <li><a href="/about.html">关于文通</a></li>
               <li><a href="/gaoguanxiangmu">高管项目</a></li>
               <li><a href="/qingnianxiangmu">青年项目</a></li>
               <li><a href="/chenggonganli">成功案例</a></li>
			   <li><a href="/team.html" class="on">团队与师资</a></li>
            </ul>
         </div>
      </div>
   </div>
<!--内容-->
   <div class="example">
      <div class="exm_list">
        <ul>		
		{cts var=name from=pages model='news' channel='person_topic' sortby='publish_time' order='d' limit=8 pp='on'}
		  <li>
              <div class="exm_img"><a href="{$name|url}"><img src="{$name.image|media}" /></a></div>
              <div class="exm_det">
                 <a href="{$name|url}">{$name.title}</a>
                 <p>{$name.description|mb_substr:0:170}</p>
             </div>
           </li>
          {/cts}
         </ul>
      </div> 
<!--页码-->
    <div class="page">
       <ul>    
	   {ctsp for='name' var=p limit='8' pp='5' }
	   {if $p@key =='prev'}
	      <li><a href="{$p|url}">上一页</a></li>{/if}
		  {if is_numeric($p@key)}
          <li><a href="{$p|url}">{$p@key}</a></li>{/if}
		  {if $p@key =='next'}
          <li><a href="{$p|url}">下一页</a></li>
		  {/if}
		  {/ctsp}
    </div>
 </div>
<!--copyright-->
    <div class="copy">
	{cts var=name from=block refid='site_Copyright' sortby='sort' order='d' limit=1}
       <p>{$name.com_txt}</p>{/cts}
    </div>
<!--侧栏-->  
{include './left_sidebar.tpl'}
<script type="text/javascript" src="/style_pc/js/top.js"></script>
</body>
</html>
