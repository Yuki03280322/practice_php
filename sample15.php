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
$xmlTree = simplexml_load_file('https://h2o-space.com/feed/');
// var_dump($xmlTree);
foreach ($xmlTree->channel->item as $item):
  // itemプロパティにある配列の要素一つ一つを$itemに格納する処理を繰り返す
?>
・<a href="<?php print($item->link); ?>"><?php print
($item->title); ?></a>
<?php
endforeach;
?>
</pre>
<!-- 
xmlTreeにはvar_dumpにて中身を確認可能
itemという配列に入っている要素一つ一つを取得（titleやlinkなどが入っていることが確認できる）
foreachは配列を処理する繰り返しの構文
->はオブジェクト指向のオブジェクトやプロパティやメソッドにアクセスするためのもの
ここではchannelというプロパティにアクセスし、channelがもつ子供のプロパティであるitemにアクセスしている
itemというプロパティは配列の形式になっているから、その配列を処理しながら$itemに内容を入れている
itemタグに入っているtitle要素を画面に出力(php print($item->title))
itemタグに入っているlink要素をaタグのhref属性の中に記述しリンクにしている
-->
</main>
</body>    
</html>