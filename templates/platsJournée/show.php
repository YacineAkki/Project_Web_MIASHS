<?php
if(!isset($_SESSION)){
	session_start();
}
include("bdConnect.php");
$bdd =getBd();
/* si le lien n'est pas vide : requette de ce lien(plat) pour afficher le nom les calories  : */
if(isset($_POST['lien'])&& !empty($_POST['lien'])){
			$lien = htmlspecialchars($_POST['lien']);
		$requete = $bdd->query('SELECT * FROM platboisson WHERE nomPlat LIKE "%'.$lien.'%" ORDER BY idP ');
	while ($resultat = $requete->fetch()){
		echo  $resultat['nomPlat']."&nbsp; &nbsp; &nbsp;";
		echo $resultat['Energie']."cal     &nbsp; &nbsp; &nbsp; ";
	/* propose à l'utilisateur d'ajouter le plat de la requette effectué */
	/* transfert sur la page panier de toutes les données sur le plat dont on a besoins : */
		?><a href="panier.php?action=ajout&amp;l=<?php echo  $resultat['nomPlat'];?>&amp;q=1&amp;glu=<?php echo  $resultat['Glucides'];?>&amp;li=<?php echo  $resultat['Lipides'];?>&amp;pro=<?php echo  $resultat['Proteines'];?>&amp;id=<?php echo  $resultat['idP'];?>&amp;p=<?php echo $resultat['Energie']; ?>">Ajouter </br></a><?php
	}

	
}



?>