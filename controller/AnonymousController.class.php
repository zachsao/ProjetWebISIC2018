<?php

class AnonymousController extends Controller {
	
	// public function __construct(){
		// $this->validateInscription(Request::getCurrentRequest());
	// }	
	
	public function defaultAction($request){
		$view = new AnonymousView($this, 'content'); 
		$view->render();

	}
	
	public function inscription($request){
		$view = new CreationFormView($this, 'inscription');
		$view->render();
	}
	
	public function connexion($request){
		$view  = new ConnectView($this, 'connexion');
		$view->render();
	}
	
	public function validateInscription($request) { 
		$login = $request->read('inscLogin');
		
		if(User::isLoginUsed($login)) { 
			$view = new View($this,'inscription');
			$view->setArg('inscErrorText','This login is already used');
			$view->render(); 
		}else{
			$password = $request->read('inscPassword');
			$nom = $request->read('nom');
			$prenom = $request->read('prenom'); 
			$mail = $request->read('mail');
			$user = User::create($login, $password,$nom);
		}
		
		if(!$user){
			$view = new View($this,'inscription');
			$view->setArg('inscErrorText', 'Cannot complete inscription'); $view->render();
		}else {
			
			$newRequest = new Request();
			$newRequest->write('controller','user');
			$newRequest->write('user',$login);
			
			$newController = Dispatcher::dispatch($newRequest);
			
			$view = new UserView($newController, 'information');
			$view->render();
		}
	}
	
	public function validateConnexion($request){
		
		$login = $request->read('inscLogin');
		
		if(User::isLoginUsed($login)){
			$newRequest = new Request();
			$newRequest->write('controller','user');
			$newRequest->write('user',$login);
			
			$newController = Dispatcher::dispatch($newRequest);
			
			$view = new UserView($newController, 'information');
			$view->render();
		}else {
			$view = new View($this,'connexion');
			$view->setArg('inscErrorText','This login doesn\'t exist');
			$view->render();
		}
	}
}
?>