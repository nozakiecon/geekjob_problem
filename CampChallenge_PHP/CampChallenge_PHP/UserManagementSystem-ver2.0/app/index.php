<?php require_once '../common/defineUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
    <title>ユーザー情報管理トップ
    </title>

</head>
<style type="text/css">
<!--
h1{font-style:oblique;
  font-family:Times New Roman,"ＭＳ Ｐゴシック";
}
body { background:radial-gradient(#F89174, #FFC778);
background: -moz-linear-gradient(left, #FFC778, #FFF);
background: -webkit-linear-gradient(left, #FFC778, #FFF);
background: linear-gradient(to right, #FFC778, #FFF);
}
-->
</style>
<body>
    <h1>ユーザー情報管理トップ画面</h1><br>
    <h3>ここでは、ユーザー情報管理システムとしてユーザー情報の登録や検索、
        付随して修正や削除を行うことができます</h3><br>
    <a href="<?php echo INSERT; ?>">新規登録</a><br>
    <a href="<?php echo SEARCH; ?>" >検索(修正・削除)</a><br>

</body>
</html>
