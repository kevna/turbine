<nav>
	<a id="nav-home"	href="."		>Home</a>
	<a id="nav-404"		href="error.404.php"	>Error 404</a>
	<a id="nav-403"		href="error.hal.php"	>Error 403</a>
	<form id="nav-history" action="javascript:alert('submission failed')">
		<span>From:</span><span class="alert" id="form-feedback"></span>
		<input name="from-date"	type="date"	size="8"	title="starting date" />
		<input name="from-time"	type="time"	size="4"	title="starting time" />
		<span>To:</span>
		<input name="to-date"	type="date"	size="8"	title="finishing date" />
		<input name="to-time"	type="time"	size="4"	title="finishing time" />
		<input value="Go"	type="submit" />
		<!--<a id="nav-submit">Submit</a>-->
	</form>
	<script>
		$("input").focus(function() {
			$(this).addClass("focused");
		});
		$("input").blur(function() {
			$(this).removeClass("focused");
		});
		$("#nav-submit").click(function () {
			$("#nav-history").submit();
		});
		$("#nav-history").submit(function(){
			var from = "";
			var to = "";
			from = $("input[name=from-date]").val();
			if ($("input[name=from-time]").val() != "") {
				from += "T" + $("input[name=from-time]").val();
			}
			if ($("input[name=to-date]").val() != "") {
				to = $("input[name=to-date]").val();
			}
			if ($("input[name=to-time]").val() != "") {
				to += "T" + $("input[name=to-time]").val();
			}
			if (from != "") {
				window.location.href = "../resting/trial/" + from + "/" + to;
			} else {
				$("#form-feedback").text("Required!").show().fadeOut(1000);
			}
			return false;
		});

	</script>
</nav>
