<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
        Logged in as |
        <a href="logout.php">Logout</a>
    </nav>

    <h1>Welcome </h1>
    <h3>Account</h3>
    <a href="dashboard.php">Dashboard</a>
    <a href="viewProfile.php">View Profile</a>
    <a href="editProfile">Edit Profile</a>
    <a href="changePic">Change Profile Picture</a>
    <a href="changePass.php">Change Password</a>
    <a href="logout.php">Logout</a>

    <br>

    <h1>Edit Profile</h1>
    <!-- Name -->
    <label for="name">Name</label>
        <input type="text" id="name" name="name" value="" placeholder="Type Your Name"> <br>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="example@email.com">
        <br>
        <!-- Gender -->
        <label for="gender">Gender</label>
        <input type="radio" id="male" name="gender" value="">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="">
        <label for="other">Other</label>
        <br>

        <!-- DOB -->
        <label for="birthday">Date of Birth:</label>
        <input type="date" id="birthday" name="birthday">
        <br>

        <!-- Submit Button -->
        <input type="submit" value="Submit">



         <!-- Footer Start -->
         <footer>Copyright 2017</footer>

        <!-- Footer End -->
</body>
</html>
