
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tab Title -->
    <title>Login</title>
</head>

<body>

   
                <!-- Log In Heading  -->
                <h2 >Log In</h2>

                <!-- Form start -->
                <form method="POST" action="../controller/loginCheck.php">

                    <!--User id-->
                    <input type="text" name="id" id="" placeholder="ID">

                    <br>
                    
                    <!-- Password -->
                    <input type="password" name="password" placeholder="Password">
                    
                     <br>

                     <input type="checkbox" name="rememberMe" id="rememberMe">Remember Me

                     <br>
                     <hr>

                    <!-- Log In Button -->
                    <input type="submit" value="Log In" name="logIn">
                    <a href="reg.php">Registration</a>
                    
                </form>
                <!-- Form End -->
</body>

</html>