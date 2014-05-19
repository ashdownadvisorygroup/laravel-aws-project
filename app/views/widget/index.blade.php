<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel AWS Project</title>
	<style>
	html, body {margin:0;padding:0;font-family:Helvetica,Arial,sans-serif;}
	.welcome {margin:100px;}
	</style>
</head>
<body>
	<div class="welcome">
<table border="0" cellspacing="5" cellpadding="5">
	<tr><th>Name</th><th>Description</th></tr>
	@foreach($widgets as $widget) 
	<tr><td>{{ $widget->name}}</td><td>{{ $widget->description}}</td></tr>
	@endforeach
</table>
</body>
</html>