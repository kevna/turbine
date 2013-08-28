<!DOCTYPE html>
<html lang="en">
<head>
<?php	include "resources/include/head.php" ?>
<?php
	$code = $_GET["errorCode"];
	echo "\t<title>", $code, " - Turbine Interface</title>\n";
?>
</head>
<body>
<div id="all">
<header class="error">
<?php	echo "\t<h1>", $code, " - server error</h1>\n"; ?>
</header>
<main>
	<p>
	The server encountered an error.<br />
	(error code <?php echo $code; ?>)
	</p>
	<a href="./">Return to Home</a>
</main>
<?php include "resources/include/footer.php" ?>
</div>
</body>
</html>
