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
		
		<h1>Laravel AWS Project</h1>
		<p>This is a sample deployment of the Laravel PHP Framework onto AWS Elastic Beanstalk. It includes an RDS DB, elastic environment detection, and a sample model for <a href="/widget">widgets</a>.</p>
		<p>Info: <?php echo $_SERVER['RDS_HOSTNAME']; ?></p>
	</div>
</body>
</html>
