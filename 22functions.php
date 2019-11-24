
<!--22: How to Create Your Own Function in PHP | PHP Tutorial | Learn PHP Programming | PHP Lesson for Beginners-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
  <title>Foreach Loop</title>
</head>
<body>

<?php

// A Function with a given name is a function that does one thing and we can use it over and over again

$x = 100;
function newCalc($x) {
  $newr = $x * 0.75;
  echo "Here is 75% of what you wrote".$newr;

  // This is same without declaring a variable
  //function newCalc() {
  //$newr = 100 * 0.75;
  //echo "Here is 75% of what you wrote".$newr;
  // }
  //newCalc ();

  // echo something doesn't mean it prints out something in the browser
 // We need to call the function
 
}
newCalc ($x);  //calls the function

echo "<br>"; // line break
$a = 10; // declare new variable
newCalc($a); // call the same function using a new variable


//function newCalc($x) {
//  $newr = $x * 0.75;
//  echo "Here is 75% of what you wrote".$newr;

// You can also declare the variable this way

//}

//$x = 100;
//newCalc ($x);


?>

</body>
</html>
