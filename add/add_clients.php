<?php
require '../db_connect/db_connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление клиента</title>
</head>
<body>
    <form method="post" action="/models/add_clients.php">
    <h1>Добавление клиента</h1>
        <p>Имя: <input type="text" name='name'></p>        
        <p>Email: <input type="text" name='email'></p>
        <p>Телефон: <input type="text" name='tel'></p>
<button type="submit">Добавить</button></body>
</form>
</html>