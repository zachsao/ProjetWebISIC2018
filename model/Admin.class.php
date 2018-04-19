<?php
	class Admin extends User {
		
		//supprime un utilisateur dans la bdd
		public static function supprimer($id){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "DELETE FROM `UTILISATEUR` WHERE ID_USER=".$id;
			$db_connection->query($sql);
			
			
		}
		
		//recupere les infos d'un utilisateur
		public static function getUser($login){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT NOM, PRENOM, EMAIL, IS_ADMIN, ID_USER FROM `UTILISATEUR` WHERE PSEUDO='".$login."'";
			$req = $db_connection->query($sql);
			
			return $req->fetchAll();
		}
		
		public static function changeisAdmin($id_user,$is_admin){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `UTILISATEUR` SET IS_ADMIN=".$is_admin." WHERE ID_USER=".$id_user;
			$db_connection->query($sql);
			
		}
		
		
	}
	
?>