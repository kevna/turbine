	<meta charset="utf-8" />
	<meta name="author"		content="Aaron Moore" />
	<meta name="description"	content="Online interface for QuietRevolution wind turbines" />
	<meta name="doc-class"		content="development/testing" />
	<meta name="generator"		content="vim/my-brain" />
	<meta name="HandheldFriendly"	content="True" />
	<meta name="Viewport"		content="width=device-width; maximum-scale=3.4" />
	<link rel="icon"	sizes="256x256"	href="favicon.ico" />
	<link rel="stylesheet"	type="text/css"	href="/turbine/main.css" />
	<script	src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/ecmascript">
		$(window).scroll(function() {
			if ($(this).scrollTop() > parseFloat($("header").css("height"))) {
				if (($(window).width() / parseFloat($("body").css("font-size"))) < 65) {
					$("main").css("margin-top", $("nav").css("height"));
				}
				$("nav").addClass("scrolling");
			} else {
				$("main").css("margin-top", 7);
				$("nav").removeClass("scrolling");
			}
		});
		$(window).resize(function() {
			$("#content").css("padding-bottom", $("footer").css("height"));
		});
	</script>
<?php
	date_default_timezone_set("GMT");
	$xml = simplexml_load_file("current.xml");
	$syncTime = "<time datetime=\"" . $xml->dateTime . "\">" . date('d/m/Y H:i', strtotime($xml->dateTime)) .  "</time>";
?>
