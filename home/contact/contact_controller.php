<?php
/*
echo '<pre>';
var_dump($_POST);
echo '</pre>';
*/


    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $message = $_POST["message"];
   
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "records";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "insert into contact (`name`, `email`, `message`) values ('$name', '$email', '$message')";
    

    if (mysqli_query($conn, $sql)) {
        // Code to execute if the query is successful
        echo "Thank you for messaging. We will reply soon";
    }
    else 
    {
        echo "Message failed to send" . mysqli_error($conn);
    }
   mysqli_close($conn); // Close the database connection
    

?>
