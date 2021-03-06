<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Project 2 | J. Rafael Garcia</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
  <link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/styles.css"/>

  <?php require 'logic.php'; ?>

</head>
<body>
  <div id="maincontainer">

    <h1>Password Generator</h1>

    <div id="password">
      <p><?php echo $pass; ?></p>
    </div>

    <form id ="wordselect" action="index.php" method="GET">
      <label for="numwords">How many words?</label>
      <select id="numwords" name="numwords" form="wordselect">
        <option value="1" <?php if($wordcount == 1) { echo "selected";} ?>>1</option>
        <option value="2" <?php if($wordcount == 2) { echo "selected";} ?>>2</option>
        <option value="3" <?php if($wordcount == 3) { echo "selected";} ?>>3</option>
        <option value="4" <?php if($wordcount == 4) { echo "selected";} ?>>4</option>
        <option value="5" <?php if($wordcount == 5) { echo "selected";} ?>>5</option>
      </select>
      <br>
      <label for="specialchars">How many special characters?</label>
      <select id="specialchars" name="specialchars" form="wordselect">
        <option value="0" <?php if($scount == 0) { echo "selected";} ?>>0</option>
        <option value="1" <?php if($scount == 1) { echo "selected";} ?>>1</option>
        <option value="2" <?php if($scount == 2) { echo "selected";} ?>>2</option>
        <option value="3" <?php if($scount == 3) { echo "selected";} ?>>3</option>
        <option value="4" <?php if($scount == 4) { echo "selected";} ?>>4</option>
        <option value="5" <?php if($scount == 5) { echo "selected";} ?>>5</option>
      </select>
      <br>
      <label for="digits">How many digits?</label>
      <select id="digits" name="digits" form="wordselect">
        <option value="0" <?php if($numcount == 0) { echo "selected";} ?>>0</option>
        <option value="1" <?php if($numcount == 1) { echo "selected";} ?>>1</option>
        <option value="2" <?php if($numcount == 2) { echo "selected";} ?>>2</option>
        <option value="3" <?php if($numcount == 3) { echo "selected";} ?>>3</option>
        <option value="4" <?php if($numcount == 4) { echo "selected";} ?>>4</option>
        <option value="5" <?php if($numcount == 5) { echo "selected";} ?>>5</option>
      </select>
      <br>
      <label for="separation">Separate words by</label>
      <select id="separation" name="separation" form="wordselect">
        <option value=""  <?php if($separation == "") { echo "selected";} ?>>None</option>
        <option value=" " <?php if($separation == " ") { echo "selected";} ?>>Space</option>
        <option value="-" <?php if($separation == "-") { echo "selected";} ?>>Hyphen</option>
        <option value="c" <?php if($separation == "c") { echo "selected";} ?>>CamelCase</option>
      </select>
      <br>
      <input id="submitbtn" class="btn btn-success" type="submit" value="Generate!"/>
    </form>

  </div>
</body>
</html>
