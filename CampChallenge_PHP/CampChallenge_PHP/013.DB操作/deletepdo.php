<html>
  <head>
    <meta charset="UTF-8">
    <title>DB操作課題</title>
  </head>
  <body>
<form action="./deletepdo.php" method="post">
削除するprofileIDを入力してください<br>
<input type="text" name="word"><br>
<input type="submit" name="btnSubmit">
</form>
  <?php
  $searchkey= $_POST['word'];
  if( isset($searchkey) ){
  //以下の課題を、PDOを利用して実現してください。
  //課題「テーブルの作成とinsert」で作成したテーブルからprofileIDで指定したレコードを削除できるフォームを作成してください。
try {
$dns =  'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';
$pdo_obj = new PDO($dns, 'nozakiecon2', 'estest');
$sql1 = "DELETE FROM profiles WHERE profilesID = $searchkey";
$pdo_st = $pdo_obj->prepare($sql1);
$pdo_st->execute();
$sql2 ="select profilesID,name,tel,age,birthday FROM profiles";
$pdo_st = $pdo_obj->prepare($sql2);
$pdo_st->execute();
$datas = $pdo_st->fetchAll(PDO::FETCH_ASSOC);
echo $sql1 = "DELETE FROM profiles WHERE profilesID = '$searchkey'";
var_dump($datas);
} catch (PDOException $pdo_ex) {

    echo 'DB接続に失敗しました。' . $pdo_ex->getMessage();
}
}
?>
</body>
</html>
