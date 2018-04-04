<!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href=<?php if(session_status()==2) echo "index.php?controller=user";
		else echo "index.php" ?>>CarCar Binks</a>
        <a class="btn btn-primary" href="index.php?action=connexion">Connexion</a>
      </div>
    </nav>