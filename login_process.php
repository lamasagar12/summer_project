<?php
session_start();
include_once("db.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to retrieve user data based on the username
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $dbUsername, $dbPassword);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $dbPassword)) {
            // Password is correct, set up the session and redirect to index
            $_SESSION['user_id'] = $id;
            header("Location: index.php");
            exit();
        } else {
            // Password is incorrect, set error message and redirect back to login page
            $_SESSION['login_error'] = "Incorrect password. Please try again.";
            header("Location: login.php");
            exit();
        }
    } else {
        // User not found, set error message and redirect back to login page
        $_SESSION['login_error'] = "User not found. Please check your username.";
        header("Location: login.php");
        exit();
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>
