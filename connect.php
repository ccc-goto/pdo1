<?php
$host = 'localhost';          //'127.0.0.1';
$db = 'lesson1';              //データベース名
$db_user = 'root';            //MySQL接続ユーザー名
$db_pass = '';                //MySQL接続パスワード
$charset = 'utf8mb4';         //文字コード
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";   //DSN

try {
    $pdo = new PDO($dsn, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '接続に成功しています';
} catch (PDOException $e) {
    print('接続失敗:'.$e->getMessage());
    die();
}
?>
