<?php
// ファイルから自己紹介を読み出し、表示してください
$fp = fopen('selfintro.txt', 'r');
if ($fp != false) {
    echo fgets($fp);
    fclose($fp);
}
