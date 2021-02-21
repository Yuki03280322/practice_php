<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
foreach ($_POST['reserve'] as $reserve) {
  print(htmlspecialchars($reserve, ENT_QUOTES) . ' ');
}
?>
</pre>
<!--
複数選択可能なチェックボックスの値を受け取るときは配列で受け取る為、foreach構文を使用
foreach構文で配列で受け取った$_POST['reserve]を処理
formから受け取ったreserveを変数に入れ,半角空白を文字列連結
htmlspecialcharsでエスケープしている
 -->
</main>
</body>    
</html>