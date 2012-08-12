<?php
$db = ConnectDB($DSN);
$news_limit = 5;
$sql_select_news = 'SELECT * FROM news ORDER BY date DESC LIMIT ?';
$stmt = $db->prepare($sql_select_news);
$result = $db->execute($stmt, $news_limit);
if($db->isError($result)){
	echo "Error<br />\n" . $result->getMessage() . "(" . $result->getUserInfo() . ")<br />\n";
}
$news = array();
while($row = $result->fetchRow(DB_FETCHMODE_ASSOC)){
	list($news_year, $news_month, $news_day) = split('-', $row['date']);
	$news_title = $row['title'];
	$news_writer = $row['writer'];
	$news_body = stripslashes($row['body']);
	$news_body = preg_replace("/\n/", "<br />", $news_body);
	$news_body = preg_replace('/\[\[([^\]]+?)\|(((https?|ftp)(:\/\/)([^[:blank:]\/\?\+\$\;%,!#~*:@&=_][[:alnum:]-\.]+)([[:alnum:]\+\$\;\?\.%,!#~*\/:@&=_-]+)))\]\]/i', '<a href="\\2">\\1</a>', $news_body);
	$news[] = array('news_year' => $news_year, 'news_month' => $news_month, 'news_day' => $news_day, 'news_title' => $news_title, 'news_writer' => $news_writer, 'news_body' => $news_body);
}

$smarty->assign("news", $news);

?>
