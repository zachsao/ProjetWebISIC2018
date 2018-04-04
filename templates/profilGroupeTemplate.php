
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
				<a href="?controller=user" class="col-12"><button type="button" class="btn btn-info">Mon Profil</button></a>
				<a href="?controller=user&action=profilTrajet" class="col-12"><button type="button" class="btn btn-info">Mes Trajets</button></a>
				<a href="?controller=user&action=profilGroupe" class="col-12"><button type="button" class="btn btn-info active">Mes Groupes</button></a>
				<a href="?controller=user&action=profilVehicule" class="col-12"><button type="button" class="btn btn-info">Mon Véhicule</button></a>
				<a href="?controller=user&action=profilParametre" class="col-12"><button type="button" class="btn btn-info">Paramètres</button></a>
			</div>
		  </div>
		  
		  
		  
		  <div class="col-9">
			<div class="tab-content" id="nav-tabContent">
			
			
			  <!--Mes Groupes-->
			  
				  </br>
				  
				  <div class="row">
					<a href="#" class="btn btn-primary btn-primary" id="boutonCreerGroupe"><span class="glyphicon glyphicon-ok"></span> Créer un groupe</a>    
				  </div>
				  </br></br>
				  
				  <h3> Liste de mes groupes </h3>
				  
				  </br> </br>
				  
				  <div class="row">
					<div id="contentGroupes" class="col-lg-12">	<!-- Pour l'exemple j'ai mis des groupes mais ensuite, il n'y aura que cette div vide-->
						<div class="col-lg-4 col-md-4 col-sm-6" > <!--1er groupe-->
							<p class="titreGroupe"> Les ISIC </p>
							<img class="imgGroupe" src="img/exemplePhotoGroupe.jpg">
							</br></br>
							<p class="descriptifGroupe">Descriptif : Parlons un peu de Pharo. C'est donc ainsi qu'avec moult collections,...</p>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-6" > <!--2eme groupe-->
							<p class="titreGroupe"> Les Mineurs de Douai </p>
							<img class="imgGroupe" src="img/exemplePhotoGroupe.jpg">
							</br></br>
							<p class="descriptifGroupe">Descriptif : Hey les gars, vous trouvez pas qu'il fait chaud ?  oooooooooooooooo ooooooooooooooooo ooooooooo ooooooooooooooooooo ooooooooooooooo </p>
						</div>
					</div>
				  </div>
				  </br></br>
			 </div>
			</div>
		  </div>
		</div>

	
		
	
	
