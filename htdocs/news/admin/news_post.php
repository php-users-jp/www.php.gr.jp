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
					<li><a href="./news_list.php">ニュース一覧に戻る</a></li>
					<li><a href="./login.php?action=logout">ログアウト</a></li>
				</ul>
			</div>
			<div class="section-form">
				<h3>ニュース作成フォーム</h3>
				<form {$news_post_form.attributes}>
					<dl>
						<dt><label for="title">日付</label></dt>
						<dd id="news-date">
							{$news_post_form.news_year.html}
							<label for="news-year">{$news_post_form.news_year.label}</label>
							{$news_post_form.news_month.html}
							<label for="news-month">{$news_post_form.news_month.label}</label>
							{$news_post_form.news_day.html}
							<label for="news-day">{$news_post_form.news_day.label}</label>
						</dd>
						<dt><label for="news-title">{$news_post_form.news_title.label}</label>{if $news_post_form.news_title.required}<span class="mark-required">*</span>{/if}{if $news_post_form.news_title.error}<span class="note-required"> {$news_post_form.news_title.error}</span>{/if}</dt>
						<dd>{$news_post_form.news_title.html}</dd>
						<dt><label for="news-writer">{$news_post_form.news_writer.label}</label>{if $news_post_form.news_writer.required}<span class="mark-required">*</span>{/if}{if $news_post_form.news_writer.error}<span class="note-required"> {$news_post_form.news_writer.error}</span>{/if}</dt>
						<dd>{$news_post_form.news_writer.html}</dd>
						<dt><label for="news-body">{$news_post_form.news_body.label}</label>{if $news_post_form.news_body.required}<span class="mark-required">*</span>{/if}{if $news_post_form.news_body.error}<span class="note-required"> {$news_post_form.news_body.error}</span>{/if}</dt>
						<dd>{$news_post_form.news_body.html}</dd>
					</dl>
					{if $news_post_form.requirednote and not $news_post_form.frozen}
					<p class="note-required"><span class="mark-required">*</span> : {$news_post_form.requirednote}</p>
					{/if}
					<p class="submit">{$news_post_form.submit.html}</p>
				</form>
			</div>
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
