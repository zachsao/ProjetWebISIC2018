<?php

class Dispatcher extends MyObject {
	
	protected static $dispatcher;
	
	public static function dispatch($request){
		
		switch($request->getControllerName()){
			case 'Anonymous':
				return new AnonymousController($request);
				
				break;
			case 'user':
				return new UserController($request);
				
				break;
			case 'admin':
				return new AdminController($request);
				
				break;
		}
		
	}
	
	public static function getCurrentDispatcher(){
		if (!isset(self::$dispatcher)){
			self::$dispatcher = new self; 
		}
    
		return self::$dispatcher;
	}
}


?>