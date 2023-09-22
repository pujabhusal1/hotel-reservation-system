<?php
// Require the database connection file (connect.php)
require_once 'connect.php';

// Check if 'room_id' is provided and not empty
if (isset($_REQUEST['room_id']) && !empty($_REQUEST['room_id'])) {
    // Sanitize the input to prevent SQL injection
    $room_id = $_REQUEST['room_id'];
    $room_id = mysqli_real_escape_string($conn, $room_id);

    // Your DELETE query using prepared statement
    $sql = "DELETE FROM `room` WHERE `room_id` = ?";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind the 'room_id' parameter to the prepared statement
        mysqli_stmt_bind_param($stmt, "i", $room_id);

        // Execute the prepared statement
        mysqli_stmt_execute($stmt);

        // Check if the query was successful
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "Record deleted successfully.";
        } else {
            echo "No record found with the provided room_id.";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error in preparing the statement: " . mysqli_error($conn);
    }
} else {
    echo "Invalid or missing room_id parameter.";
}

// Close the database connection
mysqli_close($conn);

// Redirect to 'room.php'
header("location:room.php");

?>