<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('../model/userModel.php');

// Check if the user is logged in
if (!isset($_SESSION['username']) || !isset($_COOKIE['flag'])) {
    // Add some debug information to identify the issue
    echo 'Not logged in. Redirecting to sign-in page...';
    exit();
}

// Get user data
$userName = $_SESSION['username'];
$userData = getUserData($userName);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updatedData = array(
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'DOB' => $_POST['DOB'],
        'gender' => $_POST['gender'],
        'mobile' => $_POST['mobile'],
        'address' => $_POST['address'],
        'email' => $_POST['email'],
    );

    if (updateUserProfile($userName, $updatedData)) {
        // Redirect to view profile page after update
        header('Location: ../view/viewProfile.php');
        exit();
    } else {
        echo 'Error updating user profile.';
    }
}
?>
