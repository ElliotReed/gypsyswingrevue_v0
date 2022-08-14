<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Gypsy Swing Revue is Colorado's premiere band for weddings and events." />

  <?php
  $title = $_POST['$title'];
  ?>
  <title><?php echo $title; ?></title>

  <link rel="icon" type="image/ico" href="https://www.gypsyswingrevue.com/favicon.ico" />
  <link rel="stylesheet" href="/gypsyswingrevue.com/css/normalize.css" />
  <link rel="stylesheet" href="/../css/foundation.css" />
  <link href="/../font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="/../css/app.css" />
  <?php
  if ($title == "Gypsy Swing Revue | Colorado's Premier Gypsy Jazz Swing Band! | Weddings and Events in the Denver and Boulder Area") {
    $add = "<link rel='stylesheet' type='text/css' href='slick/slick.css'/>";
    $add = $add . "<link rel='stylesheet' type='text/css' href='slick/slick-theme.css'/>";
  }
  if ($title == "Gypsy Swing Revue | Schedule!") {
    include_once("../php/swapSchedule.php");
  }
  ?>
  <?php echo $add; ?>

  <script src="/../js/vendor/modernizr.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--<a href="https://plus.google.com/+GypsyswingrevueMusic" rel="publisher"></a>-->
  <?php // include_once("/php/analyticstracking.php");
  ?>
</head>

<body>