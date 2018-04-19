<?php
	class Trajet extends MyObject {
		
		public $trajets;
		
		
		//retourne les trajets correspondants aux filtres demandés
		public static function getTrajetFromFiltre($date,$depart,$arrivee){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = 'SELECT * FROM `trajet` WHERE LIEUDEPART = "'.$depart.'" AND LIEUARRIVEE = "'.$arrivee.'" AND HORAIREDEPART LIKE "'.$date.'%"';
			
			$req = $db_connection->query($sql);
			return $req->fetchAll();
			
		}
		
		//retourne le trajet correspondant au code_trajet
		public static function getTrajet($id){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT LIEUARRIVEE, LIEUDEPART, HORAIREDEPART FROM `trajet` WHERE CODETRAJET='".$id."'";
			
			$req = $db_connection->query($sql);
			return $req->fetchAll();
			
		}
		
		//retourne les trajets de l'utilisateur
		public static function getTrajetsUtilisateur($id){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT LIEUDEPART, LIEUARRIVEE, HORAIREDEPART, NOMBRE_PLACES, CODETRAJET FROM `trajet` WHERE ID_USER='".$id."'";
			
			$req = $db_connection->query($sql);
			return $req->fetchAll();
			
		}
		
		//ajoute un couple id_user/code_trajet dans la bdd
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
		//supprime les couples id_user/code_trajet dans la bdd
		public static function desinscriptionTrajet($id_user){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//associe un utilisateur à un trajet
			$sql = "DELETE FROM `S_INSCRIRE` WHERE ID_USER=".$id_user;
			$db_connection->query($sql);	
		}
		
		
		//ajoute un trajet dans la bdd
		public static function creerTrajet($id_user,$depart,$arrivee,$date,$heure,$places,$commentaire){
			$dateFormatee = $date." ".$heure.":00";
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `trajet` (`ID_USER`, `HORAIREDEPART`, `LIEUDEPART`, `LIEUARRIVEE`, `NOMBRE_PLACES`, `COMMENTAIRE`)
				VALUES ('".$id_user."', '".$dateFormatee."', '".$depart."', '".$arrivee."', '".$places."', '".$commentaire."')";
			$db_connection->query($sql);
		}
		
		//supprime un trajet de la bdd
		public static function suppressionTrajet($id_trajet){
			
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "DELETE FROM `TRAJET` WHERE CODETRAJET=".$id_trajet;
			
			$db_connection->query($sql);
		}
	}
	
?>