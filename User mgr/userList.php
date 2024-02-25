<?php
session_start();
$users = [
    ['id'=>1, 'name'=>'hemal', 'email'=>'hemal@aiub.edu'],
    ['id'=>2, 'name'=>'cutu', 'email'=>'cutu@aiub.edu'],
    ['id'=>3, 'name'=>'nora', 'email'=>'nora@aiub.edu'],
    ['id'=>4, 'name'=>'robi', 'email'=>'robi@aiub.edu'],
];
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

    <a href="home.php">Back</a>
    <a href="logout.php">Logout</a> <br><br>

    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
    <?php for($i=0; $i<count($users); $i++){ ?>
        <tr>
            <td> <?php echo $users[$i] ['id']; ?> </td>
            <td> <?php echo $users[$i] ['name']; ?> </td>
            <td> <?php echo $users[$i] ['email']; ?> </td>

            <td>
            <a href="edit.php?id=<?php echo $users[$i]['id']?>"> EDIT </a> | 
            <a href="delete.php"> DELETE </a> 
            </td>
        </tr>

    <?php } ?>

    </table>
</body>
</html>