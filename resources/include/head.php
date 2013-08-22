	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="Viewport" content="width=device-width" />
	<link rel="icon" sizes="256x256" href="favicon.ico" />
	<link rel="stylesheet" href="/turbine/main.css" />
<?php
	$xml = simplexml_load_file("current.xml");
	$syncTime = date('d/m/Y H:i', strtotime($xml->dateTime));
?>
