<?php
//delete categories
require '../db_connect/db_connect.php';
    $stmt = $pdo->query("DELETE FROM clients");
    $stmt -> execute();
header("location:/");
