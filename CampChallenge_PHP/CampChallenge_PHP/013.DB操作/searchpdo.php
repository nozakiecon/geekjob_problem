<html>
  <head>
    <meta charset="UTF-8">
    <title>DB操作課題</title>
  </head>
  <body>
<form action="./searchpdo.php" method="post">
検索ワードを入力してください<br>
<input type="text" name="word"><br>
<input type="submit" name="btnSubmit">
</form>
  <?php
  $searchkey= '%'.$_POST['word'].'%';
  if( isset($searchkey) ){
  //以下の課題を、PDOを利用して実現してください。
  //検索用のフォームを用意し、名前の部分一致で検索＆表示する処理を構築してください。
  //同じページにリダイレクトするPOST処理と、POSTに値が入っているかの条件分岐を活用すれば、
  //一つのファイルで完了できますので、チャレンジしてみてください
try {
$dns =  'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';
$pdo_obj = new PDO($dns, 'nozakiecon2', 'estest');
$sql = "select profilesID,name,tel,age,birthday FROM profiles WHERE name LIKE '$searchkey'";
$pdo_st = $pdo_obj->prepare($sql);
$pdo_st->execute();
$datas = $pdo_st->fetchAll(PDO::FETCH_ASSOC);
var_dump($datas);
} catch (PDOException $pdo_ex) {
    echo 'DB接続に失敗しました。' . $pdo_ex->getMessage();
}
}
?>
</body>
</html>
