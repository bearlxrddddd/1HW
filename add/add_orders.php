<?php 
// ДОБАВЛЕНИЕ
require '../db_connect/db_connect.php';

function addOrders($pdo, $client_id, $data, $price, $status) {
    $stmt = $pdo -> prepare("INSERT INTO orders (name, data, price, status)
VALUES (:name, :data, :price, :status)");
return $stmt -> execute([
    'client_id' => $client_id,
    'data' => $data,
    'price' => $price,
    'status' => $status,

]);
    }

 