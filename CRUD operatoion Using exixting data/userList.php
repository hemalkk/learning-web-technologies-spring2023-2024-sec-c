<?php
    session_start();

    if (!isset($_SESSION['users'])) {
        // If not set, initialize it with the predefined array
        $_SESSION['users'] = [
            ['id'=>1, 'name'=>'Hemal', 'email'=>'hemal@aiub.edu'],
            ['id'=>2, 'name'=>'cutu', 'email'=>'cutu@aiub.edu'],
            ['id'=>3, 'name'=>'robi', 'email'=>'robi@aiub.edu'],
            ['id'=>4, 'name'=>'nora', 'email'=>'nora@aiub.edu'],
        ];
    }
    $users = $_SESSION['users'];
?>

<html lang="en">
<head>
    <title>List of User</title>
</head>
<body>
    <h2> List of User</h2>

    <a href="home.php"> Back </a> |
    <a href="logout.php"> Logout </a> <br><br>

        <table border=1>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>ACTION</td>
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