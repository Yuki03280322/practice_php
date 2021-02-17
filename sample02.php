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
print(1+1);
print(nl2br("\n"));
// nl2br関数で挿入しエスケープシーケンスで改行
print(10*50);
// 算術演算子+-*/%
?>
</pre>
</main>
</body>    
</html>

<!-- nl2brを関数宣言し、省略する
function br(){
  echo nl2br("\n");
}

echo "hoge";

br();

echo "fuga";
printとechoの違いについて
printはカンマ区切りでの文字列出力はできません
printは戻り値として1を返す -->