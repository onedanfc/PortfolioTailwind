<?php
// Start the session
session_start();

// Dummy credentials for demonstration purposes
$valid_username = "bayu";
$valid_password = "123";

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Validate credentials
if ($username === $valid_username && $password === $valid_password) {
    // Set a cookie that expires in 2 minute
    setcookie('user', $username, time() + 120, "/");

    // Redirect to dashboard
    header("Location: dashboard.html");
    exit();
} else {
    echo "Invalid username or password.";
}
?>
