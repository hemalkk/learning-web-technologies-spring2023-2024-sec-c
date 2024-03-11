<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tab Title -->
    <title>Sign Up</title>
</head>

<body>

    <!-- Sign Up page start -->
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="rounded-2xl mx-auto h-20 w-auto" src="../styles/pictures/tourBD.jpg" alt="TourBD Logo">

            <!-- Registration Welcome -->
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Create a new account
            </h2>
            <p class="mt-2 text-center text-sm leading-5 text-gray-500 max-w">
                Or
                <!-- Sign In link -->
                <a href="signIn.php"
                    class="font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    Sign In to your account
                </a>
            </p>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">

                <!-- Sign Up form Start -->
                <form method="POST" action="../controller/signUpCheck.php">

                    <!-- First Name -->
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">First
                            Name*</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="firstName" name="firstName" placeholder="First Name" type="text" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>

                        </div>
                    </div>
                    <br>

                    <!-- Last Name -->
                    <div>
                        <label for="latName" class="block text-sm font-medium leading-5  text-gray-700">Last
                            Name*</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="lastName" name="lastName" placeholder="Last Name" type="text" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                        </div>
                    </div>

                    <br>

                    <!-- DOB -->
                    <div>
                        <label for="DOB"
                            class="block text-sm font-medium leading-5  text-gray-700">Birthday</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="DOB" name="DOB" type="date" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <br>

                    <!-- Gender -->
                    <div>
                        <label for="gender" class="block text-sm font-medium leading-5  text-gray-700">Choose your
                            gender</label>

                        <div>
                            <input type="radio" name="gender" id="none" value="none" checked>
                            <label class="font-medium leading-5  text-gray-700" for="none">None</label>

                            <input type="radio" name="gender" id="female" value="female">
                            <label class=" font-medium leading-5  text-gray-700" for="female">Female</label>

                            <input type="radio" name="gender" id="male" value="male">
                            <label class="font-medium leading-5  text-gray-700" for="male">Male</label>

                            <input type="radio" name="gender" id="other" value="other">
                            <label class="font-medium leading-5  text-gray-700" for="other">Other</label>

                        </div>
                    </div>

                    <br>
                    <!-- Mobile -->
                    <div>
                        <label for="mobile" class="block text-sm font-medium leading-5  text-gray-700">Enter your mobile
                            number*</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="tel" id="mobile" name="mobile" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                        </div>
                    </div>
                    <br>

                    <!-- Address -->
                    <label for="address" class="block text-sm font-medium leading-5  text-gray-700">Address</label>
                    <textarea id="address" name="address" placeholder="Enter your address." rows="4" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                    
                    <!-- Email Address -->
                    <div class="mt-6">
                        <label for="email" class="block text-sm font-medium leading-5  text-gray-700">Email address*</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="email" name="email" placeholder="user@example.com" type="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                            <br>

                            <!-- User Name -->
                            <label for="userName" class="block text-sm font-medium leading-5  text-gray-700">Username*</label>
                            <input type="text" id="userName" name="userName" placeholder="Enter your username" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>

                            <!-- Password -->
                            <div class="mt-6">
                            <label for="password" class="block text-sm font-medium leading-5 text-gray-700">Password</label>
                            <div class="mt-1 rounded-md shadow-sm">
                            <input id="password" name="password" type="password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-6">
                                <label for="confirmPassword"class="block text-sm font-medium leading-5 text-gray-700">Confirm Password</label>
                                <div class="mt-1 rounded-md shadow-sm">
                                <input id="confirmPassword" name="confirmPassword" type="password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                                </div>
                            </div>

                            <!-- Sign Up Button -->
                            <div class="mt-6">
                                <span class="block w-full rounded-md shadow-sm">
                                    <input type="submit" value="Sign Up" name="signUp" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                </span>
                            </div>
                            <br>

                            <!-- Teams of Service -->
                        <label for="terms" class="flex items-center">
                        <input type="checkbox" id="terms" name="terms" class="form-checkbox text-blue-500">
                        <span class="ml-2 text-gray-700">I agree to the <a href="TeamsOfService.php" class="text-blue-500" target="_blank">Terms of Service</a></span>
                    </label>
                </form>
                 <!-- Sign Up form End -->
            </div>
        </div>
    </div>
    <!-- Sign Up page end -->
</body>

</html>