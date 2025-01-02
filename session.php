<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['sess_user'])) {
    // Redirect the user to the login page
    header("Location: login.php");
    exit(); // Stop further execution
}
?>