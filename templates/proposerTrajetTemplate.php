<div class="row">
				</br>
				<div class="offset-2 col-md-8 "> <h1>Proposez un trajet</h1> </div>
			</div>
			</br></br></br>
			
			<form action="index.php?action=validateInscription" class="form-horizontal col-md-12 " method="POST">
				
				<div class="row">
					<div class="form-group requiredField col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Départ : </label>
						<div class="col-md-8" style="display:inline-block">
							<input type="text" class="form-control" placeholder="Meud" name="inscDepart" required>
						</div>
					</div>
                </div>
				
				<div class="row">
					<div class="form-group requiredField col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Arrivée :</label>
						<div class="col-md-8" style="display:inline-block">
							<input type="text" class="form-control" placeholder="Lahure" name="inscArrivee" required>
						</div>
					</div>
                </div>
				
				<div class="row">
					<div class="form-group requiredField col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Date :</label>
						<div class="col-md-8" style="display:inline-block">
							<input type="date" class="form-control" placeholder="choisissez une date" name="inscDate" required>
							
						</div>
					</div>
                </div>
				
				<div class="row">
					<div class="form-group requiredField col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Heure : </label>
						<div class="col-md-8" style="display:inline-block">
							<input type="time" class="form-control" placeholder="17h15" name="inscTime" required>
						</div>
					</div>
                </div>
				
				<div class="row">
					<div class="form- requiredField col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Nombre de place :</label>
						<div class="col-md-8" style="display:inline-block">
							<input type="number" class="form-control" placeholder="Combien de personnes voussa emmener ?" name="inscPlaces" required>
						</div>
					</div>
                </div>
				
				<div class="row">
					<div class="form-group col-md-12 ">
						<label for="text" class="col-md-3 control-label" style="display:inline-block">Commentaire :</label>
						<div class="col-md-8" style="display:inline-block">
							<input type="textdomain" class="form-control" placeholder="Ajoutez des précisions concernant le trajet (ponctualité...)" name="inscComment" >
						</div>
					</div>
                </div>
				
				</br></br>
				<input class="btn btn-primary" type="submit" value="Valider" />
				
            </form>
			
		</div>