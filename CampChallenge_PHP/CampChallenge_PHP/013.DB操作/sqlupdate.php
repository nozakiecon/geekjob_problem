<?php
//以下の課題を、PDOを利用して実現してください。
//課題「テーブルの作成とinsert」で作成したテーブルのprofileID=1のnameを「松岡 修造」に、ageを48に、birthdayを1967-11-06に更新してください。
try {
$dns =  'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';

$pdo_obj = new PDO($dns, 'nozakiecon2', 'estest');
$sql = "UPDATE profiles SET name = '松岡 修造', age = 48, birthday = '1967-11-06' WHERE profilesID = 1";
$pdo_st = $pdo_obj->prepare($sql);
$pdo_st->execute();
$sql2 ="select profilesID,name,tel,age,birthday FROM profiles";
$pdo_st = $pdo_obj->prepare($sql2);
$pdo_st->execute();
$datas = $pdo_st->fetchAll(PDO::FETCH_ASSOC);
var_dump($datas);
} catch (PDOException $pdo_ex) {

    echo 'DB接続に失敗しました。' . $pdo_ex->getMessage();
}
