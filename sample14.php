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
$news = file_get_contents('../../news_data/news.txt');
$news = "2021-2-20 本日は夜にご飯へ行きます\n" . $news;
file_put_contents('../../news_data/news.txt', $news);
print($news);
?>
</pre>
<!-- 
file_get_contentsファイル読み込み
readfile('../../news_data/news.txt');
readfileファンクションは読み込んだファイルを再加工したり受け取ったプログラムを活用したりすることは出来ない
.=は文字列連結の省略
$s = $s . 'abc';
$s .= 'abc';と同義
 -->
</main>
</body>    
</html>