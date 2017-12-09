<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
{cts var=name from=pages channel='mt' subch='on' sortby='publish_time' order='d' limit=10 pp='off'}
	<p>{$name|url} ==== {$name|murl}</p>
{/cts}
{cts var=name from=pages model='news' subch='on' sortby='publish_time' order='d' limit=10 pp='off'}
	<p>{$name|url} ==== {$name|murl}</p>
{/cts}
</body>
</html>