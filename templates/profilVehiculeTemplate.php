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
				<a href="?controller=<?php echo $controller ?>&action=profilGroupe" class="col-12"><button type="button" class="btn btn-info">Mes Groupes</button></a>
				<a href="?controller=<?php echo $controller ?>&action=profilVehicule" class="col-12"><button type="button" class="btn btn-info active">Mon Véhicule</button></a>
				<a href="?controller=<?php echo $controller ?>&action=profilParametre" class="col-12"><button type="button" class="btn btn-info">Paramètres</button></a>
			</div>
		  </div>
		  
		  
		  
		  <div class="col-9">
			<div class="tab-content" id="nav-tabContent">
			
			  
			  <!--Mon véhicule-->
				
				<form class="form-horizontal col-lg-12"  action="?controller=<?php echo $controller ?>&action=changerInfoVehicule" method="POST"> 
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Modèle : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="modele" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Couleur du véhicule : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="couleur" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Kilométrage : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="km" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Nombre de places : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="nbPlaces" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Nom de votre bolide : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="nomBolide" placeHolder="maCaisse"value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div id="imgVoiture">
					<img src="img/logoVoiture.png">			<!--remplir value via php et prendre logoVoiture.png par défault-->
				    </br></br>
					<a href="#" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-chevron-right"></span> Changer l'image</a>
				  </div>
				  
				  </br></br>
				  <input class="pull-right btn btn-default btn-info" type="submit" value="Valider mes changements" disabled />
				 
			  </div>
			  
			  </div>
			</div>
		  </div>
		</div>
		
		</br></br>
	
		
	
	
