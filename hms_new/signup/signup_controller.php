
<?php
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

    $sql =
        "insert into users values('".$email."','".$name."','".$password."')";

    if (mysqli_query($conn, $sql)) {
        echo "Signup successfull";
    } else {
        echo "Signup failed" . mysqli_error($conn);
    }
}

mysqli_close($conn);
exit(); // Stop executing the rest of the code


?>
