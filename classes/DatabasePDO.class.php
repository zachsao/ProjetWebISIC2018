<?php

class DatabasePDO extends MyObject {
		
	protected static $pdo;
	
	
	
	public static function getCurrentPDO(){
		
		if (!isset(self::$pdo)){ 
			try{ 
			//self::$pdo = new PDO("mysql:host=" . _MYSQL_HOST.";dbname="._MYSQL_DBNAME.", '"._MYSQL_USER."','"._MYSQL_PASSWORD."'" /*,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")*/);
			self::$pdo = new PDO("mysql:host=localhost;dbname=pierre_galus", 'pierre.galus', 'HdZjQ4os', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			} catch(PDOException $e){
				echo $e->getMessage(); 
				die();
			}
		}
    
		return self::$pdo;
	}
	
	
}
	
?>