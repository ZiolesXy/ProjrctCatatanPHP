<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password']; // Ambil password tanpa hashing

    $sql = "SELECT * FROM login WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verifikasi password menggunakan password_verify
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
        } else {
            echo "<script>alert('Username atau password salah!'); window.location.href='index.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Username atau password salah!'); window.location.href='index.php';</script>";
        exit;
    }
}
?>