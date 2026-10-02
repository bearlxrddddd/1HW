<?php
$dbname = getenv('DB_NAME') ?: 'store_1';
$pass = getenv('DB_PASS') ?: 'root';
$user = getenv('DB_USER') ?: ''; 
$host = getenv('DB_HOST') ?: '127.0.0.1';

try {
    $pdo = new PDO (
        "mysql:host={$host};dbname={$dbname};charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
} catch (PDOException $e) {
    exit('Ошибка подключения к базе данных: ' . $e->getMessage());
}