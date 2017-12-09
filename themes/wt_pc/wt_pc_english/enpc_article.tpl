<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$title}</title>
<meta name="description" content="{$description}">
<meta name="keywords" content="{$keywords}">
<link rel="stylesheet"  href="/style_pc/css/style.css" type="text/css">
<link rel="stylesheet"  href="/style_pc/css/example.css" type="text/css">
</head>

<body>
<!--导航-->
   <div class="nav">
      <div class="nav_list"><a href="/english_index.html">
	  {cts var=name from=block refid='com_logo' sortby='sort' order='d' limit=1}
         <div class="logo"><img src="{$name.image|media}" /></div>{/cts}</a>
         <div class="nav_l">
            <ul>
                <li><a href="/english_index.html" class="on">Home</a></li>
               <li><a href="/en_about.html">About Us</a></li>
               <li><a href="/Executive%20Education">Executive Education</a></li>
               <li><a href="/Youth%20Programs">Youth Programs</a></li>
               <li><a href="/Case">Case</a></li>
			    <li><a href="/en_team.html">Advisors&Team </a></li>
            </ul>
         </div>
      </div>
   </div>
<!--内容-->
  <div class="article">
  <!--正文-->
    <div class="hot">
       <div class="hot_img"><img src="/style_pc/images/hot.png" /></div>
       <div class="hot_list">
          <ul>
		  {cts var=name from=pages model='news' channel='en_Case' sortby='publish_time' order='d' limit=4 pp='off'}
             <li><a href="{$name|url}">{$name.title}</a></li>
			 {/cts}
          </ul>
       </div>
    </div>
  <!--位置-->
    <div class="pos">
       <p>
          您的当前位置：
          <a href="/">首页</a>&nbsp;<span>—</span>
		  {foreach $crumbs as $cb}
          <a href="{$cb|url}">{$cb.name}</a>&nbsp;<span>—</span>
		  {/foreach}
          <a href="#" style="color:#fc8404;">正文</a>&nbsp;
       </p>
    </div>
  <!--正文-->
    <div class="neirong">
       <div class="wz">
           <div class="wz_tit">{$title}</div>
           <div class="wz_author">
              <ul>
                 <li>2017-1-12</li>
                 <li>责任编辑：{$author|default:'admin'}</li>
                 <li>点击数：{$view_count|number_format}</li>
              </ul>
           </div>
           <div class="zw">{$content}</div>
            <!--页码-->
          <div class="page">
            <ul>
			{ctsp var=p limit=1 pp='5'}
			{if $p@key =='prev'}
              <li><a href="{$p|url}">上一页</a></li>{/if}
              {if is_numeric($p@key)}
			  <li><a href="{$p|url}">{$p@key}</a></li>{/if}
			  {if $p@key =='next'}
              <li><a href="#">下一页</a></li>{/if}
			  {/ctsp}
           </ul>
          </div>
       </div>
  <!--右边-->
      <div class="tj_right">
       <div class="rebo">
				<p>相关推荐</p>
				<ul>
				{cts var=name from=pages model='news' channel='en_Case' sortby='publish_time' order='d' limit=10 pp='off'}
					<li><span>•</span><a href="{$name|url}">{$name.title}</a></li>
					{/cts}
				</ul>
		</div>
        <div class="retu">
				<p>其他人还看</p>
				<ul>
				{cts var=name from=pages model='news' channel='en_Case' sortby='view_count' order='d' limit=5 pp='off'}
					<li>
					<a href="{$name|url}"><img src="{$name.image|media}" alt="{$title}"></a>
					<p><a href="{$name|url}" >{$name.title}</a></p>
					</li>
					{/cts}
				</ul>			
	   </div>
        
      </div>
    
    </div>   
  </div>
<!--copyright-->
    <div class="copy">
	{cts var=name from=block refid='site_Copyright' sortby='sort' order='d' limit=1}
       <p>{$name.com_one}</p>{/cts}
    </div>
<!--侧栏-->  
{include './enpc_left_sidebar.tpl'}
<script type="text/javascript" src="/style_pc/js/top.js"></script>
</body>
</html>
