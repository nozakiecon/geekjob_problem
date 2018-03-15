<?php
// 講義では紹介されていないPHPの組み込み関数はたくさん存在します。
// PHPの公式サイトから関数を選び、実際にロジックを作成してみてください。
// また、この処理を作成するに当たり、下記を必ず実装してください。
// 1. 処理の経過を書き込むログファイルを作成する。
// 2. 処理の開始、終了のタイミングで、ログファイルに開始・終了の書き込みを行う。
// 3. 書き込む内容は、「日時　状況（開始・終了）」の形式で書き込む。
// 4. 最後に、ログファイルを読み込み、その内容を表示してください。
// 今回はHTMLタグを無効にするhtmlspecialcharsを使用
$now = date('Y/m/d H:i:s');
// 当日が表示されます
$start= "$now.htmlspecialcharsの処理を開始";
$end= "$now.htmlspecialcharsの処理を終了";

$fp = fopen('filedisplay.txt', 'a');
if ($fp != false) {
    // ファイルに追記
    fwrite($fp,$start);
    // 書いたら、閉じる
    fclose($fp);
}
for($i = 0; $i < 100; ++$i){
$weblink ='<a href="https://camp.geekjob.jp/</a>';
$result = htmlspecialchars($weblink, ENT_QUOTES);
}
$fp = fopen('filedisplay.txt', 'a');
if ($fp != false) {
    // ファイルに追記
    fwrite($fp,$end);
    // 書いたら、閉じる
    fclose($fp);
}
