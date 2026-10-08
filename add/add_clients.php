<?php
require '../db_connect/db_connect.php';

function createClient($pdo, $name, $email, $tel) {
$stmt = $pdo -> prepare("INSERT INTO clients (name, email, tel)
VALUES (:name, :email, :tel)");
return $stmt-> execute([
    'name' => $name,
    'email' => $email,
    'tel' => $tel
]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление клиента</title>
</head>
<body>
    <h1>Добавление клиента</h1>
        <p>Имя: <input type="text name='name'"></p>        
        <p>Email: <input type="text name='email'"></p>
        <p>Телефон: <input type="text name='tel'"></p>
<a href="/">Добавить</a>
</body>
</html>