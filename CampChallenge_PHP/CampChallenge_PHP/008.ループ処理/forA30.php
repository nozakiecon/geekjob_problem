<?php
//  問題　for文を利用して、適当な変数へ文字連結を行い、中に"A"が30個入った状態にしてください

const letter = 'A';
$moji = "geekjob";
for ($i = 0; $i < 30; $i++) {
    $moji = $moji.letter;
}
echo $moji;
