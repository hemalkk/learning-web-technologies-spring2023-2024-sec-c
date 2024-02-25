<?php
session_start();

$users = isset($_SESSION['users']) ? $_SESSION['users'] : [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <h2>User List</h2>

    <a href="create.php">New User</a>
    <a href="logout.php">Logout</a> <br><br>

    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $user['id']; ?>">Edit</a> |
                    <a href="delete.php?id=<?php echo $user['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>
