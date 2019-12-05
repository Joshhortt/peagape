<!--39: Protect your database against SQL injection using MySQLi  -->

<!--First we need to get the 4 parameters to get the database running

<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); // important to write parameters by order
