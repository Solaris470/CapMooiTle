<?php
include('../condb.php');

if (isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
 // Protect against SQL injection
 $username = $conn->real_escape_string($username);

 // Query to check credentials
 $query = "SELECT c_id, c_username,c_password FROM users WHERE c_username = '$username'";
 $result = $conn->query($query);

 // Check if there is a matching user
 if ($result->num_rows > 0) {
     // Fetch user data
     $row = $result->fetch_assoc();

    // Verify the password
    if (password_verify($password, $row['c_password'])) {
        // Set the user session and redirect to the dashboard
        $_SESSION['user_id'] = $row['c_id'];
        $_SESSION['user_name'] = $row['c_username'];
        header("Location: ../index.php");
        exit();
    } else {
        // Invalid password, show error message
        $error_message = "Invalid password";
        header("Location: login.php?error=" .urlencode($error_message));
    }
 } else {
     $error_message = "User not found";
     header("Location: login.php?error=" .urlencode($error_message));
 }

 // Close the database connection
 $conn->close();
}
?>