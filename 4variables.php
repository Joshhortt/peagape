<!-- 4: How to Create PHP Variables 

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
  <title>Create PHP Variables</title>
</head>
<body>

<form method="GET">
    <input type="text" name="person">
    <button>SUBMIT</button>

<?php

$name = $_GET['person'];
echo $name." is a nice guy!"

 //$name = "Jose";
// echo $name." is a nice guy!"; // Don't forget to use the Dot after the variable
 
?>

</body>
</html>

