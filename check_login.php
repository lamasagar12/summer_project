<?php
session_start();z
// Check if the user is not logged in, then redirect to the login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>