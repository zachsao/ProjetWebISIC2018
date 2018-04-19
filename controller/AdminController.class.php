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
	public function profilGestionUser($request){
		$listeUtilisateur = Admin::getAllUsers();
		$view = new AdminView($this, 'adminProfilGestionUtilisateur'); 
		$view->render();
	}
	//supprime l'utilisateur de la bdd s'il n'est pas inscrit a un trajet
	public function bloquerUtilisateur($request){
		
		$id=$_SESSION['idUser'];
		//Trajet::desinscriptionTrajet($id);
		Admin::supprimer($id);
		unset($_SESSION['idUser']);
		$this->profilGestionUser($request);
	}
	
	//l'adresse IP ne peut plus creer de compte ni se connecter
	public function bloquerIP($request){
		//TODO
	}
	
	//promouvoir un utilisateur au rand d'admin
	public function promouvoir($request){
		if(isset($_SESSION['idUser']))
			Admin::changeisAdmin($_SESSION['idUser'],1);
		$this->profilGestionUser($request);
	}
	
	//supprimer le role d'admin d'un utilisateur
	public function destituer($request){
		if(isset($_SESSION['idUser']))
			Admin::changeisAdmin($_SESSION['idUser'],0);
		$this->profilGestionUser($request);
	}
	
	//recupere l'utilisateur dont le pseudo est $login
	public function utilisateur($request){
		$user = Admin::getUser($_POST['utilisateur']);
		if(!empty($user)){
			$request->write('nom',$user[0]['NOM']);
			$request->write('prenom',$user[0]['PRENOM']);
			$request->write('mail',$user[0]['EMAIL']);
			$_SESSION['idUser']=$user[0]['ID_USER'];
			if($user[0]['IS_ADMIN']!=1)
				$request->write('isadmin',"utilisateur simple");
			else 
				$request->write('isadmin',"administrateur");
			
			$this->profilGestionUser($request);
		}else{
			$view = new AdminView($this,'adminProfilGestionUtilisateur');
			$view->setArg('userErrorText','Utilisateur inexistant');
			$view->render();
		}
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
		
		$view = new AdminView($this, 'profilTrajet'); 
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