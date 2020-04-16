<?php
include("bdConnect.php");
$bdd =getBd();
	
	if(isset($_POST['search'])&& !empty($_POST['search'])){
		$plat = htmlspecialchars($_POST['search']);
		$requete = $bdd->query('SELECT * FROM platboisson WHERE nomPlat LIKE "%'.$plat.'%" ORDER BY idP ');
	while ($resultat = $requete->fetch()){
	echo "<li id='malist'><a href='#'>".$resultat['nomPlat']."</a></li><br/>";
	}
	
	}
?>
