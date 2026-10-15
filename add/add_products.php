<?php
require '../db_connect/db_connect.php';
$stmt = $pdo->query("SELECT * FROM products");
    $stmt ->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $pdo->query("SELECT * FROM categories");
    $stmt ->execute();
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление продукта</title>
</head>
<body>
    <form method="post" action="/models/add_products.php">
    <h1>Добавление продукта</h1>
        <p>Название продукта: <input type="text" name='title'></p>        
        <p>Стоимость: <input type="number" name='price'></p>
        <p>Количество на складе: <input type="number" name='quantity_in_storage'></p>
        <p>Категория: <select name='categorie_id' id="categorie_id">
            <?php foreach($categories as $categorie): ?>
        <option value="<?= $categorie['id'] ?>"><?php echo htmlspecialchars($categorie['id']) ?></option>
<?php endforeach; ?>
    </select>
</p>
        <button type="submit">Добавить</button></body>
</form>
</html>