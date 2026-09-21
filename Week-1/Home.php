<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>First PHP Web</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
	<?php

// Both echo and print are used to display something on the web.
echo "Hello world. ";
print "This is PHP course</br>";
$b = '</br>';

// Variables help as store value so we can use the value later on in the program by calling it's variable name.
$age = 30;
echo "I am $age years old.", " And I love Linux $b";

// Constant are stored values that we don't to be changed in anyway.
// We can define in two ways by using [CONST keyword or DEFINE function]. NOTE the variables of constant are case-sensative.
const GREETING = "Hello everyone from const keyword!</br>";
echo GREETING;

define("GREETING1", "Hello everyone from define function! $b");
echo GREETING1;

// If and Else are used to check whether a condition is true or false and then to do something based on the result.
$sex = "male";
if ($sex == 'male') echo "You are man.$b";
else echo 'You are women.</br>';

// Here there the Elseif part help us to check multiple conditions instead we using multiple if.
$marksIf = 60;
if ($marksIf >= 90) echo "Excellent </br>";
elseif ($marksIf >= 80) echo "Very good </br>";
elseif ($marksIf >= 50) echo "minimal pass </br>";
else echo "Failed </br>";

// Here we have switch that we use instead of reapeted elseif's, it's much cleaner and easier to read.
  $marks = 90;
  switch ($marks) {
    case $marks >= 90:
      echo "Excellent";
      break;
    case $marks >= 80:
      echo "Very good";
      break;
    case $marks >= 50:
      echo "minimal pass";
      break;
    case $marks < 50:
      echo "Failed";
      break;
    
    default:
      echo "Nothing happen";
      break;
  }
	?>
</body>
</html>
