<?php
$host = "database-1.crxynx6w8jxz.eu-central-1.rds.amazonaws.com"; 
$username = "admin "; 
$password = "admin123"; 
$database = "mydb"; 
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
