<div class="container col-12" id="confirmationTrajet">
	<br><br>
	<div class="card bg-light w-50">
	  <div class="card-body">
		<h3 class="card-title"><span class="glyphicon glyphicon-ok-circle"></span>Confirmation de votre trajet</h3>
		<div class="card-text">
			<div class="row col-12">
				<p>Merci ! Grâce à vous des élèves n'iront pas en cours à pieds :)</br>Récapitulatif de votre trajet </p>
			</div>
			<?php if(isset($_POST)){ ?>
			<div class="row offset-1 col-11">
				<ul class="list-unstyled">
					<li>Date de départ : <?php echo $_POST['inscDate']." à ". $_POST['inscTime']; ?> </li>
					<li>Lieu de départ : <?php echo $_POST['inscDepart']; ?> </li>
					<li>Lieu d'arrivée : <?php echo $_POST['inscArrivee']; ?> </li>
					<li>Nombre de places : <?php echo $_POST['inscPlaces']; ?> </li>
				</ul>
			</div>	
			<?php } ?>
		</div>
		<a href="?controller=user&action=accueil" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour à l'accueil</a>
		<a href="?controller=user&action=profilTrajet" class="btn btn-success pull-right"><span class="glyphicon glyphicon-road"></span> Voir mes trajets</a>
	  </div>
	</div>
</div>
	


