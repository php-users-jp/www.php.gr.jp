<?php

	/**
	 * functions.php : �ؿ���������ץ�
	 *
	 * @author Masahiro
	 * $Id: functions.php 4 2005-11-04 06:38:47Z  $
	 *
	 */

/**
 * ���ν������Ԥ��ޤ�
 */
function initLog() {

	// type = file
	// �������פλ���
	$type = "file";
	// ��¸������ե�����Υե�ѥ�
	$name = dirname(__FILE__) . "/../log/php_log";
	// IDENT �����
	$ident = "IDENT";
	// ���ץ����λ���
	$conf = array(
		"mode" => 0777,
	);
	// ���󥹥��󥹤κ���
	$log_file =& Log:: singleton($type, $name, $ident, $conf);
	
	// type = console
	// �������פλ���
	$type = "console";
	// IDENT �����
	$ident = "IDENT";
	// ���󥹥��󥹤κ���
	$log_console =& Log:: singleton($type, '', $ident);
	
	// type = display
	// �������פλ���
	$type = "display";
	// IDENT �����
	$ident = "IDENT";
	// ���󥹥��󥹤κ���
	$log_display =& Log:: singleton($type, '', $ident);
	
	// type = mail
	// �������פ� mail �˻���
	$type = 'mail';
	// �᡼���������򤳤��˽񤭤ޤ��礦
	$name = "@asial.co.jp";
	// ���ץ����λ���
	$conf = array(
		"from" => "@asial.co.jp",
		"subject" => "[Log]",
		"preamble" => "Log"
	);
	// ���󥹥��󥹤κ���
	$log_mail =& Log::singleton($type, $name, $ident, $conf, PEAR_LOG_NOTICE);

	// composite�����פΥ��μ���
	$LOG =& Log::singleton('composite');

	// �����������ĤΥ��󥹥��󥹤���Ͽ
	//$LOG->addChild($log_console);
	$LOG->addChild($log_file);
	//$LOG->addChild($log_display);
	//$LOG->addChild($log_mail);

	return $LOG;
}

/**
 * ���顼�ϥ�ɥ�δؿ�����Ѥ��ޤ�
 */
function errorHandler($error_no, $error_str, $error_file, $error_line) {
	global $LOG;

  // ���顼�μ����Ƚ�ꤷ�����μ���˱�����������¸����
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
 * ���ꤷ��URL�˥�����쥯�Ȥ�Ԥ���
 * @param String $url ������쥯�����URL
 *        String $message ɽ�������å�����
 * @return Object �ǡ����١����ϥ�ɥ�
 */
function Location($url, $msg = ""){
	
	if(substr($url, 0, 7) != "http://" && substr($url, 0, 8) != "https://" &&  substr($_SERVER['SERVER_NAME'], 0, 3) != "202"){
		if(substr($url, 0, 1) != "/"){
			// ����URL�ξ��
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
		// Header�ؿ�������
		Header("Location: $url");
		exit;
	}
	
	// JavaScript�б����Ƥʤ��ͤ�ͤ���
	print '
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=EUC-JP"></head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<!--��-->
	<!--�������������������������������갥�ְ����˰���沼���貽��-->
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
	print "��ư�ǰ�ư���ʤ���硢";
	print "<a href='$url'>�����򥯥�å�</a>";
	print "���Ʋ�������";
	print "</center>";
	print '</body></html>';
	exit;
}




?>
