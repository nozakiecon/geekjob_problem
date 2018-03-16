<?php
//以下の課題を、PDOを利用して実現してください。
//Challenge_dbへの接続をエラーハンドリングを含め、行ってください。
try {
$dns =  'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';

// データベースへ接続
$pdo_obj = new PDO($dns, 'nozakiecon2', 'estest');
} catch (PDOException $pdo_ex) {
    // 例外発生
    echo 'DB接続に失敗しました。' . $pdo_ex->getMessage();
}
