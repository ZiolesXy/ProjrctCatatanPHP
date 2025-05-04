<?php
session_start();
require_once("../config/db.php");
include("../includes/header.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM notes WHERE user_id = $user_id");

echo "<h2 class='text-2xl font-bold mb-6'>Catatan Saya</h2>";
echo "<a href='add_note.php' class='bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600 mb-6 inline-block'>+ Tambah Catatan</a>";
echo "<br>";
echo "<a href='dashboard.php' class='bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600 mb-6 inline-block'>Kembali</a>";

while ($note = $result->fetch_assoc()) {
    echo "<div class='bg-white p-4 shadow rounded-lg mb-4'>
            <h3 class='text-xl font-semibold'>" . htmlspecialchars($note['title']) . "</h3>
            <p class='text-gray-600'>" . nl2br(htmlspecialchars($note['content'])) . "</p>
            <div class='mt-4'>
                <a href='edit_note.php?id={$note['id']}' class='text-blue-500 hover:underline'>Edit</a> |
                <a href='../process/delete_note.php?id={$note['id']}' class='text-red-500 hover:underline' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
            </div>
        </div>";
}

include("../includes/footer.php");
?>
