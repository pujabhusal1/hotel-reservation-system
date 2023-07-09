<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book</title>
</head>
<body>
  <div class="container">
    <h2>Book</h2>
    <form action="book_controller.php" method="POST">
    <div class="form-group">
        <label for="email">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phonenumber">Phone Number:</label>
        <input type="tel" id="phonenumber" name="phonenumber" required>
      </div>
      <div class="form-group">
        <label for="roomcount">Room Count:</label>
        <input type="text" id="roomcount" name="roomcount" required>
      </div>
      <div class="form-group">
        <label for="roomtype">Room Type:</label>
        <input type="text" id="roomtype" name="roomtype" required>
      </div>
      <div class="form-group">
        <label for="checkindate">Checkin_Date:</label>
        <input type="text" id="checkindate" name="checkindate" required>
      </div>
      <div class="form-group">
        <label for="checkoutdate">Checkout_Date:</label>
        <input type="text" id="checkoutdate" name="checkoutdate" required>
      </div>
      <div class="form-group">
        <label for="remarks">Remarks:</label>
        <input type="text" id="remarks" name="remarks" required>
      </div>
      <div class="form-group">
        <button type="book" name="book">submit</button>
      </div>
    </form>
  </div>
</body>
</html>
