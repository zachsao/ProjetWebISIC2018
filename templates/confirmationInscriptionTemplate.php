<!--Confirmation d'insciption à un trajet-->

<?php									//Recupération des informations du trajet dans la variable trajet
	$idTrajet = $_GET['idTrajet'];
	$trajet = Trajet::getTrajet($idTrajet);
	$controller = Request::getCurrentRequest()->getControllerName();
?>

<div class="container col-12" id="confirmationTrajet">
	<br><br>
	<div class="card bg-light w-50">
	  <div class="card-body">
		<h3 class="card-title"><span class="glyphicon glyphicon-ok-circle"></span>Confirmation de votre trajet</h3>
		<div class="card-text">
			<div class="row col-12">
				<p>Félicitations ! Vous êtes inscrit au trajet :)</br>Récapitulatif de votre trajet </p>
			</div>
			<div class="row offset-1 col-11">
				<ul class="list-unstyled">
					<li>Date de départ : <?php echo $trajet[0][2] ?> </li>
					<li>Lieu de départ :  <?php echo $trajet[0][1] ?> </li>
					<li>Lieu d'arrivée :  <?php echo $trajet[0][0] ?> </li>
				</ul>
			</div>	
		</div>
		<a href="?controller=<?php echo $controller; ?>&action=accueil" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Retour à l'accueil</a>
		<a href="?controller=<?php echo $controller; ?>&action=profilTrajet" class="btn btn-success pull-right"><span class="glyphicon glyphicon-road"></span> Voir mes trajets</a>
	  </div>
	</div>
</div>
	


