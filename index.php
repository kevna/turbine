<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="refresh" content="150" />
	<link rel="stylesheet" href="main.css" />
	<link rel="icon" sizes="256x256" href="favicon.ico" />
	<title>Home - Turbine Interface</title>
<?php
	$xml = simplexml_load_file("current.xml");
	$syncTime = date('d/m/Y H:i', strtotime($xml->dateTime));
?>
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
	echo "\t\tLast updated: ",$syncTime, "\n";
	echo "\t</span>\n";
?>
</header>
<div id="content">
<?php echo "\t<h3>Current Statistics (", $syncTime; ?>
	<abbr title="grenwich mean time">GMT</abbr>)</h3>
	<dl>
		<dt>Wind speed</dt>
<?php echo "\t\t\t<dd>", $xml->windSpeed, "</dd>\n"; ?>
			<dd class="units"><abbr title="meters per second">m/s</abbr></dd>
<?php
	if (($xml->windDirection >= 337.5) || ($xml->windDirection <= 22.5)) {
		$direction = "<abbr title=\"North (Tramontana)\">N</abbr>";
	} else if ($xml->windDirection < 67.5) {
		$direction = "<abbr title=\"North East (Greco)\">NE</abbr>";
	} else if ($xml->windDirection <= 112.5) {
		$direction = "<abbr title=\"East (Levante)\">E</abbr>";
	} else if ($xml->windDirection < 157.5) {
		$direction = "<abbr title=\"South East (Scirocco)\">SE</abbr>";
	} else if ($xml->windDirection <= 202.5) {
		$direction = "<abbr title=\"South (Ostro)\">S</abbr>";
	} else if ($xml->windDirection < 247.5) {
		$direction = "<abbr title=\"South West (Libeccio)\">SW</abbr>";
	} else if ($xml->windDirection <= 292.5) {
		$direction = "<abbr title=\"West (Ponente)\">W</abbr>";
	} else {
		$direction = "<abbr title=\"North West (Maestro)\">NW</abbr>";
	};
?>
		<dt>Wind direction</dt>
<?php	echo "\t\t\t<dd>", $direction, " (", $xml->windDirection, ")</dd>\n"; ?>
			<dd class="units"><abbr title="degrees">&deg;</abbr></dd>
		<dt>Rotor speed</dt>
<?php	echo "\t\t\t<dd>", $xml->rotorSpeed, "</dd>\n"; ?>
			<dd class="units"><abbr title="revolutions per minute">rpm</abbr></dd>
		<dt>Power output</dt>
<?php	echo "\t\t\t<dd>", $xml->powerOutput, "</dd>\n"; ?>
			<dd class="units"><abbr title="Watts">W</abbr></dd>
	</dl>
	<h3>Lifetime Statistics</h3>
	<dl>
		<dt>Energy output</dt>
<?php	echo "\t\t\t<dd>", $xml->lifetimeEnergyOutput, "</dd>\n"; ?>
			<dd class="units"><abbr title="kilowatt hours">KWh</abbr></dd>
		<dt>Software uptime</dt>
<?php	echo "\t\t\t<dd>", $xml->softwareRunningHours, "</dd>\n"; ?>
			<dd class="units"><abbr title="hours">h</abbr></dd>
		<dt>Windspeedhours</dt>
<?php	echo "\t\t\t<dd>", $xml->windspeedHoursIntegral, "</dd>\n"; ?>
			<dd class="units"><abbr title="hours x (meters per second)">hm/s</abbr></dd>
	</dl>
</div>
<?php	include "footer.php"; ?>
</div>
</body>
</html>
