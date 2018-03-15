
	<style>
		
		h1{
			color:DarkBlue;
			text-align:center;
		}
		
		h2{
			color:White;
			text-align:center;
		}
		
		label{
			color : rgb(40,40,40);
			font-size:20px;
			font-weight:bold;
		}

		#pageConnexion{
			background-image:url(img/connexionWallpaper.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			min-height:100%;
		}
		
		footer{
			clear:both;
		}
		
		.container{
			margin:0px;
			max-width:3000px;
		}
		
		input{
			width:120px;
			margin:auto;
			background-color: rgba(20,20,100,0.8);
			border : 1px rgba(50,50,130,0.8);
			border-radius:5%;
			
			
			text-align:center;
			color:white;
			font-size:1.2em;
		}
		
		.form-group.requiredField .control-label:after { 
			content:"*";
			color:red;
		}
		
	</style>
	

    <!-- Masthead -->
    <div id="pageConnexion" class="col-md-12">
      
	  <div class="container">
		</br>
	  
		<div class="col-md-6 " style="display:inline-block">
			
			
			<div class="row">
				</br>
				<div class="col-md-12 "> <h1>Inscription</h1> </div>
			</div>
			</br></br></br>
			
			<form action="index.php?action=validateInscription" class="form-horizontal col-md-12 " method="POST">
				
				<div class="row">
					<div class="form-group requiredField col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Login : </label>
						<div class="col-md-8" style="display:inline-block">
							<input type="text" class="form-control" placeholder="Darkou" name="inscLogin" required>
							<?php if(isset($inscErrorText)) echo '<span class="error">' . $inscErrorText . '</span>';?>
						</div>
					</div>
                </div>
				
				<div class="row">
					<div class="form-group requiredField col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Mot de passe :</label>
						<div class="col-md-8" style="display:inline-block">
							<input type="password" class="form-control" placeholder="JeSuisTonPere (au moins 8 caractères)..." name="inscPassword" required>
							<?php if(isset($inscErrorPwd)) echo '<span class="error">' . $inscErrorPwd . '</span>';?>
						</div>
					</div>
                </div>
				
				<div class="row">
					<div class="form-group requiredField col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Confirmer le mot de passe :</label>
						<div class="col-md-8" style="display:inline-block">
							<input type="password" class="form-control" placeholder="Entrer de nouveau votre mot de passe..." name="confirmPwd" required>
							
						</div>
					</div>
                </div>
				
				<div class="row">
					<div class="form-group requiredField col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Mail : </label>
						<div class="col-md-8" style="display:inline-block">
							<input type="text" class="form-control" placeholder="dark-vador@imt-lille-douai.fr" name="mail" required>
						</div>
					</div>
                </div>
				
				<div class="row">
					<div class="form- requiredField col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Nom :</label>
						<div class="col-md-8" style="display:inline-block">
							<input type="text" class="form-control" placeholder="Vador" name="nom" required>
						</div>
					</div>
                </div>
				
				<div class="row">
					<div class="form-group col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Prénom :</label>
						<div class="col-md-8" style="display:inline-block">
							<input type="text" class="form-control" placeholder="Dark" name="prenom" required>
						</div>
					</div>
                </div>
				
				
				<h2> Pour les élèves : </h2>
				
				<div class="row">
					<div class="form-group col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Promo :</label>
						<div class="col-md-8" style="display:inline-block">
							<input type="text" class="form-control" placeholder="Entrer votre année de promotion..." name="promo">
						</div>
					</div>
                </div>
				
				<h2> Pour les agents : </h2>
				
				<div class="row">
					<div class="form-group col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Service : </label>
						<div class="col-md-8" style="display:inline-block">
							<input type="text" class="form-control" placeholder="Entrer le service auquel vous appartenez..." name='service'>
						</div>
					</div>
                </div>
				
				<input type="submit" value="Inscription" />
				<!--<a href="#" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-check"></span> S'incrire</a>
				 https://bootsnipp.com/buttons -->
				
            </form>
			
		</div>
		                  
		<div class="col-md-5" style="display:inline-block; vertical-align:top;">
			<div class="row">
				</br>
				<div class="col-md-12"> <h1>Déja inscrit ?</h1> </div>
			</div>
			</br></br></br></br></br></br>
			
			<form action="index.php?action=validateConnexion" class="form-horizontal col-md-12 " method="POST">
				<div class="row">
					<div class="form-group requiredField col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Login : </label>
						<div class="col-md-8" style="display:inline-block">
							<input type="text" class="form-control" placeholder="Entrer votre login..." name="inscLogin" required>
							<?php if(isset($connErrorText)) echo '<span class="error">' . $connErrorText . '</span>';?>
						</div>
					</div>
                </div>
				
				<div class="row">
					<div class="form-group requiredField col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Mot de passe :</label>
						<div class="col-md-8" style="display:inline-block">
							<input type="password" class="form-control" placeholder="Entrer votre mot de passe..." name="inscPassword" required>
						</div>
					</div>
                </div>	
				<input type="submit" value="Connexion" />
				<!--<a href="#" class="pull-right btn btn-lg btn-primary"><span class="glyphicon glyphicon-circle-arrow-right"></span> Se connecter</a>-->
            </form>
		</div>
		</br></br></br>
	</div>
</div>