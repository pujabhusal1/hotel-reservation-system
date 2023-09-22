<!DOCTYPE html>
<html>
<head>
    <title>Logout Confirmation</title>
</head>
<body>
    <script>
        function confirmLogout() {
            var result = confirm("Are you sure you want to logout?");
            if (result) {
                window.location.href = "logout_action.php";
            } else {
                window.location.href = "index.php"; // Redirect to index.php
            }
        }
    </script>

    <h1>Logout Confirmation</h1>
    <p>Click the "Logout" button below to logout:</p>

    <button onclick="confirmLogout()">Logout</button>
    <button onclick="window.location.href = 'index.php'">Cancel</button> <!-- Added Cancel button -->
</body>
</html>
