
<?php
if (isset($_POST["book"])) {
    $name = $_POST["name"];
    $email= $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $roomcount = $_POST["roomcount"];
    $roomtype = $_POST["roomtype"];
    $checkindate= $_POST["checkoutdate"];
    $checkoutdate = $_POST["checkoutdate"];


    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "records";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql =
        "insert into users values('".$name."','".$email."','".$phonenumber."','".$roomcount."','".roomtype."','".roomtype."','".checkindate."','".checkoutdate."')";

    if (mysqli_query($conn, $sql)) {
        echo "booking sucess";
    } else {
        echo "booking failed" . mysqli_error($conn);
    }
}

mysqli_close($conn);
exit(); // Stop executing the rest of the code


?>
