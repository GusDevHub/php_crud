<?php
require 'db.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $stmt = $pdo->prepare('UPDATE items SET name = ?, description = ? WHERE id = ?');
    $stmt->execute([$name, $description, $id]);

    header('Location: index.php');
    exit();
}

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
    <title>Update Item</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Update Item</h1>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?= htmlspecialchars($item['name']) ?>" required>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required><?= htmlspecialchars($item['description']) ?></textarea>
        <button type="submit">Update</button>
    </form>
    <a href="index.php">Back to Home</a>
</body>
</html>