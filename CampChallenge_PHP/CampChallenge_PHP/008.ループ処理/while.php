<?php
//  問題　while文を利用して、以下の処理を実現してください。
// 1000を2で割り続け、100より小さくなったらループを抜ける処理


$key = 1000;
while($key >= 100) {
echo $key;
$key = $key/2;
}
