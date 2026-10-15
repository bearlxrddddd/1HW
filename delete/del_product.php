<?php
require '../db_connect/db_connect.php';
    $stmt = $pdo->query("DELETE FROM products WHERE id = :id");
    $stmt -> execute();
header("location:/");
