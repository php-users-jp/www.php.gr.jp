<?php


/**
 * database.php : データベース用関数
 *
 * @author Masahiro
 * $Id: database.php 4 2005-11-04 06:38:47Z  $
 *
 */

/**
 * データベースに接続を行う
 * @return Object データベースハンドル
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
 * データベースから1行取得する
 * @param String $sql SQL文
 * @return Array 取得した配列
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
 * データベースから1行取得する
 * @param String $sql SQL文
 * @return Array 取得した配列
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
 * データベースから全行取得し、連想配列に
 * @param String $sql SQL文
 * @return Array 取得した配列
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
 * データベースから全行取得し、連想配列に
 * @param String $sql SQL文
 * @return Array 取得した配列
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
 * データベースに実行を行う
 * @param String $sql SQL文
 * @return Array 取得した配列
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
 * 1項目のみ取得する
 * @param String $sql SQL文
 * @return Mixed 取得した値
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
 * 2項目のみ取得する
 * @param String $sql SQL文
 * @return Mixed 取得した値
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
 * mysql_escape_string 関数のラッパー関数
 */
function mes($string) {
	return mysql_real_escape_string($string);
}

?>
