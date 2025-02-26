<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Gunakan password_hash untuk keamanan

    $sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        // Mengarahkan pengguna ke halaman login setelah registrasi berhasil
        header("Location: index.php");
        exit; // Menghentikan eksekusi skrip
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
    <link rel="stylesheet" href="Style/style.css">
</head>
<body>
    <h2>Registrasi</h2>
    <form action="register.php" method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Daftar</button>
    </form>
    <!-- Menambahkan tombol kembali -->
    <button onclick="window.location.href='index.php'">Kembali ke Login</button>
</body>
</html> 