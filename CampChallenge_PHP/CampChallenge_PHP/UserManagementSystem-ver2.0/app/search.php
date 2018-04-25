<?php require_once '../common/defineUtil.php'; ?>
<?php require_once '../common/scriptUtil.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>ユーザー情報検索画面</title>
      <style type="text/css">
      <!--

      body { background:radial-gradient(#F89174, #FFC778);
      background: -moz-linear-gradient(left, #FFC778, #FFF);
      background: -webkit-linear-gradient(left, #FFC778, #FFF);
      background: linear-gradient(to right, #FFC778, #FFF);
      }
      -->
      </style>
</head>
  <body>
    <form action="<?php echo SEARCH_RESULT ?>" method="GET">
  <input type="hidden" name="mode"  value="CONFIRM">
        名前:
        <br>
        <input type="text" name="name">
        <br><br>

        生年:
        <br>
        <select name="year">
            <option value="">----</option>
            <?php
            for($i=1950; $i<=2010; $i++){ ?>
              <option value="<?php echo $i;?>"><?php echo $i;?></option>
            <?php } ?>
        </select>年生まれ
        <br><br>

        種別:
        <br>
        <?php
        for($i = 1; $i<=3; $i++){ ?>
        <input type="radio" name="type" value="<?php echo $i; ?>"><?php echo ex_typenum($i);?><br>
        <?php } ?>
        <br>

        <input type="submit" name="btnSubmit" value="検索">
      </form>
        <?php echo return_top(); ?>
  </body>
</html>
