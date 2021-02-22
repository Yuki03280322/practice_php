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
<table>
  <?php
  for ($i=1; $i<=100; $i++) {
    if ($i % 2) {
      print('<tr style="background-color: #ccc">');
    } else if ($i % 3) {
      print('<tr style="background-color: #aaa">');
    } else {
      print('<tr>');
    }
    print('<td>' . $i . '行目</td>');
    print('</tr>');
  }
  // for ($i=1; $i<=10; $i++) {
  //   if($i % 2) { //余りが0以外の場合
  //     print('<tr style="background-color: #ccc">');
  //   } else {  //余りが0だった場合
  //     print('<tr>');
  //   }
  //   print('<td>' . $i . '行目</td>');
  //   print('</tr>');
  // }
  ?>
</table>
<!--
剰余算の性質を利用した曜日出力
$week = array('日', '月', '火', '水', '木', '金', '土');
for ($i=1; $i<31; $i++) {
  print($week[$i%7] . "\n") ;
}
 -->
</main>
</body>    
</html>