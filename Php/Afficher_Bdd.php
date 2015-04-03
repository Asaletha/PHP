
<!-- Récuperer les contenus dans une base de donnée -->

<?php 
	$affichage = $bdd->query('SELECT * FROM Membre');
	/* 
		On déclare la variable affichage puis on lui transmet les commande SQL
		SELECT * veut dire que l'on prend tous les champs d'une table
		FROM Membre est la Table de la base ou l'on récupére les champs
	*/
	// Il y a plusieurs façons de récuperer les contenus avec le SQL
	// Voici plusieurs façon :
	$affichage = $bdd->query('SELECT Nom FROM Membre'); // Ici, on Recupére le champ Nom
	$affichage = $bdd->query('SELECT Nom, Password FROM Membre'); // Ici, on Recupére le champ Nom et Password
	$affichage = $bdd->query('SELECT Nom FROM Membre WHERE Users ="Alexandre'); // Ici, on Recupére que le champ Nom avec Alexandre dedans.
	$affichage = $bdd->query('SELECT * FROM Membre LIMIT 0, 10' ); // Ici, on récupére les 20 derniers entrées de la Table Membre
	$affichage = $bdd->query('SELECT Nom FROM Membre ORDER BY Age DESC ' );// Ici, on Affiche les Noms par ordre décroissant d'Age.
	// Ceci est une petite liste de ce que l'on peut faire avec le SQL.

	//On peut également effectuer une requête préparée, Voici des exemples:
	$affichage = $bdd->prepare('SELECT Nom FROM Membre WHERE Age = :Age');
	$affichage->execute(array('Age' => $_GET['Age']));
	/*
		Ici on veut rechercher un age dans la Table. On remplace donc la valeur de Age par :
		La deuxième ligne récupére l'age à partir d'un Formulaire.
	*/

?>

<!-- On affiche les données à l'aide d'une boucle -->
<?php
	while ($donnees = $affichage->fetch())
	{
		echo $donnees['nom'];
	}
	/*
		$donnees est un array qui contient champ par champ les valeurs de la première entrée
		Chaque fois que vous appelez $reponse->fetch(), vous passez à l'entrée suivante.
		Echo permet d'afficher une valeur
		$donnees['nom'] est le nom du Champ de la table Membre
	*/
 ?>

 <!-- Maintenant c'est à vous de completer le Code ci-dessous -->
 <!-- Attention il manque des éléments, un copier-coller ne marche pas -->

 <?php
 	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
 	<?php 
	$affichage = $bdd->query('Le Code SQL');
	while ($donnees = $affichage->fetch())
	{
		echo //Le nom du Champ de votre table à afficher;
	}
?>