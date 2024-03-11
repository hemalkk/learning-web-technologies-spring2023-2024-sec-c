<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tab -->
    <title>Reset Password</title>
    <!-- tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto py-8">
        <div class="max-w-md mx-auto bg-white rounded-md shadow-md p-8">

            <h1 class="text-2xl font-semibold mb-6">Reset Password</h1>

            <form method="post" action="../controller/resetPasswordAction.php">
                <!-- Old Password -->
                <div class="mb-4">
                    <label for="oldPassword" class="block text-sm font-medium text-gray-700">Old Password</label>
                    <input type="password" name="oldPassword" placeholder="Old Password" required class="mt-1 p-2 rounded-md border w-full">
                </div>

                <!-- New Password -->
                <div class="mb-4">
                    <label for="newPassword" class="block text-sm font-medium text-gray-700">New Password</label>
                    <input type="password" name="newPassword" placeholder="New Password" required class="mt-1 p-2 rounded-md border w-full">
                
                </div>

                <!-- Confirm New Password -->
                <div class="mb-6">
                    <label for="confirmPassword" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                    <input type="password" name="confirmPassword" placeholder="Confirm New Password" required class="mt-1 p-2 rounded-md border w-full">
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <input type="submit" value="Reset Password" name="resetPassword" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">
                </div>
            </form>
        </div>
    </div>

</body>

</html>
