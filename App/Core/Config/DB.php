<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dalati";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
  mysqli_query($conn,"SET NAMES utf8");
  return true;
}
