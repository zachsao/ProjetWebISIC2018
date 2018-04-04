<!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Bienvenue sur CarCar Binks ! <br>Voussa aller quelque part ?</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
			<a class="btn btn-primary" href=<?php if(isset($_GET['controller'])) echo "?controller=user&action=voirTrajets";
													else echo "?action=voirTrajets";?>>Chercher un trajet</a>
          </div>
        </div>
      </div>
    </header>