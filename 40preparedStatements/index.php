
<!-- 40: What are Prepared Statements and how to use them -->

<!-- We can then copy and delete this php code from here and insert it in the includes folder on top of signup.inc.php file and paste it

    include_once 'includes/dbh.inc.php';   // connect to the database
-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Prepared Statements</title>
</head>
<body>

 <form action="includes/signup.inc.php" method="POST">
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

<?php
// add variable
$data = 'Admin';
// created a template
  $sql = "SELECT * FROM users WHERE user_uid=?;";
  // Create a prepared Statements using the connection to the DB
  $stmt = mysqli_stmt_init($conn);
  // Prepare the prepared Statement   // Using the template
  if (!mysqli_stmt_prepare($stmt, $sql))  {    // if it suceeds '!' we now check if it failed.
    echo "SQL Statement failed";
  } else  {
    // Bind parameters to the palceholder
     mysqli_stmt_bind_param($stmt, "s", $data);
    // Run parameters inside the // SQL Database
     mysqli_stmt_execute($stmt);
     $result = mysqli_stmt_get_result($stmt);

     while ($row = mysqli_fetch_assoc($result))  {
       echo $row['user_id'] . "<br>";
     }
  }

?>

</body>
</html>
