<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tab Title -->
    <title>Tour BD</title>

    <!-- Link tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    
    <div class="flex flex-col items-center justify-center min-h-screen">

        <!-- Header -->
        <header class="w-full bg-white py-4 shadow-md">
            <div class="container mx-auto flex items-center justify-between px-4">
                <!-- Heading -->
                <h1 class="text-xl font-semibold">Tourism Management System</h1>

                <!-- Navigation -->
                <nav>
                    <ul class="flex space-x-4">

                        <!-- Sign In link -->
                        <li><a href="view/signIn.php" class="text-gray-600 hover:text-gray-800" target="_blank">Sign In</a></li>

                        <!-- Sign Up link -->
                        <li><a href="view/signUp.php" class="text-gray-600 hover:text-gray-800" target="_blank">Sign Up</a></li>

                        <!-- Contact Us link -->
                        <li><a href="view/contactUs.php" class="text-gray-600 hover:text-gray-800" target="_blank">Contact</a></li>

                        <!-- About Link -->
                        <li><a href="view/about.php" class="text-gray-600 hover:text-gray-800" target="_blank">About</a></li>
                        
                    </ul>
                </nav>
            </div>
        </header>
        
        <!-- Main Section -->
        <section class="container mx-auto my-8">
            <div class="max-w-4xl mx-auto p-8 bg-white rounded-lg shadow-lg">

                <!-- Picture -->
                <img src="styles/pictures/tourBD.jpg" alt="A bangladeshi tourist place photos" class="w-full h-auto rounded-lg mb-6">

                <!-- Heading -->
                <h2 class="text-3xl font-semibold mb-4">Welcome to Tour BD</h2>
                <p class="text-gray-700 mb-6">Manage your travel business efficiently with our powerful tourism management system.</p>
                <div class="flex justify-center">

                    <!-- Sign In link -->
                    <a href="view/signIn.php" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-block mr-4" target="_blank">Sign In</a>

                    <!-- Sign Up link -->
                    <a href="view/signUp.php" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded inline-block" target="_blank">Sign Up</a>
                </div>
            </div>
        </section>
        
        <!-- Contact Section -->
        <section id="contact" class="container mx-auto my-8">
            <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>
                <p class="text-gray-700 mb-6">Have questions or need support? Reach out to us!</p>

                <!-- Contact link -->
                <a href="view/contactUs.php" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-block" target="_blank">Contact Us</a>
            </div>
        </section>
        
        <!-- About Section -->
        <section id="about" class="container mx-auto my-8">
            <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-4">About Us</h2>
                <p class="text-gray-700 mb-6">Learn more about our tourism management system and our team.</p>

                <!-- About Us link -->
                <a href="view/about.php" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded inline-block" target="_blank">Learn More</a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="w-full bg-gray-800 py-4 mt-auto">
            <div class="container mx-auto text-center text-gray-300">
                <p>Powered by Tour BD</p>
                <p>&copy; 2024 All rights reserved</p>
            </div>
        </footer>
    </div>
</body>
</html>
