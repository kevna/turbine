<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="refresh" content="150" />
	<link rel="stylesheet" href="main.css" />
	<link rel="icon" sizes="256x256" href="favicon.ico" />
	<title>Home - Turbine Interface</title>
</head>
<body>
<div id="all">
<?php
	$xml = simplexml_load_file("current.xml");
	echo "<header>\n";
	echo "\t<h1>", $xml->baseplateName, "<br />Generation Data Snapshot</h1>\n";
	echo "\t<span class=\"state\">\n";
	echo "\t\tStatus: <span class=", $xml->state, ">", $xml->state, "</span>\n";
	echo "\t</span>\n";
	echo "\t<span class=\"updated\">\n";
	echo "\t\tBaseplateID: ", $xml->baseplateID, "<br />\n";
	echo "\t\tLast updated: ",$xml->dateTime, "\n";
	echo "\t</span>\n";
	echo "</header>\n<div id=\"content\">\n";
	echo "\t<h3>Current Statistics (", $xml->dateTime, " GMT)</h3>\n\t<p>\n";
	echo "\t\tWind speed: ", $xml->windSpeed, $xml->windSpeed['units'], "<br />\n";
	echo "\t\tWind direction: ", $xml->windDirection, $xml->windDirection['units'], "<br />\n";
	echo "\t\tRotor speed: ", $xml->rotorSpeed, $xml->rotorSpeed['units'], "<br />\n";
	echo "\t\tPower output: ", $xml->powerOutput, $xml->powerOutput['units'], "<br />\n";
	echo "\t</p>\n\t<h3>Lifetime Statistics</h3>\n\t<p>\n";
	echo "\t\tEnergy output: ", $xml->lifetimeEnergyOutput, $xml->lifetimeEnergyOutput['units'], "<br />\n";
	echo "\t\tSoftware uptime: ", $xml->softwareRunningHours, $xml->softwareRunningHours['units'], "<br />\n";
	echo "\t\tWindspeedhours (integral): ", $xml->windspeedHoursIntegral, $xml->windspeedHoursIntegral['units'], "<br />\n";
	echo "\t</p>\n</div>\n<footer>\n";
	echo "\t<span class=\"validation\">\n\t\t<a href=\"http://validator.w3.org/check/referer\">HTML5</a>\n";
	echo "\t\t<a href=\"http://jigsaw.w3.org/css-validator/check/referer\">CSS3</a>\n\t</span>\n";
	echo "\t<span class=\"right\">", $xml->baseplateName, ": <span class=\"",
		$xml->state, "\">",$xml->state,"</span> (",
		$xml->dateTime, ")</span>\n";
	echo "</footer>\n";
?>
</div>
</body>
</html>
