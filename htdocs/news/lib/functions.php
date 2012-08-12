<?php

	/**
	 * functions.php : 関数群スクリプト
	 *
	 * @author Masahiro
	 * $Id: functions.php 4 2005-11-04 06:38:47Z  $
	 *
	 */

/**
 * ログの初期化を行います
 */
function initLog() {

	// type = file
	// ログタイプの指定
	$type = "file";
	// 保存するログファイルのフルパス
	$name = dirname(__FILE__) . "/../log/php_log";
	// IDENT を指定
	$ident = "IDENT";
	// オプションの指定
	$conf = array(
		"mode" => 0777,
	);
	// インスタンスの作成
	$log_file =& Log:: singleton($type, $name, $ident, $conf);
	
	// type = console
	// ログタイプの指定
	$type = "console";
	// IDENT を指定
	$ident = "IDENT";
	// インスタンスの作成
	$log_console =& Log:: singleton($type, '', $ident);
	
	// type = display
	// ログタイプの指定
	$type = "display";
	// IDENT を指定
	$ident = "IDENT";
	// インスタンスの作成
	$log_display =& Log:: singleton($type, '', $ident);
	
	// type = mail
	// ログタイプを mail に指定
	$type = 'mail';
	// メールの送信先をここに書きましょう
	$name = "@asial.co.jp";
	// オプションの指定
	$conf = array(
		"from" => "@asial.co.jp",
		"subject" => "[Log]",
		"preamble" => "Log"
	);
	// インスタンスの作成
	$log_mail =& Log::singleton($type, $name, $ident, $conf, PEAR_LOG_NOTICE);

	// compositeタイプのログの取得
	$LOG =& Log::singleton('composite');

	// 作成した３つのインスタンスを登録
	//$LOG->addChild($log_console);
	$LOG->addChild($log_file);
	//$LOG->addChild($log_display);
	//$LOG->addChild($log_mail);

	return $LOG;
}

/**
 * エラーハンドラの関数を使用します
 */
function errorHandler($error_no, $error_str, $error_file, $error_line) {
	global $LOG;

  // エラーの種類を判定し、その種類に応じたログを保存する
  switch ($error_no) {
  case E_NOTICE:
	case E_USER_NOTICE:
		$LOG->notice($message . " file: " . $error_file . " line: " . $error_line);
    $LOG->notice(debug_backtrace());
   break;
  case E_WARNING:
  case E_WARNING_USER:
    $LOG->warning($message . " file: " . $error_file . " line: " . $error_line);
    $LOG->warning(debug_backtrace());
    break;
  case E_ERROR:
  case E_USER_ERROR:
    $LOG->err($message . " file: " . $error_file . " line: " . $error_line);
    $LOG->err(debug_backtrace());
    break;
 default:
    $LOG->info($message . " file: " . $error_file . " line: " . $error_line);
    $LOG->info(debug_backtrace());
 }
}


/**
 * 指定したURLにリダイレクトを行う。
 * @param String $url リダイレクト先のURL
 *        String $message 表示するメッセージ
 * @return Object データベースハンドル
 */
function Location($url, $msg = ""){
	
	if(substr($url, 0, 7) != "http://" && substr($url, 0, 8) != "https://" &&  substr($_SERVER['SERVER_NAME'], 0, 3) != "202"){
		if(substr($url, 0, 1) != "/"){
			// 相対URLの場合
			$base_url = substr($_SERVER['SCRIPT_NAME'], 0, strrpos($_SERVER['SCRIPT_NAME'], "/"))."/";
			$url = $base_url.$url;
		}
		if ($_SERVER["SSL_PROTOCOL"]) {
			$url = "https://".$_SERVER['HTTP_HOST'].$url;
		} else {
			$url = "http://".$_SERVER['HTTP_HOST'].$url;
		}
	}
	if(!$msg){
		// Header関数で送信
		Header("Location: $url");
		exit;
	}
	
	// JavaScript対応してない人も考える
	print '
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=EUC-JP"></head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<!--・-->
	<!--あいうえおかきくけこさしすせそ相哀間挨間靄愛上御下記区化小-->
	';
	
	print "<script language='JavaScript'>\n";
	print "<!--\n";
	print " alert('".$msg."'); \n";
	print " location.href='".$url."';\n";
	print "//--> \n";
	print "</script>";
	
	print "<center>";
	print $msg;
	print "<br><br>";
	print "自動で移動しない場合、";
	print "<a href='$url'>ここをクリック</a>";
	print "して下さい。";
	print "</center>";
	print '</body></html>';
	exit;
}




?>
