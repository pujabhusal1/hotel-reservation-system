<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <style>
        /* Your existing CSS styles here */

        .go-back-link {
            display: inline-block;
            background-color: #ccc;
            color: #fff;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            margin-right: 10px;
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
