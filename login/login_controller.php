<?php
if (isset($_POST["submit"])) {
    $name = $_POST["username"];
    $password = $_POST["password"];

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "records";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql =
        "SELECT * FROM users WHERE username ='" .
        $name .
        "' AND password = '" .
        $password .
        "'";

    if (mysqli_query($conn, $sql)) {
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
        if ($num_rows > 0) {
            // Redirect to allbooking.php inside allbooking folder
            header("Location:reserve/book.php");
            exit(); // Make sure to exit after the redirect
        }
?>
