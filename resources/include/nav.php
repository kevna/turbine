<nav>
	<a id="nav-home"	href="."		>Home</a>
	<a id="nav-404"		href="error.404.php"	>Error 404</a>
	<a id="nav-403"		href="error.hal.php"	>Error 403</a>
	<script type="text/javascript">
		$("#nav-history").submit(function() {
			alert("submit");
		});
	</script>
	<form id="nav-history">
		<input name="from-date"	type="date"	size="8"	title="starting date" />
		<input name="from-time"	type="time"	size="5"	title="starting time" />
		<input name="to-date"	type="date"	size="8"	title="finishing date" />
		<input name="to-time"	type="time"	size="5"	title="finishing time" />
		<a onclick="form.submit()">Go</a>
	</form>
</nav>
