  <?php
//クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。
date_default_timezone_set('Asia/Tokyo');
$access_time = date('Y/m/d H:i:s');
setcookie('LastLoginDate', $access_time);
if (isset($_COOKIE['LastLoginDate'])){
      echo '前回のアクセス日時：' .$_COOKIE['LastLoginDate'];
    }
