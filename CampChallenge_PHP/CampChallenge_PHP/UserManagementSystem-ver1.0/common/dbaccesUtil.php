<?php

//DBへの接続用を行う。成功ならPDOオブジェクトを、失敗なら中断、メッセージの表示を行う

 function connect2MySQL(){
     try{
         $pdo = new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8','nozakiecon2','estest');
         //SQL実行時のエラーをtry-catchで取得できるように設定
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         return $pdo;
     } catch (PDOException $e) {
         die('接続に失敗しました。次記のエラーにより処理を中断します:'.$e->getMessage());
     }
 }

  //DBに全項目のある1レコードを登録するSQL

function incertMySQL($name,$birthday,$type,$tell,$comment,$insert_db){
  $insert_sql = "INSERT INTO user_t(name,birthday,tell,type,comment,newDate)"
          . "VALUES(:name,:birthday,:tell,:type,:comment,:newDate)";

  //クエリとして用意
  $insert_query = $insert_db->prepare($insert_sql);
  date_default_timezone_set('Asia/Tokyo');
  $stamp=time();
$hiduke = date('Y-m-d His', $stamp);
  //SQL文にセッションから受け取った値＆現在時をバインド
  $insert_query->bindValue(':name',$name);
  $insert_query->bindValue(':birthday',$birthday);
  $insert_query->bindValue(':tell',$tell);
  $insert_query->bindValue(':type',$type);
  $insert_query->bindValue(':comment',$comment);
  $insert_query->bindValue(':newDate',time());

  //SQLを実行
  $insert_query->execute();

  //接続オブジェクトを初期化することでDB接続を切断
  $insert_db=null;
}
