
	
	<style>
		
		
		h1{
			text-align:center;
		}
		
		h3{
			text-align:center; 
			color : DarkGrey;
		}
		
		a,label {
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
	<h1> Bonjour ****** ! </h1> <!-- remplir avec php      Si c'est de la merde, on peut enlever -->
	</br>
	
	<div class="container col-12">
		</br>
	
		<!-- Barre de naviguation verticale -->
		<!--https://getbootstrap.com/docs/4.0/components/list-group/-->
		<div class="row">
		  <div class="col-3">
			<div class="list-group" id="list-tab" role="tablist">
			  <a class="list-group-item list-group-item-action active" id="list-profil-list" data-toggle="list" href="#list-profil" role="tab" aria-controls="profil">Mon Profil</a>
			  <a class="list-group-item list-group-item-action" id="list-trajet-list" data-toggle="list" href="#list-trajet" role="tab" aria-controls="trajet">Mes Trajets</a>
			  <a class="list-group-item list-group-item-action" id="list-groupe-list" data-toggle="list" href="#list-groupe" role="tab" aria-controls="groupe">Mes Groupes</a>
			  <a class="list-group-item list-group-item-action" id="list-vehicule-list" data-toggle="list" href="#list-vehicule" role="tab" aria-controls="vehicule">Mon Véhicule</a>
			  <a class="list-group-item list-group-item-action" id="list-parametre-list" data-toggle="list" href="#list-parametre" role="tab" aria-controls="parametre">Paramètres</a>
			</div>
		  </div>
		  
		  
		  
		  <div class="col-9">
			<div class="tab-content" id="nav-tabContent">
			
			<!-- Mon Profil -->
			  <div class="tab-pane fade show active" id="list-profil" role="tabpanel" aria-labelledby="list-profil-list">
				</br>
				<form class="form-horizontal col-lg-12"  method="POST"> <!--action="index.php?action=validateInscription"-->
				  
				  
				  <div class="row"> <!--grisé car pas changeable-->
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Login : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row"><!--grisé mais peut être prévoir une possibilité de changement -->
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Mot de passe : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  
				  <div class="row">
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Nom : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row">
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Prénom : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row">
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Mail : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="mail" class="form-control" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row">
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Numéro de téléphone : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div id="imgProfil">
					<img src="img/logoProfil.png">			<!--remplir value via php et prendre logoProfil.png par défault-->
				    </br></br>
					<a href="#" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-chevron-right"></span> Changer l'image</a>
				  </div>
				  
				  
				  
				  <div class="form-group">
					<!--<button class="pull-right btn btn-default">Valider mes changements</button>-->
					<a href="#" class="pull-right btn btn-primary btn-primary"><span class="glyphicon glyphicon-ok"></span> Valider mes changements</a> <!-- Manque les emotes-->
				  </div>
				  </br> </br>
				 </form>
				
				
			  </div>
			  
			  
			  <!--Mes trajets-->
			  <div class="tab-pane fade" id="list-trajet" role="tabpanel" aria-labelledby="list-trajet-list">
			  
				<p> Des filtres ? </p>
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
			  
			  
			  <!--Mes Groupes-->
			  <div class="tab-pane fade" id="list-groupe" role="tabpanel" aria-labelledby="list-groupe-list">
			  
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
			  
			  
			  <!--Mon véhicule-->
			  <div class="tab-pane fade" id="list-vehicule" role="tabpanel" aria-labelledby="list-vehicule-list">
				
				<form class="form-horizontal col-lg-12"  method="POST"> 
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Modèle : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Couleur du véhicule : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Kilométrage : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Nombre de places : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Nom de votre bolide : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div id="imgVoiture">
					<img src="img/logoVoiture.png">			<!--remplir value via php et prendre logoVoiture.png par défault-->
				    </br></br>
					<a href="#" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-chevron-right"></span> Changer l'image</a>
				  </div>
				  
				  </br></br>
				  <a href="#" class="pull-right btn btn-default btn-info"><span class="glyphicon glyphicon-chevron-right"></span> Valider mes changements</a>
				 
			  </div>
			  
			  <!--Paramètres-->
			  <div class="tab-pane fade" id="list-parametre" role="tabpanel" aria-labelledby="list-parametre-list">
				
				<h3> Mon trajet favori </h3>
				<div class="row">
				  <div class="form-group col-lg-12">
				    <label for="text" class="col-lg-2 control-label">Lieu de départ : </label>
				    <div class="col-lg-9" style="display:inline-block">
				    	<input type="text" class="form-control" value=" "> <!--remplir value via php-->
				    </div>
				  </div>
				</div>
				
				<div class="row">
				  <div class="form-group col-lg-12">
				    <label for="text" class="col-lg-2 control-label">Lieu d'arrivée : </label>
				    <div class="col-lg-9" style="display:inline-block">
				    	<input type="text" class="form-control" value=" "> <!--remplir value via php-->
				    </div>
				  </div>
				</div>
				 
				</br> </br>
				<hr>
				
				<h3> Thème </h3>
				
				</br>
				
				<div class="btn-group btn-group-toggle col-lg-12" data-toggle="buttons" id="choixTheme">
				  <label class="btn btn-default active">
					<input type="radio" name="options" id="theme1" autocomplete="off" checked> Côté clair de la force
				  </label>
				  <label class="btn btn-secondary">
					<input type="radio" name="options" id="theme2" autocomplete="off"> Côté obscur de la force 
				  </label>
				</div>
				
				</br>
				
				<hr>
				
				</br> </br>
				
				<a href="#" class=" pull-right btn btn-sm btn-info"><span class="glyphicon glyphicon-chevron-right"></span> Valider mes changements</a>
				
				</br> </br>
				
			  </div>
			</div>
		  </div>
		</div>
	</div>
	
	
	
	
	
