<?php
//delete categories
require '../db_connect/db_connect.php';
    $stmt = $pdo->query("DELETE FROM clients WHERE id = :id");
    $stmt -> execute();
header("location:/");
