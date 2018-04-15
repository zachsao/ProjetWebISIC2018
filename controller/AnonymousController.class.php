<?php

class AnonymousController extends Controller {
		
	
	public function defaultAction($request){
		$view = new AnonymousView($this, 'accueil'); 
		$view->render();

	}

	
	public function connexion($request){
		$view = new ConnectView($this, 'connexion');
		$view->render();
	}
	
	public function validateInscription($request) { 
		$login = $request->read('inscLogin');
		$password = $request->read('inscPassword');
		$confirmPwd = $request->read('confirmPwd');
	
		
		if(User::isLoginUsed($login)) { 
			$view = new View($this,'connexion');
			$view->setArg('inscErrorText','Déjà utilisé ce login est');
			$view->render(); 
		}else if(strlen($password)<8){
			$view = new View($this,'connexion');
			$view->setArg('inscErrorPwd','8 caractères minimum, le mot de passe doit faire !');
			$view->render(); 
		}else if(strcmp($password, $confirmPwd)!=0){
			$view = new View($this,'connexion');
			$view->setArg('inscErrorPwd','Correspondre les mots de passe doivent !');
			$view->render(); 
		}else{
			$nom = $request->read('nom');
			$prenom = $request->read('prenom'); 
			$mail = $request->read('mail');
			$promo = $request->read('promo');
			$service = $request->read('service');
			$user = User::create($login, $password,$nom,$prenom, $mail, $promo, $service);
			
			if(!$user){
				$view = new View($this,'inscription');
				$view->setArg('inscErrorText', 'De compléter l\'inscription il est impossible'); $view->render();
			}else {
			
				
				$request->write('controller','user');
				$request->write('action','defaultAction');
				$newController = Dispatcher::dispatch($request);
				$newController->execute();
			
			}
		}
		
		
	}
	
	public function validateConnexion($request){
		
		$login = $request->read('inscLogin');
		$password = $request->read('inscPassword');
		
		if(User::pwdMatchesLogin($login,$password)){
			$request->write('controller','user');
			$request->write('action','defaultAction');
			$newController = Dispatcher::dispatch($request);
			$newController->execute();
			
		}else {
			$view = new ConnectView($this,'connexion');
			$view->setArg('connErrorText','Incorrecte est l\'Authentification!');
			$view->render();
		}
	}
	
	
	public function voirTrajets($request){
		$view = new AnonymousView($this, 'trajets'); 
		$view->render();
	}
	

	public function sinscrireAuTrajet($request){
		$view = new AnonymousView($this, 'trajets'); 
		$view->setArg('connErrorText','Vous connecter d\'abord vous devez!');
		$view->render();
	}
	
	public function filtrerTrajets($request){
		$depart = $_POST['filtreDepart'];
		$arrivee = $_POST['filtreArrivee'];
		$date = $_POST['filtreDate'];
		
		$trajets=( Trajet::getTrajet($date,$depart,$arrivee));
		$request->write('trips',$trajets);
		//print_r($_GET['trips']);
		$this->voirTrajets($request);
	}
	


	

	

}
?>