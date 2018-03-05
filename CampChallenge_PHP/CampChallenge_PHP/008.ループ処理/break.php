<?php
// continueとbreak
//「continue」の処理において、7の段でforeachの処理を抜ける様にしてみましょう。
// 2. continueを利用して、5の段だけ表示されない様にしてみましょう。

$data1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$data2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach($data1 as $num1) {
 echo nl2br("\n");
 if ($num1 == 7) {
       echo '7を見つけたのでbreakを実行します！';
       break;
     }
foreach($data2 as $num2) {
  $num3= $num1*$num2;
  echo $num3."\n";
  if ($num2 == 7) {
        echo '7を見つけたのでbreakを実行します！';
        break;
      }
}
}
