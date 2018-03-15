
<html>
  <head>
    <meta charset="UTF-8">
    <title>データ操作課題</title>
  </head>
  <body>
    <form action="./kadai.php" method="post">
名前を入力してください<br>
      <input type="text" name="name1"><br>
性別を選んでください：<br>
<input type="radio" name="sex" value="男">男性<br>
<input type="radio" name="sex" value="女">女性<br>
趣味を書いてください<br>
      <textarea name="hobby"></textarea>
      <input type="submit" name="btnSubmit">
    </form>
    <?php
    //名前・性別・趣味を入力するページを作成してください。
    //また、入力された名前・性別・趣味を記憶し、次にアクセスした際に記録されたデータを初期値として表示してください。
        session_start();
    if (isset($_SESSION['name1'] )){
    echo $_SESSION['name1'];
    echo $_SESSION['sex'];
    echo $_SESSION['hobby'];
    $_SESSION['name'] =  $_POST['name1'];
    $_SESSION['sex'] = $_POST['sex'];
   $_SESSION['hobby'] =  $_POST['hobby'];
 }
    ?>
  </body>
</html>
