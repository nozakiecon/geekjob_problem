<?php
//  問題　for文を利用して、0から100を全部足す処理を実現してください。
// 1から100の合計を表示する処理
$total = 0;
for ($i = 1; $i <= 100; $i++) {
    $total = $total + $i;
}
echo $total;
