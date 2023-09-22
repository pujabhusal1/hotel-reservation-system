<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];

    // Check if the provided email exists in the database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "db_hor";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $checkSql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($result) === 1) {
        // Valid email, send password reset instructions here
        echo "Instructions for resetting password have been sent to your email.";
        
        // Create a link to another file (change_password.php)
        echo '<br><a href="password_change.php?email=' . urlencode($email) . '">Click here to change your password</a>';
    } else {
        echo "Email not found.";
    }

    mysqli_close($conn);
}
?>
