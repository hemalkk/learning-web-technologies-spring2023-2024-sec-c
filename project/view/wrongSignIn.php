<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tab Title -->
    <title>Sign In Error</title>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 min-h-screen flex items-center justify-center">

    <!-- Error container -->
    <div class="bg-gray-100 flex rounded-lg shadow-lg max-w-md p-8 items-center">

        <!-- Error message -->
        <div class="md:w-1/2 px-8">

            <!-- Error Heading -->
            <h2 class="font-bold text-3xl text-red-600">Sign In Failed</h2>

            <!-- Error Text and add link to go to Sign In in "try again" -->
            <p class="text-base mt-4 text-red-600">Invalid username or password.<a href="signIn.php" class="px-4 py-2 bg-[#FF4500] rounded-full hover:scale-105 duration-300">Please Try Again.</a></p>

            </div>
        </div>
        </div>
    </div>

</body>

</html>
