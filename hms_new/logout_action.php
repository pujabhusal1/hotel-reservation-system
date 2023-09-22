<?php
// Perform logout actions here (e.g., destroy session, clear cookies, etc.)
session_start(); // If using sessions
session_destroy();

// Redirect to the login page or home page after logout
header("Location: index.php");
exit;
?>
