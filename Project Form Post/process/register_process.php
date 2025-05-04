<?php
require_once("../config/db.php");

// Tangkap data dari form
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Validasi input sederhana
if (empty($email) || empty($password)) {
    die("Email dan password tidak boleh kosong. <a href='../pages/register.php'>Kembali</a>");
}

// Enkripsi password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Simpan ke database
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashedPassword);

if ($stmt->execute()) {
    echo "Registrasi berhasil! <a href='../pages/login.php'>Login sekarang</a>";
} else {
    echo "Gagal registrasi: " . $stmt->error . "<br><a href='../pages/register.php'>Kembali</a>";
}
