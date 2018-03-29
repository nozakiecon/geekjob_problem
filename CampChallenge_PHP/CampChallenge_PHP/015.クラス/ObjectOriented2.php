<?php
    //3. baseという抽象クラスを作成し、以下を実装してください。
    //　 ・loadというprotectedな関数を用意してくださいok。
    //　 ・showという公開関数を用意してください。ok
    // 抽象クラス
    //5. load関数でDBから全情報を取得するように各クラスの関数を実装してください。
    //その際、table変数を利用して、データを取得するようにしてください。
    //6. show関数で各テーブルの情報の一覧が表示されるようにしてください。
    abstract class base {
      protected function load() {
        $sql5 = "USE $table";
        $pdo_st = $pdo_obj->prepare($sql5);
        $pdo_st->execute();
      }
      public function show() {
        $sql6 = "SELECT * FROM '$table'";
        $pdo_st = $pdo_obj->prepare($sql6);
        $pdo_st->execute();
        $datas = $pdo_st->fetchAll(PDO::FETCH_ASSOC);
        var_dump($datas);
      }
      //4. ３で作成した抽象クラスを継承して、以下のクラスを作成してください。
      //・人の情報を扱うHumanクラス
      //・駅の情報を扱うStationクラス
      //また、各クラスに隠匿変数でtableという変数を用意し、各クラスの初期化処理でtable変数にテーブル名を設定してください。

    }
    class human extends base {
      private $table;
      function __construct(){
        $this->table = "people";
      }
    }
    class station extends base {
      private $table;
      function __construct(){
        $this->table = "eki";
      }
    }
    //1～6までのステップを踏んで、「DBからデータを取得、取得したデータを表示できる、2種類のクラス」を作成してください。期限:4日
    //1. DBに人の情報を入れたテーブルを作成してください。ok
    //2. DBに駅の情報を入れたテーブルを作成してください。ok
    try {
      $dns =  'mysql:host=localhost;';
      $dns .= 'dbname=Challenge_db;';
      $dns .= 'charset=utf8';
      $pdo_obj = new PDO($dns, 'nozakiecon2', 'estest');
      $sql1="create table people(peopleID int,peoplename varchar(255),age int)";
      $pdo_st = $pdo_obj->prepare($sql1);
      $pdo_st->execute();
      $sql2="INSERT INTO people VALUES (1,'tony',30),(2,'tom',37),(3,
        'troy',24),(4,'bill',19)";
        $pdo_st = $pdo_obj->prepare($sql2);
        $pdo_st->execute();
        $sql3="create table eki(stationID int,stationname varchar(255),location varchar(255))";
        $pdo_st = $pdo_obj->prepare($sql3);
        $pdo_st->execute();
        $sql4="INSERT INTO people VALUES (1,'shibuya','tokyo'),(2,'akihabara','tokyo'),(3
          'yokohama','kanagawa'),(4,'oomiya','saitama')";
          $pdo_st = $pdo_obj->prepare($sql4);
          $pdo_st->execute();
        } catch (PDOException $pdo_ex) {
          echo 'DB接続に失敗しました。' . $pdo_ex->getMessage();
        }
//
//
