<?php
// 2016年11月4日 10時0分0秒のタイムスタンプを作成し、「年-月-日 時:分:秒」で表示してください。
// 変数 = mktime(時, 分, 秒, 月, 日, 年);
$stamp = mktime(10,0,0,11,4,2016);
$hiduke = date('Y-m-d His', $stamp);
echo $hiduke;
