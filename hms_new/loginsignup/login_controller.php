<?php

echo isset($_POST["submit"]); // RL 
echo $_POST["submit"]; // RL

if (isset($_POST["submit"])) {
    $emailOrUsername = $_POST["email"];
    $password = $_POST["password"];

    echo $emailOrUsername; // RL
    echo $password; // RL

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "db_hor";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Use prepared statement to avoid SQL injection
    $sql = "SELECT * FROM users WHERE (email=? OR username=?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $emailOrUsername, $emailOrUsername);
    mysqli_stmt_execute($stmt);

    echo $stmt; // RL

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Verify the hashed password
        if (password_verify($password, $row['password'])) {
            // Login successful
            echo "Login successful";
            // Perform additional actions (e.g., set session variables, redirect to dashboard, etc.)
        } else {
            // Login failed, incorrect password
            echo "Incorrect email/username or password";
        }
    } else {
        // Login failed, user not found
        echo "User not found";
    }

    // Close the statement and the connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
