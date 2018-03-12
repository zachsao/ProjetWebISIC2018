

    

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Bonjour <?php if(isset($_GET['user'])) echo $_GET['user'];
			else echo Request::getCurrentRequest()->getControllerName(); ?></h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
			<form>
				<div class="form-row">
					<form>
						<div class="form-column">
							<div class="form-column">
								<div class="col-12 col-md-3">
								  <p>Départ</p>
								</div>
								<div class="col-12 col-md-9 mb-2 mb-md-0">
								  <input type="email" class="form-control form-control-lg" placeholder="d'où partez vous ?">
								</div>
							</div>
							<div class="form-column">
								<div class="col-12 col-md-3">
								  <p>Arrivée</p>
								</div>
								<div class="col-12 col-md-9 mb-2 mb-md-0">
								  <input type="email" class="form-control form-control-lg" placeholder="où allez vous ?">
								</div>
								
							</div>
						</div>
						
					</form>
					<form>
						<div class="form-column">
							<div class="col-12 col-md-3">
							  <p>Date</p>
							</div>
							<div class="col-12 col-md-9 mb-2 mb-md-0">
							  <input type="datetime" class="form-control form-control-lg" placeholder="Quand ?">
							</div>
						</div>
					</form>
				</div>
				
			</form>
          </div>
        </div>
      </div>
    </header>