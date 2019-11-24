
<!--28: How to Start a Session in PHP | PHP Tutorial | Learn PHP Programming | PHP for Beginners-->
<?php
   session_start(); // using the session start function we can start a session in every single page of the website and it will remember our username which we need to be logged in
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Session_start</title>
</head>
<body>

 <ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php

    $_SESSION['username'] = "jose1985"; 
        echo $_SESSION['username'];

    if (!isset($_SESSION['username']))  {  //If the username has not been set than do this
        echo "<br>";
        echo "You are not logged in!";
   } else  {
        echo "<br>";
        echo "You are logged in!";
    } 
 // If we delete the php code on top session_start and the $_SESSION variable then if you refresh the page
 // it will say "You are not logged in".
?>

</body>
</html>