<!-- 41: What Are Error Handlers in PHP -->

<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName ="loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName); // important to write parameters by order
