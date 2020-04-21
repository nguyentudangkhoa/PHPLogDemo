<?php
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "acount";
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName); //connect database
if (!$conn) {
    die("Connecttion Fail:" . mysqli_connect_error());
}
