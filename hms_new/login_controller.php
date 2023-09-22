<?php
if (isset($_POST["submit"])) {
    $emailOrUsername = $_POST["email"];
    $password = $_POST["password"];

    // Perform login validation
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "db_hor";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the user's email or username and password match
    $checkSql = "SELECT * FROM users WHERE (email = '$emailOrUsername' OR username = '$emailOrUsername') AND password = '$password'";
    $result = mysqli_query($conn, $checkSql);
    
    if (mysqli_num_rows($result) > 0) {
        // Successful login
        session_start();
        $_SESSION["username"] = $emailOrUsername;
        mysqli_close($conn);
        header("Location: user_interface.php"); // Redirect to reservation.php or your desired page
        exit();
    } else {
        mysqli_close($conn);
        header("Location: login.php?error=true"); // Redirect back to login.php with an error parameter
        exit();
    }
}
?>
