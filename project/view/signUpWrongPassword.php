<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tab title -->
    <title>Password Mismatch</title>
    <!-- Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            
            <!-- Message -->
            <h2 class="text-xl font-bold text-center text-gray-800">Password Mismatch!</h2>
            <p class="mt-4 text-sm text-center text-gray-600">The password and confirm password do not match. Please try again.</p>
            <div class="mt-6 flex justify-center">
                <!-- Sign Up page -->
                <a href="signUp.php" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Try Again</a>
            </div>
        </div>
    </div>
</body>

</html>
