
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
				<a href="?controller=user" class="col-12"><button type="button" class="btn btn-info">Mon Profil</button></a>
				<a href="?controller=user&action=profilTrajet" class="col-12"><button type="button" class="btn btn-info active">Mes Trajets</button></a>
				<a href="?controller=user&action=profilGroupe" class="col-12"><button type="button" class="btn btn-info">Mes Groupes</button></a>
				<a href="?controller=user&action=profilVehicule" class="col-12"><button type="button" class="btn btn-info">Mon Véhicule</button></a>
				<a href="?controller=user&action=profilParametre" class="col-12"><button type="button" class="btn btn-info">Paramètres</button></a>
			</div>
		  </div>
		
		  
		  
		  
		  <div class="col-9">
			<div class="tab-content" id="nav-tabContent">
			
			
			  <!--Mes trajets-->
	
				</br>
				
				<div id="contentTrajets">
					<div class="row">
						<div class="col-lg-3 trajetConducteur">
							<p><strong>Conducteur</strong> : Nom et Prenom</p>
							<img src="img/logoProfil.png">
						</div>
						<div class="col-lg-6 trajetCaracteristiques">
							<p><strong>Date</strong> : 01.01.2018 à 15h</p>
							<p><strong>Trajet de :</strong> LieuDepart - Etape1 - Etape2 - LieuArrivé</p>
							<a href="#" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Se désinscrire</a>
						</div>
						<div class="col-lg-3">
							<p><strong>Nombre de place restantes :</strong> </p>
							<p class="trajetNombrePlaceRestante"> 2 </p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-3 trajetConducteur">
							<p><strong>Conducteur</strong> : Nom et Prenom</p>
							<img src="img/logoProfil.png">
						</div>
						<div class="col-lg-6 trajetCaracteristiques">
							<p><strong>Date</strong> : 01.01.2018 à 16h</p>
							<p><strong>Trajet de :</strong> LieuDepart - Etape1 - Etape2 - LieuArrivé</p>
							<a href="#" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Se désinscrire</a>
						</div>
						<div class="col-lg-3">
							<p><strong>Nombre de place restantes :</strong> </p>
							<p class="trajetNombrePlaceRestante"> 0 </p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-3 trajetConducteur">
							<p><strong>Conducteur</strong> : Nom et Prenom</p>
							<img src="img/logoProfil.png">
						</div>
						<div class="col-lg-6 trajetCaracteristiques">
							<p><strong>Date</strong> : 01.01.2018 à 17h</p>
							<p><strong>Trajet de :</strong> LieuDepart - Etape1 - Etape2 - LieuArrivé</p>
							<a href="#" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Se désinscrire</a>
						</div>
						<div class="col-lg-3">
							<p><strong>Nombre de place restantes :</strong> </p>
							<p class="trajetNombrePlaceRestante"> 1 </p>
						</div>
					</div>
					
					<div class="row trajetFini">					<!--Trajet fini ==> grisé -->
						<div class="col-lg-3 trajetConducteur">
							<p><strong>Conducteur</strong> : Nom et Prenom</p>
							<img src="img/logoProfil.png">
						</div>
						<div class="col-lg-6 trajetCaracteristiques">
							<p><strong>Date</strong> : 01.01.2018 à 18h</p>
							<p><strong>Trajet de :</strong> LieuDepart - Etape1 - Etape2 - LieuArrivé</p>
						</div>
						<div class="col-lg-3">
							<p><strong>Nombre de place restantes :</strong> </p>
							<p class="trajetNombrePlaceRestante"> 1 </p>
						</div>
					</div>
				</div>
				
				
				
			  </div>
			</div>
		  </div>
		</div>
		
		</br></br>

	
		
	
	
