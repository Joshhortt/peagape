
<!--20: How to Create a Foreach Loop in PHP | PHP Tutorial | Learn PHP Programming | PHP for Beginners-->

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

 // There are 4 main Loops in PHP
 // While Loop
 // Do while Loop
 // For Loop
 // Foreach Loop***

// here we have to use an array (bunch of data combined)
 
$array = array("Daniel", "Jane", "Jacob", "Maria", "John", "Elizabeth");
   foreach ($array as $loopdata) {
       echo "My name is ".$loopdata."<br>";
   }
?>

</body>
</html>
