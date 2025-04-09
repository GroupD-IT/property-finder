<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Ensure passwords match
    if ($password !== $confirm_password) {
        die("❌ Error: Passwords do not match!");
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_ARGON2ID);

    // Check if database connection is working
    if (!$conn) {
        die("❌ Database connection failed: " . mysqli_connect_error());
    }

    // ✅ Check if username or email already exists
    $check_sql = "SELECT id FROM users WHERE username = ? OR email = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("ss", $username, $email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        die("Sorry!! Username or Email already exists! Try another.");
    }
    $check_stmt->close();

    // ✅ Insert new user
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("!!! SQL Error: " . $conn->error);
    }

    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()){
        // ✅ Redirect to index.php after successful registration
        header("Location: login.html");
        exit(); // Always call exit() after header redirect
    } else {
        echo "❌ Error inserting data: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
