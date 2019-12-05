
<!-- 39: Protect your database against SQL injection using MySQLi -->

<!-- We can then copy and delete this php code from here and insert it in the includes folder on top of signup.inc.php file and paste it

    include_once 'includes/dbh.inc.php';   // connect to the database
-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Connect Database</title>
</head>
<body>

<form action="includes/signup.inc.php" method="POST">   <!-- we use a POST method instead of a GET method because itś more sensitive data (password) -->
  <input type="text" name="first" placeholder="Firstname">
  <br>
  <input type="text" name="last" placeholder="Lastname">
  <br>
  <input type="text" name="email" placeholder="E-mail">
  <br>
  <input type="text" name="uid" placeholder="Username">
  <br>
  <input type="password" name="pwd" placeholder="Password">
  <br>
  <button type="submit" name="submit">Sign up</button>
</form>

<!-- We can then copy and delete this php code from here and insert it in the includes folder and create signup.inc.php file and paste it

  $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
  VALUES ('Jose', 'Calvario', 'josecalvario@gmail.com', 'Admin', 'test123');";
  mysqli_query($conn, $sql);
-->

</body>
</html>
