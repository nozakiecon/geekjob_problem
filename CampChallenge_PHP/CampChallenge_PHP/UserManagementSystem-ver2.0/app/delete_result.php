<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>削除結果画面</title>
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
    //getメゾット→postメゾットに変更

    $result = delete_profile($_POST['id']);
    //エラーが発生しなければ表示を行う
    if(!isset($result)){

    ?>
    <h1>削除確認</h1>
    削除しました。<br>
    <?php
    }else{
        echo 'データの削除に失敗しました。次記のエラーにより処理を中断します:'.$result;
    }
    echo return_top();
    ?>
</body>
</html>
