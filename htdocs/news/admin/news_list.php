<?php include_once("../lib/logic.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="../../news.css" rel="stylesheet" type="text/css" />
	<link rel="icon" href="/favicon.png" type="image/png" />
	<title>日本PHPユーザー会 (Japan PHP Users Group) - [ PHP ニュース 管理画面 ]</title>
</head>
<body>
	<div class="contents" id="news-admin">
		<div id="header">
			<h1>日本PHPユーザ会<span class="subtitle">PHP ニュース 管理画面</span></h1>
			<div id="navigation">
				<ul>
					<li id="navi-top"><a href="../index.php">トップ</a></li><li id="navi-about"><a href="aboutphp.php">PHPについて</a></li><li id="navi-news"><a href="../">PHPニュース</a></li><li id="navi-download"><a href="#">ダウンロード</a></li><li id="navi-manual"><a href="#">マニュアル</a></li><li id="navi-ml"><a href="http://ns1.php.gr.jp/ml.html">メーリングリスト</a></li><li id="navi-phpuser"><a href="about.php">日本PHPユーザー会について</a></li>
				</ul>
			</div>
		</div>
		<div id="main">
			<h2>PHPニュース</h2>
			<div class="section-admin-menu">
				<ul>
					<li><a href="./news_post.php">新規ニュースを作成する</a></li>
					<li><a href="./login.php?action=logout">ログアウト</a></li>
				</ul>
			</div>
			<table id="list-news">
				<thead>
					<tr>
						<th class="date">日付</th>
						<th class="title">タイトル</th>
						<th class="body">本文</th>
						<th class="writer">文責</th>
						<th class="usage">処理</th>
					</tr>
				</thead>
				<tbody>
					{foreach key=key item=news_section from=$page_data}
					<tr>
						<td class="date">{$news_section.news_year}-{$news_section.news_month}-{$news_section.news_day}</td>
						<td class="title">{$news_section.news_title}</td>
						<td class="body">{$news_section.news_body}</td>
						<td class="writer">{$news_section.news_writer}</td>
						<td class="usage"><a href="./news_edit.php?id={$news_section.news_id}">修正</a>/<a href="./news_delete.logic.php?id={$news_section.news_id}" onclick="return confirm('タイトル「{$news_section.news_title}」のニュースを\n削除してよろしいですか?');">削除</a></td>
					</tr>
					{/foreach}
				</tbody>
			</table>
			{if $page_navi ne ""}<div id="page-navi"><p>{$page_navi}</p></div>{/if}
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
