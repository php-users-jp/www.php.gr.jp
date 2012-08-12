<?php
include_once("../lib/logic.php");
session_start();
$a = $_SESSION['_authsession'];
if($a['registered']){

if(isset($_GET["id"])){
	$db = ConnectDB($DSN);
	$news_id = addslashes($_GET['id']);
	$sql_delete_news = 'DELETE FROM news WHERE id = ?';
	$stmt = $db->prepare($sql_delete_news);
	$result = $db->execute($stmt, $news_id);
	if($db->isError($result)){
		echo "Error<br />\n" . $result->getMessage() . "(" . $result->getUserInfo() . ")<br />\n";
	}else{
		header("Location: ../");
		exit;
	}
}
}
?>
