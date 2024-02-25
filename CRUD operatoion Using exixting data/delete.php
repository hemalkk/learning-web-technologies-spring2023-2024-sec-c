<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $users = isset($_SESSION['users']) ? $_SESSION['users'] : [];

    // Find and remove the user with the specified ID
    $users = array_filter($users, function ($user) use ($id) {
        return $user['id'] != $id;
    });

    // Save the updated user array to the session
    $_SESSION['users'] = $users;

    header('location: userList.php');
    exit();
} else {
    echo "Invalid request";
    exit();
}
?>
