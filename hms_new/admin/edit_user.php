<?php
// edit_user.php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_hor";

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user_id = $_GET['id'];

    // Fetch the user data from the database
    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);

        // Check if the form is submitted for updating the user data
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve the form data
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Update the user data in the database
            $update_sql = "UPDATE users SET email = '$email', username = '$username', password = '$password' WHERE id = $user_id";
            if (mysqli_query($conn, $update_sql)) {
                // Redirect back to the user data table after successful update
                header("Location: userdata.php");
                exit;
            } else {
                echo "Error updating user data: " . mysqli_error($conn);
            }
        }
    } else {
        echo "User not found.";
        exit;
    }
} else {
    echo "Invalid user ID.";
    exit;
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <!-- Add your CSS links here -->
</head>
<body>
    <h1></h1>
    <form method="POST">
        <label></label><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #008080; /* Teal color for the heading */
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333; /* Dark gray color for label text */
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #008080; /* Teal color for the button */
            color: #fff; /* White text color */
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #006666; /* Darker teal color on hover */
        }
    </style>
</head>
<body>
    <h1>Edit User Data</h1>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?php echo $user_data['email']; ?>" required>

        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?php echo $user_data['username']; ?>" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" value="<?php echo $user_data['password']; ?>" required>

        <input type="submit" value="Update">
    </form>
</body>
</html>

       
