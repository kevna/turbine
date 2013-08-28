<nav>
	<a id="nav-home"	href="."		>Home</a>
	<!--<a id="nav-404"		href="error.404.php"	>Error 404</a>
	<a id="nav-403"		href="error.hal.html"	>Error 403</a>-->
	<form id="nav-history" action="javascript:alert('submission failed')">
		<span>From:</span><span class="alert" id="from-feedback"></span>
		<input name="from-date"	type="date"	size="8"	title="starting date" />
		<input name="from-time"	type="time"	size="4"	title="starting time" />
		<span>To:</span>
		<input name="to-date"	type="date"	size="8"	title="finishing date" />
		<input name="to-time"	type="time"	size="4"	title="finishing time" />
		<input value="Go"	type="submit" /><span class="alert" id="form-feedback"></span>
		<!--<a id="nav-submit">Submit</a>-->
	</form>
	<script>
		$("input").focus(function() {
			$(this).addClass("focused");
		});
		$("input").change(function() {
			$(this).removeClass("incorrect");
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
			if ($("input[name=from-date]").val() != "") {
				if (isNaN(Date.parse($("input[name=from-date]").val()))) {
					$("input[name=from-date]").addClass("incorrect");
					$("#form-feedback").text("Invalid!").show().fadeOut(1000);
					return false;
				}
				from = $("input[name=from-date]").val();
			} else {
				$("#from-feedback").text("Required!").show().fadeOut(1000);
			}
			if ($("input[name=from-time]").val() != "") {
				from += "T" + $("input[name=from-time]").val();
			}
			if ($("input[name=to-date]").val() != "") {
				if (isNaN(Date.parse($("input[name=to-date]").val()))) {
					$("input[name=to-date]").addClass("incorrect");
				}
				to = $("input[name=to-date]").val();
			}
			if ($("input[name=to-time]").val() != "") {
				to += "T" + $("input[name=to-time]").val();
			}
			if (from != "") {
				window.location.href = "../resting/trial/" + from + "/" + to;
			}
			return false;
		});

	</script>
</nav>
