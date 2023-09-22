<?php
session_start();

$host = "localhost";  // Replace with your database host
$user = "your_username";  // Replace with your database username
$pass = "your_password";  // Replace with your database password
$dbname = "db_hor";  // Replace with your database name

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    if (isset($_POST["action"])) {
        if ($_POST["action"] === "login") {
            // Handle login
        } elseif ($_POST["action"] === "signup") {
            // Handle signup
        }
    }
}

mysqli_close($conn);
?>
