<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_hor";

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the "users" table
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Data Table</title>
</head>
<body>
    <h1>User Data Table</h1>
    <table border="1">
        <tr>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["password"]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
