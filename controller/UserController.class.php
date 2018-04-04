<?php

class UserController extends Controller {
	
	public function __construct(){
		session_start();
		parent::__construct(Request::getCurrentRequest());
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd)
		if(isset($_POST['inscLogin'])){
			$_SESSION['login'] = $_POST['inscLogin'];
			$_SESSION['pwd'] = $_POST['inscPassword'];
			
		}
	}
	
	public function defaultAction($request){
		$view = new UserView($this, 'profil'); 
		$view->render();

	}
	
	public function Homepage($request){
		$view = new UserView($this, 'content'); 
		$view->render();

	}
	
	public function validateConnexion($request){
		$view = new UserView($this, 'profil'); 
		$view->render();
	}
	
	public function validateInscription($request){
		$this->defaultAction($request);
	}
	
	
	
	public function deconnexion($request){
		session_destroy ();
		$request->write('controller','Anonymous');
		$newController = Dispatcher::dispatch($request);
		$newController->execute();
	}
	
	public function seeTrips($request){
		$view = new UserView($this, 'trajets'); 
		$view->render();
	}
	
	
	
	
	
}
?>