  
  <!-- Dans le top : mettre un bouton, proposer un trajet -->
	<div class="container">	
		</br>
		<form class="form-horizontal col-lg-12" action="?controller=user&action=creerTrajet" method="POST"> <!--après validation, retour à Mon profil-->
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">D'où partez vous ? </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="modele" value=" "> <!--remplir avec trajet préféré ou sinon vide-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Où allez vous ? </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="modele" value=" "> <!--remplir avec trajet préféré ou sinon vide-->
					  </div>
					</div>
				  </div>
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">A quelle heure partez vous ? </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="modele" value=" ">
					  </div>
					</div>
				  </div>
				  
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Modèle : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="modele" value=" "> <!--remplir value via php-->
					  </div>
					</div>
				  </div>
				  
				  <div id="imgVoiture">
					<img src="img/logoVoiture.png">			<!--remplir value via php et prendre logoVoiture.png par défault-->
				    </br></br>
					<a href="#" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-chevron-right"></span> Changer l'image</a>
				  </div>
				  
				  </br>
				  
				  <div class="row"> 
					<div class="form-group col-lg-12">
					  <label for="text" class="col-lg-4 control-label">Nombre de place proposé : </label>
					  <div class="col-lg-7" style="display:inline-block">
						<input type="text" class="form-control" name="modele" value=" ">
					  </div>
					</div>
				  </div>
				  
				</br></br>
				<div id="creerTrajetBouton">
					<input class="btn btn-default btn-success" type="submit" value="Proposer ce trajet" />
				</div>
				 </br></br>
				 
			  </div>
	
	</div>