<?php
// ファイルに自己紹介を書き出し、保存してください。
$fp = fopen('sample.txt', 'r');
if ($fp != false) {
    echo file_get_contents($fp);
    fclose($fp);
}
