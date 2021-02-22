<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
変数の値: <?php print($value . "\n"); ?>
Cookieの値: <?php print($_COOKIE['save_message']); ?>
</pre>
<!--
変数の値はページ移動のときに消える
変数はその画面内のみ使用できる
そのため、ログインidなど保存したい情報はCookieに保存する
Cookie情報は検証ツールのApplicationから確認可能
Cookie情報は$_COOKIEというグローバル変数に格納され、キーを指定することで呼び出す
-->
</main>
</body>    
</html>