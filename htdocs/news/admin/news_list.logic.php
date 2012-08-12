<?php
session_start();
$a = $_SESSION['_authsession'];
if($a['registered']){

$db = ConnectDB($DSN);
$sql = 'SELECT * FROM news ORDER BY date DESC';
$result = $db->query($sql);
$news = array();
while($row = $result->fetchRow(DB_FETCHMODE_ASSOC)){
	list($year, $month, $day) = split("-", $row['date']);
	$news[] = array('news_id' => $row['id'], 'news_year' => $year, 'news_month' => $month, 'news_day' => $day, 'news_title' => $row['title'], 'news_writer' => $row['writer'], 'news_body' => mb_substr($row['body'], 0, 50).'...');
}

$params = array(
	'mode'       => 'Jumping',
	'perPage'    => 4,
	'delta'      => 10,
	'altPage'    => 'ページ',
	'prevImg'    => '前へ',
	'altPrev'    => '前ページへ',
	'nextImg'    => '次へ',
	'altNext'    => '次ページへ',
	'separator'  => '',
	'curPageLinkClassName' => 'current-page',
	'itemData'   => $news
	);
$pager = & Pager::factory($params);
$pagedata  = $pager->getPageData();
$links = $pager->getLinks();

$smarty->assign('page_navi', $links['all']);
$smarty->assign('page_data', $pagedata);

}else{
	header("Location: ../");
	exit;
}

?>
