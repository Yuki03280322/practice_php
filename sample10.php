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
if (date('G') < 23){
  print('※ 現在受付時間外です');
} else {
  print('ようこそ');
}

print("\n");

if (date('G') >= 9){
  print('ようこそ');
}

print("\n");

$x = 'あいうえお';
if ($x !== ''){
  print('xには文字が入っています');
}

print("\n");

$x ='abcd';
if ($x){
  print('xには文字が入っています');
}

print("\n");

$x = 0;
if (!$x){
  print('xは0です');
}
// !はエクスクラメーションマークであり、条件の反転($x === 0と同義)
?>
</pre>
</main>
</body>    
</html>