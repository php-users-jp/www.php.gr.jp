<?php

/**
 * logic.php - ENVで共通のロジック記述用ファイル
 * 2005.06.16 Masahiro Tanaka
 */

//////////////////////////////////////////////////////////////////
/**
 * 環境合わせを行う
 */
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
if (!$DOCUMENT_ROOT) {
	$DOCUMENT_ROOT = "/home/www/htdocs";
}

/**
 * 初期化を行う
 */
include_once(dirname(__FILE__) . "/initialize.php");
initAll();

/**
 * 必要なファイルを読み込み
 */
include_once(dirname(__FILE__) . "/functions.php");
include_once(dirname(__FILE__) . "/database.php");

include_once(dirname(__FILE__) . "/MySmarty.php");
include_once(dirname(__FILE__) . "/settings.php");

include_once("DB.php");
include_once("Log.php");
include_once("Pager/Pager.php");
include_once("HTML/QuickForm.php");
include_once("HTML/QuickForm/Renderer/ArraySmarty.php");

// ログ取得
//$LOG =& initLog();

/**
 * $DEBUGがある場合は、デバッグモードをONにする
 */
if (isset($DEBUG) && $DEBUG) {
	error_reporting(E_ALL);
	ini_set("display_errors", TRUE);
}

/**
 * キャッシュを使用できないようにする
 */
session_cache_limiter("nocache");

 
/**
 * Smartyの初期化
 */
$smarty = new MySmarty();

/**
 * キャッシュがある場合はキャッシュを優先する
 */
if (!isset($NO_CACHE) || !$NO_CACHE) {
	$smarty->caching = true;
}

/**
 * ロジックファイルの実行
 */
$pathinfo = pathinfo($_SERVER["SCRIPT_FILENAME"]);
$logic_file = $pathinfo["dirname"] . "/" . substr($pathinfo["basename"], 0, strlen($pathinfo["basename"]) - strlen($pathinfo["extension"])) . "logic.php";
$filename = $pathinfo["dirname"] . "/" . substr($pathinfo["basename"], 0, strlen($pathinfo["basename"]));
if (file_exists($logic_file)) {
	include_once($logic_file);
}

/**
 * テンプレートを表示
 */
if (isset($CACHE_ID)) {
	// キャッシュを使用する
	$smarty->display($_SERVER["SCRIPT_FILENAME"], $CACHE_ID);
} else {
	// キャッシュを使わない
	$smarty->display($_SERVER["SCRIPT_FILENAME"]);
}
if (substr($filename, -10)!=".logic.php") {
	exit;
}
?>
