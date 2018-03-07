<?php
// ファイルに自己紹介を書き出し、保存してください。
$fp = fopen('selfintro.txt', 'w');
if ($fp != false) {
    fwrite($fp, '私の名前は野崎です');
    fclose($fp);
}
