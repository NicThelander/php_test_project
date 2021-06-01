<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

	<?php include("includes/design-top.php"); ?>
	<?php include("includes/navigation.php"); ?>

	<div class="container" id="main-content">
		<h2>XMLHttp example</h2>

		<P>Pulls your ip from the website <a href="http://icanhazip.com/">http://icanhazip.com/</a></P>
		<p id="x">Your IP will appear here</p>
		<button type="button" onclick="loadReq()">Make request</button>
	</div>

	<?php include("includes/footer.php"); ?>

	<script>
		function loadReq() {
			var xhreq = new XMLHttpRequest();
			xhreq.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("x").innerHTML = this.responseText;
				}
			};
			xhreq.open("GET", "http://icanhazip.com/", true);
			xhreq.send();
		}
	</script>
</body>

</html>