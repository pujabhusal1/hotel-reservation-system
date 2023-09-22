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

function create_user($username, $password) {
    global $conn;

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
    return mysqli_query($conn, $sql);
}

function get_user_by_username($username) {
    global $conn;

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    return mysqli_fetch_assoc($result);
}

function update_user_password($username, $new_password) {
    global $conn;

    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    $sql = "UPDATE users SET password = '$hashed_password' WHERE username = '$username'";
    return mysqli_query($conn, $sql);
}

mysqli_close($conn);
?>
