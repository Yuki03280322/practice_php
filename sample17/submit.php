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
    お名前： <?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?>
</pre>
<!--
$_REQUESTでフォームの値を受け取るためのプログラム（グローバル変数）method属性がgetならREQUEST,GETが対応
$_REQUESTはmethod属性がget,post問わずどちらでも受け取ることができるが、秘密の暗号やパスワードをgetで受け取る（URLで表示される）為、
どちらかわからない場合に使うのが好ましい
inputタグのname属性の部分が[]に反映される
htmlspecialcharsはセキュリティ目的で使用（これがないとhtmlタグがそのまま反映され危険）
パラメーターは2つあり、1つ目に何をエスケープするのかを指定
2つ目のパラメーターはどのようにエスケープするのかを指定
ENT_QUOTESは文字列ではなく数字であり整数のパラメーターが指定される
 -->
</main>
</body>    
</html>