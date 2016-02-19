<?php

  # Array to hold all the possible words
  $words = [];

  # Scrap for words
  if (!isset($_SESSION['words'])) {
    $url = 'http://www.paulnoll.com/Books/Clear-English/';
    $curr_page = array('words-01-02-hundred.html', 'words-03-04-hundred.html', 'words-05-06-hundred.html',
                       'words-07-08-hundred.html', 'words-09-10-hundred.html', 'words-11-12-hundred.html',
                       'words-13-14-hundred.html', 'words-15-16-hundred.html', 'words-17-18-hundred.html',
                       'words-19-20-hundred.html', 'words-21-22-hundred.html', 'words-23-24-hundred.html',
                       'words-25-26-hundred.html', 'words-27-28-hundred.html', 'words-29-30-hundred.html');

    $words_string = "";

    foreach ($curr_page as $page) {
      $words_string = $words_string . file_get_contents($url . $page);
    }

    preg_match_all("'<li>(.*?)</li>'si", $words_string, $words);

    # Trim the words for unnecessary whitespace.
    foreach ($words[1] as $key => $word) {

      $words[1][$key] = trim($word);

    }


    $words[1] = preg_replace("/[^A-Za-z ]/", '', $words[1]);  # Remove or non-alphabetic characters
    $words[1] = array_filter($words[1]);                      # Filter any empty string (if any)


    $_SESSION['words'] = $words[1];
  }

  $words = $_SESSION['words'];

  $symbols = array("@", "#", "$", "%", "&", "!");
  $digits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
  $separation = "";

  $pass = "";

  $wordcount = 3; # Number of words
  $scount = 0;    # Number of special characters ($symbols)
  $numcount = 0;  # Number of digits

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

  # Build Password
  if ($separation == "c") {
    for($i = 0; $i < $wordcount; $i++) {

      $pass = $pass . ucwords($words[array_rand($words)]);

    }
  }
  else {
    for ($i = 0; $i < $wordcount - 1; $i++) {
      $pass = $pass . $words[array_rand($words)] . $separation;
    }

    $pass = $pass . $words[array_rand($words)];
  }


  for($i = 0; $i < $scount; $i++) {
    $pass = $pass . $symbols[array_rand($symbols)];
  }

  for($i = 0; $i < $numcount; $i++) {
    $pass = $pass . $digits[array_rand($digits)];
  }


 ?>
