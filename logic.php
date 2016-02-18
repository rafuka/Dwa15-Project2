<?php

  # Array to hold all the possible words
  $words = [];

  # For testing
  $words = array("hi", "there", "you", "brawl");
  $symbols = array("@", "#", "$", "%", "&", "!");
  $digits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
  $separation = "";

  $pass = "";

  $wordcount = 3; # Number of words
  $scount = 0;   # Number of special characters ($symbols)
  $numcount = 0; # Number of digits

  if (isset($_GET['numwords']) AND  # Check that input is a number from 1 to 5
     ($_GET['numwords'] == 1 OR
      $_GET['numwords'] == 2 OR
      $_GET['numwords'] == 3 OR
      $_GET['numwords'] == 4 OR
      $_GET['numwords'] == 5)) {

    $wordcount = $_GET['numwords'];

}
  if (isset($_GET['specialchars']) AND # Check that input is a number from 0 to 5
     ($_GET['specialchars'] == 0 OR
      $_GET['specialchars'] == 1 OR
      $_GET['specialchars'] == 2 OR
      $_GET['specialchars'] == 3 OR
      $_GET['specialchars'] == 4 OR
      $_GET['specialchars'] == 5)) {

    $scount = $_GET['specialchars'];
  }

  if (isset($_GET['digits']) AND # Check that input is a number from 0 to 5
     ($_GET['digits'] == 0 OR
      $_GET['digits'] == 1 OR
      $_GET['digits'] == 2 OR
      $_GET['digits'] == 3 OR
      $_GET['digits'] == 4 OR
      $_GET['digits'] == 5)) {

    $numcount = $_GET['digits'];
  }

  if (isset($_GET['separation']) AND # Check that input is a valid case (" ", "", "-", or "c")
     ($_GET['separation'] == ""  OR
      $_GET['separation'] == " " OR
      $_GET['separation'] == "-" OR
      $_GET['separation'] == "c")) {

    $separation = $_GET['separation'];
  }

  # Build Password TODO: add separators
  for($i = 0; $i < $wordcount; $i++) {
    $pass = $pass . $words[array_rand($words)];
  }

  for($i = 0; $i < $scount; $i++) {
    $pass = $pass . $symbols[array_rand($symbols)];
  }

  for($i = 0; $i < $numcount; $i++) {
    $pass = $pass . $digits[array_rand($digits)];
  }


 ?>
