<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>更新結果画面</title>
  <style type="text/css">
  <!--

  body { background:radial-gradient(#F89174, #FFC778);
    background: -moz-linear-gradient(left, #FFC778, #FFF);
    background: -webkit-linear-gradient(left, #FFC778, #FFF);
    background: linear-gradient(to right, #FFC778, #FFF);
  }
  -->
  </style>
  </head>
  <body>
  <?php
  session_start();

  //ポストの存在チェックとセッションに値を格納しつつ、連想配列にポストされた値を格納
  $confirm_values = array(
    'name' => bind_p2s('name'),
    'year' => bind_p2s('year'),
    'month' =>bind_p2s('month'),
    'day' =>bind_p2s('day'),
    'type' =>bind_p2s('type'),
    'tell' =>bind_p2s('tell'),
    'comment' =>bind_p2s('comment'));


    //1つでも未入力項目があったら表示しない
    if(!in_array(null,$confirm_values, true)){
      $birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
      date_default_timezone_set('Asia/Tokyo');
      $datetime =new DateTime();
      $date = $datetime->format('Y-m-d H:i:s');
      $result = update_profile($_POST['id'],$_POST['name'],$birthday,$_POST['type'],$_POST['tell'],$_POST['comment'],$date);
      //エラーが発生しなければ表示を行う
        ?>
        <h1>更新確認</h1>
        以上の内容で更新しました。<br>
          <?php echo return_top();   ?>
        <?php
    }else {
      ?>
      <h1>入力項目が不完全です</h1><br>
      再度入力を行ってください<br>
      <h3>不完全な項目</h3>
      <?php
      //連想配列内の未入力項目を検出して表示
      foreach ($confirm_values as $key => $value){
        if($value == null){
          if($key == 'name'){
            echo '名前';
          }
          if($key == 'year'){
            echo '年';
          }
          if($key == 'month'){
            echo '月';
          }
          if($key == 'day'){
            echo '日';
          }
          if($key == 'type'){
            echo '種別';
          }
          if($key == 'tell'){
            echo '電話番号';
          }
          if($key == 'comment'){
            echo '自己紹介';
          }
          echo 'が未記入です<br>';
}
        }
  echo return_top();   
      }

      ?>
      </body>
      </html>
