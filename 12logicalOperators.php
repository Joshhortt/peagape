
<!-- 12: What Are Logical Operators in PHP 

Choose one of these online sources and read and practice

Geeks For Geeks : https://www.geeksforgeeks.org/ 
W3Schools : https://www.w3schools.com/ 
PHP Documentation : https://www.php.net/

-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
  <title>Logical Operators</title>
</head>
<body>

<?php


// increment / decrement operators
// loops

$x = 10;
$y = 20;
// or
if ($x == $y or 1 == 0) {  // compares with 'or' two statments, which one is actually true. so it's true
    echo "True"; 
}

$x = 10;
$y = 20;
// and
if ($x == $y and 1 == 0) {  // compares with 'and'. Both statement have to be true
    echo "True"; 
}

$x = 10;
$y = 20;
// ||
if ($x == $y || 1 == 1) {  // double pipes. disembles. Does the same thing than writing 'or'
    echo "True"; 
}

$x = 10;
$y = 20;
// ||
if ($x == $y && 1 == 0) {  // ampersand does the same then 'and'
    echo "True"; 
}

$x = 20; // change these to experiment
$y = 20;
// ||
if ($x == $y xor 1 == 0) {  // 'xor'. One conditio has to be true but only one condition has to be true
    echo "True"; 
}
 
           

    


        

?>

</body>
</html>

