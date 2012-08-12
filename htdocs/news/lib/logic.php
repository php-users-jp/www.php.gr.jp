<?php

/**
 * logic.php - ENV�Ƕ��̤Υ��å������ѥե�����
 * 2005.06.16 Masahiro Tanaka
 */

//////////////////////////////////////////////////////////////////
/**
 * �Ķ���碌��Ԥ�
 */
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
if (!$DOCUMENT_ROOT) {
	$DOCUMENT_ROOT = "/home/www/htdocs";
}

/**
 * �������Ԥ�
 */
include_once(dirname(__FILE__) . "/initialize.php");
initAll();

/**
 * ɬ�פʥե�������ɤ߹���
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

// ������
//$LOG =& initLog();

/**
 * $DEBUG��������ϡ��ǥХå��⡼�ɤ�ON�ˤ���
 */
if (isset($DEBUG) && $DEBUG) {
	error_reporting(E_ALL);
	ini_set("display_errors", TRUE);
}

/**
 * ����å������ѤǤ��ʤ��褦�ˤ���
 */
session_cache_limiter("nocache");

 
/**
 * Smarty�ν����
 */
$smarty = new MySmarty();

/**
 * ����å��夬������ϥ���å����ͥ�褹��
 */
if (!isset($NO_CACHE) || !$NO_CACHE) {
	$smarty->caching = true;
}

/**
 * ���å��ե�����μ¹�
 */
$pathinfo = pathinfo($_SERVER["SCRIPT_FILENAME"]);
$logic_file = $pathinfo["dirname"] . "/" . substr($pathinfo["basename"], 0, strlen($pathinfo["basename"]) - strlen($pathinfo["extension"])) . "logic.php";
$filename = $pathinfo["dirname"] . "/" . substr($pathinfo["basename"], 0, strlen($pathinfo["basename"]));
if (file_exists($logic_file)) {
	include_once($logic_file);
}

/**
 * �ƥ�ץ졼�Ȥ�ɽ��
 */
if (isset($CACHE_ID)) {
	// ����å������Ѥ���
	$smarty->display($_SERVER["SCRIPT_FILENAME"], $CACHE_ID);
} else {
	// ����å����Ȥ�ʤ�
	$smarty->display($_SERVER["SCRIPT_FILENAME"]);
}
if (substr($filename, -10)!=".logic.php") {
	exit;
}
?>
