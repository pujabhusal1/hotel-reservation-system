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
<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
		<title>The New View Hotel</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >The New View Hotel</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "home.php">Home</a></li>
			<li><a href = "account.php">Accounts</a></li>
			<li><a href = "reserve.php">Reservation</a></li>
			<li><a href = "room.php">Room</a></li>	
            <li class = "active"><a href = "userdata.php">Userdata</a></li>	
			
		</ul>	
	</div>
<head>
    <title>User Data Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #008080; /* Teal color for the heading */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border-radius: 5px;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333; /* Dark gray color for header text */
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        tr:nth-child(even) {
            background-color: #dark green; /* Light gray color for even rows */
        }
        tr:nth-child(odd) {
            background-color: #f0f0f0; /* A slightly darker gray color for odd rows */
        }
        td {
            color: #444; /* Dark gray color for data cells */
        }
    </style>
</head>
<body>




<!DOCTYPE html>
<html>
<head>
    <title>User Data Table</title>
    <style>
        /* Your existing CSS styles here... */
    </style>
</head>
<!DOCTYPE html>
<html>
<head>
    <title>User Data Table</title>
    <style>
        /* Your existing CSS styles here... */
    </style>
    <script>
        function editUser(userId) {
            // You can perform any actions you want when the Edit button is clicked
            // For example, you can redirect to the "edit.php" page with the user ID as a parameter
            window.location.href = 'edit.php?id=' + userId;
        }

        function deleteUser(userId) {
            // You can perform any actions you want when the Delete button is clicked
            // For example, you can display a confirmation dialog and then perform the delete operation
            if (confirm("Are you sure you want to delete this user?")) {
                // Redirect to the "delete.php" page with the user ID as a parameter after confirmation
                window.location.href = 'delete.php?id=' + userId;
            }
        }
        <!DOCTYPE html>
<html>
<head>
    <title>User Data Table</title>
    <style>
        /* Your existing CSS styles here... */
    </style>
    <script>
        function editUser(userId) {
            // Redirect to the "edit_user.php" page with the user ID as a parameter
            window.location.href = 'edit_user.php?id=' + userId;
        }

        function deleteUser(userId) {
            // Display a confirmation dialog and then redirect to "update_user.php" with the user ID as a parameter
            if (confirm("Are you sure you want to delete this user?")) {
                window.location.href = 'update_user.php?id=' + userId;
            }
        }
    </script>
</head>
<body>
    <h1>User Data Table</h1>
    <table border="1">
        <tr>
        <th>id</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
            <td><?php echo $row['id']; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["password"]; ?></td>
               
                
                <td><a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a></td>


                <td><a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a></td>

            </tr>
        <?php } ?>
    </table>
</body>
</html>


