

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

  
<div class="jumbotron special">
<div class="container">
<div class="row">
<div class="col-xs-12 outline">
<h1>好きな本をみんなでシェア</h1>
<p>"BOOK CAFE" はあなたの好きな本のレビューを閲覧できるサービスです。</p>
<div class="download">
<a href="keijitop.php" class="btn btn-warning btn-lg"><i class="fa fa-github-alt"></i>掲示板に行く</a>
<a href="keijitop.php" class="btn btn-primary btn-lg"><i class="fa fa-play"></i>スレッドを作成する</a>
</div>
<div class="basedon small">
※掲示板を炎上させたり、他人への直接的な暴力的表現、誹謗中傷は避けてください
</div>
</div>
</div>
</div>
</div>

<aside class="social">
<div class="social-button">
  <ul>
    <li><a href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-dnt="true">ツイート</a></li>
    <li><div class="fb-like" data-href="#" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
    <li><a href="#" class="hatena-bookmark-button" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;"></a></li>
  </ul>
</div>
</aside>


<section class="section section-inverse available-bower">
<div class="bower-logo"></div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 subtitle">
      <h2>ソースコードはこちら</h2>
      <p>BOOKCAFEのコードは<a href="http://bower.io/">Github</a>からも利用できます</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
      <div class="input-group input-group-lg">
        <input type="text" class="form-control" id="command" value="https://github.com/yoheionishi1/07_10_yoheionishi.git)" onclick="this.select();" readonly="readonly">
        <span class="input-group-btn">
          <button type="button" class="btn btn-default" data-clipboard-target="#command"><i class="fa fa-clipboard"></i></button>
        </span>
      </div>
      <p class="help-block">絶賛公開中！</p>
    </div>
  </div>
</div>
</section>


<section class="section section-default getting-started">
<div class="container">
  <div class="row">
    <div class="col-xs-12 subtitle">
      <h2>さあ、はじめましょう。</h2>
      <p>使い方はとっても簡単です</p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 text-center">
      <div class="form-group">
        <a href="keijitop.php" class="btn btn-primary btn-lg"><i class="fa fa-github-alt"></i> チェックしたい本を探す</a>
      </div>
      <p>使い方やファイルの説明など、詳しくは <a href="#">BOOK CAFEとは</a>をご確認ください</p>
    </div>
  </div>
</div>
</section>






<footer class="small">
<div class="social-button">
  <ul>
    <li><iframe src="https://ghbtns.com/github-btn.html?user=windyakin&repo=Honoka&type=star&count=true" frameborder="0" scrolling="0" width="90px" height="20px"></iframe></li>
    <li><a href="#" class="twitter-share-button" data-lang="ja" data-dnt="true">ツイート</a></li>
    <li><div class="fb-like" data-href="#" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
    <li><a href="#" class="hatena-bookmark-button" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;"></a></li>
  </ul>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 text-center copyright">
      &copy; 2018 BOOK CAFE
    </div>
  </div>
</div>
</footer>


<script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.5/clipboard.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
new Clipboard('.btn');
$(document).ready(function(e) {
  $.when(
      $.ajax({
          url: 'https://api.github.com/repos/windyakin/Honoka/releases/latest',
          type: 'get',
          dataType: 'json'
      }),
      $.ajax({
          url: 'https://cdn.rawgit.com/windyakin/Honoka/master/bower.json',
          type: 'get',
          dataType: 'json'
      })
  )
  .done(function(last, base) {
      $('.last-version').text(last[0].tag_name.split('v')[1]);
      $('.base-version').text(base[0].devDependencies.bootstrap);
      $('.last-release-download-link').attr({'href': '//github.com/windyakin/Honoka/releases/tag/' + last[0].tag_name })
  });
});
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=238369762859730&version=v2.3";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
</body>
</html>