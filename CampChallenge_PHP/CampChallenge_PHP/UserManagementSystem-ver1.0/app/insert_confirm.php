<?php require_once '../common/scriptUtil.php'; ?>
<?php require_once '../common/defineUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>登録確認画面</title>
</head>
<body>
  <?php
  //ポストの存在チェックとセッションに値を格納しつつ、連想配列にポストされた値を格納
  $confirm_values = array(
    'name' => bind_p2s('name'),
    'year' => bind_p2s('year'),
    'month' =>bind_p2s('month'),
    'day' =>bind_p2s('day'),
    'type' =>bind_p2s('type'),
    'tell' =>bind_p2s('tell'),
    'comment' =>bind_p2s('comment'));

    //生年月日が入力されてないときの処理
    if(!in_array(null,$confirm_values, true)){
      $post_name = $_POST['name'];
      //date型にするために1桁の月日を2桁にフォーマットしてから格納
      $post_birthday = $_POST['year'].'-'.sprintf('%02d',$_POST['month']).'-'.sprintf('%02d',$_POST['day']);
      $post_type = $_POST['type'];
      $post_tell = $_POST['tell'];
      $post_comment = $_POST['comment'];

      //セッション情報に格納
      session_start();
      $_SESSION['name'] = $post_name;
      $_SESSION['birthday'] = $post_birthday;
      $_SESSION['type'] = $post_type;
      $_SESSION['tell'] = $post_tell;
      $_SESSION['comment'] = $post_comment;
      ?>

      <h1>登録確認画面</h1><br>
      名前:<?php echo $post_name;?><br>
      生年月日:<?php echo $post_birthday;?><br>
      種別:<?php echo $post_type?><br>
      電話番号:<?php echo $post_tell;?><br>
      自己紹介:<?php echo $post_comment;?><br>

      上記の内容で登録します。よろしいですか？
      <form action="<?php echo INSERT ?>" method="POST">
        <input type="hidden" name="send" value="yes" >
      </form>
      <form action="<?php echo INSERT_RESULT ?>" method="POST">
        <input type="submit" name="yes" value="はい">
      </form>
      <form action="<?php echo INSERT ?>" method="POST">
        <input type="submit" name="no" value="登録画面に戻る">
      </form>
      <?php echo return_top();
    }else{
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
      ?>
      <h1>入力項目が不完全です</h1><br>
      再度入力を行ってください
      <form action="<?php echo INSERT ?>" method="POST">
        <input type="submit" name="no" value="登録画面に戻る">
        <input type='hidden' name='name'    value=<?php   print $_POST['name'] ?>>
        <input type='hidden' name='year'    value=<?php   print $_POST['year'] ?>>
        <input type='hidden' name='month'   value=<?php   print $_POST['month'] ?>>
        <input type='hidden' name='day'     value=<?php   print $_POST['day'] ?>>
        <input type='hidden' name='type'    value=<?php   print $_POST['type'] ?>>
        <input type='hidden' name='tell'    value=<?php   print $_POST['tell'] ?>>
        <input type='hidden' name='comment' value=<?php   print $_POST['comment'] ?>>
        <input type='hidden' name='send' value= 'yes'>
      </form>
      <?php echo return_top();?>
    </form>
    <?php
    if(empty( ($_POST['year'] = '----') || ($_POST['month']= '--') || ($_POST['day'] = '--' ))){
      echo "生年月日が入力されていません";?>
      <h1>入力項目が不完全です</h1><br>
      再度入力を行ってください
      <form action="<?php echo INSERT ?>" method="POST">
        <input type="submit" name="no" value="登録画面に戻る">
        <input type='hidden' name='name'    value=<?php print $_POST['name'] ?>>
        <input type='hidden' name='year'    value=<?php print $_POST['year'] ?>>
        <input type='hidden' name='month'   value=<?php  print $_POST['month'] ?>>
        <input type='hidden' name='day'     value=<?php  print $_POST['day'] ?>>
        <input type='hidden' name='type'    value=<?php  print $_POST['type'] ?>>
        <input type='hidden' name='tell'    value=<?php  print $_POST['tell'] ?>>
        <input type='hidden' name='comment' value=<?php  print $_POST['comment'] ?>>
      </form>
      <?php echo return_top();
    }
  }
  //名前が入力されてないときの処理
  ?>
</form>
</body>
</html>
