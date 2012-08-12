<?php

/**
 * initialize.php
 * アプリケーション設定の初期化を行うための関数集
 */
function InitAll() {
	InitJapanese();
	InitSecurity();
}

/**
 * 日本語関係の初期化
 */
function InitJapanese() {
	/**
	 * 日本語処理の統一
	 * ココ以外にも、script_encodingはEUC-JPに
	 * テンプレート＝SJIS
	 * 内部コード＝EUC-JP
	 * HTTP出力＝SJIS
	 */
	while (@ob_end_clean());
	mb_language("Japanese");
//	mb_internal_encoding("EUC-JP");
//	mb_http_output("SJIS-win");
	mb_internal_encoding("UTF-8");
	mb_http_output("UTF-8");
	ob_start("mb_output_handler");
}

/**
 * セキュリティ設定の初期化
 */
function InitSecurity() {
	error_reporting(E_ALL & ~E_NOTICE);
	//ini_set("display_errors", FALSE);
	ClearMagicQuotes();
}

/**
 * MagicQuotesをキャンセルする
 */
function ClearMagicQuotes() {
	if (get_magic_quotes_gpc()) {
		$_GET = array_map('stripslashes_deep', $_GET);
		$_POST = array_map('stripslashes_deep', $_POST);
		$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
	}
} 

/**
 * MagicQuotesの影響を外す
 */
function stripslashes_deep($value) {
   return (is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value));
}

?>
