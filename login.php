<?php
// Check if the login form is submitted
if(isset($_POST['login'])){
  // Establish database connection
  $conn = mysqli_connect("database-1.crxynx6w8jxz.eu-central-1.rds.amazonaws.com", "admin", "admin123", "mydb");

  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  // Retrieve form data
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Prepare and execute the query to fetch user data from the database
  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $query);

  // Check if the query executed successfully and if a user with the given email exists
  if($result && mysqli_num_rows($result) > 0){
    $user = mysqli_fetch_assoc($result);

    // Verify the password
    if(password_verify($password, $user['password'])){
      header('location:dashboard.php');
    }else{
      echo "Invalid password!";
    }
  }
  // Close the database connection
  mysqli_close($conn);
}
?>

