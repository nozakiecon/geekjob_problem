<?php
// 以下の文章の「I」⇒「い」に、「U」⇒「う」に入れ替える処理を作成し、結果を表示してください。
//「きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます」
// 変数 = str_replace(検索文字, 置換文字, 対象文字);
$sentence = "きょUはぴIえIちぴIのくみこみかんすUのがくしゅUをしてIます";
$sentence1 =str_replace('I', 'い', $sentence);
echo str_replace('I', 'い',$sentence);
echo nl2br("\n");
echo str_replace('U', 'う', $sentence);
echo nl2br("\n");
$sentence2 = str_replace('I', 'い',$sentence1);
echo str_replace('U', 'う', $sentence1);
echo nl2br("\n");
