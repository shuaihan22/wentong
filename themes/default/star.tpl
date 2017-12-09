<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>{$title}</title>
</head>
<body>
	<img src="{$content|media}"/>
	<p>
	{$tuku_images[$_cpn - 1].desc}
	</p>
	<div>
		<h2>分页</h2>
		<ul>
		{ctsp var=p limit=1}
			{if $p@key =='prev'}
			<li><a href="{$p}">上一页</a></li>
			{/if}
			{if is_numeric($p@key)}
			<li><a href="{$p}">{$p@key}</a></li>
			{/if}
			{if $p@key =='next'}
			<li><a href="{$p}">下一页</a></li>
			{/if}
		{/ctsp}
		</ul>
	</div>
	<script type="text/javascript" id="kz_stat_js" src="http://dev.kisscms.com/stat.min.js?sid=1000"></script>
</body>
</html>