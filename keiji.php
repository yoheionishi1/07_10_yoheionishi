<?php

/*** データベースの読み込み ***/
require_once("data/db_info.php");

/*** データベースへの接続、データベース選択 ***/
$s=new PDO("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS);

/*** スレッドグループ番号(GU)を取得し$gu_dに代入 ***/
$gu_d=$_GET["gu"];

/*** $gu_dに数字以外が含まれていたら処理を中止 ***/
if(preg_match("/[^0-9]/",$gu_d)){
print <<<eot1
不正な値が入力されています<br>
<a href="keijitop.php">ここをクリックしてスレッド一覧に戻る</a>
eot1;

/*** $gu_dに正常な値が入って入れば、それを処理 ***/
} elseif(preg_match("/[0-9]/",$gu_d)){

/*** 名前とメッセージを取得してタグを削除 ***/
$na_d=isset($_GET["shimei"])?htmlspecialchars($_GET["shimei"]):null;
$me_d=isset($_GET["message"])?htmlspecialchars($_GET["message"]):null;

/*** ipアドレスを取得 ***/
$ip=getenv("REMOTE_ADDR");

/*** スレッドグループに一致するレコードを取得 ***/
$re=$s->query("SELECT booktitle FROM gs_an_table WHERE id=$gu_d");
$kekka=$re->fetch();

/*** スレッド内容の文字列 $numtitleを作成***/
$numtitle ="書籍名 「<b>$kekka[0]</b>」";

/*** レビューの文字列 $reviewを作成***/
$review ="$kekka[0]";


/*** スレッド表示のタイトル書き出し ***/
print <<<eot2
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

<div class="container">
<br>
<div class="bs-component">
<div class="jumbotron" style="background-color: #fff;">
<p>$numtitle</p>

eot2;

/*** 名前($na_d)が入力されて入ればgs_an_table1にレコード挿入 ***/
if($na_d<>""){
    $re=$s->query("INSERT INTO gs_an_table1 VALUES (0,'$na_d','$me_d',now(),$gu_d,'$ip')");
}

/*** 区切り水平線表示 ***/
    
print "<hr>";


/*** 日時順にレスデータを表示 ***/
$re=$s->query("SELECT * FROM gs_an_table1 WHERE guru=$gu_d ORDER BY niti");

$i=1;
while($kekka=$re->fetch()){
print "$i.<br>$kekka[1]</br>$kekka[3]<br>";
print nl2br($kekka[2]);
print "<br><br>";
$i++;
}


print <<<eot3

</div>
</div>
<hr>
<div style="font-size:18pt">
$review のレビューを書いてください
</div>
<form method="GET" action="keiji.php">
<div>名前 <input type="text" name="shimei"></div>
メッセージ
<div>
<textarea name="message" rows="10" cols="70"></textarea>
</div>
<input type="hidden" name="gu" value=$gu_d>
<p>
<input type="radio" name="hyouka" value="1" checked="checked">ポジティブ
<input type="radio" name="hyouka" value="2">ネガティブ
</p>
<input type="submit" value="送信">
</form>
<hr>
<a href="keijitop.php">スレッド一覧に戻る</a>
</div>


   

</body>
</html>
eot3;

/*** $gu_dに数字やそれ以外に含まれている時の処理 ***/
}else{
print "スレッドを選択してください<br>";
print "<a href='keijitop.php'>ここをクリックしてスレッド一覧に戻る</a>";

}
?>




