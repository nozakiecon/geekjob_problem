<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<style type="text/css">
<!--

body { background:radial-gradient(#F89174, #FFC778);
background: -moz-linear-gradient(left, #FFC778, #FFF);
background: -webkit-linear-gradient(left, #FFC778, #FFF);
background: linear-gradient(to right, #FFC778, #FFF);
}
-->
</style>
<head>
<meta charset="UTF-8">
      <title>ユーザー情報詳細画面</title>
</head>
  <body>
    <?php
//修正箇所　postメゾット→getメゾット
$id=$_GET['id'];
    $result = profile_detail($_GET['id']);
    //エラーが発生しなければ表示を行う
    if(is_array($result)){
    ?>

    <h1>詳細情報</h1>
    名前:<?php echo $result[0]['name'];?><br>
    生年月日:<?php echo $result[0]['birthday'];?><br>
    種別:<?php echo ex_typenum($result[0]['type']);?><br>
    電話番号:<?php echo $result[0]['tell'];?><br>
    自己紹介:<?php echo $result[0]['comment'];?><br>
    登録日時:<?php echo date('Y年n月j日　G時i分s秒', strtotime($result[0]['newDate'])); ?><br>

    <form action="<?php echo UPDATE; ?>" method="POST">
        <input type="submit" name="update" value="変更"style="width:100px">
        <!--修正箇所　ユーザーIDを更新画面に送るためにhiddenを追加-->
   <input type="hidden" name="id" value="<?php echo $id ?>">
     <input type="hidden" name="mode" value="REINPUT" >
</form>
    </form>


    <form action="<?php echo DELETE; ?>" method="POST">
  <!-- 修正箇所　ユーザーのidを削除ページに送るため追加-->
  <input type="hidden" name="id" value="<?php echo $id ?>">
    <input type="submit" name="delete" value="削除"style="width:100px">
  <input type="hidden" name="mode" value="REINPUT" >
      </form>

    <!-- 修正箇所 検索結果へ戻るボタンの追加 -->
    <form action="<?php echo SEARCH_RESULT; ?>" method="GET">

    <!-- 修正箇所　hiddenで値を渡す-->
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="hidden" name="name" value="<?php echo $search_name ?>">
    <input type="hidden" name="year" value="<?php echo $search_year ?>">
    <input type="hidden" name="type" value="<?php echo $search_type ?>">
    <input type="submit" name="NO" value="検索結果画面に戻る"style="width:120px">

    </form>
    <?php
    }else{
        echo 'データの検索に失敗しました。次記のエラーにより処理を中断します:'.$result;
    }
    echo return_top();
    ?>

      </form>
  </body>
</html>
