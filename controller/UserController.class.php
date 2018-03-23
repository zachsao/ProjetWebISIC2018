<?php

class UserController extends Controller {
	

	
	public function defaultAction($request){
		$view = new UserView($this, 'profil'); 
		$view->render();

	}
	
	public function validateConnexion($request){
		$view = new UserView($this, 'profil'); 
		$view->render();

	}
	
	public function deconnexion($request){
		// On démarre la session
		session_start ();

		// On détruit les variables de notre session
		session_unset ();

		// On détruit notre session
		session_destroy ();
		
		$newRequest = new Request();
		$newRequest->write('controller','user');
		$newRequest->write('user',$login);
			
		$newController = Dispatcher::dispatch($newRequest);
		$view  = new ConnectView($newController, 'connexion');
		$view->render();
	}
	
	
	
	
	
}
?>