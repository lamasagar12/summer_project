<?php
session_start();
include_once("db.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security

    // SQL query to check if the username or email already exists
    $checkQuery = $conn->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
    $checkQuery->bind_param("ss", $username, $email);
    $checkQuery->execute();
    $result = $checkQuery->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['signup_message'] = "Username or email already exists";
        header("Location: signup.php");
        exit();
    }

    // SQL query to insert data into the users table
    $insertQuery = $conn->prepare("INSERT INTO users (firstname, lastname, email, username, phonenumber, password) VALUES (?, ?, ?, ?, ?, ?)");
    $insertQuery->bind_param("ssssss", $firstname, $lastname, $email, $username, $phonenumber, $password);

    // Execute the query
    if ($insertQuery->execute()) {
        $_SESSION['signup_message'] = "Signup successful";
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['signup_message'] = "Error: " . $conn->error;
        header("Location: signup.php");
        exit();
    }
}

// Close the prepared statement and database connection
$checkQuery->close();
$insertQuery->close();
$conn->close();
?>
