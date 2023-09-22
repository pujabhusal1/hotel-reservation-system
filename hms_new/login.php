<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent background */
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); /* Increased shadow */
            padding: 30px;
            width: 320px;
            text-align: center;
        }
        .container h2 {
            margin-bottom: 20px;
        }
        .container p {
            margin-top: 20px;
        }
        .error-message {
            color: red;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px; /* Slightly larger padding for better feel */
            margin-bottom: 15px; /* Increased margin */
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 12px 24px; /* Slightly larger padding */
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease; /* Add smooth transition */
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        .forgot-password {
            font-size: 16px;
            margin-top: 10px;
        }
        /* Added background image styling */
        body {
            background-image: url('images/room1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php
        if (isset($_GET["error"])) {
            echo '<p class="error-message">Login failed. Invalid credentials. Please check your username/email and password.</p>';
        }
        ?>
        <form action="login_controller.php" method="post">
            <label for="email">Email/Username:</label>
            <input type="text" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        
        <div class="forgot-password">
            <p><a href="reset_password.php">Forgot Password?</a></p>
        </div>
    </div>
</body>
</html>
