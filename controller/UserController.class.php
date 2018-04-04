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
		$view = new UserView($this, 'profilGeneral'); //Par défault, se dirige vers la page "Mon compte"
		$view->render();
	}

	public function profilGeneral($request){
		$view = new UserView($this, 'profilGeneral'); 
		$view->render();
	}
	
	public function profilTrajet($request){
		$view = new UserView($this, 'profilTrajet'); 
		$view->render();
	}
	
	public function profilGroupe($request){
		$view = new UserView($this, 'profilGroupe'); 
		$view->render();
	}
	
	public function profilVehicule($request){
		$view = new UserView($this, 'profilVehicule'); 
		$view->render();
	}
	
	public function profilParametre($request){
		$view = new UserView($this, 'profilParametre'); 
		$view->render();
	}
	
	public function changerInfoGeneral($request){
	}
	
	public function changerInfoVehicule($request){
	}
	
	public function changerInfoParametre($request){
	}
	
	public function Homepage($request){
		$view = new UserView($this, 'content'); 
		$view->render();
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