<?php
    session_start();
    require_once('../model/userModel.php');

    if (!isset($_SESSION['username']) || !isset($_COOKIE['flag'])) {
        header('location: signIn.php');
        exit();
    }

    $userName = $_SESSION['username'];
    $userData = getUserData($userName);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tab -->
    <title>View Profile</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto py-8">
        <div class="max-w-4xl mx-auto bg-white rounded-md shadow-md p-8">

            <h1 class="text-2xl font-semibold mb-6">View Profile</h1>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <!-- Display User Data -->
                <div>
                    <p class="text-lg font-semibold">Full Name: <?= $userData['firstName'] . ' ' . $userData['lastName'] ?></p>
                    <p class="text-lg">Date of Birth: <?= $userData['DOB'] ?></p>
                    <p class="text-lg">Gender: <?= $userData['gender'] ?></p>
                    <p class="text-lg">Mobile: <?= $userData['mobile'] ?></p>
                    <p class="text-lg">Address: <?= $userData['address'] ?></p>
                    <p class="text-lg">Email: <?= $userData['email'] ?></p>
                    <p class="text-lg">Username: <?= $userData['userName'] ?></p>
                    
                </div>

                <!--Profile Picture upload-->
                <div>
                <a href="../file-upload/file.php" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Profile Picture Upload</a>
                </div>
            </div>

            <!-- CRUD Operations -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Update Profile Button -->
                <a href="updateProfile.php" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Update Profile</a>

                <!-- Delete Profile Button -->
                <form method="post" action="../controller/deleteProfileAction.php" class="mt-4">
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition duration-300">Delete Profile</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Sign Out -->
    <form method="post" action="signOut.php" class="mt-4">
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition duration-300">Sign Out</button>
    </form>

</body>

</html>
