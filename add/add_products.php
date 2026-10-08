<?php
require '../db_connect/db_connect.php';

function addProducts($pdo, $title, $price, $quantity_in_storage, $categorie_id) {
    $stmt = $pdo -> prepare("INSERT INTO products (title, price, quantity_in_storage, categorie_id)
VALUES (:title, :price, :quantity_in_storage, :categorie_id)");
return $stmt -> execute([
    'title' => $title,
    'price' => $price,
    'quantity_in_storage' => $quantity_in_storage,
    'categorie_id' => $categorie_id,

]);
    }