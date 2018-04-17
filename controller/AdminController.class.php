<?php

class AdminController extends UserController {
	
	
	public function defaultAction($request){
		$view = new AdminView($this, 'ConnectedAccueil'); //Accueil par défaut
		$view->render();
	}
}