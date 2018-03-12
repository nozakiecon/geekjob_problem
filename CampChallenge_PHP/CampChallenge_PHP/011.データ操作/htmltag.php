<html>
<!-- 問題文HTMLについて調べましょう。
HTMLには入力フィールド意外にも様々なタグが存在します。
Webページをデザインする上で欠かせない知識なので、タグを調べ、色々と使ってみましょう。
 ここでは各要素を選択できるセレクトメニューについて調べた
 よってセレクトメニューを使ってhtmlを作成する-->
  <head>
    <meta charset="UTF-8">
    <title>データ操作課題2</title>
  </head>
  <body>
    使用しているプログラミング言語<br>
    <form method="post">
  <select name="language">
    <option value="Java">Java</option>
      <option value="Python">Python</python>
          <option value="C++">C++</option>
            <option value="PHP">PHP</option>
          </select>
          <br><p><input type="submit" value="送信する"></p>
        </form>
    <?php
    $x=$_POST['language'];
    echo  "あなたの使用しているプログラミング言語は".$x."ですね";
    ?>
  </body>
</html>
