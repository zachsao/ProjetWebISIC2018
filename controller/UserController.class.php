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

	
	

	public function accueil($request){
		$view = new UserView($this, 'accueil'); 
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
	

	public function validateConnexion($request){
		$view = new UserView($this, 'profil'); 
		$view->render();
	}
	
	public function validateInscription($request){
		$this->defaultAction($request);
	}
	

	public function profilParametre($request){
		$view = new UserView($this, 'profilParametre'); 
		$view->render();
	}
	
	public function changerInfoGeneral($request){
		$login = $_SESSION['login'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$mail = $_POST['mail'];
		$phone = $_POST['phone'];
		User::changeUserProfilInfo($login,$nom,$prenom,$mail,$phone);
		$this->defaultAction($request);
	}
	
	public function changerInfoVehicule($request){
		$login = $_SESSION['login'];
		$modele = $_POST['modele'];
		$couleur = $_POST['couleur'];
		$km = $_POST['km'];
		$nbPlaces = $_POST['nbPlaces'];
		$nomBolide = $_POST['nomBolide'];
		User::changeUserProfilInfo($login,$nom,$prenom,$mail,$phone);
		$this->profilVehicule($request);
	}
	
	public function changerInfoParametre($request){
	}

	
	public function deconnexion($request){
		session_destroy ();
		$request->write('controller','Anonymous');
		$request->write('action','defaultAction');
		$newController = Dispatcher::dispatch($request);
		$newController->execute();
	}
	
	
	public function voirTrajets($request){
		$view = new UserView($this, 'connectedTrajets'); 
		$view->render();
	}
	
	public function confirmerTrajet($request){
		$view = new UserView($this, 'confirmationInscription'); 
		$view->render();
	}
	
	
}
?>