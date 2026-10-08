<?php
//информация о клиенте, дате, статусе, списке товаров с кол. и ценой, общ сумма
require '../db_connect/db_connect.php';
    $stmt = $pdo->query("SELECT * FROM orders");
    $stmt -> execute();
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $pdo->query("SELECT * FROM positions_order");
    $stmt -> execute($_GET);
    $p_orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказы</title>
</head>
<body>
    <h1> Заказы </h1>
        <a href="/">Назад</a>  <br>
        <a href="/add/add_orders.php">Добавить заказ</a>

        <table>
            <tr>
                <th>Общая сумма</th>
                <th>Количество</th>
                <th>Действия</th>
            </tr>
<?php
try {
    $sql = "SELECT SUM(po.quantity * po.price) AS sum 
FROM positions_order po
GROUP BY po.order_id ";
foreach ($pdo->query($sql) as $row){
    echo "<tr><th>" . htmlspecialchars($row['sum']) . "</th>";
    
}
} catch (\PDOException $e) {
exit('Ошибка запроса для вычисления общей суммы' . $e->getMessage()); 
}
?>
<?php foreach ($p_orders as $p_order) : ?>
<?php echo "<th>" . $p_order['quantity'] . "</th>"; ?>
        <th><a href="/delete/del_client.php">Удалить</a></th>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>