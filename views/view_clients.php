<?php
require '../db_connect/db_connect.php';
    $stmt = $pdo->query("SELECT * FROM clients");
    $stmt ->execute();
    $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клиенты</title>
</head>
<body>
    <form method="POST">
    <a href="/">Назад</a> <br>
        <th><a href="/add/add_clients.php">Добавить пользователя</a></th>

    <table>
<tr>
    <th>ID</th>
    <th>name</th>
    <th>Действия</th>
</tr>
<?php 
foreach ($clients as $client) :?>
<tr>
    <th><?php echo $client['id'] ?></th>
        <th><?php echo $client['name'] ?></th>
        <th><a href="/delete/del_client.php">Удалить</a></th>
<?php endforeach; ?>
</tr>
</table>
</form>
</body>
</html>
