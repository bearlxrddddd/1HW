<?php

if (!isset($_POST['categorie_id'])) {
    throw new Exception('Не все данные переданы из формы');
}

$data = [
'title' => $_POST['title'],
'price' => $_POST['price'],
'quantity_in_storage' => $_POST['quantity_in_storage'],
'categorie_id' => (int)$_POST['categorie_id']
];

require '../db_connect/db_connect.php';

    $sql = "INSERT INTO products (
    title, 
    price, 
    quantity_in_storage, 
    categorie_id
    )
VALUES (
:title, 
:price, 
:quantity_in_storage, 
:categorie_id
)";
$stmt = $pdo -> prepare($sql);
$result = $stmt -> execute($data);
header("Location: /");
