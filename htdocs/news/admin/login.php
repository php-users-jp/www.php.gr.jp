<?php
require_once "Auth/Auth.php";

$dsn = "sqlite:///e:/mydocu~1/webapp/asial/phpgrp/news/lib/phpnews.db?mode=0666";
$param = array("dsn" => $dsn, "table" => "auth", "usernamecol" => "username", "passwordcol" => "password", "cryptType" => "none");
$a = new Auth("DB", $param);
// user dd
//if($a->addUser('guest','guest')){
//echo "ユーザーを追加しました。";
//}

$a->start();
if ($a->getAuth()){
	if ($_GET['action'] == "logout" && $a->checkAuth()) {
		$a->logout();
		header("Location: ../");
		exit;
	}else{
		header("Location: ./news_list.php");
		exit;
	}
}else{
	header("Location: ../");
	exit;
}

?>
