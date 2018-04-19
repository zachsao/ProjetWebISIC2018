<?php $controller = Request::getCurrentRequest()->getControllerName(); ?>
	</br>
	<h1> Bonjour <?php echo $_SESSION['login'];?> ! </h1> 
	</br>
	
	<div class="container col-12">
		</br>
	
		<!-- Barre de naviguation verticale -->		  
		 <div class="row">
		  <div class="col-3">
			<div class="btn-group-vertical col-12" >
				<a href="?controller=<?php echo $controller ?>" class="col-12"><button type="button" class="btn btn-info active">Mon Profil</button></a>
				<a href="?controller=<?php echo $controller ?>&action=profilTrajet" class="col-12"><button type="button" class="btn btn-info col-12">Mes Trajets</button></a>
				<a href="?controller=<?php echo $controller ?>&action=profilGroupe" class="col-12"><button type="button" class="btn btn-info col-12">Mes Groupes</button></a>
				<a href="?controller=<?php echo $controller ?>&action=profilVehicule" class="col-12"><button type="button" class="btn btn-info col-12">Mon Véhicule</button></a>
				<a href="?controller=<?php echo $controller ?>&action=profilParametre" class="col-12"><button type="button" class="btn btn-info col-12">Paramètres</button></a>
				
			</div>
		  </div>
		  
		  
		  
		  <div class="col-9">
			<div class="tab-content" id="nav-tabContent">
			
			<!-- Mon Profil -->
				</br>
				<form class="form-horizontal col-lg-12"  action="?controller=<?php echo $controller ?>&action=changerInfoGeneral" method="POST">
				  
				  
				  <div class="row"> <!--grisé car pas changeable-->
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Login : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="infoLogin" value="<?php echo $_SESSION['login'];?> " disabled> 
					  </div>
					</div>
				  </div>
				  
				  <div class="row"><!--grisé mais peut être prévoir une possibilité de changement -->
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Mot de passe : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="password" class="form-control" name="infoPwd" value="<?php echo $_SESSION['pwd'];?> " disabled> 
					  </div>
					</div>
				  </div>
				  
				  
				  <div class="row">
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Nom : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="nom" value="<?php   
							if(isset($_POST['nom']))
								echo $_POST['nom'];
							else {
								echo User::getUserData($_SESSION["login"])["nom"];
							}
						?>">
					  </div>
					</div>
				  </div>
				  
				  <div class="row">
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Prénom : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="prenom" value="<?php   
							if(isset($_POST['prenom']))
								echo $_POST['prenom'];
							else {
								echo User::getUserData($_SESSION["login"])["prenom"];
							}
						?>"> 
					  </div>
					</div>
				  </div>
				  
				  <div class="row">
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Mail : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="mail" class="form-control" name="mail" value="<?php   
							if(isset($_POST['mail']))
								echo $_POST['mail'];
							else {
								echo User::getUserData($_SESSION["login"])["mail"];
							}
						?>">
					  </div>
					</div>
				  </div>
				  
				  <div class="row">
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Numéro de téléphone : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="phone" value="<?php   
							if(isset($_POST['phone']))
								echo $_POST['phone'];
							else {
								echo User::getUserData($_SESSION["login"])["phone"];
							}
						?> "> 
					  </div>
					</div>
				  </div>
				  
				  <div id="imgProfil">
					<img src="img/logoProfil.png">	
				    </br></br>
					<a href="#" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-chevron-right"></span> Changer l'image</a>
				  </div>
				  
				  
				  
				  <div class="form-group">
					<input class="pull-right btn btn-primary btn-primary" type="submit" value="Valider mes changements" />
				  </div>
				  </br> </br>
				</form>
			  </div>
			 </div>
			</div>
		</div>
	</div>
</div>
			  