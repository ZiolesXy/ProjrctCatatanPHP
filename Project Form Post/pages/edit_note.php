<?php
session_start();
require_once("../config/db.php");
include("../includes/header.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT * FROM notes WHERE id = ? AND user_id = ?");
$stmt->bind_param("ii", $id, $user_id);
$stmt->execute();
$result = $stmt->get_result();
$note = $result->fetch_assoc();

if (!$note) {
    echo "Data tidak ditemukan.";
    exit();
}
?>

<h2 class="text-2xl font-bold mb-4">Edit Catatan</h2>
<form method="POST" action="../process/edit_note_process.php" class="space-y-4">
    <input type="hidden" name="id" value="<?= $note['id'] ?>">
    <div>
        <label class="block">Judul:</label>
        <input type="text" name="title" value="<?= htmlspecialchars($note['title']) ?>" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300">
    </div>
    <div>
        <label class="block">Isi:</label>
        <textarea name="content" rows="5" required class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300"><?= htmlspecialchars($note['content']) ?></textarea>
    </div>
    <input type="submit" value="Update" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600">
</form>

<a href="notes.php" class="mt-4 inline-block text-blue-600 hover:underline">Kembali ke daftar catatan</a>

<?php include("../includes/footer.php"); ?>
