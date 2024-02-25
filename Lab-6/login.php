<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
<!-- Navigation Star -->

<nav>
    <a href="publicHome.php">Home</a>
    <a href="login.php">Login</a>
    <a href="Registration.php">Registration</a>
</nav>


<!-- Form Start -->   
        <form action="loginCheck.php" method="POST">
        <fieldset>

            <!-- Username -->
            Username: <input type="text" name="username"> <br>
            <!-- Password -->
            Password: <input type="password" name="password" id="password"><br>
            <hr>
            <input type="checkbox" id="rememberMe" name="rememberMe" value="">Remeber Me
            <br>
            <!-- Submit Button -->
            <input type="submit" value="submit" name="submit">
            <a href="forgotPassword.php">Forgot Password?</a>

        </fieldset>

        </form>

    <!-- Form End -->

    <!-- Footer Start -->
    <footer>Copyright 2017</footer>

    <!-- Footer End -->
</body>
</html>