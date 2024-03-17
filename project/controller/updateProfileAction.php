<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('../model/userModel.php');

// Check if the user is logged in
if (!isset($_SESSION['username']) || !isset($_COOKIE['flag'])) {
    // Redirect to the sign-in page
    header('Location: ../view/signIn.php');
    exit();
}

// Get the login identifier (username or email)
$userNameOrEmail = $_SESSION['username'];

// Get user data based on the login method
$userData = getUserData($userNameOrEmail);

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

    if (updateUserProfile($userNameOrEmail, $updatedData)) {
        // Redirect to view profile page after update
        header('Location: ../view/viewProfile.php');
        exit();
    } else {
        echo 'Error updating user profile.';
    }
}
?>
