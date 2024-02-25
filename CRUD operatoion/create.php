<?php
session_start();

// assign $_SESSION['users'] array 
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

// Form handling

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $users = $_SESSION['users'];

    
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Create new user
    $newUser = ['id' => count($users) + 1, 'name' => $name, 'email' => $email];

    // Add new user 
    $users[] = $newUser;
    $_SESSION['users'] = $users;

    header('location: userList.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    <h2>Create User</h2>

    <form action="create.php" method="POST">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>

        <input type="submit" value="Create">
    </form>

    <a href="userList.php">Back User List</a>
</body>
</html>
