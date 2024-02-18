
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tab -->
    <title>Login</title>
</head>
<body>

<!-- Heading for Login -->
<h1>Login</h1>    

<!-- Form Start -->
<form action="loginAction.php" method="post" enctype="application/x-www-form-urlencoded">

    <!-- Username -->
    <label for="uname">Username:</label>
    <input type="text" name="uname" id="uname">

    <br>

    <!-- Password -->
    <label for="pass">Password:</label>
    <input type="password" name="pass" id="pass">

    <hr>

    <!-- Remember Me -->
    <input type="checkbox" name="rme" id="rme"> Remember Me
    <br>


    <!-- Submit -->
    <button type="submit">Submit</button>

    <!-- Forgot Password -->
    <a href="forgotPass.php" target="_blank">Forgot Password?</a>

</form>
<!-- Form End -->
</body>
</html>