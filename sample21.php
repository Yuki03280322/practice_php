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
$zip = '１２３−４５６７';
$zip = mb_convert_kana($zip, 'a', 'UTF-8');
if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
  print('郵便番号:〒' . $zip);
} else {
  print('※ 郵便番号を 123-4567の形式で記入してください');
}
?>
</pre>
<!--
mb_convert_kanaで半角に修正
preg_matchは正規表現で検査しマッチしているかを判断する
\A・・文章の先頭から合っているか？
d{3}・・数字が3回使われているか？
 -->
</main>
</body>    
</html>