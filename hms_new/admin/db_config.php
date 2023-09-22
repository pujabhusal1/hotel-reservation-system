// Modify the SQL query to select the specific columns from the tables
$query = $conn->query("SELECT users.id, users.email, users.username, users.password, guest.firstname, guest.lastname, guest.contactno, room.room_type, transaction.checkin, transaction.status
                       FROM `transaction`
                       INNER JOIN `guest` ON transaction.guest_id = guest.guest_id
                       INNER JOIN `room` ON transaction.room_id = room.room_id
                       INNER JOIN `users` ON guest.user_id = users.id
                       WHERE transaction.`status` = 'Pending'") or die(mysqli_error());
