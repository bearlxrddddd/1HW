<?php
$data = [
    "price" => $_POST['price'],
    "status" => $_POST['status'],
    "data" => $_POST['data'],
    "client_id" => $_POST['client_id']
];
require "../db_connect/db_connect.php";


$sql = "INSERT INTO clients (price, status, data, client_id)
VALUES (:price, :status, :data, :client_id)";
$stmt = $pdo -> prepare($sql);
$result = $stmt -> execute($data);
header("Location: /");