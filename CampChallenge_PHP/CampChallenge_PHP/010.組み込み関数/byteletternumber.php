<?php
// 自分の氏名について、バイト数と文字数を取得して、表示してください。
$name ="野崎翔";
echo strlen($name);
echo nl2br("\n");
echo mb_strlen($name);
// OK
// echo strlen("野崎翔");
// echo nl2br("\n");
// echo mb_strlen("野崎翔");
