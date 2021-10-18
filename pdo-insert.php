<?php
$dsn = 'mysql:dbname=lesson1;host=localhost;charset=utf8';
$user = 'root';       //MySQL接続ユーザー名
$password = '';       //MySQL接続パスワード
$name = '山本太郎';    //テーブルへの追加データ：名前
$age = 24;            //テーブルへの追加データ：年齢

try{
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (name, age) VALUE (:name, :age)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':age', $age, PDO::PARAM_INT);
    $stmt->execute();
    echo '処理が終了しました。';
}catch (PDOException $e){
    echo($e->getMessage());
    die();
}
