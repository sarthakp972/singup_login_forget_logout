<?php
session_start(); // Start the session

// Check if user is logged in
if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_email'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}

// Retrieve user data from session
$user_id = $_SESSION['user_id'];
$user_email = $_SESSION['user_email'];

// You can use this data to display on the page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
    <h1>Hello, <?php echo $user_email; ?></h1>
    <!-- You can display more user data here -->
    pkpk
</body>
</html>
