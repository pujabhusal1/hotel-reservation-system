<?php
// update_user.php

// Check if the form is submitted and the user ID is provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["user_id"])) {
    // Get the user ID from the form submission
    $user_id = $_POST["user_id"];

    // Get the updated user information from the form fields
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Your database connection code (similar to the one you provided in your original code)
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "db_hor";

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL query to update the user information
    $sql = "UPDATE users SET email = '$email', username = '$username', password = '$password' WHERE id = $user_id";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Redirect back to the user data table after successful update
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating user information: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Handle the case when the form is not submitted or the user ID is missing
    echo "Invalid request!";
}
?>
