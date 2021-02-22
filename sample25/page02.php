<?php session_start(); ?>
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
<?php
print($_SESSION['session_message']);
?>
</pre>
<!--
ブラウザが閉じられたタイミングでセッションに保存された情報は消える
クッキーは定めた期間内保存される
セッションを使用するときは,文頭にsession_start();の記述が必要
セッションとはWebサーバーに記録される
サーバーに保存された情報がどのブラウザに保存された情報なのかを判断するためにセッションIDを発行
セッションIDをWebブラウザはクッキーに保管し、そのセッションIDをもとにセッションの内容を受け渡す
クッキーに直接パスワードを保存するよりは安全性が高いが、セッションIDが盗まれるとそこからパスワードを盗まれるセッションハイジャックされる危険がある
-->
</main>
</body>    
</html>