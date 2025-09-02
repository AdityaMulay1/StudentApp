<?php
require_once 'db.php';

$id = $_GET['id'] ?? 0;

if (!$id) {
    header("Location: index.php");
    exit;
}

try {
    $stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: index.php");
    exit;
} catch (PDOException $e) {
    header("Location: index.php?error=delete_failed");
    exit;
}
?>