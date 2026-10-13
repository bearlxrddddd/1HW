<?php
require '../db_connect/db_connect.php';
    $stmt = $pdo->query("SELECT * FROM products");
    $stmt -> execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продукты</title>
</head>
<body>
    <h1> Продукты </h1>
        <a href="/">Назад</a><br>
                <a href="/add/add_products.php">Добавить продукт</a>
<table>
            <tr>
<th> Имя </th>
<th> Стоимость </th>
<th> Действия </th>
            </tr>
<?php foreach ($products as $product) :?>
    <tr>
    <?php echo '<th>' . $product['title'] . "</th>" ?>
    <?php echo '<th>' . $product['price'] . "</th>" ?>
<th><a href="/delete/del_product.php">Удалить</a></th>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
