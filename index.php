<?php
require 'db.php';

$stmt = $pdo->query('SELECT * FROM items');
$items = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Items</h1>
    <a href="create.php">Create New Item</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['id']) ?></td>
                    <td><?= htmlspecialchars($item['name']) ?></td>
                    <td><?= htmlspecialchars($item['description']) ?></td>
                    <td>
                        <a href="read.php?id=<?= $item['id'] ?>">View</a>
                        <a href="update.php?id=<?= $item['id'] ?>">Edit</a>
                        <a href="delete.php?id=<?= $item['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>