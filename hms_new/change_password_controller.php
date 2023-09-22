<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $newPassword = $_POST["new_password"];
    $confirmPassword = $_POST["confirm_password"];

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "db_hor";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the provided email exists in the database
    $checkSql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($result) === 1) {
        if ($newPassword === $confirmPassword) {
            // Update the password in the database
            $updateSql = "UPDATE users SET password = '$newPassword' WHERE email = '$email'";
            if (mysqli_query($conn, $updateSql)) {
                echo "Password changed successfully.";
            } else {
                echo "Password change failed: " . mysqli_error($conn);
            }
        } else {
            echo "New passwords do not match.";
        }
    } else {
        echo "Email not found.";
    }

    mysqli_close($conn);
}
?>
