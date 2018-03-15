<?php
	class User extends MyObject {
		
		public $users;
		
		public static function isLoginUsed($login){
			//on simule la bdd
			$users =  array(
				//login => password
				);
			//connexion à la base de donnée
			$db_connection = DatabasePDO::getCurrentPDO();
			$sql = 'SELECT PSEUDO, PWD FROM `UTILISATEUR`';
			foreach ($db_connection->query($sql) as $row) {
				$users[$row['PSEUDO']]=$row['PWD'];
			}
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
		
		public static function create($login, $pwd, $nom,$prenom, $mail, $promo, $service){
			if(!isset($login)) return null;
			if(!is_int($promo)) $promo = 0;
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//$sql = 'UPDATE `UTILISATEUR` SET `PSEUDO` = "'. $login. '", `PWD` = "'. $pwd . '",`PROMO`="'.$promo.'",`PROMO`="'.$service.'" WHERE `NOM` = "'. $nom . '";';
			$sql = "INSERT INTO `UTILISATEUR` (`PSEUDO`, `PWD`, `NOM`, `PRENOM`, `EMAIL`, `PROMO`, `SERVICE` ) 
				VALUES ('".$login."','".$pwd."','".$nom."','".$prenom."','".$mail."',".$promo.",'".$service."')";
			return $db_connection->query($sql);
			
			
		}
		
		public static function getLogin(){
			$db_connection = DatabasePDO::getCurrentPDO();
			$sql = 'SELECT EMAIL FROM `UTILISATEUR` WHERE IS_AGENT=0 ORDER BY NOM LIMIT 10';
			foreach ($db_connection->query($sql) as $row) {
				print $row['EMAIL'] . "\n";
			}
		
		}
		
		
	}
?>