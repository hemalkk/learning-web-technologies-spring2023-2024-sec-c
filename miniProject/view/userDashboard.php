<?php 
    session_start();

    if(!isset($_COOKIE['flag'])){
        header('location: signIn.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tab -->
    <title>User Dashboard</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto py-8">
        <div class="max-w-4xl mx-auto bg-white rounded-md shadow-md p-8">

            <!-- Dashboard Title -->
            <h1 class="text-2xl font-semibold mb-6">User Dashboard</h1>

            <!-- Dashboard Options -->
            <ul class="space-y-4">
                <!-- View Profile -->
                <li>
                    <a href="viewProfile.php" class="block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">View Profile</a>
                </li>

                <!-- Reset Password -->
                <li>
                    <a href="resetPassword.php" class="block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Reset Password</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Sign Out Button -->
    <form method="post" action="../controller/signOut.php" class="mt-4">
    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition duration-300">Sign Out</button>
    </form>
</body>

</html>
