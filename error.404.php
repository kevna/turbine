<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="main.css">
	<link rel="icon" sizes="256x256" href="favicon.ico" />
	<title>404 - Turbine Interface</title>
	<?php $xml = simplexml_load_file("current.xml"); ?>
</head>
<body>
<div id="all">
<header class="error">
	<h1>404 - page not found</h1>
</header>
<div id="content">
	<p>
	The server could not find the page you were looking for.
	</p>
	<a href="./">Return to Home</a>
</div>
<?php include "footer.php" ?>
</div>
</body>
</html>
