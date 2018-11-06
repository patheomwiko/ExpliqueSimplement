<?php
	
	$bdd = new PDO('mysql:host=localhost;dbname=form','root','');
	$requete = $bdd->prepare('INSERT INTO form(pseudo,password,email,sexe) VALUES(?,?,?,?)');
	$requete->execute(array($_POST['pseudo'], $_POST['password'], $_POST['email'], $_POST['sexe']));

?>