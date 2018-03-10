<?php

class DatabasePDO extends MyObject {
		
	protected static $pdo;
	
	
	
	public static function getCurrentPDO(){
		
		if (!isset(self::$pdo)){ 
			try{ 
			self::$pdo = new PDO("mysql:host=localhost;dbname=user", 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			} catch(PDOException $e){
				echo $e->getMessage(); 
				die();
			}
		}
    
		return self::$pdo;
	}
	
	
}
	
?>