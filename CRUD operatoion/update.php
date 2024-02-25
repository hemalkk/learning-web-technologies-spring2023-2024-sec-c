<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $users = isset($_SESSION['users']) ? $_SESSION['users'] : [];

    foreach ($users as &$user) {
        if ($user['id'] == $id) {

            // Update info
            $user['name'] = $_POST['name'];
            $user['email'] = $_POST['email'];
            break;
        }
    }

    // Save update user 
    $_SESSION['users'] = $users;

    header('location: userList.php');
    exit();
} else {
    echo "Invalid request";
    exit();
}
?>
