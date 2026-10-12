<?php
function registerUser($pdo, $name, $email, $password, $tel) {
    $stmt = $pdo -> prepare("INSERT INTO clients (name, email, password, tel)
VALUES (:name, :email, :password, :tel)");
return $stmt -> execute([
    'name' => $name,
    'email' => $email,
    'password' => $password,
    'tel' => $tel,

]);
    }