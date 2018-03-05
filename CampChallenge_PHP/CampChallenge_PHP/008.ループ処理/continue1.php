<?php
// 1. 二重のforeachを利用して、九九表を作成してください。
// 2. continueを利用して、5の段だけ表示されない様にしてみましょう。

$data1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$data2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach($data1 as $num1) {
 echo nl2br("\n");
foreach($data2 as $num2) {
  $num3= $num1*$num2;
  echo $num3."\n";
}
}
