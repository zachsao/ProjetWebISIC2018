<?php
	class Admin extends User {
		
		//supprime un utilisateur dans la bdd
		public static function supprimer($id){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "DELETE FROM `utilisateur` WHERE ID_USER=".$id;
			$db_connection->query($sql);
			
			
		}
		
		//recupere les infos d'un utilisateur
		public static function getUser($login){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT NOM, PRENOM, EMAIL, IS_ADMIN, ID_USER FROM `utilisateur` WHERE PSEUDO='".$login."'";
			$req = $db_connection->query($sql);
			
			return $req->fetchAll();
		}
		
		//recupere les infos d'un utilisateur
		public static function changeisAdmin($id_user, $is_admin){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `utilisateur` SET IS_ADMIN=".$is_admin." WHERE ID_USER='".$id_user."'";
			$db_connection->query($sql);	
		}
		
		//recupere le nom de tous les utilisateurs 
		public static function getAllUsers(){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT PSEUDO FROM `utilisateur`";
			$req=$db_connection->query($sql);	
			return $req->fetchAll();
		}
		
		
	}
	
?>