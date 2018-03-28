<html>
  <head>
    <meta charset="UTF-8">
    <title>DB操作課題</title>
  </head>
  <body>
<form action="./insertpdo.php" method="post">
挿入するprofileIDを入力してください<br>
<input type="text" name="id"><br>
挿入する名前を入力してください<br>
<input type="text" name="name1"><br>
挿入するtelを入力してください<br>
<input type="text" name="tel"><br>
挿入する年齢を入力してください<br>
<input type="text" name="age"><br>
挿入する誕生日を入力してください<br>
<input type="text" name="birthday"><br>
<input type="submit" name="btnSubmit">
</form>
  <?php
  //以下の課題を、PDOを利用して実現してください。
  //課題「テーブルの作成とinsert」で作成したテーブルへフォームからデータを挿入できる処理を構築してください。
try {
$dns =  'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';
$pdo_obj = new PDO($dns, 'nozakiecon2', 'estest');
$sid=$_POST['id'];
$sname=$_POST['name1'];
$sage=$_POST['age'];
$stel=$_POST['tel'];
$sbirth=$_POST['birthday'];

$sql1 = "INSERT INTO profiles VALUES ($sid,'$sname',$sage,'$stel','$sbirth')";
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
?>
</body>
</html>
