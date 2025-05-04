<?php
session_start();
include("../includes/header.php");
?>

<h2 class="text-xl font-bold mb-4">Login</h2>
<form method="POST" action="../process/login_process.php" class="space-y-4">
    <div>
        <label class="block mb-1">Username:</label>
        <input type="text" name="username" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
    </div>
    <div>
        <label class="block mb-1">Password:</label>
        <input type="password" name="password" required class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
    </div>
    <input type="submit" value="Login" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded shadow">
</form>
<p class="mt-4">Belum punya akun? <a href="register.php" class="text-blue-600 hover:underline">Daftar di sini</a></p>


<?php include("../includes/footer.php"); ?>
