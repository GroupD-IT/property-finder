<?php
$host = "localhost"; // XAMPP runs MySQL on localhost
$user = "root"; // Default username in XAMPP
$password = ""; // Default password is empty
$database = "auth_system"; // Your database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connected successfully!";
}
?>
