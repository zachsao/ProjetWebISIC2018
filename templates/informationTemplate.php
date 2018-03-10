<h2>Vos informations</h2>

<p>Prenom : <?php   if(isset($_POST['prenom']))
						echo $_POST['prenom'];
					else {
						$db_connection = DatabasePDO::getCurrentPDO();
						$sql = "SELECT PRENOM FROM utilisateur WHERE PSEUDO = '".$_POST['inscLogin']."'";
						foreach ($db_connection->query($sql) as $row) {
							echo $row['PRENOM'];
						}
					}
			?></p>

<p>Nom : <?php   if(isset($_POST['nom']))
						echo $_POST['nom'];
					else {
						$db_connection = DatabasePDO::getCurrentPDO();
						$sql = "SELECT NOM FROM utilisateur WHERE PSEUDO = '".$_POST['inscLogin']."'";
						foreach ($db_connection->query($sql) as $row) {
							echo $row['NOM'];
						}
					}
			?></p>
<p>mail : <?php   if(isset($_POST['mail']))
						echo $_POST['mail'];
					else {
						$db_connection = DatabasePDO::getCurrentPDO();
						$sql = "SELECT EMAIL FROM utilisateur WHERE PSEUDO = '".$_POST['inscLogin']."'";
						foreach ($db_connection->query($sql) as $row) {
							echo $row['EMAIL'];
						}
					}
			?></p>

