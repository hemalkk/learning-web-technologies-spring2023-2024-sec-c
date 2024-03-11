
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tab Title -->
    <title>SignIn</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- Login Section start -->
    <section class="bg-gray-50 min-h-screen flex items-center justify-center">

        <!-- Login container -->
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">

            <!-- Login form -->
            <div class="md:w-1/2 px-8 md:px-16">

                <!-- Sign In Heading  -->
                <h2 class="font-bold text-2xl text-[#002D74]">Sign In</h2>

                <!-- Sign In Welcome Text -->
                <p class="text-xs mt-4 text-[#002D74]">If you are already our user, easily sign in</p>

                <!-- Form start -->
                <form method="POST" action="../controller/signInCheck.php" class="flex flex-col gap-4">

                    <!-- Email or Username-->
                    <input class="p-2 mt-8 rounded-xl border" type="text" name="userNameOrEmail" id="" placeholder="Email or Username">
                    
                    <!-- Password -->
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" type="password" name="password"
                            placeholder="Password">
                    </div>
                    <!-- Sign In Button -->
                    <input type="submit" value="Sign In" name="signIn" class="bg-[#002D74] rounded-xl text-white py-2 hover:scale-105 duration-300">
                    
                </form>
                <!-- Form End -->



                <!-- Forgot pass -->
                <div class="mt-5 text-xs border-b border-[#002D74] py-4 text-[#FF0000]">
                    <a href="forgotPassword.php" target="_blank">Forgot your password?</a>
                </div>

                <!-- New registration -->
                <div class="mt-3 text-xs flex justify-between items-center text-[#002D74]">
                    <p>Don't have an account?</p>
                    <!-- Sign Up button -->
                    <a href="signUp.php" class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300" target="_blank"> Sign Up</a>
                    
                </div>
            </div>

            <!-- company logo -->
            <div class="md:block hidden w-1/2">
                <img class="rounded-2xl" src="../styles/pictures/tourBD.jpg"
                    alt="A picture of a bangladesh tourist place.">
            </div>
        </div>
    </section>
    <!-- Login Section End -->
</body>

</html>