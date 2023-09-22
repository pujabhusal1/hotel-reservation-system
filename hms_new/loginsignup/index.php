<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Interface</title>
    <!-- Your CSS and other necessary resources -->
</head>
<body>
    <h2>Welcome, <?php echo $username; ?>!</h2>
    <!-- Your user interface content here -->

    <p><a href="user_interface.php">Go to User Interface</a></p>
</body>
</html>
