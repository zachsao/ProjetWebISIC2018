<?php

class UserController extends Controller {
	

	
	public function defaultAction($request){
		$view = new UserView($this, 'information'); 
		$view->render();

	}
	
	
	
	
}
?>