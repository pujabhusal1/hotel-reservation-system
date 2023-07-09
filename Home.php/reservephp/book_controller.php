<?php
if (isset($_POST["book"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];
    $roomcount = $_POST["roomcount"];
    $roomtype = $_POST["roomtype"];
    $checkindate = $_POST["checkindate"];
    $checkoutdate = $_POST["checkoutdate"];
    $remarks = $_POST["remarks"];

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "records";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "insert into book (`Name`, `Email`, `PhoneNumber`, `RoomCount`, `RoomType`, `Checkin_Date`, `Checkout_Date`, `Remarks`) VALUES ('$name', '$email', '$phonenumber', '$roomcount', '$roomtype', '$checkindate', '$checkoutdate', '$remarks')";

    // Add this line to print the query
    if (mysqli_query($conn, $sql)) {
        // Code to execute if the query is successful
        echo "Successfully booked.";
    } else {
        // Code to execute if the query fails
        echo "Booking failed: " . mysqli_error($conn);
    }
    

    mysqli_close($conn); // Close the database connection
    exit(); // Stop executing the rest of the code
}


?>


