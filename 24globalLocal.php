
<!--24: Local and Global Scope in PHP | PHP Tutorial | Learn PHP Programming | PHP for Beginners-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Global vs Local Scope</title>
</head>
<body>

<?php

// Global scope is used outside the function
// Local scope is used inside the function



$x = 100; //GlOBAL SCOPE outside
function newCalc($x) {
  $newr = $x * 0.75;
  echo "Here is 75% of what you wrote".$newr;
}
newCalc ($x);




#function newCalc($x) {
#    $x = 100; //GLOBAL SCOPE inside
#  $newr = $x * 0.75;
#  echo "Here is 75% of what you wrote".$newr;
#}
#newCalc ($x);







?>

</body>
</html>