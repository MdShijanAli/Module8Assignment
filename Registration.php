<?php




if (isset($_POST['register'])) {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Save user data to database (you will need to set up your own database)

    // Redirect to welcome page
    header('Location: Successful.php?first_name=' . urlencode($first_name));
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-400">
    <h1 class="text-center text-3xl font-semibold mt-20">Registration Form</h1>
    <div class="bg-white w-1/3 mx-auto my-10 ">

        <form class="p-5" method="post">
            <div class="mb-4">
                <label for="first_name" class="block text-gray-700 font-bold mb-2">First Name:</label>
                <input type="text" id="first_name" name="first_name" class="shadow  border rounded w-full py-2 px-3 bg-gray-700 text-white">
            </div>
            <div class="mb-4">
                <label for="last_name" class="block text-gray-700 font-bold mb-2">Last Name:</label>
                <input type="text" id="last_name" name="last_name" class="shadow  border rounded w-full py-2 px-3 bg-gray-700 text-white">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" class="shadow  border rounded w-full py-2 px-3 bg-gray-700 text-white">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
                <input type="password" id="password" name="password" class="shadow  border rounded w-full py-2 px-3 bg-gray-700 text-white">
            </div>
            <div class="mb-4">
                <label for="confirm_password" class="block text-gray-700 font-bold mb-2">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" class="shadow  border rounded w-full py-2 px-3 bg-gray-700 text-white">
            </div>
            <div class="flex items-center  mt-5">
                <button name="register" type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Register</button>

            </div>
        </form>
        <div class=" flex justify-center gap-5 items-center p-5">
            <p>Do you have an account? Please Login</p>
            <a href="/Login.php">
                <button class="bg-red-500 hover:bg-red-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>

            </a>
        </div>
    </div>

</body>

</html>