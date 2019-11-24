
<!--26: POST and GET Superglobals in PHP | PHP Tutorial | Learn PHP Programming | PHP for Beginners-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Global vs Local Scope</title>
</head>
<body>

<?php

/* There are Super Global scopes we can use:
$GLOBALS
$_POST***
$_GET***
$_COOKIE
$_SESSION

echo $_POST["name"];
?>
<form method="POST">
  <input type="hidden" name="name" value="Daniel">
  <button type="submit">PRESS ME!</button>

*/
echo $_GET["name"];

?>

<form method="GET">
  <input type="hidden" name="name" value="Daniel">
  <button type="submit">PRESS ME!</button>



</body>
</html>