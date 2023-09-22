<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
</head>
<body>
    <h1>Signup</h1>
    <form id="signupForm">
        <label for="signupUsername">Username:</label>
        <input type="text" id="signupUsername" name="signupUsername" required><br>
        <label for="signupPassword">Password:</label>
        <input type="password" id="signupPassword" name="signupPassword" required><br>
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required><br>
        <button type="submit">Signup</button>
    </form>

    <script src="signup.js"></script>
</body>
</html>
