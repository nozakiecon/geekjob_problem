
<html>
  <head>
    <meta charset="UTF-8">
    <title>クラス課題</title>
  </head>
  <body>
<form action="./InventoryManager.php" method="post">
商品のIDを入力してください<br>
<input type="text" name="pid"><br>
商品名を入力してください<br>
<input type="text" name="pname"><br>
価格を入力してください<br>
<input type="text" name="price"><br>
<input type="submit" name="btnSubmit">
</form>
  <?php
  //以下の機能を満たすロジックを作成してください。
  //在庫管理システムを作成します。
  //まず、DBにユーザー情報管理テーブルと、商品情報登録テーブルを作成してください。
  //その上で、下記機能を実現してください。
  //1. ユーザーのログイン・ログアウト機能
  //2. 商品情報登録機能(html form)
  //3. 商品一覧機能
  //※各テーブルの構成は各自の想像で作ってみてください。
  $pid=$_POST['pid'];
  $pname=$_POST['pname'];
  $price=$_POST['price'];
try {
  $dns =  'mysql:host=localhost;';
  $dns .= 'dbname=Challenge_db;';
  $dns .= 'charset=utf8';
  $pdo_obj = new PDO($dns, 'nozakiecon2', 'estest');
  $sql1="create table user(userID int,username varchar(255),age int,password varchar(255))";
  $pdo_st = $pdo_obj->prepare($sql1);
  $pdo_st->execute();
  $sql2="INSERT INTO user VALUES (1,'tony',30,'abc'),(2,'tom',37,'ccc'),(3,
    'troy',24,'def'),(4,'bill',19,'aaa')";
    $pdo_st = $pdo_obj->prepare($sql2);
    $pdo_st->execute();
    $sql3="create table product(productID int,productname varchar(255),price int";
    $pdo_st = $pdo_obj->prepare($sql3);
    $pdo_st->execute();
    $sql4="INSERT INTO product VALUES (1,'ice',100),(2,'sushi',200),(3,
      'gum',120),(4,'pan','80')";
      $pdo_st = $pdo_obj->prepare($sql4);
      $pdo_st->execute();
      $datas = $pdo_st->fetchAll(PDO::FETCH_ASSOC);
      $password = array_column($datas,'password');
      $username = array_column($datas,'username');
    } catch (PDOException $pdo_ex) {
      echo 'DB接続に失敗しました。' . $pdo_ex->getMessage();
    }
    if (!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic realm="Private Page"');
    header('HTTP/1.0 401 Unauthorized');

    die('このページを見るにはログインが必要です');
}else{
  $i=0;
    while (isset($username[$i])){
    if ($_SERVER['PHP_AUTH_USER'] != $username[$i]
        || $_SERVER['PHP_AUTH_PW'] != $password[$i]){
        header('WWW-Authenticate: Basic realm="Private Page"');
        header('HTTP/1.0 401 Unauthorized');
        die('ユーザー名かパスワードが間違っています');
        $i++;
      }
    }
}
    if(isset($sid)){
class register(){
$sql1 = "INSERT INTO profiles VALUES ($sid,'$sname',$sage,'$stel','$sbirth')";
  }

/* 認証に成功すればここに処理が来る */
    ?>
    </body>
    </html>
