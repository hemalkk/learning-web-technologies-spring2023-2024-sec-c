<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tab Bar -->
    <title>Registration</title>
</head>

<body>


<!-- Navigation Star -->

<nav>
    <a href="publicHome.php">Home</a>
    <a href="login.php">Login</a>
    <a href="Registration.php">Registration</a>
</nav>

    <!-- Form Start -->
    <form action="" method="get" enctype="">
        <!-- Name -->
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="" placeholder="Type Your Name"> <br>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="example@email.com">
        <br>

        <!-- Username -->
        <label for="username">User Name</label>
        <input type="text" id="username" name="username" value=""> <br>

        <!-- Password-->
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value=""> <br>

        <!-- Confirm Password -->
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" id="confirmPassword" name="confirmPassword" value=""> <br>



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

        <!-- reset Button -->
        <input type="reset" name="button" value="Reset" />

    </form>
    <!-- Form End -->

    <!-- Footer Start -->
    <footer>Copyright 2017</footer>

    <!-- Footer End -->
</body>

</html>