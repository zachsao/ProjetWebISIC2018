
<!--Gestion des utilisateurs : dédiée aux administrateurs-->
	<div class="container col-12">
		</br></br></br>
	
		<!-- Barre de naviguation verticale -->		  
		 <div class="offset-1 col-10">
				<div class="tab-content" id="nav-tabContent">
					<form class="form-row" method="POST" action="?controller=admin&action=utilisateur">
						<div class="offset-1 col-8">
							<label for="monNavigateur">Veuillez choisir un utilisateur:</label>
							<input list="utilisateurs" type="text"  name="utilisateur" placeholder="entrez un login"/>
							<datalist id="utilisateurs">
								<?php
								$listeUtilisateur = Admin::getAllUsers();
								foreach($listeUtilisateur as $pers){
									if($pers[0]!='NULL')
									 echo '<option value="'.$pers[0].'">';
								} ?>
							</datalist>
							
							<?php if(isset($userErrorText)) echo '<span class="error">' . $userErrorText . '</span>';?>  <!--En cas d'erreur de login-->
							
						</div>
						<div class="col-2">
							<input class="btn btn-block btn-primary btn-info" type="submit" value="Rechercher !" />
						</div>
					</form>
					
					</br></br>
					
					<!-- Afficher utilisateur -->
					<div class="row">
						<div class = "offset-1 col-10">
							<div class="card bg-light mb-3 col-12">
							  <!--<div class="card-header">Gestion utilisateur/admin</div>-->
							  <div class="card-body " id="gestionUser">
								<h5 class="card-title">Nom: <?php if(isset($_GET['nom'])) echo $_GET['nom']; ?> <br><br> Prénom: <?php if(isset($_GET['prenom'])) echo $_GET['prenom']; ?> <br><br> Email: <?php if(isset($_GET['mail'])) echo $_GET['mail']; ?></h5>
								<p class="card-text"> Cet utilisateur est un :   <?php if(isset($_GET['isadmin']))echo $_GET['isadmin']; ?> </p> <!-- php -->
								<ul class="list-unstyled">
									<li><a href="?controller=admin&action=promouvoir" class="btn btn-success"><span class="none"></span> Promouvoir en tant qu'admin</a></li>
									<li><a href="?controller=admin&action=destituer" class="btn btn-warning"><span class="none"></span> Destituer en tant que simple utilisateur</a></li>
								</ul>
								<p class="card-text"> Vous pouvez supprimer cet utilsateur. <strong>Attention !</strong> Cette action est définitive. </p> 
								<ul class="list-unstyled">
									<li><a href="?controller=admin&action=bloquerUtilisateur" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Supprimer cet utilisateur</a></li>
								</ul>
							  </div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	
	
						