<?php
$server ="localhost";
$username = "root";
$password ="";
$db ="vote";

$conn = new mysqli($server,$username, $password,$db);

if ($conn->connect_error) {
  die("connection failed:".$conn->$connect_error);
}


?>
