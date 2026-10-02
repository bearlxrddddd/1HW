<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
    <h1>Авторизация</h1>

    <p>Логин <br><input type="text" name="login" <?=  htmlspecialchars($_POST['login'])?>></p>
    <p>Пароль <br><input type="password" name="password" <?=  htmlspecialchars($_POST['password'])?>></p>
    <button type="submit">Войти</button><br>
    <a href="register.php">Зарегистрироваться</a>
</body>
</html>