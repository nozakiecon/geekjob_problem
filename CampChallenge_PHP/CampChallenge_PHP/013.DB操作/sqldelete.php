<?php
//以下の課題を、PDOを利用して実現してください。
//課題「テーブルへ情報を格納」でINSERTしたレコードを指定して削除してください。削除後に、SELECT*で結果を表示してください。
try {
$dns =  'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';

$pdo_obj = new PDO($dns, 'nozakiecon2', 'estest');
$sql1 = "DELETE FROM profiles WHERE birthday = '2000-12-24'";
$pdo_st = $pdo_obj->prepare($sql1);
$pdo_st->execute();
$sql2 ="select profilesID,name,tel,age,birthday FROM profiles";
$pdo_st = $pdo_obj->prepare($sql2);
$pdo_st->execute();
$datas = $pdo_st->fetchAll(PDO::FETCH_ASSOC);
var_dump($datas);
} catch (PDOException $pdo_ex) {

    echo 'DB接続に失敗しました。' . $pdo_ex->getMessage();
}
