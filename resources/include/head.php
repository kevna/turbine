	<meta http-equiv="Content-Type"	content="text/html;charset=utf-8" />
	<meta name="HandheldFriendly"	content="True" />
	<meta name="Viewport"		content="width=device-width" />
	<link rel="icon" sizes="256x256" href="favicon.ico" />
	<link rel="stylesheet"	type="text/css"	href="/turbine/main.css" />
	<script type="text/javascript"	src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript"	src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript">
		$(window).scroll(function() {
			if ($(this).scrollTop() > parseFloat($("header").css("height"))) {
				$("#content").css("margin-top", $("nav").css("height"));
				$("nav").addClass("scrolling");
			} else {
				$("#content").css("margin-top", 7);
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
