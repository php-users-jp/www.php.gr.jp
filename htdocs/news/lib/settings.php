<?php
/**
 *  settings.php
 *  ���ץꥱ����������������
 */

// �ǡ����١��������
$DSN = "sqlite:///".dirname(__FILE__)."/phpnews.db?mode=0666";
/*
$DSN = array (
'phptype'   => 'sqlite',
'database'  => dirname(__FILE__).'/phpnews.db',
'mode'      => '0666'
);
  */
define("SQL_LOG", false);
define("DEBUG", true);

?>
