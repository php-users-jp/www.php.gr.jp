<?php
session_start();
$a = $_SESSION['_authsession'];
if($a['registered']){

// テーブルの作成
/*
$db = ConnectDB($DSN);
$result = $db->query("CREATE TABLE news(id integer primary key, date date, title text, writer text, body text)");
if (DB::isError($result)) {
	exit($result->getMessage());
}
*/

$today = getdate();
$current_year = $today['year'];
$current_month = $today['mon'];
$current_day = $today['mday'];
$start_year = $current_year - 1;
$end_year = $current_year + 1;
$select_year = array();

for($start_year; $start_year <= $end_year; $start_year++){
	$select_year["$start_year"] = $start_year;
}
for($cnt_month=1; $cnt_month <= 12; $cnt_month++){
	$formatted_month = sprintf("%02d", $cnt_month);
	$select_month["$formatted_month"] = $formatted_month;
}
for($cnt_day=1; $cnt_day <= 31; $cnt_day++){
	$formatted_day = sprintf("%02d", $cnt_day);
	$select_day["$formatted_day"] = $formatted_day;
}

$form = new HTML_QuickForm('news', 'post');
$form->addElement('header', 'header', 'ニュース投稿フォーム');
$form->addElement('select', 'news_year', '年', $select_year, 'id="news-year"');
$select_year_list =& $form->getElement('news_year');
$select_year_list->setSelected($current_year);

$form->addElement('select', 'news_month', '月', $select_month, 'id="news-month"');
$select_month_list =& $form->getElement('news_month');
$select_month_list->setSelected($current_month);

$form->addElement('select', 'news_day', '日', $select_day, 'id="news-day"');
$select_day_list =& $form->getElement('news_day');
$select_day_list->setSelected($current_day);

$form->addElement('text', 'news_title', 'タイトル', 'id="news-title"');
$form->addElement('text', 'news_writer', '投稿者名', 'id="news-writer"');
$form->addElement('textarea', 'news_body', '本文', 'id="news-body"');
$form->addElement('reset', 'clear', 'クリア');
$form->addElement('submit', 'submit', '投稿');

$form->addRule('news_title', 'タイトルを入力してください。', 'required');
$form->addRule('news_writer', '投稿者名を入力してください。', 'required');
$form->addRule('news_body', '本文を入力してください。', 'required', 'client');
if($form->validate()){
	$form->freeze();
	if(isset($_POST["submit"])){
		$db = ConnectDB($DSN);
		$news_year = addslashes($_POST['news_year']);
		$news_month = addslashes($_POST['news_month']);
		$news_day = addslashes($_POST['news_day']);
		$news_title = addslashes(htmlSpecialChars($_POST['news_title']));
		$news_writer = addslashes(htmlSpecialChars($_POST['news_writer']));
		$news_body = addslashes(htmlSpecialChars($_POST['news_body']));
		$sql_insert_news = 'INSERT INTO news (date, title, writer, body) VALUES (?, ?, ?, ?)';
		$stmt = $db->prepare($sql_insert_news);
		$result = $db->execute($stmt, array($news_year.'-'.$news_month.'-'.$news_day, $news_title, $news_writer, $news_body));
		if($db->isError($result)){
			echo "Error<br />\n" . $result->getMessage() . "(" . $result->getUserInfo() . ")<br />\n";
		}else{
			require_once("../lib/feedcreator.class.php");
			$rss = new UniversalFeedCreator();
			$rss->useCached();
			$rss->title = "PHPニュース";
			$rss->description = "PHPに関するニュースを配信しています。";
			$rss->link = "http://news.php.gr.jp/";
			$rss->syndicationURL = "http://news.php.gr.jp/".$PHP_SELF;
			$sql_select_news = 'SELECT * FROM news ORDER BY date DESC LIMIT 5';
			$result = $db->query($sql_select_news);
			while($row = $result->fetchRow(DB_FETCHMODE_ASSOC)){
				$item = new FeedItem();
				list($year, $month, $day) = split("-", $row['date']);
				$item->title = $row['title'];
//			$item->link = $data->url;
				$body = preg_replace("/\r/", "\n", $row['body']);
				$body = preg_replace("/\n/", "", $body);
				$body = preg_replace('/\[\[([^\]]+?)\|(((https?|ftp)(:\/\/)([^[:blank:]\/\?\+\$\;%,!#~*:@&=_][[:alnum:]-\.]+)([[:alnum:]\+\$\;\?\.%,!#~*\/:@&=_-]+)))\]\]/i', '\\1(\\2)', stripslashes($body));
				$body = mb_substr($body, 0, 150).'...';
				$item->description = stripslashes($body);
				$item->date = strftime("%Y-%m-%dT%H:%M:%S+09:00", strtotime($row['date']));
				$item->source = "http://news.php.gr.jp/";
				$item->author = $row['writer'];
				
				$rss->addItem($item);
			}
			$rss->saveFeed("RSS2.0", "../rss.xml", false);
			header("Location: ./news_list.php");
			exit;
		}
	}
}
$quickformRender =& new HTML_QuickForm_Renderer_ArraySmarty($smarty);
$form->setRequiredNote('必須項目です。');
$form->accept($quickformRender);
$smarty->assign('news_post_form',$quickformRender->toArray());
$smarty->assign("current_year", $current_year);
$smarty->assign("current_month", $current_month);
$smarty->assign("current_day", $current_day);
$smarty->assign("select_year", $select_year);


}else{
	header("Location: ../");
	exit;
}

?>
