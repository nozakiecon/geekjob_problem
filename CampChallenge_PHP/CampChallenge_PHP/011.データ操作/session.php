  <?php
//課題「クッキーの記録と表示」と同じ機能(クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください。)
//をセッションで作成してください。
date_default_timezone_set('Asia/Tokyo');
session_start();
if (isset($_SESSION['LastLoginDate'] )){
      echo '前回のアクセス日時：' .$_SESSION['LastLoginDate'];
    }
$access_time = date('Y/m/d H:i:s');
$_SESSION['LastLoginDate'] = $access_time ;
