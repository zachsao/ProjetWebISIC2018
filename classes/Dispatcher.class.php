<?php

class Dispatcher extends MyObject {
	
	protected static $dispatcher;
	
	public static function dispatch($request){
		
		switch($request->getControllerName()){
			case 'Anonymous':
				$ac = new AnonymousController($request);
				return $ac;
				break;
			case 'user':
				$uc = new UserController($request);
				return $uc;
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