<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('images/5.jpg'); /* Replace with your background image path */
            background-size: cover;
            background-repeat: no-repeat;
            background-color: #111;
        }

        .container {
            background-color: #fff; /* Change to white background color */
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 320px;
            text-align: center;
        }

        .container h2 {
            margin-bottom: 20px;
            color: #000; /* Black text color */
        }

        .form-group label,
        .form-group input,
        .go-back-link,
        button {
            color: #000; /* Black text color */
        }

        .go-back-link {
            display: inline-block;
            background-color: #2196F3; /* Blue background color */
            color: #fff; /* White text color */
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            margin-right: 10px;
        }

        .go-back-link:hover {
            background-color: #0b7dda; /* Darker blue on hover */
        }

        button[type="submit"] {
            background-color: #2196F3; /* Blue background color */
            color: #fff; /* White text color */
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0b7dda; /* Darker blue on hover */
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
                <input type="text" id="username" name="username" required pattern="[A-Z][a-zA-Z]{2,}" maxlength="20">
                <small>(First letter must be capital)</small>
                <br><br>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" pattern=".*[^a-zA-Z0-9].*" required minlength="6">
                <small>(Minimum 6 characters, should have at least one non-alphanumeric character)</small>
            </div>
            <div class="form-group">
                <a href="login.php" class="go-back-link">Go Back</a>
                <button type="submit" name="submit">Signup</button>
            </div>
        </form>
    </div>

    <script>
        // Your existing JavaScript validation function here
    </script>
</body>
</html>
