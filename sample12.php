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
$date = sprintf('%04d年 %02d月 %02d日', 2018, 2, 23);
print($date);
?>
</pre>
<!-- 
sprintf書式を整える
%04d→4桁
%02d→2桁
間の0は半角空白で補うという意味
最後のdは数字を指定している、万が一数字以外が指定されたとき表示が崩れないようにしている（文字を指定したいときはs）
パラメーターの数はパラメーターを指定している数に対応している
 -->
</main>
</body>    
</html>