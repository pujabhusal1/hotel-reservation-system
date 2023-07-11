
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
        "Select * from users where username ='" .
        $name .
        "' && password = '" .
        $password .
        "'";
    // Select * from users where username == "username" and password == "password"

    if (mysqli_query($conn, $sql)) {
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
      
        if ($num_rows > 0) {
            echo "login success";
            if ($name == "admin"){
                header("Location: http://localhost/Git/hotel-reservation-system/home/allbooking/allbooking.php");
                 exit();
              }
              else {
                $queryParams = http_build_query(['name' => $name]);
                $redirectUrl = 'http://localhost/Git/hotel-reservation-system/home/allbooking/individual_booking.php?' . $queryParams;
                // Redirect to the receiver file
                header('Location: ' . $redirectUrl);
                exit();

            }
        } else {
            echo "loginfailed";
        }
    } else {
        echo "Error Login failed" . mysqli_error($conn);
    }
}

mysqli_close($conn);
exit(); // Stop executing the rest of the code


?>
