<?php
session_start();

require '../config/db.php';

$db = new Database();
$pdo = $db->getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['user_id'])) {
        die("Unauthorized");
    }

    $content = trim($_POST['content']);
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare("INSERT INTO twits (content, created_at, user_id) VALUES (:content, NOW(), :user_id)");
    $stmt->bindParam(':content', $content, PDO::PARAM_STR);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: ../../index.php");
        exit;
    } else {
        die("Error adding testimonial.");
    }
}
?>