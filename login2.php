<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form id="login-form" method="POST" action="login.php">
      <div class="form-group">
        <label for="login-email">Email:</label>
        <input type="email" id="login-email" name='email' required>
      </div>
      <div class="form-group">
        <label for="login-password">Password:</label>
        <input type="password" id="login-password" name='password' required>
      </div>
      <div class="form-group">
        <button type="submit" name='login'>Login</button>
      </div>
      <div class="switch-form">
        <p>Don't have an account? <a href="signup.html">Sign up</a></p>
      </div>
    </form>
  </div>
</body>
</html>






