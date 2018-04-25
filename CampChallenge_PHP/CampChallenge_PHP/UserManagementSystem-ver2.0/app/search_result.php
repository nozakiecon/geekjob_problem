<?php
require_once '../common/defineUtil.php';
require_once '../common/scriptUtil.php';
require_once '../common/dbaccesUtil.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>検索結果画面</title>
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
        <h1>検索結果</h1>
        <table border=1>
            <tr>
                <th>名前</th>
                <th>生年</th>
                <th>種別</th>
                <th>登録日時</th>
            </tr>
        <?php
        if(!$_GET['mode']=="CONFIRM"){
            echo 'アクセスルートが不正です。もう一度トップページからやり直してください<br>';
        }else{

        $result = null;
        if(empty($_GET['name']) && empty($_GET['year']) && empty($_GET['type'])){
            $result = search_all_profiles();
        }else{
            $result = search_profiles($_GET['name'],$_GET['year'],$_GET['type']);
            $search_name = $_GET['name'];
            $search_year = $_GET['year'];
            $search_type = $_GET['type'];
        }
        foreach($result as $value){
        ?>
            <tr>
                <td><a href="<?php echo RESULT_DETAIL ?>?id=<?php echo $value['userID']?>"><?php echo $value['name']; ?></a></td>
                <td><?php echo $value['birthday']; ?></td>
                <td><?php echo ex_typenum($value['type']); ?></td>
                <td><?php echo date('Y年n月j日　G時i分s秒', strtotime($value['newDate'])); ?></td>
            </tr>
        <?php
        }
}

        ?>
        </table>
        <form action="<?php echo INSERT ?>" method="POST">
       <input type="submit" name="no" value="登録画面に戻る">
       <input type="hidden" name="name" value="<?php echo $search_name ?>">
       <input type="hidden" name="year" value="<?php echo $search_year ?>">
       <input type="hidden" name="type" value="<?php echo $search_type ?>">
     </form>
</body>
</html>
