<?php
  $rootPath=trim(dirname(__FILE__),"/band");
  // print_r
  require_once("../resources/config.php");

  require_once(LIBRARY_PATH . "/templateFunctions.php");

  /*
    Now you can handle all your php logic outside of the template
    file which makes for very clean code!
  */

  $setInIndexDotPhp = "Hey! I was set in the index.php file.";

  // Must pass in variables (as an array) to use in template
  $variables = array(
    'setInIndexDotPhp' => $setInIndexDotPhp
  );

  renderLayoutWithContentFile("home.php", $variables);

?>
