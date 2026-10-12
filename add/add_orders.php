<?php 
// ДОБАВЛЕНИЕ
require '../db_connect/db_connect.php';
    $stmt = $pdo->query("SELECT * FROM clients");
    $stmt ->execute();
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $pdo->query("SELECT * FROM orders");
    $stmt ->execute();
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление заказа</title>
</head>
<body>
    <form method="post" action="/models/add_clients.php">
    <h1>Добавление заказа</h1>
        <p>Цена: <input type="number" name='price'></p>        
        <p>Покупатель: 
            <select name="client_id" id="client_id">
            <?php foreach($clients as $client): ?>
                <option value="<?php $client['id'] ?>"><?php htmlspecialchars($client['name']) ?></option>
                <?php endforeach; ?>
        </select>
    </p>
        <p>Статус:
            <select name="status" id="status">
                <?php foreach($orders as $order): ?>
                    <option value="<?php $order['status'] ?>"></option>
                    <?php endforeach; ?>
            </select>
        </p>
        <p>Дата: <input type="date" name='data'></p>

<button type="submit">Добавить</button></body>
</form>
</html>
 