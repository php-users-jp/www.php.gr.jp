<?php

/**
 * initialize.php
 * ���ץꥱ�����������ν������Ԥ�����δؿ���
 */
function InitAll() {
	InitJapanese();
	InitSecurity();
}

/**
 * ���ܸ�ط��ν����
 */
function InitJapanese() {
	/**
	 * ���ܸ����������
	 * �����ʳ��ˤ⡢script_encoding��EUC-JP��
	 * �ƥ�ץ졼�ȡ�SJIS
	 * ���������ɡ�EUC-JP
	 * HTTP���ϡ�SJIS
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
 * �������ƥ�����ν����
 */
function InitSecurity() {
	error_reporting(E_ALL & ~E_NOTICE);
	//ini_set("display_errors", FALSE);
	ClearMagicQuotes();
}

/**
 * MagicQuotes�򥭥�󥻥뤹��
 */
function ClearMagicQuotes() {
	if (get_magic_quotes_gpc()) {
		$_GET = array_map('stripslashes_deep', $_GET);
		$_POST = array_map('stripslashes_deep', $_POST);
		$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
	}
} 

/**
 * MagicQuotes�αƶ��򳰤�
 */
function stripslashes_deep($value) {
   return (is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value));
}

?>
