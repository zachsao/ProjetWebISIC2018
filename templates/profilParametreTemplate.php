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
				<a href="?controller=<?php echo $controller ?>&action=profilVehicule" class="col-12"><button type="button" class="btn btn-info">Mon Véhicule</button></a>
				<a href="?controller=<?php echo $controller ?>&action=profilParametre" class="col-12"><button type="button" class="btn btn-info active">Paramètres</button></a>

			</div>
		  </div>
		  
		  
		  
		  <div class="col-9">
			<div class="tab-content" id="nav-tabContent">
			
			  <!--Paramètres-->
				
				<h3> Mon trajet favori </h3>
				<div class="row">
				
				  <div class="form-group col-lg-12" action="#" method="POST">
				  
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
				
				<input class="pull-right btn btn-sm btn-info" type="submit" value="Valider mes changements" />
				
				</br> </br>
				
			</div>
		  </div>
		</div>
	</div>
	
	</br></br>
	
		
	
	
