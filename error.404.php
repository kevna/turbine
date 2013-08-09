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
<footer>
	<span class="validation">
		<a href="http://validator.w3.org/check?uri=http%3a%2f%2fusers%2eaber%2eac%2euk%2faam13%2fturbine%2ferror%2e404%2ehtml">HTML5</a>
		<a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fusers.aber.ac.uk%2Faam13%2Fturbine%2Ferror.404.html">CSS3</a>
	</span>
</footer>
<?php include "footer.php" ?>
</div>
</body>
</html>
