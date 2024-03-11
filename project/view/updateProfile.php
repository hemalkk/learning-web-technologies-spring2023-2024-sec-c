<?php
session_start();
require_once('../model/userModel.php');
include('../controller/updateProfileAction.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tab -->
    <title>Update Profile</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto py-8">
        <div class="max-w-4xl mx-auto bg-white rounded-md shadow-md p-8">

            <h1 class="text-2xl font-semibold mb-6">Update Profile</h1>

            <form method="post" action="../controller/updateProfileAction.php">
                <!-- Display User Data -->
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div>
                        <!-- First Name -->
                        <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
                        <input type="text" name="firstName" id="firstName" value="<?= htmlspecialchars($userData['firstName']) ?>" class="mt-1 p-2 rounded-md border w-full" required>
                    </div>
                    <div>
                        <!-- last Name -->
                        <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <input type="text" name="lastName" id="lastName" value="<?= htmlspecialchars($userData['lastName']) ?>" class="mt-1 p-2 rounded-md border w-full" required>
                    </div>
               
                    <div>
                        <!-- DOB -->
                        <label for="DOB" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input type="text" name="DOB" id="DOB" value="<?= htmlspecialchars($userData['DOB']) ?>" class="mt-1 p-2 rounded-md border w-full" required>
                    </div>
                    <div>
                        <!-- Gender -->
                        <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                        <input type="text" name="gender" id="gender" value="<?= htmlspecialchars($userData['gender']) ?>" class="mt-1 p-2 rounded-md border w-full" required>
                    </div>
                    <div>
                        <!-- Mobile -->
                        <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile</label>
                        <input type="text" name="mobile" id="mobile" value="<?= htmlspecialchars($userData['mobile']) ?>" class="mt-1 p-2 rounded-md border w-full" required>
                    </div>
                    <div>
                        <!-- Address -->
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <input type="text" name="address" id="address" value="<?= htmlspecialchars($userData['address']) ?>" class="mt-1 p-2 rounded-md border w-full" required>
                    </div>
                    <div>
                        <!-- Email -->
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="<?= htmlspecialchars($userData['email']) ?>" class="mt-1 p-2 rounded-md border w-full" required>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <input type="submit" value="Update Profile" name="updateProfile"  class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">
                    
                </div>
            </form>
        </div>
    </div>

</body>

</html>
