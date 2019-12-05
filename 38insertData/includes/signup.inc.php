
<!-- 38: Insert data from a website into a database using MySQLi  -->
<?php

include_once 'dbh.inc.php';  // here we delete the includes path

  $first = $_POST['first']; // create a couple variables + Super Global POST
  $last = $_POST['last'];
  $email = $_POST['email'];
  $uid = $_POST['uid'];
  $pwd = $_POST['pwd'];

  $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
  VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
  mysqli_query($conn, $sql);

  header("Location: ../index.php?signup=success");  // header function get's us to another location to the front page


?>
