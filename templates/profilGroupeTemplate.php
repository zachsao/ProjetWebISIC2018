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
				<a href="?controller=<?php echo $controller ?>" class="col-12"><button type="button" class="btn btn-info">Mon Profil</button></a>
				<a href="?controller=<?php echo $controller ?>&action=profilTrajet" class="col-12"><button type="button" class="btn btn-info">Mes Trajets</button></a>
				<a href="?controller=<?php echo $controller ?>&action=profilGroupe" class="col-12"><button type="button" class="btn btn-info active">Mes Groupes</button></a>
				<a href="?controller=<?php echo $controller ?>&action=profilVehicule" class="col-12"><button type="button" class="btn btn-info">Mon Véhicule</button></a>
				<a href="?controller=<?php echo $controller ?>&action=profilParametre" class="col-12"><button type="button" class="btn btn-info">Paramètres</button></a>
				
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

	
		
	
	
