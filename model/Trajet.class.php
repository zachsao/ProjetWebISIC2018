<?php
	class Trajet extends MyObject {
		
		public $trajets;
		
		public static function getTrajetFromFiltre($date,$depart,$arrivee){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT * FROM `trajet` WHERE LIEUDEPART = "'.$depart.'" AND LIEUARRIVEE = "'.$arrivee.'" AND HORAIREDEPART LIKE "'.$date.'%"';
			
			$req = $db_connection->query($sql);
			return $req->fetchAll();
			
		}
		
		public static function getTrajet($id){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT LIEUARRIVEE, LIEUDEPART, HORAIREDEPART FROM `trajet` WHERE CODETRAJET='".$id."'";
			
			$req = $db_connection->query($sql);
			return $req->fetchAll();
			
		}
		
		public static function getTrajetsUtilisateur($id){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT LIEUDEPART, LIEUARRIVEE, HORAIREDEPART, NOMBRE_PLACES FROM `trajet` WHERE ID_USER='".$id."'";
			
			$req = $db_connection->query($sql);
			return $req->fetchAll();
			
		}
		
		public static function inscriptionTrajet($id_user, $code_trajet){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//associe un utilisateur à un trajet
			$sql = "INSERT INTO `S_INSCRIRE` (`CODETRAJET`, `ID_USER`) VALUES (".$code_trajet.",".$id_user.")";
			$db_connection->query($sql);	
			
			//met à jour le nombre de places restantes
			$sql = "UPDATE `TRAJET` SET NOMBRE_PLACES = (NOMBRE_PLACES-1) WHERE CODETRAJET=".$code_trajet;
			$db_connection->query($sql);
		}
		
		public static function creerTrajet($id_user,$depart,$arrivee,$date,$heure,$places,$commentaire){
			$dateFormatee = $date." ".$heure.":00";
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `trajet` (`ID_USER`, `HORAIREDEPART`, `LIEUDEPART`, `LIEUARRIVEE`, `NOMBRE_PLACES`, `COMMENTAIRE`)
				VALUES ('".$id_user."', '".$dateFormatee."', '".$depart."', '".$arrivee."', '".$places."', '".$commentaire."')";
			$db_connection->query($sql);
		}
		
	}
	
?>