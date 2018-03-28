<html>
  <head>
    <meta charset="UTF-8">
    <title>DB操作課題</title>
  </head>
  <body>
<form action="./insertpdo.php" method="post">
profileIDを入力してください<br>
<input type="text" name="id"><br>
名前を入力してください<br>
<input type="text" name="name1"><br>
telを入力してください<br>
<input type="text" name="tel"><br>
年齢を入力してください<br>
<input type="text" name="age"><br>
誕生日を入力してください<br>
<input type="text" name="birthday"><br>
<input type="submit" name="btnSubmit">
</form>
  <?php
  //以下の課題を、PDOを利用して実現してください。
  //課題「テーブルの作成とinsert」で作成したテーブルからprofileIDで指定したレコードの、
  //profileID以外の要素をすべて上書きできるフォームを作成してください。

  if(isset($_POST['id'])){
$sid=$_POST['id'];
$sname=$_POST['name1'];
$sage=$_POST['age'];
$stel=$_POST['tel'];
$sbirth=$_POST['birthday'];
try {
$dns =  'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';
$pdo_obj = new PDO($dns, 'nozakiecon2', 'estest');
$sql1 = "UPDATE profiles SET name = '$sname',tel='$stel',age =$sage, birthday = '$sbirth' WHERE profilesID = $sid;";
$pdo_st = $pdo_obj->prepare($sql1);
$pdo_st->execute();
$sql2 ="select profilesID,name,tel,age,birthday FROM profiles";
$pdo_st = $pdo_obj->prepare($sql2);
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
