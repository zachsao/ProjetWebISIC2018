<?php

class Request extends MyObject {
	
	protected static $request;
	
	public static function getCurrentRequest(){
		
		if (!isset(self::$request)){
			self::$request = new self; 
		}
    
		return self::$request;
	}
	
	public function getControllerName(){
		if(!isset($_GET['controller']))
			return 'Anonymous';
		else 
			return $_GET['controller'];
	}
	
	public function getActionName(){
		if(!isset($_GET['action']))
			return 'defaultAction';
		else 
			return $_GET['action'];
	}
	
	public function read($param){
		return $_POST[$param];
	}
	
	public function write($param, $value){
		$_GET[$param] = $value;
	}
}

?>