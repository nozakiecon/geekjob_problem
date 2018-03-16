<?php
//以下の課題を、PDOを利用して実現してください。
//課題「テーブルの作成とinsert」で作成したテーブルからprofileID=1の情報を取得し、画面に取得した情報を表示してください。
try {
$dns =  'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';

$pdo_obj = new PDO($dns, 'nozakiecon2', 'estest');
$sql = "SELECT * FROM profiles where profilesID = 1";
$pdo_st = $pdo_obj->prepare($sql);
$pdo_st->execute();
$datas = $pdo_st->fetchAll(PDO::FETCH_ASSOC);
var_dump($datas);
} catch (PDOException $pdo_ex) {

    echo 'DB接続に失敗しました。' . $pdo_ex->getMessage();
}
