
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
				<?php if(isset($_GET['trips'])){
						foreach($_GET['trips'] as $trip){ ?>
					<div class="row">
						<div class="col-lg-3 trajetConducteur">
							<p><strong>Conducteur</strong></p>
							<img src="img/logoProfil.png">
						</div>
						<div class="col-lg-6 trajetCaracteristiques">
							<p><strong>Date</strong> : <?php  echo $trip['HORAIREDEPART'];?></p>
							<p><strong>Trajet de :</strong> <?php  echo $trip['LIEUDEPART'];?> - <?php echo $trip['LIEUARRIVEE'];?></p>
							<a href="#" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Se désinscrire</a>
						</div>
						<div class="col-lg-3">
							<p><strong>Nombre de place restantes :</strong> </p>
							<p class="trajetNombrePlaceRestante"> 2 </p>
						</div>
					</div>
					
				<?php 	}//fin du foreach
				}else { ?>
					<h1>Vous n'avez effectué aucun trajet pour le moment</h1>
				<?php } ?>
					
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

	
		
	
	
