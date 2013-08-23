	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="Viewport" content="width=device-width" />
	<link rel="icon" sizes="256x256" href="favicon.ico" />
	<link rel="stylesheet" href="/turbine/main.css" />
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script>
		$(window).scroll(function() {
			if ($(this).scrollTop() > parseFloat($("header").css("height"))) {
				$("nav").addClass("scrolling");
			} else {
				$("nav").removeClass("scrolling");
			}
		});
		$(window).resize(function() {
			$("#content").css("padding-bottom", $("footer").css("height"));
		});
	</script>
<?php
	$xml = simplexml_load_file("current.xml");
	$syncTime = date('d/m/Y H:i', strtotime($xml->dateTime));
?>
