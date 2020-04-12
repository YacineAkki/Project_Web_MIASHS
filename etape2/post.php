<?php
$bdd =new PDO('mysql:host=localhost;dbname=heathyyou;charest=utf8','root','');
	
	if(isset($_POST['search'])&& !empty($_POST['search'])){
		$plat = htmlspecialchars($_POST['search']);
		$requete = $bdd->query('SELECT * FROM platboisson WHERE nomPlat LIKE "%'.$plat.'%" ORDER BY idP ');
	while ($resultat = $requete->fetch()){
	echo "<li><a href='#'>".$resultat['nomPlat']."</a></li><br/>";
	}
	
	}
?>
