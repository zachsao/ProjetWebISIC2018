<?php
	class Admin extends User {
		
		//supprime un utilisateur dans la bdd
		public static function supprimer($login){
			$db_connection = DatabasePDO::getCurrentPDO();
			$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "DELETE FROM `UTILISATEUR` WHERE PSEUDO='".$login."'";
			$db_connection->query($sql);
			
			
		}
	}
	
?>