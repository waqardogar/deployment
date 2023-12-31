<!DOCTYPE html>
<html>
<head>
  <title>Signup Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Sign Up</h2>
    <form action="signup.php" method="POST">
      <div class="form-group">
        <label for="signup-name">Name:</label>
        <input type="text" id="signup-name" name='name' required>
      </div>
      <div class="form-group">
        <label for="signup-email">Email:</label>
        <input type="email" id="signup-email" name='email' required>
      </div>
      <div class="form-group">
        <label for="signup-password">Password:</label>
        <input type="password" id="signup-password" name='password' required>
      </div>

      <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">

      <div class="form-group">
        <button type="submit" name='submit'>Sign Up</button>
      </div>
      <div class="switch-form">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>