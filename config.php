<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "newdb";

if(!$conn = mysqli_connect($hostname, $username, $password, $database)){
 die("Database connection failed");
}


?>