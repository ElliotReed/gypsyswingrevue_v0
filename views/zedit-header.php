<!doctype html>
<html class='no-js' lang='en'>

<head>
	<meta charset="utf-8" />
	<meta name='viewport' content='width=device-width, initial-scale=1.0' />
	<meta name='description' content="Gypsy Swing Revue is Colorado's premiere band for weddings and events." />

	<?php
	$title = $_POST['$title'];

	// set base ref
	if ($_SERVER["SERVER_NAME"] == "localhost") {
		echo '	<base href="http://localhost:8080/gypsyswingrevue.com/"/>';
		echo "";
	} else {
		echo '		<base href="http://gypsyswingrevue.com/"/>';
		echo "";
	}
	?>


	<title><?php echo $title; ?></title>

	<link rel="icon" type="image/ico" href="favicon.ico" />

	<link rel='stylesheet' href='css/normalize.css' />
	<link rel='stylesheet' href='css/foundation.css' />
	<link rel='stylesheet ' href='font-awesome-4.3.0/css/font-awesome.min.css' />
	<link rel='stylesheet' href='css/app.css' />

	<?php
	if ($title == "Gypsy Swing Revue | Colorado's Premier Gypsy Jazz Swing Band! | Weddings and Events in the Denver and Boulder Area") {
		echo "	<link rel='stylesheet' href='slick/slick.css'/>\n";

		echo "	<link rel='stylesheet' href='slick/slick-theme.css'/>\n";
	}
	if ($title == "Gypsy Swing Revue | Schedule!") {
		include_once('php/swapSchedule.php');
	}
	?>

	<script src='js/vendor/modernizr.js'></script>
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
	<!--<a href="https://plus.google.com/+GypsyswingrevueMusic" rel="publisher"></a>-->
	<?php // include_once("/php/analyticstracking.php");
	?>

</head>

<body>