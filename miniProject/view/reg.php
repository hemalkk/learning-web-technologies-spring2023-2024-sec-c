<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tab Title -->
    <title>Registration</title>
</head>

<body>
            <!-- Registration Welcome -->
            <h2>Registration</h2>

                <!-- Registration form Start -->
                <form method="POST" action="../controller/regCheck.php">


                     <!--ID -->
                     <label for="id" >ID</label>
                    <input type="number" name="id" id="id">

                    <br>

                    <!-- Password -->
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" required>

                    <br>

                    <!-- Confirm Password -->
                    <label for="confirmPassword">Confirm Password</label>
                    <input id="confirmPassword" name="confirmPassword" type="password" required>

                    <br>

            
                    <!--Name -->
                    <label for="name" >Name</label>
                    <input id="name" name="name" placeholder="Name" type="text" required>
                     
                    <br>

                    
                    <!-- Email Address -->
                    <label for="email">Email</label>
                    <input id="email" name="email" placeholder="user@example.com" type="email" required>

                    <br>
                    
                    <!-- user type -->
                    <label for="userType">User Type</label>
                    <select id="userTypes" name="userType">
                        <option value="User">User</option>
                        <option value="Admin">Admin</option>
                    </select>

                    <br>
                    <hr>

                    <!-- Registration Button -->
                    <input type="submit" value="Registration" name="Registration">
                    <a href="login.php">Login</a>
                   
                </form>
                 <!-- Registration form End -->

</body>

</html>