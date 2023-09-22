<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>
</head>
<body>
    
    // Include the userdata.php file to establish the database connection
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>User List</title>
    </head>
    <body>
       
    
        <table>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td>
                        <!-- Add a link to the edit_user.php page for each user -->
                        <a href="userdata.php"?id=<?php echo $row['id']; ?>">Edit</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </body>
    </html>
    

   