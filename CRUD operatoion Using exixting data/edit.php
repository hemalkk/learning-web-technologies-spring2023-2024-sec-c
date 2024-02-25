<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $users = isset($_SESSION['users']) ? $_SESSION['users'] : [];

    $selectedUser = null;
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            $selectedUser = $user;
            break;
        }
    }

    if (!$selectedUser) {
        echo "User not found";
        exit();
    }
} else {
    echo "Invalid request";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>

    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $selectedUser['id']; ?>">
        Name: <input type="text" name="name" value="<?php echo $selectedUser['name']; ?>"><br>
        Email: <input type="text" name="email" value="<?php echo $selectedUser['email']; ?>"><br>

        <input type="submit" value="Update">
    </form>

    <a href="userList.php">Back to User List</a>
</body>
</html>
