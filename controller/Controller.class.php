<?php

abstract class Controller extends MyObject {
	
	public $Currentrequest;

	public function __construct($request){
		$this->Currentrequest = $request;
	}
	
	abstract function defaultAction($request);
	
	public function execute(){
		$actionName = $this->Currentrequest->getActionName();
		$this->$actionName($this->Currentrequest);	
	}
	
	public function noussa($request){
		if($request->getControllerName()=='user')
			$view = new UserView($this, 'noussa'); 
		else
			$view = new AnonymousView($this, 'noussa'); 
		$view->render();
	}

}



?>