<?php
//問題文
//引数が２つの関数を作成してください。１つ目の引数に３人分のプロフィールを、２つ目の引数に検索文字を受け取ります。
//関数の中では、１つ目の引数で得た３人分のプロフィール（項目は戻り値2と同様）から、
//検索文字列を名前に含む（部分一致）プロフィールを探し、該当１件を返却する。
//それ以降は課題「戻り値2」と同じ処理にしてください。
//1. 戻り値として、人物のID、名前、生年月日、住所を配列にして返却する関数を作成してください。
//2. 作成した関数を呼び出し、戻り値のID以外を表示してください。
function  kensaku($profile,$find){
  foreach ($profile as $key1) {
      foreach ($key1 as $key2) {
    if( strpos($key2,$find) !== false) {
      return $key1;
}
}
}
}
$find ='to';
$profile = [0 => ['id' => 1,'name' => 'yamada','birth' => '19900101','address' => 'tokyo'],
    1 => ['id' => 2,'name' => 'yamane','birth' => '19920202','address' => 'osaka'],
    2 => ['id' => 3,'name' => 'nozaki','birth' => '19930303','address' => 'kyoto'],
];
$result = kensaku($profile,$find);
print_r($result);
