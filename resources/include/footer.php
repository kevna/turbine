<footer>
	<span class="validation">
		<a href="http://validator.w3.org/check/referer">HTML5</a>
		<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS3</a>
	</span>
	<!--<span class="center">other links</span> -->
	<span class="right">
<?php
	echo "\t\t", $xml->baseplateName, ": \n";
	echo "\t\t<span class=\"", $xml->state, "\">", $xml->state, "</span> \n";
	echo "\t\t(", $syncTime, ")\n";
?>
	</span>
<!--<script type="text/javascript">document.getElementById("content").style.padding-bottom=document.getElementByTagName("footer").offsetHeight+5;</script>-->
</footer>
