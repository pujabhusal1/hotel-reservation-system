<!DOCTYPE html>
<html>
<head>
    <title>Logout Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background-image: url('images/room1.jpg');
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .confirmation-box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        .button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .cancel-button {
            background-color: #ccc;
        }

        .cancel-button:hover {
            background-color: #999;
        }
    </style>
</head>
<body>
    <div class="confirmation-box">
        <h1>Logout Confirmation</h1>
        <p>Are you sure you want to logout?</p>
        <div class="button-container">
            <button class="button" onclick="confirmLogout()">Logout</button>
            <button class="button cancel-button" onclick="cancelLogout()">Cancel</button>
        </div>
    </div>

    <script>
        function confirmLogout() {
            var result = confirm("Are you sure you want to logout?");
            if (result) {
                window.location.href = "logout_action.php"; // Redirect to logout action
            }
        }

        function cancelLogout() {
            window.location.href = "index.php"; // Redirect to index page
        }
    </script>
</body>
</html>
