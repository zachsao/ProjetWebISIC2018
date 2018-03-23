<!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">CarCar Binks</a>
        <a class="btn btn-primary" href=<?php if(isset ($_GET['controller'])) echo "index.php?action=deconnexion";
		else echo "index.php?action=connexion" ?>><?php if(isset($_GET['controller'])) echo "Deconnexion";
		else echo "Connexion" ?></a>
		<a class="btn btn-secondary" href="index.php?action=showProfile">Mon Compte</a>
      </div>
    </nav>