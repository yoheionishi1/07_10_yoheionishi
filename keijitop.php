<?php
/*** データベースの読み込み ***/
require_once("data/db_info.php");

/*** データベースへの接続、データベース選択 ***/
$s=new PDO("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS);

/*** タイトル、画像の表示 ***/
print <<< eot1

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
</div>
<div class="navbar-collapse collapse" id="navbar-main">
<ul class="nav navbar-nav">
<li class="active"><a href="keijisearch.php">書籍検索</a></li>
<li><a href="#sakusei">スレッド作成</a></li>
<li><a href="keijiwiki.php">BOOK CAFEとは？</a></li>
</ul>

<div class="nav navbar-form navbar-right">
<div class="form-group">
<a href="#" class="btn btn-twitter"><i class="fa fa-twitter fa-lg"></i> Tweet</a>
<a href="#" class="btn btn-facebook"><i class="fa fa-facebook fa-lg"></i> Share</a>
<a href="javascript:window.open('#" class="btn btn-hatebu"><i class="fa fa-hatebu fa-lg"></i> Bookmark</a>
</div>
</div>
</div>
</div>
</div>
</header>

<aside class="v4-dev">
<a href="#">閲覧したいスレッドの書籍/タイトルをクリックしてください</a>
</aside>
<br>
<br>

<div class="container">
<div style="font-size:25pt"><b>スレッド一覧</b></div>

eot1;

/*** IPアドレス取得 ***/
$ip=getenv("REMOTE_ADDR");

/*** スレッドの変数$book_dにデータがあれば$gs_an_tableに挿入 ***/
$book_d=isset($_GET["book"])? htmlspecialchars($_GET["book"]):null;
$url_d=isset($_GET["url"])? htmlspecialchars($_GET["url"]):null;
if($book_d<>""){
    $s->query("INSERT INTO gs_an_table (urldata,booktitle,posttime,aipi) VALUES('$url_d','$book_d',now(),'$ip')");
}

$re=$s->query("SELECT * FROM gs_an_table");
while($kekka=$re->fetch()){
print <<< eot2

<div class="jumbotron" style="background-color: #fff;">
<p><a href="keiji.php?gu=$kekka[0]">$kekka[0] $kekka[2] $kekka[3]</a></p>
<p><a href="keiji.php?gu=$kekka[0]" class="btn btn-primary btn-lg">本のレビューを見る</a></p>
<hr>
</div>




eot2;
}

/*** スレッド作成用フォーム、検索フォームへのリンク ***/
print <<< eot3
<a name="sakusei"></a>
<div style="font-size:20pt">レビューが欲しい書籍のスレッドを作成する</div>
<div class="row">
<div class="col-lg-6">
<div class="well bs-component">
<form method="GET" action="keijitop.php">
タイトル：<input type="text" name="book" size="50"></br>
<input type="submit" id="submit" class="btn btn-primary" value="作成">
</form>
</div>
</div>
</div>
<hr>

  

</div>
</body>
</html>
eot3;

?>