<HTML>
    <head>
      <meta charset="UTF-8">
    </head>
      <title>データ操作課題</title>
    <body>
        <?php
        //課題ファイルアップロード機能を作成し、ファイルの中身を読み込んで表示する機能を追加してください。
        $files_path = './files/' . $_FILES['userfile']['name'];
      if  (move_uploaded_file($_FILES['userfile']['tmp_name'],$files_path)){
      echo file_get_contents($files_path);
    }
?>
</body>
</HTML>
