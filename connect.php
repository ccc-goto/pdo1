<?php
$dsn = 'mysql:host=localhost;dbname=lesson1;charset=utf8';
$db_user = 'root';
$db_pass = '';
 
try {
    $pdo = new PDO($dsn, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '接続に成功しています';
} catch (PDOException $e) {
    print('接続失敗:'.$e->getMessage());
    die();
}

