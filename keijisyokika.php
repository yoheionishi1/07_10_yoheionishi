<?php
require_once("data/db_info.php");
$s=new PDO("mysql:host=$SERV;dbname=$DBNM",$USER,$PASS);

$s->query("DELETE FROM gs_an_table");
$s->query("DELETE FROM gs_an_table1");
$s->query("ALTER TABLE gs_an_table AUTO_INCREMENT=1");
$s->query("ALTER TABLE gs_an_table1 AUTO_INCREMENT=1");

print "SQLカフェのテーブルを初期化しました";
?>