

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loginform</title>
</head>
<body>
  <div class="container">
    <h2>Login Form</h2>
    <form action="home.php" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit" name="submit">Login</button>
      </div>
    </form>
  </div>
</body>
</html>
