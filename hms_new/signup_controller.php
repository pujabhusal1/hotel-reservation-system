<?php

function isPasswordInValid($passwd) {
    return true;
  }

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $name = $_POST["username"];
    $password = $_POST["password"];

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "db_hor";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if email or username already exists
    $checkSql = "SELECT * FROM users WHERE email = '$email' OR username = '$name'";
    $result = mysqli_query($conn, $checkSql);
    
    if (mysqli_num_rows($result) > 0) {
        echo "Email or username already exists.";
        echo '<a href="login.php">Go Back to Login</a>';
    } 
    else if (isPasswordInValid($password)){
        echo "Password is invalid. A valid password should contain..";

    }
    else {
        // Insert the new user's details into the database
        $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$name', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "Signup successful. ";
            echo '<a href="login.php">Go Back to Login</a>';
        } else {
            echo "Signup failed: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>
