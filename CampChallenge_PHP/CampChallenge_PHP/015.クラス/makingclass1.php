<?php
//以下の機能を持つクラスを作成してください。
//・パブリックな２つの変数
//・２つの変数に値を設定するパブリックな関数
//・２つの変数の中身をechoするパブリックな関数
class se {
    public $language = '';
    public $os = '' ;

    public function setse($n, $a) {
        // 引数をフィールドへ設定
        $this->language=$n;
        $this->os=$a;
    }
    // メソッドの宣言
    public function displayse() {
        // 引数をフィールドへ設定
        echo $this->language;
        echo "<br />";
        echo $this->os;
    }
}
$pg = new se();
$pg->setse('php', 'mac');
$pg->displayse();
$pg;
