<?php
// edit_query_user.php

if (isset($_POST['edit'])) {
    // Get the form data
    $user_id = $_POST['id'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate and sanitize the data if needed (you can implement this based on your requirements)

    // Update the user information in the database
    $query = "UPDATE users SET email = '$email', username = '$username', password = '$password' WHERE id = '$user_id'";
    $result = $conn->query($query);

    if ($result) {
        // Redirect the user back to the edit_user.php page with a success message
        header("Location: edit_user.php?user_id=$user_id&success=1");
        exit();
    } else {
        // Handle the case when the update fails and redirect back with an error message
        header("Location: edit_user.php?user_id=$user_id&error=1");
        exit();
    }
}
?>
