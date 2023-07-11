<!DOCTYPE html>
<html lang="en">
<head>
    <title>checkin</title>
    <style>
        body {
            background-image: url('1.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 500px;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);

        }

        h2 {
            text-align: center;
            color: #333;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 8px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>
</head>
<body>
  <div class="container">
    <h2>checkin</h2>
    <form action="checkin_controller.php" method="post">
      <div class="form-group">
        <label for="bookingid">Bookingid:</label>
        <input type="text" id="bookingid" name="bookingid" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
      </div>
    
      <div class="form-group">
        <label for="phoneno">Phoneno:</label>
        <input type="num" id="phoneno" name="phoneno" required>
      </div>
      <div class="form-group">
        <button type="submit" name="submit">checkin</button>
      </div>
    </form>
  </div>
</body>
</html>
