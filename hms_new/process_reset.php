<?php
if (isset($_POST["reset"])) {
    $email = $_POST["email"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];

    if ($newPassword === $confirmPassword) {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $dbname = "db_hor";

        $conn = mysqli_connect($host, $user, $pass, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Update the user's password in the database
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        $updateSql = "UPDATE users SET password = '$hashedPassword' WHERE email = '$email'";
        if (mysqli_query($conn, $updateSql)) {
            echo "Password reset successful. ";
            echo '<a href="login.php">Go Back to Login</a>';
        } else {
            echo "Password reset failed: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        echo "Passwords do not match.";
    }
}
?>
