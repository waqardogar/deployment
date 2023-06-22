<?php
// Check if the signup form is submitted
session_start();
if (!isset($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];

if(isset($_POST['submit'])){
  // Establish database connection
  $conn = mysqli_connect("database-1.crxynx6w8jxz.eu-central-1.rds.amazonaws.com", "admin", "admin123", "mydb");


  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Hash the password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Prepare and execute the query to insert user data into the database
  $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";
  $result = mysqli_query($conn, $query);

  // Check if the query executed successfully
  if($result){
    // echo "Signup successful!";
    header("location:login.html");
  }else{
    // echo "Signup failed!";
  }

  // Close the database connection
  mysqli_close($conn);
}
?>