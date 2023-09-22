<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_hor";

// Check if the user ID is provided in the URL parameter
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch the user details to display in the confirmation message
    $sql = "SELECT * FROM users WHERE id = '$userId'";
    $result = mysqli_query($conn, $sql);
    $userDetails = mysqli_fetch_assoc($result);

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "Invalid user ID provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete User Data</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            color: #008080; /* Teal color for the heading */
        }
        .confirmation-details {
            margin-bottom: 20px;
        }
        .confirmation-details p {
            margin: 5px 0;
            font-weight: bold;
        }
        .btn-group {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn-group button {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
        }
        .btn-delete {
            background-color: #d9534f; /* Red color for delete button */
            color: #fff;
        }
        .btn-cancel {
            background-color: #337ab7; /* Blue color for cancel button */
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Delete User Data</h1>
        <?php if ($userDetails) { ?>
            <div class="confirmation-details">
                <p>Are you sure you want to delete the following user data?</p>
                <p><strong>ID:</strong> <?php echo $userDetails['id']; ?></p>
                <p><strong>Email:</strong> <?php echo $userDetails['email']; ?></p>
                <p><strong>Username:</strong> <?php echo $userDetails['username']; ?></p>
                <p><strong>Password:</strong> <?php echo $userDetails['password']; ?></p>
            </div>
            <div class="btn-group">
                <form action="delete_confirm.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $userId; ?>">
                    <button class="btn-delete" type="submit">Delete</button>
                </form>
                <a class="btn-cancel" href="javascript:history.back()">Cancel</a>
            </div>
        <?php } else {
            echo "User data not found.";
        } ?>
    </div>
</body>
</html>
