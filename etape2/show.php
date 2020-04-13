<?php
$bdd =new PDO('mysql:host=localhost;dbname=heathyyou;charest=utf8','root','');

if(isset($_POST['lien'])&& !empty($_POST['lien'])){
			$lien = htmlspecialchars($_POST['lien']);
		$requete = $bdd->query('SELECT * FROM platboisson WHERE nomPlat LIKE "%'.$lien.'%" ORDER BY idP ');
	while ($resultat = $requete->fetch()){
	echo  $resultat['nomPlat']. "<br/>";
	}
	
}



?>