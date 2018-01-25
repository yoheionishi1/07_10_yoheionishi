
<?php

/*** データベースの読み込み ***/
require_once("data/db_info.php");

/*** データベースへの接続、データベース選択 ***/
$s=new PDO("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS);

/*** タイトル等の表示 ***/
print <<<eot1
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/example.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>BOOK CAFE | 好きな本のレビューを聞ける掲示板</title>
</head>

<body>
<header>
<div class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<a href="keijitop.php" class="navbar-brand">BOOK CAFE</a>
<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
<span class="icon-bar">top</span>
<span class="icon-bar">Top</span>
<span class="icon-bar">Top</span>
</button>
</div>
<div class="navbar-collapse collapse" id="navbar-main">
<ul class="nav navbar-nav">
<li class="active"><a href="keijisearch.php">書籍検索</a></li>
<li><a href="keijitop.php#sakusei">スレッド作成</a></li>
<li><a href="#">BOOK CAFEとは？</a></li>
</ul>

<div class="nav navbar-form navbar-right">
<div class="form-group">
<a href="https://twitter.com/" class="btn btn-twitter"><i class="fa fa-twitter fa-lg"></i> Tweet</a>
<a href="http://www.facebook.com/" class="btn btn-facebook"><i class="fa fa-facebook fa-lg"></i> Share</a>
<a href="javascript:window.open('http://b.hatena.ne.jp/" class="btn btn-hatebu"><i class="fa fa-hatebu fa-lg"></i> Bookmark</a>
</div>
</div>
</div>
</div>
</div>
</header>
eot1;

/*** 検索文字列を取得してタグを削除 ***/
$se_d=isset($_GET["se"])?htmlspecialchars($_GET["se"]):null;

/*** 検索文字列$se_dにデータがあれば検索する処理 ***/
if($se_d<>""){

/*** 検索のSQL文テーブルgs_an_table1にgs_an_tableを結合 ***/
$str=<<<eot2
SELECT gs_an_table1.bang,gs_an_table1.nama,gs_an_table1.mess,gs_an_table.sure
FROM gs_an_table1
JOIN gs_an_table
ON
gs_an_table1.id=gs_an_table.id
WHERE gs_an_table1.mess LIKE "%$se_d%"
eot2;

/*** 検索クエリを実行 ***/
$re=$s->query($str);
while($kekka=$re->fetch()){
print "$kekka[0]:$kekka[1]:$kekka[2]($kekka[3])";
}
}

/*** 検索文字列入力表示、トップページへのリンク ***/
print <<<eot3
<hr>
<div>メッセージに含まれる文字列を入力してください</div>
<form method="GET" action "keijisearch.php">
検索する文字列
<input type="text" name="se">
<div>
<input type="submit" value="検索">
</div>
</form>
<br>
<a href="keijitop.php">スレッド一覧に戻る</a>

</body>
</html>
eot3;

?>