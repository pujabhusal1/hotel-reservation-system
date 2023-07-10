<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book</title>
    <style>
        body {
            background-color: #f8f8f8;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            
        }
        .container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 16px;
            color: #555;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus, input[type="tel"]:focus {
            border-color: #4CAF50;
        }
        button[type="submit"] {
            padding: 12px 24px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>



</head>
<body>
    <div class="container">
        <h2>Book</h2>
        <form action="book_controller.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
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
                <label for="checkindate">Check-in Date:</label>
                <input type="text" id="checkindate" name="checkindate" required>
            </div>
            <div class="form-group">
                <label for="checkoutdate">Checkout Date:</label>
                <input type="text" id="checkoutdate" name="checkoutdate" required>
            </div>
            <div class="form-group">
                <label for="remarks">Remarks:</label>
                <input type="text" id="remarks" name="remarks" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
