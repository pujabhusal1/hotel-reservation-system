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
    if (isset($_POST["action"]) && $_POST["action"] === "signup") {
        $email = $_POST["email"];
        $name = $_POST["username"];
        $password = $_POST["password"];

        // Use prepared statements to prevent SQL injection
        $sql = "INSERT INTO users (email, username, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $email, $name, $password);

        if (mysqli_stmt_execute($stmt)) {
            echo "Signup successful. ";
            echo '<a href="login.php">Go Back to Login</a>';
        } else {
            echo "Signup failed: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);
    }
}

mysqli_close($conn);
?>
