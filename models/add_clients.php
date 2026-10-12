<?php

$data = [
    "name" => $_POST['name'],
    "email" => $_POST['email'],
    "tel" => $_POST['tel']
];
require "../db_connect/db_connect.php";


$sql = "INSERT INTO clients (name, email, tel)
VALUES (:name, :email, :tel)";
$stmt = $pdo -> prepare($sql);
$result = $stmt -> execute($data);
header("Location: /");
