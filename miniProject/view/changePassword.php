<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tab -->
    <title>Change Password</title>
  
</head>
            <h1>Change Password</h1>

            <form method="post" action="../controller/changePassword.php">

                <!-- Current Password -->
                <label for="currentPassword">Current Password</label>
                <input type="password" name="currentPassword">

                <br>
                
                <!-- New Password -->
                <div class="mb-4">
                <label for="newPassword">New Password</label>
                <input type="password" name="newPassword">

                <br>

                
                <!-- Retype New Password -->
                <label for="retypePassword">Retype Password</label>
                <input type="password" name="retypePassword">

                <br>
                <hr>

                <!-- Submit Button -->
                <input type="submit" value="Change" name="changePassword">
            </form>
        </div>
    </div>

</body>

</html>
