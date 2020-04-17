<?php
if(!isset($_SESSION)){
	session_start();
}
include("bdConnect.php");
$bdd =getBd();

if(isset($_POST['lien'])&& !empty($_POST['lien'])){
			$lien = htmlspecialchars($_POST['lien']);
		$requete = $bdd->query('SELECT * FROM platboisson WHERE nomPlat LIKE "%'.$lien.'%" ORDER BY idP ');
	while ($resultat = $requete->fetch()){
	echo  $resultat['nomPlat']."_____";
	echo $resultat['Energie']."cal      ";
	
		?><a href="panier.php?action=ajout&amp;l=<?php echo  $resultat['nomPlat'];?>&amp;q=1&amp;glu=<?php echo  $resultat['Glucides'];?>&amp;li=<?php echo  $resultat['Lipides'];?>&amp;pro=<?php echo  $resultat['Proteines'];?>&amp;id=<?php echo  $resultat['idP'];?>&amp;p=<?php echo $resultat['Energie']; ?>">______Ajouter </br></a><?php
	}

	
}



?>