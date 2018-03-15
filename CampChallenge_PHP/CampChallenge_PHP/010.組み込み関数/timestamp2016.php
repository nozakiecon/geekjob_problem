<?php
// 2015年1月1日 0時0分0秒と2015年12月31日 23時59分59秒の差（総秒）を表示してください。
// 変数 = mktime(時, 分, 秒, 月, 日, 年);
$stamp1 = mktime(0,0,0,12,31,2015);
$time1= strtotime($stamp1);
$stamp2 = mktime(23,59,59,12,31,2015);
$time2= strtotime($stamp2);
$difference=$time1-$time2;
$difference=24 * 60 * 60;
echo $difference;
