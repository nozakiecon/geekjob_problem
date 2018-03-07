
<?php
// 問題1. 戻り値として、人物のID、名前、生年月日、住所を配列にして返却する関数を作成してください。
// 2. 作成した関数を呼び出し、戻り値のID以外を表示してください。
function myprofile() {
$id = array('1', '2', '3', '4');
$name = array('yamada','yamane','nozaki','kaneko');
$birth = array('19900101','19920202','19930303','19940404');
$address = array('tokyo', 'osaka', 'kyoto', 'chiba');
$profile = array($id, $name, $birth, $address);
return $profile;
}
$profile = myprofile();
$c=count($profile);
for($i=1; $i<$c; $i++){
for($j=0; $j<$c; $j++){
echo $profile[$i][$j];
}
// }
