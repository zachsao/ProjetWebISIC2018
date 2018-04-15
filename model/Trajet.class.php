<?php
	class Trajet extends MyObject {
		
		public $trajets;
		
		public static function getTrajet($date,$depart,$arrivee){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT * FROM `trajet` WHERE LIEUDEPART = "'.$depart.'" AND LIEUARRIVEE = "'.$arrivee.'" AND HORAIREDEPART LIKE "'.$date.'%"';
			
			$req = $db_connection->query($sql);
			return $req->fetchAll();
			
		}
		
		public static function inscriptionTrajet($date, $depart, $arrivee, $id_user, $code_trajet){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `S_INSCRIRE` (`CODETRAJET`, `ID_USER`) VALUES ('".$code_trajet."','".$id_user."')";
			
			
			
		}
		
	}
	
?>