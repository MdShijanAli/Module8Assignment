<?php


if (isset($_POST['login'])) {
    $email = $_POST['email'];

    $_SESSION['success'] = '';

    header('Location: welcome.php?email=' . urlencode($email));
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css">
</head>

<body class="bg-gray-100">

    <div class="min-h-screen  flex items-center justify-center">
        <div class="bg-white w-1/3 mx-auto p-8 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold mb-6">Login</h2>


            <form class="" method="POST">
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="email">
                        Email address
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Enter your email">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="Enter your password">
                </div>



                <div class="flex items-center justify-between">
                    <button name="login" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Login
                    </button>
                </div>
            </form>
            <div class=" flex justify-center gap-5 items-center p-5">
                <p>Do you haven't an account? Please </p>
                <a href="/Registration.php">
                    <button class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register</button>

                </a>
            </div>
        </div>
    </div>

</body>

</html>

</body>

</html>