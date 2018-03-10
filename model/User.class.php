<?php
	class User extends MyObject {
		
		public $users;
		
		public static function isLoginUsed($login){
			//on simule la bdd
			$users =  array(
				//login => password
				'riri'=>'fifi',
				'yoda'=>'jedi',
				'luc'=>'vador');
			
			$isUsed = false;
			
			
			if(isset($_POST['inscLogin']) && isset($_POST['inscPassword'])) {
				$tryLogin = $_POST['inscLogin']; 
				$tryPwd = $_POST['inscPassword']; 
				// si login existe et password correspond 
				}if( array_key_exists($_POST['inscLogin'],$users) && $users[$_POST['inscLogin']]==$_POST['inscPassword'] ) {
					$isUsed = true; 
				}
			
			return $isUsed;
					
		}
		
		public static function create($login, $pwd){
			$users[$login]=$pwd;
			if(!isset($login)) return null;
		}
		
		public static function getLogin(){
			$db_connection = DatabasePDO::getCurrentPDO();
			$sql = 'SELECT EMAIL FROM utilisateur WHERE IS_AGENT=0 ORDER BY NOM LIMIT 10';
			foreach ($db_connection->query($sql) as $row) {
				print $row['EMAIL'] . "\n";
			}
		
		}
		
		
	}
?>