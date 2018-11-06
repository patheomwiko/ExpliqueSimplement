<?php
	$bdd = new PDO('mysql:host=localhost;dbname=form','root','');
	$reponse = $bdd -> query('SELECT pseudo, password FROM form');

	while ($donnees = $reponse->fetch()) {

		if($donnees['pseudo'] == $_POST['email'] && $donnees ['password']== $_POST['password']){
			echo $donnees['pseudo'].'vous etes bien sur votre compte';
		}
		else{
			echo "votre compte est introuvable ";
		}
	}

?>