<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <style>
        body {
            background-image: url('6.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 400px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input[type="email"],
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none; /* Remove default focus outline */
        }

        small {
            color: #888;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #45a049; /* Darker shade on hover */
        }

        .error-message {
            display: none;
            color: #d50000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Signup</h2>
        <form action="signup_controller.php" method="post" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br><br>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required pattern="[A-Z][a-zA-Z]{2,}">
                <small>(First letter most be capital)</small>
                <br><br>

        
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required minlength="6">
                <small>(Minimum 6 characters)</small>
                <div class="error-message">Password must be at least 6 characters long.</div>
            </div>
            <div class="form-group">
           
            <!-- Add the link in the signup button -->
            <a href="login.php">
                <button type="submit" name="submit">Signup</button>
            </div>
        </form>
    </div>

    <script>
        function validateForm() {
            var usernameInput = document.getElementById('username');
            var passwordInput = document.getElementById('password');
            var usernameErrorMessage = document.querySelector('#username + .error-message');
            var passwordErrorMessage = document.querySelector('#password + .error-message');

            // Hide previous error messages
            usernameErrorMessage.style.display = 'none';
            passwordErrorMessage.style.display = 'none';

            // Custom validation for the username field
            var usernamePattern = /^[a-zA-Z][a-zA-Z0-9_]{3,15}$/;
            if (!usernamePattern.test(usernameInput.value)) {
                usernameErrorMessage.style.display = 'block';
                return false;
            }

            // Custom validation for the password field
            if (passwordInput.value.length < 6) {
                passwordErrorMessage.style.display = 'block';
                return false;
            }

            return true; // Allow the form submission if all validations pass
        }
    </script>
</body>
</html>
