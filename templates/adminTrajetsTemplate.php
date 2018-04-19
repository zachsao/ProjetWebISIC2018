<!--Image de fond de la page trajet-->
	<div id="wallPaperTrajet"></div>
	
	<div class="container col-11">
		</br>
		<div class="row">
		<!---------------Filtre--------------------->
		  <div class="col-lg-3" id="filtreTrajet">
			<form class="form-horizontal">
				<fieldset>

				<!-- Legende du formulaire -->
				<legend>Filtres</legend>

				<!-- Champs du formulaire-->
				<div class="form-group">
				  <label class="col-md-10 control-label" for="filtreDepart ">Départ :</label>  
				  <div class="col-md-10">
				  <input id="filtreDepart " name="filtreDepart" type="text" placeholder="Entrez une adresse de départ" class="form-control input-md" required="">
					
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-10 control-label" for="filtreArrivee">Arrivée :</label>  
				  <div class="col-md-10">
				  <input id="filtreArrivee" name="filtreArrivee" type="text" placeholder="Entrez une adresse d'arrivée" class="form-control input-md" required="">
					
				  </div>
				</div>

				<div class="form-group">
				  <label class="col-md-10 control-label" for="filtreDate">Date :</label>  
				  <div class="col-md-10">
				  <input id="filtreDate" name="filtreDate" type="text" placeholder="Entrez une date de départ" class="form-control input-md" required="">
					
				  </div>
				</div>

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
				<!-- Ces jours devaient permettre de naviguer de jours en jours et de se mettre à jour en fonction du filtre appliqué. Par manque de temps, nous n'avons pas développé ces fonctionnalités -->
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
							echo date("d", mktime(0, 0, 0, date("m")  , date("d")-2, date("Y")));				//avant-hier
						?>
						</li>
						<li class="nav-item col-md-2">
						<?php
							date_default_timezone_set('Europe/Paris');
							setlocale(LC_TIME, 'fr_FR.utf8','fra');
							
							$date = date("l", mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")));
							echo strftime("%A", strtotime($date));
							
							echo "<br>";
							echo date("d", mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")));				//hier
						?>
						</li>
						<li class="nav-item col-md-2 active"> 
						<?php
							date_default_timezone_set('Europe/Paris');		
							setlocale(LC_TIME, 'fr_FR.utf8','fra');
							
							$date = date("l", mktime(0, 0, 0, date("m")  , date("d"), date("Y")));
							echo strftime("%A", strtotime($date));
							
							echo "<br>";
							echo date("d");																		//aujourd'hui
						?>
						</li>
						<li class="nav-item col-md-2">
						<?php
							date_default_timezone_set('Europe/Paris');
							setlocale(LC_TIME, 'fr_FR.utf8','fra');
							
							$date = date("l", mktime(0, 0, 0, date("m")  , date("d")+1, date("Y")));
							echo strftime("%A", strtotime($date));
							
							echo "<br>";
							echo date("d", mktime(0, 0, 0, date("m")  , date("d")+1, date("Y")));				//demain
						?>
						</li>
						<li class="nav-item col-md-2"> 
						<?php
							date_default_timezone_set('Europe/Paris');
							setlocale(LC_TIME, 'fr_FR.utf8','fra');
							
							$date = date("l", mktime(0, 0, 0, date("m")  , date("d")+2, date("Y")));
							echo strftime("%A", strtotime($date));
							
							echo "<br>";
							echo date("d", mktime(0, 0, 0, date("m")  , date("d")+2, date("Y")));				//après-demain
						?></li>
					  </ul>
					</div>
				</div>

				
				<!---------------Les  trajets -------------------->
				<?php 	foreach($_GET['trips'] as $trip){ ?>
					<div id="contentTrajets">
						<div class="row">
							<div class="col-lg-3 trajetConducteur">
								<p><strong>Conducteur</strong> :</p>
								<img src="img/logoProfil.png">
							</div>
							<div class="col-lg-6 trajetCaracteristiques">
								<p><strong>Date</strong> : <?php  echo $trip['HORAIREDEPART'];?></p>
								<p><strong>Trajet : </strong> <?php  echo $trip['LIEUDEPART'];?> - <?php echo $trip['LIEUARRIVEE'];?></p>
								<?php if($trip['NOMBRE_PLACES']>0){ ?>
									<a href="?controller=user&action=confirmerTrajet&idTrajet= <?php echo $trip['CODETRAJET'];?>" class="btn btn-primary btn-success"> S'inscrire à ce trajet</a>
								<?php }else{ ?>
									<a class="btn btn-primary btn-success" disabled> Trajet complet</a>
								<?php } ?>
								
							</div>
							<div class="col-lg-3">
								<p><strong>Nombre de place restantes :</strong> </p>
								<p class="trajetNombrePlaceRestante"> <?php echo $trip['NOMBRE_PLACES'];?> </p>
							</div>
						</div>
					</div>
				<?php 	} //fin du foreach ?>
				
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
	