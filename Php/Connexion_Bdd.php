<!-- Connexion dans une base de donnée -->
<?php
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
?>
<!-- On déclare dans un premier temps la variable $bdd puis on lui transmet les valeurs de la connexion
	Nom de l'hôte			=> Localhost
	Nom Base De Donnée 		=> test
	Identifiant PhpMyAdmin  => root
	Mdp PhpMyAdmin			=> 
-->
