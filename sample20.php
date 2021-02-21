<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

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
$age = ２０;

$age = mb_convert_kana($age, 'n', 'UTF-8');
if (is_numeric($age)) {
  print($age . '歳');
} else {
  print('※年齢が数字ではありません');
}
?>
</pre>
<!--
is_numericは数字であるかを判断する
mb_convert_kanaファンクション
mbは全角を扱うときに使用する言葉
カナをコンバートするファンクション
'n'で半角数字で直してから$ageに再読み込み
これにより半角数字はそのまま、全角数字は半角数字に直し、それ以外はそのままになる
 -->
</main>
</body>    
</html>