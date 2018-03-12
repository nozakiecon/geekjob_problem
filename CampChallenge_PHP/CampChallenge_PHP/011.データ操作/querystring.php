
      <?php
      //クエリストリングを利用して、以下の処理を実現してください。
      //○想定されるクエリストリング
      //http://localhost/対象ファイル.php?total=総額&count=個数&type=商品種別
      //例）http://localhost/対象ファイル.php?total=1500&count=10&type=2
      //　⇒総額1500円、10個、商品種別は2
      //1. 受け取った商品種別を以下の対応で日本語表示してください。
      //　 雑貨、2：生鮮食品、3:その他
      //　 例)typeが2だったら、「生鮮食品」
      //2. 受け取った総額と個数から、１個当たりの値段を算出し、表示してください。
      //3. 総額に応じたポイントが付きます。ポイントを計算し、表示してください。
      //　 3000円以上で、4%
      //　 5000円以上で、5%
echo "問題1";
switch($_GET['type']) {
  case 1:
echo "雑貨";
break;
case 2:
echo "生鮮食品";
break;
 case 3:
 echo "その他";
 break;
}
echo "問題2";
$perprice=$_GET['total']/$_GET['count'];
echo $perprice;
echo "問題3";
if ($_GET['total']>=3000&&$_GET['total']<=3000) {
  $point =$_GET['total']*0.04;
 echo $point;
} elseif ($_GET['total']>=5000) {
    $point =$_GET['total']*0.05;
      echo $point;
}
