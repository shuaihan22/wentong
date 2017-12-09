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
   <div class="nav">
      <div class="nav_list"><a href="/english_index.html">
	  {cts var=name from=block refid='com_logo' sortby='sort' order='d' limit=1}
         <div class="logo"><img src="{$name.image|media}" /></div>{/cts}</a>
         <div class="nav_l">
            <ul>
               <li><a href="/english_index.html">Home</a></li>
               <li><a href="/en_about.html">About Us</a></li>
               <li><a href="/Executive%20Education">Executive Education</a></li>
               <li><a href="/Youth%20Programs">Youth Programs</a></li>
               <li><a href="/Case" class="on">Case</a></li>
			    <li><a href="/en_team.html">Advisors&Team </a></li>
            </ul>
         </div>
      </div>
   </div>
<!--内容-->
   <div class="example">
      <div class="exm_list">
        <ul>	
{cts var=name from=pages model='news' channel=$channel subch='on' sortby='id' order='d' limit=10 pp='on'}			

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
	   {ctsp for='name' var=p limit='10'  }
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
       <p>{$name.com_one}</p>{/cts}
    </div>
<!--侧栏-->  
{include './enpc_left_sidebar.tpl'}
<script type="text/javascript" src="/style_pc/js/top.js"></script>
</body>
</html>
