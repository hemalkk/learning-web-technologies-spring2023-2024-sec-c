<?php
session_start();
require_once('../model/userModel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['username']) || !isset($_COOKIE['flag'])) {
        header('location: signIn.php');
        exit();
    }

    $userName = $_SESSION['username'];

    // Delete the user profile
    $deleted = deleteUser($userName);

    if ($deleted) {
        // Logout the user and redirect to the sign-in page
        session_unset();
        session_destroy();
        setcookie('flag', '', time() - 3600, '/');
        header('Location: ../view/deleteProfileSMS.php');
        exit();
    } else {
        echo 'Error deleting user profile.';
    }
}
?>
