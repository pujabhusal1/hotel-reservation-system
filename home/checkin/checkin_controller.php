
<?php
if (isset($_POST["submit"])) {
    $bookingid = $_POST["bookingid"];
    $email = $_POST["email"];
    $phoneno = $_POST["phoneno"];
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "records";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $current_time = date('Y-m-d H:i');
    $sql = "UPDATE book SET checkin_date = '".$current_time."' WHERE booking_id = '".$bookingid."'";
       

    if (mysqli_query($conn, $sql)) {
        echo "checkin completed";
    } else {
        echo "checkin failed" . mysqli_error($conn);
    }
}

mysqli_close($conn);
exit(); // Stop executing the rest of the code


?>
