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
print (date('n/j(D)', strtotime('+1day')));
print "\n";

print (date('n/j(D)', strtotime('+2day')));
print "\n";

for ($i=1; $i<=365; $i++) {
  $date = strtotime('+' . $i . 'day');
  // 繰り返した回数分$dateに加算
  print (date('n/j(D)', $date));
  print "\n";
}
for ($i=1; $i<=365; $i++):
  $date = strtotime('+' . $i . 'day');
  print (date('n/j(D)', $date));
  print "\n";
endfor;
?>
</pre>
<!--
n月、j日、D曜日アルファベット
date functionにタイムスタンプを付与
str to timestampの略
-->
</main>
</body>    
</html>