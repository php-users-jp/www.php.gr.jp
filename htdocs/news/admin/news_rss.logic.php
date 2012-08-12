<?php

function outputRss($version, $filename){
	
require_once("../lib/database.php");
require_once("../lib/settings.php");
require_once("DB.php");

require_once("../lib/feedcreator.class.php");
	$rss = new UniversalFeedCreator();
	$rss->useCached();
	$rss->title = "PHPニュース";
	$rss->description = "PHPに関するニュースを配信しています。";
	$rss->link = "http://news.php.gr.jp/";
	$rss->syndicationURL = "http://news.php.gr.jp/".$PHP_SELF;
	
	$db = ConnectDB($DSN);
	$sql_select_news = 'SELECT * FROM news ORDER BY date DESC LIMIT 5';
	$result = $db->query($sql_select_news);
	while($row = $result->fetchRow(DB_FETCHMODE_ASSOC)){
		$item = new FeedItem();
		list($year, $month, $day) = split("-", $row['date']);
		$item->title = $row['title'];
//		$item->link = $data->url;
		$body = mb_substr($row['body'], 0, 150).'...';
		$body = preg_replace("/\r/", "\n", $body);
		$body = preg_replace("/\n/", "", $body);
		$item->description = stripslashes($body);
		$item->date = $row['date'];
		$item->source = "http://news.php.gr.jp/";
		$item->author = $row['writer'];
		
		$rss->addItem($item);
	}
	$rss->saveFeed($version, $filename);
}

//outputRss("RSS2.0", "../rss.xml");

?>
