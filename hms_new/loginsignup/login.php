<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login and Signup Forms</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
      
        <h2>Login</h2>
        <form action="login_controller.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="submit">Login</button>
        </form>
        <p><a href="forgot_password.php">Forgot Password?</a></p>
        <div class="signup-message">
            <p>Don't have an account yet? <a href="signup.php">Sign up here</a> to continue to the login.</p>
        </div>
        
            
        </div>
    </div>
</body>
</html>
