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

}



?>