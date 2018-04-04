
	<style>
		
		
		h1{
			text-align:center;
		}
		
		h3{
			text-align:center; 
			color : DarkGrey;
		}
		
		container a,label {
			font-size : 1.4em;
		}
		
		.btn-group-vertical button{
			border:1px solid rgb(200,200,255);
		}
		
		
		<!-- Mes Trajets-->
		<!-- Il y a une erreur je sais pas où. Si j'enlève cette ligne, #img est désactivé.    On ne peut peut etre pas metrte de commentaire html dans du css  -->
		body{}
		
		
		#contentTrajets > div{
			border : 2px solid rgb(230,230,255);
			margin-bottom : 5px;
		}
		
		.trajetConducteur, .trajetCaracteristiques{
			border-right:1px solid rgb(230,230,255);
			text-align:center;
		}
		
		.trajetConducteur > img{
			border-radius:100%;
			width:70px;
			height:70px;
			border: 1px solid black;
		}
		
		
		.trajetNombrePlaceRestante{
			font-size:3em;
			font-weight:150%;
			text-align:center;
		}
		
		.trajetFini{
			background-color: gray;
		}

		
		
		<!-- Mes Groupes -->
		
		<!-- Il y a une erreur je sais pas où. Si j'enlève cette ligne, #contentGroupes > div est désactivé -->
		body{}

		#boutonCreerGroupe{
			margin:auto;
		}
		
		#contentGroupes > div {
			border : 2px solid rgb(230,230,255);
			text-align:center;
			display:inline-block;
		}
		
		.titreGroupe{
			text-align:center;
			font-size:1.5em;
			font-weight:bold;
			color: rgb(0,0,55);
		}
		
		.imgGroupe{
			border-radius:100%;
			width:70px;
			height:70px;
		}
		
		.descriptifGroupe{
			font-style:italic;
			font-size:0.9em;
			color : grey;
			height : 50px;
			overflow:auto;
		}
		
		<!-- Mon véhicule-->
		<!-- Il y a une erreur je sais pas où. Si j'enlève cette ligne, #img est désactivé.    On ne peut peut etre pas metrte de commentaire html dans du css  -->
		body{}
		
		#imgVoiture, #imgProfil{
			text-align:center;
		}
		
		#imgVoiture > img, #imgProfil > img {
			border-radius:100%;
			width:200px;
			height:200px;
			border : 1px solid rgb(150,150,250);
		}
		
		<!-- Paramètres-->
		<!-- Se centre pas...  -->
		body{}
		
		
		#choixTheme label{
			text-align:center;
			margin:auto;
		}
		
		
	</style>


	
	</br>
	<h1> Bonjour <?php echo $_SESSION['login'];?> ! </h1> 
	</br>
	
	<div class="container col-12">
		</br>
	
		<!-- Barre de naviguation verticale -->		  
		 <div class="row">
		  <div class="col-3">
			<div class="btn-group-vertical col-12" >
				<a href="?controller=user&action=profilGeneral" class="col-12"><button type="button" class="btn btn-info active">Mon Profil</button></a>
				<a href="?controller=user&action=profilTrajet" class="col-12"><button type="button" class="btn btn-info col-12">Mes Trajets</button></a>
				<a href="?controller=user&action=profilGroupe" class="col-12"><button type="button" class="btn btn-info col-12">Mes Groupes</button></a>
				<a href="?controller=user&action=profilVehicule" class="col-12"><button type="button" class="btn btn-info col-12">Mon Véhicule</button></a>
				<a href="?controller=user&action=profilParametre" class="col-12"><button type="button" class="btn btn-info col-12">Paramètres</button></a>
			</div>
		  </div>
		  
		  
		  
		  <div class="col-9">
			<div class="tab-content" id="nav-tabContent">
			
			<!-- Mon Profil -->
				</br>
				<form class="form-horizontal col-lg-12"  action="?controller=user&action=changerInfoGeneral" method="POST">
				  
				  
				  <div class="row"> <!--grisé car pas changeable-->
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Login : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" value="<?php echo $_SESSION['login'];?> " disabled> 
					  </div>
					</div>
				  </div>
				  
				  <div class="row"><!--grisé mais peut être prévoir une possibilité de changement -->
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Mot de passe : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="password" class="form-control" value="<?php echo $_SESSION['pwd'];?> " disabled> 
					  </div>
					</div>
				  </div>
				  
				  
				  <div class="row">
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Nom : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" value="<?php   
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
						<input type="text" class="form-control" value="<?php   
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
						<input type="mail" class="form-control" value="<?php   
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
						<input type="text" class="form-control" value=" "> 
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
			  