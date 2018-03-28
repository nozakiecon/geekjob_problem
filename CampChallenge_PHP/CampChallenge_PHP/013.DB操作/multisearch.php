<html>
  <head>
    <meta charset="UTF-8">
    <title>DB操作課題</title>
  </head>
  <body>
<form action="./multisearch.php" method="post">

名前を入力してください<br>
<input type="text" name="name1"><br>
年齢を入力してください<br>
<input type="text" name="age"><br>
誕生日を入力してください<br>
<input type="text" name="birthday"><br>
<input type="submit" name="btnSubmit">
</form>
  <?php
  //以下の課題を、PDOを利用して実現してください。
//  課題「テーブルの作成とinsert」で作成したテーブルの検索用フォームを用意し、名前、年齢、誕生日を使った複合検索ができるようにしてください。

  if(isset($_POST['age'])){
$sname=$_POST['name1'];
$sage=$_POST['age'];
$sbirth=$_POST['birthday'];
try {
$dns =  'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';
$pdo_obj = new PDO($dns, 'nozakiecon2', 'estest');
$sql = "select profilesID,name,tel,age,birthday FROM profiles WHERE name = '$sname' AND age =$sage AND birthday = '$sbirth'";
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
