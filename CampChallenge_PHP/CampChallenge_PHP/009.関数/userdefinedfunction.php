<?php
// 問題　自分のプロフィール(名前、生年月日、自己紹介)を3行に分けて表示するユーザー定義関数を作り、関数を10回呼び出して下さい
// 自己紹介するユーザー定義関数
function myprofile() {

    echo "私の名前は野崎です<br>";
    echo "生年月日は1990年6月3日です<br>";
    echo "現在geekjobでプログラミングを学習しています<br>";
}

// 関数を10回呼び出し
for ($i = 0; $i < 10; $i++) {
myprofile();
}
