<?php
// 1. 引数として数値を受け取り、その値が奇数か偶数か判別＆表示する関数を作成してください。
// 2. 作成した関数を利用して、適当な数値の奇数・偶数の判別を行ってください。
// １．
function mod2($number) {
if ($number % 2 == 1){
    echo  '奇数です。';
}else{
  echo  '偶数です。';
}
}
// 　２．example
mod2("3");
mod2("12");
