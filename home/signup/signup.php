<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
</head>
<body>
  <div class="container">
    <h2>Signup</h2>
    <form action="signup_controller.php" method="post">
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit" name="submit">Signup</button>
      </div>
    </form>
  </div>
</body>
</html>
