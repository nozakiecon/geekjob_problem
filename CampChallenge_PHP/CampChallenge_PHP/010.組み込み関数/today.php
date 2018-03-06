<?php
// 現在の日時を「年-月-日 時:分:秒」で表示してください。
// 変数 = mktime(時, 分, 秒, 月, 日, 年);
date_default_timezone_set('Asia/Tokyo');
$today = date('Y/m/d H:i:s');
echo $today;
