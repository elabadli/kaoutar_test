<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
	<h1>Ajouter un contact</h1>
		<form action="insertion.php" method="post">

  			<div class="form-group">
   				<label for="exampleInputNom1">Nom</label>
    			<input type="nom" class="form-control" id="exampleInputNom1" name="lastName" placeholder="Enter nom">
  			</div>

  			<div class="form-group">
   				<label for="exampleInputPrenom1">Prenom</label>
    			<input type="prenom" class="form-control" id="exampleInputPrenom1" name="firstName" placeholder="Entrer Prenom">
  			</div>

  			<div class="form-group">
   				<label for="exampleInputTel1">Tel</label>
    			<input type="text" class="form-control" id="exampleInputTel1" name="phone" placeholder="Enter telephone">
  			</div>

  			<div class="form-group">
   				<label for="exampleInputMel">Adresse electronique</label>
    			<input type="email" class="form-control" id="exampleInputMel" name="mail" placeholder="Entrer mail">
  			</div>

  				<button type="submit" class="btn btn-primary">Enregistrer</button>
		</form>
</body>