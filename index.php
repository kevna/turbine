<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="refresh" content="150" />
	<link rel="stylesheet" href="main.css" />
	<link rel="icon" sizes="256x256" href="favicon.ico" />
	<title>Home - Turbine Interface</title>
	<?php $xml = simplexml_load_file("current.xml"); ?>
</head>
<body>
<div id="all">
<header>
<?php
	echo "\t<h1>", $xml->baseplateName, "<br />Generation Data Snapshot</h1>\n";
	echo "\t<span class=\"state\">\n";
	echo "\t\tStatus: <span class=", $xml->state, ">", $xml->state, "</span>\n";
	echo "\t</span>\n";
	echo "\t<span class=\"updated\">\n";
	echo "\t\tBaseplateID: ", $xml->baseplateID, "<br />\n";
	echo "\t\tLast updated: ",$xml->dateTime, "\n";
	echo "\t</span>\n";
?>
</header>
<div id="content">
<?php
	echo "\t<h3>Current Statistics (", $xml->dateTime, " <abbr title=\"grenwich mean time\">GMT</abbr>)</h3>\n\t<dl>\n";
	echo "\t\t<dt>Wind speed</dt>\n\t\t\t<dd>", $xml->windSpeed, "</dd>\n\t\t\t<dd><abbr title=\"meters per second\">m/s</abbr></dd>\n";
	echo "\t\t<dt>Wind direction</dt>\n\t\t\t<dd>", $xml->windDirection, "</dd>\n\t\t\t<dd><abbr title=\"degrees\">&deg;</abbr></dd>\n";
	echo "\t\t<dt>Rotor speed</dt>\n\t\t\t<dd>", $xml->rotorSpeed, "</dd>\n\t\t\t<dd><abbr title=\"revolutions per minute\">rpm</abbr></dd>\n";
	echo "\t\t<dt>Power output</dt>\n\t\t\t<dd>", $xml->powerOutput, "</dd>\n\t\t\t<dd><abbr title=\"Watts\">W</abbr></dd>\n";
	echo "\t</dl>\n\t<h3>Lifetime Statistics</h3>\n\t<dl>\n";
	echo "\t\t<dt>Energy output</dt>\n\t\t\t<dd>", $xml->lifetimeEnergyOutput, "</dd>\n\t\t\t<dd><abbr title=\"kilowatt hours\">KWh</abbr></dd>\n";
	echo "\t\t<dt>Software uptime</dt>\n\t\t\t<dd>", $xml->softwareRunningHours, "</dd>\n\t\t\t<dd><abbr title=\"hours\">h</abbr></dd>\n";
	echo "\t\t<dt>Windspeedhours (integral)</dt>\n\t\t\t<dd>", $xml->windspeedHoursIntegral, "</dd>\n\t\t\t<dd><abbr title=\"hours x (meters per second)\">hm/s</abbr></dd>\n";
	echo "\t</dl>\n";
?>
</div>
<?php	include "footer.php"; ?>
</div>
</body>
</html>
