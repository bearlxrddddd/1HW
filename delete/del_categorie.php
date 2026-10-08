<?php
require '../db_connect/db_connect.php';

    $stmt = $pdo->query("DELETE FROM categories WHERE id = :id");
    $stmt -> execute();
header("location:/");