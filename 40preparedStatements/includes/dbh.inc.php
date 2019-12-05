<!--40: What are Prepared Statements and how to use them   -->

<!--First we need to get the 4 parameters to get the database running

<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); // important to write parameters by order
