<?php
session_start();
include("../includes/header.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<h2 class="text-2xl font-bold mb-4">Tambah Catatan</h2>
<form method="POST" action="../process/add_note_process.php" class="space-y-4">
    <div>
        <label class="block">Judul:</label>
        <input type="text" name="title" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
    </div>
    <div>
        <label class="block">Isi:</label>
        <textarea name="content" rows="5" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" required></textarea>
    </div>
    <input type="submit" value="Simpan" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">
</form>

<a href="notes.php" class="mt-4 inline-block text-blue-600 hover:underline">Kembali ke daftar catatan</a>

<?php include("../includes/footer.php"); ?>
