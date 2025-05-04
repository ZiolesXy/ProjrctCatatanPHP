<?php
session_start();
include("../includes/header.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<h2 class="text-2xl font-bold mb-4">Dashboard</h2>
<p class="mb-6">Halo, <span class="font-semibold text-blue-600"><?= $_SESSION['username']; ?></span>! Selamat datang.</p>

<div class="space-y-3">
    <a href="notes.php" class="block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded shadow text-center">📝 Lihat & Kelola Catatan</a>
    <a href="../logout.php" class="block bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded shadow text-center">🚪 Logout</a>
</div>

<?php include("../includes/footer.php"); ?>
