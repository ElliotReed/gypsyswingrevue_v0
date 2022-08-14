<!doctype html>
<html class="no-js" lang="en">

<head>


	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/foundation.css" />
	<link href="../font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<script src="../js/vendor/modernizr.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
	</script>

	<title>Test</title>



	<script>
		$(document).ready(function() {
			$("#test").delay(1000).animate({
				"opacity": "1"
			}, 700);
		});
	</script>

</head>

<body>
	<?php
	include("navigation.php");
	?>

	<div id="test">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<script>
		$(function count_rabbits() {
			for (var i = 1; i <= 3; i++) {
				alert("Rabbit " + i + " out of the hat!");
			}
		})
	</script>

	<?php
	include("footer.php");
	?>


</body>

</html>