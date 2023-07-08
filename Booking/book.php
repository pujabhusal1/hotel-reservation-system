<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book now</title>
</head>
<body>
  <div class="container">
    <h2>Book now</h2>
    <form action="book_controller.php" method="post">
    <div class="form-group">
    <label for="email">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
      </div>
      <label for="email">Phone number:</label>
        <input type="text" id="phone" name="phone" required>
      </div>
      <div class="form-group">
      <label for="roomcount">Room count:</label>
        <input type="text" id="roomcount" name="roomcount" required>
      </div>
      <div class="form-group">
        <label for="username">Room type:</label>
        <input type="text" id="roomtype" name="room type" required>
      </div>
      <div class="form-group">
        <label for="password">Checkin_Date:</label>
        <input type="number" id="checkin" name="checkin" required>
      </div>
      <label for="checkout">Checkout_Date:</label>
        <input type="number" id="checkout" name="checkin" required>
      </div>
      <div class="form-group">
        <button type="submit" name="submit">book</button>
      </div>
    </form>
  </div>
</body>
</html>
