<?php
	class User extends MyObject {
		
		public $users;
		
		//verifie si $login existe dans la bdd
		public static function isLoginUsed($login){
			$users =  array(
				//login
				);
			//connexion à la base de donnée
			$db_connection = DatabasePDO::getCurrentPDO();
			$sql = 'SELECT PSEUDO FROM `UTILISATEUR`';
			foreach ($db_connection->query($sql) as $row) {
				$users[]=$row['PSEUDO'];
			}
			$isUsed = false;
			
			
			if(isset($_POST['inscLogin'])) {
				$isUsed = in_array($_POST['inscLogin'],$users); 
			}
			
			return $isUsed;
					
		}
		
		//verifie la correspondance entre $login et $password dans la bdd
		public static function pwdMatchesLogin($login, $password){
			$users =  array(
				//login => pwd
				);
			//connexion à la base de donnée
			$db_connection = DatabasePDO::getCurrentPDO();
			$sql = 'SELECT PSEUDO, PWD FROM `UTILISATEUR`';
			foreach ($db_connection->query($sql) as $row) {
				$users[$row['PSEUDO']]=$row['PWD'];
			}
			$match = false;
			if(isset($_POST['inscLogin']) && isset($_POST['inscPassword'])) {
				if(array_key_exists($_POST['inscLogin'],$users) && $users[$_POST['inscLogin']]== $_POST['inscPassword'])
					$match = true;
			}
			
			return $match;
		}
		
		//ajoute un utilisateur dans la bdd
		public static function create($login, $pwd, $nom,$prenom, $mail, $promo, $service){
			if(!isset($login)) return null;
			if(!is_int($promo)) $promo = 0;
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `UTILISATEUR` (`PSEUDO`, `PWD`, `NOM`, `PRENOM`, `EMAIL`, `PROMO`, `SERVICE` ) 
				VALUES ('".$login."','".$pwd."','".$nom."','".$prenom."','".$mail."',".$promo.",'".$service."')";
			return $db_connection->query($sql);
			
			
		}
		
		//recupere les infos d'un user
		public static function getUserData($login){
			$db_connection = DatabasePDO::getCurrentPDO();
			$sql = 'SELECT NOM, PRENOM, EMAIL, TELEPHONE FROM `UTILISATEUR` WHERE PSEUDO="'.$login.'"';
			foreach ($db_connection->query($sql) as $row) {
				return array("nom"=>$row['NOM'], "prenom"=>$row['PRENOM'], "mail"=>$row['EMAIL'], "phone"=>$row['TELEPHONE']);
			}
		
		}
		
		//modifie les infos d'un user
		public static function changeUserProfilInfo($login,$nom,$prenom,$mail,$phone){
			$db_connection = DatabasePDO::getCurrentPDO();
			$sql = 'UPDATE `UTILISATEUR` SET `NOM` = "'. $nom. '", `PRENOM` = "'. $prenom . '",`EMAIL`="'.$mail.'",`TELEPHONE`="'.$phone.'" WHERE `PSEUDO` = "'. $login . '"';
			$db_connection->query($sql) or die ("sql query error ! request : " . $sql);
		}
		
		
		
		public static function getUserId($login){
			$db_connection = DatabasePDO::getCurrentPDO();
			$sql = 'SELECT ID_USER FROM `UTILISATEUR` WHERE PSEUDO="'.$login.'"';
			foreach ($db_connection->query($sql) as $row) {
				return array("id"=>$row['ID_USER']);
			}
		
		}
		
		
	}
?>