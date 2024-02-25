<?php
session_start();

if(!isset($_SESSION['flag'])){
header('location:login.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <nav>
        Logged in as <?php echo $_SESSION['username'];?> |
        <a href="logout.php">Logout</a>
    </nav>

    <h1>Welcome <?php echo $_SESSION['username'];?></h1>
    <h3>Account</h3>
    <a href="dashboard.php">Dashboard</a>
    <a href="viewProfile.php">View Profile</a>
    <a href="editProfile">Edit Profile</a>
    <a href="changePic">Change Profile Picture</a>
    <a href="changePass.php">Change Password</a>
    <a href="logout.php">Logout</a>

         <!-- Footer Start -->
         <footer>Copyright 2017</footer>

        <!-- Footer End -->
</body>
</html>