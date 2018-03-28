<?php
//課題「クラスの作成1」のクラスを継承し、以下の機能を持つクラスを作成してください。
//・２つの変数の中身をクリアするパブリックな関数
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
class SIer extends se {
  public function clear() {
     $this->language = '';
     $this->os = '' ;
     }
 }
$SIer1= new SIer();
$SIer1-> clear();
$SIer1->displayse();
$SIer1;
