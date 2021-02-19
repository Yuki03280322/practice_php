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
3,000円のものから、100円値引きした場合は、
<?php
print(floor(100 / 3000 * 100));
?>
%引きです。
</pre>
<!-- 
floorは小数を切り捨て
ceilは切り上げ 
print(ceil(100 / 3000 * 100));
roundは四捨五入
print(round(100 / 3000 * 100, 1));小数第一位まで表示
-->
</main>
</body>    
</html>