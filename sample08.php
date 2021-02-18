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
$week_name = ['日', '月', '火', '水', '木', '金', '土'];
$week = 4 + 1;
print($week_name[0] . "\n");
print($week_name[$week] . "\n");
print($week_name[date('w')]);
?>
</pre>
<!-- 
PHPでは配列はブラケット[]を使う
配列の添字はRuby同様の方法
 -->
</main>
</body>    
</html>