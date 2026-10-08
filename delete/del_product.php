<?php
require '../db_connect/db_connect.php';
    $stmt = $pdo->query("DELETE FROM products");
    $stmt -> execute();
header("location:/");