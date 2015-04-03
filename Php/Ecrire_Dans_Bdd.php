<!-- Ecrire da?ns la base de donnée -->
<?php
	// On ajoute une entrée dans la table jeux_video
	$bdd->exec('INSERT INTO membre(nom, prenom, password) VALUES(\'Drouet\', \'Celine\', \'12345\')');
	//On indique que l'on veut inserer dans la base de donnée avec le code SQL (INSERT INTO)
	//Membre est la table dans lequel on souhaite ajouter un utilisateur
	//On indique les valeurs à ajouter grâce à VALUES

	// Insertion de données grâce à une requête préparée (Que l'utisiteur rentrera dans le formulaire)
	$req = $bdd->prepare('INSERT INTO membre(nom, prenom, password) VALUES(:nom, :prenom, :password)');
	$req->execute(array(
		'nom' => $_POST["Nom"],
		'prenom' => $_POST["Prenom"],
		'password' => sha1($_POST["password"]);
		));
	//On déclare la variable $req, puis on lui transmet le code SQL
	//Puis la variable $req va être executé.
	//'nom' est le champ de la table membre/ => $_POST["Nom"]

	//On peut également déclarer des variables et mettre les valeurs du formulaire dedans
	$nom = $_POST["Nom"];
	$prenom = $_POST["Prenom"];
	$password = sha1($_POST["password"]);
	// Du coup, on pourrait inserer comme sa : 
	$req = $bdd->prepare('INSERT INTO membre(nom, prenom, password) VALUES(:nom, :prenom, :password)');
	$req->execute(array(
		'nom' => $nom,
		'prenom' => $prenom,
		'password' => $password;
		));
	//Celà evite de répéter la formule $_POST[''] à chaque fois.
	//Le sha1 sert à crypter le Password

	//Vous pouvez raccourcir en plus en ajoutant des variable exemple : 
	$sql = 'INSERT INTO membre(nom, prenom, password) VALUES(:nom, :prenom, :password)';
	$req = $bdd->prepare($sql)
	//Ici, on enregistre la requete SQL dans une variable.
	// Ensuite on mets la variable $sql entre parenthèse. Sa appellera le SQL.

?>