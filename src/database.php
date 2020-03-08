<?php


	$bdd = new PDO('mysql:localhost;dbname=test;charset=utf8','root','root');
	$req = $bdd->query('');

	$ligne = $req->fetch();

	while($ligne = $req->fetch()){
		
	}

	$req->closeCursor();



?>