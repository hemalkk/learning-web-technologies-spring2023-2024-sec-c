<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Tab -->
    <title>Forgot Password</title>
</head>
<body>
    <!-- Change Pass -->
    <h1>Change Password</h1>

    <!-- Form Start -->
<form action="forgotPassAction.php" method="post" enctype="application/x-www-form-urlencoded">

    <!-- Current Password -->
    <label for="cpass">Current Password:</label>
    <input type="password" name="cpass" id="cpass">

    <br>
    <!-- New Password -->
    <label for="newPass" id="newPass">New Password:</label>
    <input type="password" name="newPass" id="newPass">

    <br>
    <!-- Retype Password-->
    <label for="retypePass" id="retypePass">Retype Password:</label>
    <input type="password" name="retypePass" id="retypePass">

    <br>
    <hr>
    <!-- Submit -->
    <button type="submit">Submit</button>

</form>
<!-- Form End -->
</body>
</html>