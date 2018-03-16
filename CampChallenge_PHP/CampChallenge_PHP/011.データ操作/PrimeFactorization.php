<?php
    //クエリストリングを利用して、以下の処理を実現してください。
    //  1. 簡易素因数分解のロジックを作成します。
    //クエリストリングから渡された数値を1ケタの素数で可能な限り分解し、
    //元の値と素因数分解の結果を表示するようにしてください。
    //2ケタ以上の素数が含まれた数値の場合は、
    //「元の値　1ケタの素因数　余った値」と表記してください。

    $x = $_GET['number'];
    //$counter = [
      //'2' => 0,
      //'3' => 0,
      //'5' => 0,
      //'7' => 0
    //];


    //foreach ($counter as $key => $value) {
      //echo "$key の個数は $value です<br>";
    //}


      $counter2 = 0;
      $counter3 = 0;
      $counter5 = 0;
      $counter7 = 0;
      if ($x % 2 != 0 && $x%3!= 0 && $x%5!= 0 && $x%7!= 0){

        echo $x."は素数です";
       echo "元の値は2で余りは".$x % 2;
       echo "元の値は3で余りは".$x % 3;
       echo "元の値は5で余りは".$x % 5;
       echo "元の値は7で余りは".$x % 7;
      } else {
        while($x % 2 == 0) {
            $x=$x/2;
            $counter2++;

        }
        while($x%3 == 0) {
            $x=$x/3;
            $counter3++;
        }
        while($x%5 == 0) {
            $x=$x/5;
            $counter5++;
          }
        while($x%7 == 0) {
            $x=$x/7;
            $counter7++;
          }
      echo  "1ケタの素因数は7が".$counter7."個5が".$counter5."個3が".$counter3."個2が".$counter2;
      echo  "元の値" . $_GET['number'];
      if($x ==1){
      echo "余った値 は0";
}
}
