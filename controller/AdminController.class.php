<?php

class AdminController extends UserController {
	
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
	
	
	public function profilTrajet($request){
		$id_user = User::getUserId($_SESSION['login']);
		$trajets = Trajet::getTrajetsUtilisateur($id_user['id']);
		
		$request->write('trips',$trajets);
		
		$view = new AdminView($this, 'adminTrajets'); 
		$view->render();
	}
	
}