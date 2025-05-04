<?php
session_start();
require_once("../config/db.php");

// Tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi input sederhana
if (empty($username) || empty($password)) {
    die("Username dan password tidak boleh kosong. <a href='../pages/login.php'>Kembali</a>");
}

// Ambil data user berdasarkan username
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    // Set session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header("Location: ../pages/dashboard.php");
    exit();
} else {
    echo "Login gagal. Username atau password salah. <a href='../pages/login.php'>Coba lagi</a>";
}
?>
