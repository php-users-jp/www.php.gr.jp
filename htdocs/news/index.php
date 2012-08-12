<?php include_once("./lib/logic.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="../news.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="/favicon.png" type="image/png" />
	<link rel="alternate" type="application/rss+xml" title="RSS" href="./rss.xml" />
	<title>日本PHPユーザー会 (Japan PHP Users Group) - [ PHP ニュース ]</title>
</head>
<body>
	<div class="contents" id="news-index">
		<div id="header">
			<h1>日本PHPユーザ会<span class="subtitle">PHP ニュース</span></h1>
			<div id="navigation">
				<ul>
					<li id="navi-top"><a href="../index.php">トップ</a></li><li id="navi-about"><a href="aboutphp.php">PHPについて</a></li><li id="navi-news"><a href="./">PHPニュース</a></li><li id="navi-download"><a href="#">ダウンロード</a></li><li id="navi-manual"><a href="#">マニュアル</a></li><li id="navi-ml"><a href="http://ns1.php.gr.jp/ml.html">メーリングリスト</a></li><li id="navi-phpuser"><a href="about.php">日本PHPユーザー会について</a></li>
				</ul>
			</div>
		</div>
{*		<div id="sidebar">
			<h2>サブメニュー</h2>
			<div>
				<h3>管理画面</h3>
				<a href="./admin/login.php">ログイン</a>
			</div>
*}		</div>
		<div id="main">
			<h2>PHPニュース</h2>
			{foreach item=news_section from=$news}
			<div class="section-day">
				<h3>{$news_section.news_year}年{$news_section.news_month}月{$news_section.news_day}日</h3>
				<div class="section-news">
					<h4>{$news_section.news_title}</h4>
					<p>{$news_section.news_body}</p>
				</div>
				<div class="section-writer">
					<p>文責 : {$news_section.news_writer}</p>
				</div>
			</div>
			{/foreach}
		</div>
		<div id="footer">
			<ul>
				<li id="powered"><a href="http://httpd.apache.org/" title="Powered by apache"><img src="images/apache_pb.gif" width="259" height="32" alt="logo apache"></a> <a href="http://www.php.net/" title="Powered by PHP"><img src="images/php-power-white.gif" width="88" height="31" alt="logo php"></a></li>
				<li>&nbsp;</li>
				<li id="copyright">Copyright &copy;2000-2005 Japan PHP Users Group. </li>
				<li id="cvsid">$Id$</li>
				<li><address><a href="mailto:webstaff@php.gr.jp">webstaff@php.gr.jp</a></address></li>
			</ul>
		</div>
	</div>
</body>
</html>
