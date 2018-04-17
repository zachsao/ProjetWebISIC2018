<?php

class AdminController extends Controller {
	
	public function __construct(){
		session_start();
		parent::__construct(Request::getCurrentRequest());
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd)
		if(isset($_POST['inscLogin'])){
			$_SESSION['login'] = $_POST['inscLogin'];
			$_SESSION['pwd'] = $_POST['inscPassword'];
		}
		
	}
	///////////////////////////actions admin//////////////////////////////////////////
	
	//supprime l'utilisateur de la bdd
	public function bloquerUtilisateur($request){
		//récupere le login user depuis un champ de recherche
		//$login = $_POST($login);
		//Admin::supprimer($login);
	}
	
	//l'adresse IP ne peut plus creer de compte ni se connecter
	public function bloquerIP($request){
		//a faire
	}
	
	//promouvoir un utilisateur au rand d'admin
	public function promouvoir($request){
		//a faire
	}
	
	//supprimer le role d'admin d'un utilisateur
	public function destituer($request){
		//a faire
	}
	
	///////////////////////////////actions user normal///////////////////////////
	
	
	public function defaultAction($request){
		$view = new AdminView($this, 'profilGeneral'); //Par défault, se dirige vers la page "Mon compte"
		$view->render();
	}

	
	public function accueil($request){
		$view = new AdminView($this, 'ConnectedAccueil'); 
		$view->render();
	}
	
	public function profilTrajet($request){
		$id_user = User::getUserId($_SESSION['login']);
		$trajets = Trajet::getTrajetsUtilisateur($id_user['id']);
		
		$request->write('trips',$trajets);
		
		$view = new AdminView($this, 'adminTrajets'); 
		$view->render();
	}
	
	public function profilGroupe($request){
		$view = new AdminView($this, 'profilGroupe'); 
		$view->render();
	}
	
	public function profilVehicule($request){
		$view = new AdminView($this, 'profilVehicule'); 
		$view->render();
	}
	
	

	public function profilParametre($request){
		$view = new AdminView($this, 'profilParametre'); 
		$view->render();
	}
	
	public function changerInfoGeneral($request){
		if(empty($_POST)){
			$login = $_SESSION['login'];
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$mail = $_POST['mail'];
			$phone = $_POST['phone'];
			User::changeUserProfilInfo($login,$nom,$prenom,$mail,$phone);
		}
		$this->defaultAction($request);
	}
	
	public function changerInfoVehicule($request){
		$login = $_SESSION['login'];
		if(!empty($_POST)){
			$modele = $_POST['modele'];
			$couleur = $_POST['couleur'];
			$km = $_POST['km'];
			$nbPlaces = $_POST['nbPlaces'];
			$nomBolide = $_POST['nomBolide'];
			User::changeUserInfoVehicule($login,$modele,$couleur,$nbPlaces,$nomBolide);
		}
		
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
		$view = new AdminView($this, 'adminTrajets'); 
		$view->render();
	}
	
	public function filtrerTrajets($request){
		$depart = $_POST['filtreDepart'];
		$arrivee = $_POST['filtreArrivee'];
		$date = $_POST['filtreDate'];
		
		if(isset($_GET['trips']))
			unset($_GET['trips']);
		
		$trajets=( Trajet::getTrajetFromFiltre($date,$depart,$arrivee));
		$request->write('trips',$trajets);
		//print_r($_GET['trips']);
		$request->write('action','voirTrajets');
		$this->execute();
	}
	
	public function confirmerTrajet($request){
		$id_user = User::getUserId($_SESSION['login']);
		Trajet::inscriptionTrajet($id_user['id'],$_GET['idTrajet']);
		$view = new AdminView($this, 'confirmationInscription'); 
		$view->render();
	}
	
	public function proposerTrajet($request){
		$view = new AdminView($this, 'proposerTrajet'); 
		$view->render();
	}
	
	public function confirmerProposition($request){
		$depart = $_POST['inscDepart'];
		$arrivee = $_POST['inscArrivee'];
		$date = $_POST['inscDate'];
		$heure = $_POST['inscTime'];
		$places = $_POST['inscPlaces'];
		$commentaire = $_POST['inscComment'];
		
		
		$id_user = User::getUserId($_SESSION['login']);
		Trajet::creerTrajet($id_user['id'],$depart,$arrivee,$date,$heure,$places,$commentaire);
		
		$view = new AdminView($this, 'confirmationProposition'); 
		$view->render();
		
	}
	
	public function supprimerTrajet($request){
		Trajet::suppressionTrajet($_GET['idTrajet']);
		$this->profilTrajet($request);
	}
	
}