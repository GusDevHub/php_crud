<?php
require 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM items WHERE id = ?');
$stmt->execute([$id]);
$item = $stmt->fetch();

if (!$item) {
    echo "Item not found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Item</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>View Item</h1>
    <p><strong>ID:</strong> <?= htmlspecialchars($item['id']) ?></p>
    <p><strong>Name:</strong> <?= htmlspecialchars($item['name']) ?></p>
    <p><strong>Description:</strong> <?= htmlspecialchars($item['description']) ?></p>
    <a href="index.php">Back to Home</a>
</body>
</html>