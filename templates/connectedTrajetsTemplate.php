<!--Image de fond de la page trajet-->
	<div id="wallPaperTrajet"></div>
	
	
	<div class="container col-11">
		</br>
		<div class="row">
		
		
		
		<!---------------Filtre--------------------->
		  <div class="col-lg-3" id="filtreTrajet">
			<form class="form-horizontal">
				<fieldset>

				<!-- Form Name -->
				<legend>Filtres</legend>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-10 control-label" for="filtreDepart ">Départ :</label>  
				  <div class="col-md-10">
				  <input id="filtreDepart " name="filtreDepart " type="text" placeholder="Entrez une adresse de départ" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-10 control-label" for="filtreArrivee">Arrivée :</label>  
				  <div class="col-md-10">
				  <input id="filtreArrivee" name="filtreArrivee" type="text" placeholder="Entrez une adresse d'arrivée" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-10 control-label" for="filtreDate">Date :</label>  
				  <div class="col-md-10">
				  <input id="filtreDate" name="filtreDate" type="text" placeholder="Entrez une date de départ" class="form-control input-md" required="">
					
				  </div>
				</div>

				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-10 control-label" for="filtreConducteur">Conducteur</label>  
				  <div class="col-md-10">
				  <input id="filtreConducteur" name="filtreConducteur" type="text" placeholder="Choisissez votre pilote" class="form-control input-md">
					
				  </div>
				</div>
				
				</br>
				<a href="#" class="btn btn-block btn-primary btn-info"> Filtrer</a>
				</br>
				</fieldset>
			</form>
		  </div>
		  
		  
		  <!---------------Les trajets--------------------->
		  <div class="col-md-8" >
		  
				<!---------------Les jours au dessus des trajets -------------------->
				<div class="row">
					<div class="navbar navbar-default col-md-10" id="navJoursTrajets">
					  <ul class="nav justify-content-center col-md-12">
						<li class="nav-item col-md-2">
						<?php
							date_default_timezone_set('Europe/Paris');
							setlocale(LC_TIME, 'fr_FR.utf8','fra');
							
							$date = date("l", mktime(0, 0, 0, date("m")  , date("d")-2, date("Y")));
							echo strftime("%A", strtotime($date));
							
							echo "<br>";
							echo date("d", mktime(0, 0, 0, date("m")  , date("d")-2, date("Y")));
						?>
						</li>
						<li class="nav-item col-md-2">
						<?php
							date_default_timezone_set('Europe/Paris');
							setlocale(LC_TIME, 'fr_FR.utf8','fra');
							
							$date = date("l", mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")));
							echo strftime("%A", strtotime($date));
							
							echo "<br>";
							echo date("d", mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")));
						?>
						</li>
						<li class="nav-item col-md-2 active"> 
						<?php
						// Affichage demandée
							date_default_timezone_set('Europe/Paris');		
							setlocale(LC_TIME, 'fr_FR.utf8','fra');
							
							$date = date("l", mktime(0, 0, 0, date("m")  , date("d"), date("Y")));
							echo strftime("%A", strtotime($date));
							
							echo "<br>";
							echo date("d");
						?>
						</li>
						<li class="nav-item col-md-2">
						<?php
							date_default_timezone_set('Europe/Paris');
							setlocale(LC_TIME, 'fr_FR.utf8','fra');
							
							$date = date("l", mktime(0, 0, 0, date("m")  , date("d")+1, date("Y")));
							echo strftime("%A", strtotime($date));
							
							echo "<br>";
							echo date("d", mktime(0, 0, 0, date("m")  , date("d")+1, date("Y")));
						?>
						</li>
						<li class="nav-item col-md-2"> 
						<?php
							date_default_timezone_set('Europe/Paris');
							setlocale(LC_TIME, 'fr_FR.utf8','fra');
							
							$date = date("l", mktime(0, 0, 0, date("m")  , date("d")+2, date("Y")));
							echo strftime("%A", strtotime($date));
							
							echo "<br>";
							echo date("d", mktime(0, 0, 0, date("m")  , date("d")+2, date("Y")));
						?></li>
					  </ul>
					</div>
				</div>
				
				<!---------------Les  trajets -------------------->
				<div id="contentTrajets">
					<div class="row">
						<div class="col-lg-3 trajetConducteur">
							<p><strong>Conducteur</strong> : Nom et Prenom</p>
							<img src="img/logoProfil.png">
						</div>
						<div class="col-lg-6 trajetCaracteristiques">
							<p><strong>Date</strong> : 01.01.2018 à 15h</p>
							<p><strong>Trajet de :</strong> LieuDepart - Etape1 - Etape2 - LieuArrivé</p>
							<a href="?controller=user&action=confirmerTrajet" class="btn btn-primary btn-success"> S'inscrire à ce trajet</a>
							
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
							<a href="?controller=user&action=confirmerTrajet" class="btn btn-primary btn-success"> S'inscrire à ce trajet</a>
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
							<a href="?controller=user&action=confirmerTrajet" class="btn btn-primary btn-success"> S'inscrire à ce trajet</a>
						</div>
						<div class="col-lg-3">
							<p><strong>Nombre de place restantes :</strong> </p>
							<p class="trajetNombrePlaceRestante"> 1 </p>
						</div>
					</div>
				</div>
				<div class="row" id="pagination">
				  <ul class="pagination pagination-lg" >
					<li><a href="#">&laquo;</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">&raquo;</a></li>
				  </ul>
				</div>
			</div>
		
		</div>
	</div>
			

	
	