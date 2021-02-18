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
print(111+222+444);
print(nl2br("\n"));
?>
<?php $sum = 100+400+500; ?>
<?php $tax = 1.08 ?>
合計金額は： <?php print($sum); ?>円です
税込価格は： <?php print($sum*$tax); ?>円です
</pre>
<!-- PHPは変数宣言のとき$で始める
変数宣言OK→英単語,アンダースコア_,数字,日本語
変数宣言NG→記号,空白,一部大文字小文字など
""で変数をくくると変数の中身が出てくる、ややこしくなるので変数には''でくくるのが無難？ -->
</main>
</body>    
</html>