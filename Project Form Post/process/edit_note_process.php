<?php
session_start();
require_once("../config/db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../pages/login.php");
    exit();
}

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$user_id = $_SESSION['user_id'];

$stmt = $conn->prepare("UPDATE notes SET title = ?, content = ? WHERE id = ? AND user_id = ?");
$stmt->bind_param("ssii", $title, $content, $id, $user_id);
$stmt->execute();

header("Location: ../pages/notes.php");
exit();
?>
