<?php


/**
 * database.php : �ǡ����١����Ѵؿ�
 *
 * @author Masahiro
 * $Id: database.php 4 2005-11-04 06:38:47Z  $
 *
 */

/**
 * �ǡ����١�������³��Ԥ�
 * @return Object �ǡ����١����ϥ�ɥ�
 */
function connectDB($DSN){

	global $dsn, $LOG;
	$db =& DB::connect($DSN);
		if(!$db || DB::IsError($db)){
		// Location("/$sitedir/scripts/error.php");
			print_r($db);
		exit;
	}else{
		return $db;
	}
}

/**
 * �ǡ����١�������1�Լ�������
 * @param String $sql SQLʸ
 * @return Array ������������
*/
function getRow($sql){
	global $db, $LOG;

	if(!$db || DB::IsError($db)){
	  //		Location("/$sitedir/scripts/error.php");
		exit;
	}else{
		$db->query('SET NAMES ujis');
		$row = $db->getRow($sql, DB_FETCHMODE_ASSOC);
		if(DB::IsError($db) || $row->message){
			if (DEBUG) { print_r($row); }
			return false;
		}else{
			if (SQL_LOG) {
				$LOG->log($sql);
			}
			return $row;
		}
	}
}

/**
 * �ǡ����١�������1�Լ�������
 * @param String $sql SQLʸ
 * @return Array ������������
*/
function getCol($sql){
	global $db, $LOG;

	if(!$db || DB::IsError($db)){
	  //		Location("/$sitedir/scripts/error.php");
		exit;
	}else{
		$db->query('SET NAMES ujis');
		$row = $db->getCol($sql);
		if(DB::IsError($db) || $row->message){
			$LOG->err(print_r($row, true));
			if (DEBUG) {
				print_r($row);
			}
			return false;
		}else{
			if (SQL_LOG) {
				$LOG->log($sql);
			}
			return $row;
		}
	}
}

/**
 * �ǡ����١����������Լ�������Ϣ�������
 * @param String $sql SQLʸ
 * @return Array ������������
*/
function getAll($sql){
	global $db, $LOG;
	
	if(!$db || DB::IsError($db)){
	  //		Location("/$sitedir/scripts/error.php");
		exit;
	}else{
		$db->query('SET NAMES ujis');
		$all = $db->getAll($sql, DB_FETCHMODE_ASSOC);
		if(DB::IsError($db) || $all->message){
			//$LOG->err(print_r($all, true));
			if (DEBUG) { print_r($all); }
			return false;
		}else{
			if (SQL_LOG) {
				$LOG->log($sql);
			}
			return $all;
		}
	}
}

/**
 * �ǡ����١����������Լ�������Ϣ�������
 * @param String $sql SQLʸ
 * @return Array ������������
*/
function getAssoc($sql){
	global $db, $LOG;
	
	if(!$db || DB::IsError($db)){
	  //		Location("/$sitedir/scripts/error.php");
		exit;
	}else{
		$db->query('SET NAMES ujis');
		$all = $db->getAssoc($sql, DB_FETCHMODE_ASSOC);
		if(DB::IsError($db) || $all->message){
			$LOG->err(print_r($row, true));
			if (DEBUG) { print_r($row); }
			return false;
		}else{
			if (SQL_LOG) {
				$LOG->log($sql);
			}
			return $all;
		}
	}
}

/**
 * �ǡ����١����˼¹Ԥ�Ԥ�
 * @param String $sql SQLʸ
 * @return Array ������������
*/
function aaquery($sql){
	global $db, $LOG;
	
	if(!$db || DB::IsError($db)){
	  //		Location("/$sitedir/scripts/error.php");
		exit;
	}else{
		$db->query('SET NAMES sjis');
		$result = $db->query($sql);
		
		if(DB::IsError($db) || $result->message){
			//$LOG->err(print_r($result, true));
			if (DEBUG) { print_r($result); }
			return false;
		}else{
			if (SQL_LOG) {
				//$LOG->log($sql);
			}
			if (DEBUG) {
				echo str_replace(array("\t", "\n"), array(" ", " "), $sql);
			}
			return true;
		}
	}
}

/**
 * 1���ܤΤ߼�������
 * @param String $sql SQLʸ
 * @return Mixed ����������
*/
function getOne($sql){
	global $db, $LOG;
	if(!$db || DB::IsError($db)){
	  //		Location("/$sitedir/scripts/error.php");
		exit;
	}else{
		$db->query('SET NAMES ujis');
		$result = $db->getOne($sql);
		if(DB::IsError($db) || $result->message){
			$LOG->err(print_r($result, true));
			return false;
		}else{
			if (SQL_LOG) {
				$LOG->log($sql);
			}
			return $result;
		}
	}
}

/**
 * 2���ܤΤ߼�������
 * @param String $sql SQLʸ
 * @return Mixed ����������
*/
function getTwo($sql){
	global $db, $LOG;
	$db->query('SET NAMES ujis');
	$result = $db->getAll($sql);
	
	if ($result->message) {
		$LOG->err(print_r($result, true));
		return false;
	}
	
	if(is_array($result)){
		foreach($result as $result_item){
			$key = $result_item[0];
			$value = $result_item[1];
			$ret[$key] = $value;	
			
		}
	}
	if (SQL_LOG) {
		$LOG->log($sql);
	}
	return $ret;
}

/**
 * mysql_escape_string �ؿ��Υ�åѡ��ؿ�
 */
function mes($string) {
	return mysql_real_escape_string($string);
}

?>
