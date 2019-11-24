
<!--27: Session and Cookies in PHP | PHP Tutorial | Learn PHP Programming | PHP for Beginners-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Session vs Cookie</title>
</head>
<body>

<?php

/* There are Super Global scopes we can use:
$GLOBALS
$_POST
$_GET
$_COOKIE***
$_SESSION***

COOKIES are saved in the computer where Hackers can gain acess to
A COOKIE has a time limit (can be 30 days if you want to)
COOKIES are not very safe

A SESSION ends immediatly
A SESSION is better suited for login systems because it saves the user and password inside a session instead a COOKIE

1 day = 86400 seconds

*/
setcookie("name", "Daniel", time() + 86400); // the cookies is going to destroy itself after a day

setcookie("name", "Daniel", time() - 1); // the cookies is going to destroy itself right now

# VS

$_SESSION['name'] = "Daniel"; // Let's say Daniel is user id - we don t want to display that right

$_SESSION['name'] = "12";  // the hacker is able to the 12 but it can t see the user ID Daniel

?>

</body>
</html>