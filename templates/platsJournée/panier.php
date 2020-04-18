<?php
if(!isset($_SESSION)){
	session_start();
}

?>
<html>
	<head>
		<title>tous-les-plats </title>

<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
	           
	            <link rel="stylesheet" href="../../style/connexionRelated.css" type="text/css" media="screen"/>
                <link rel="stylesheet" href="../../style/model.css">
                <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="../../scripts/jquery-3.4.1.min.js"></script>
                <script src="../../scripts/app.js" type="text/javascript"></script>

		
	</head>
	
	<body>
	
	
		<header>
            <div class="logo-container">
                <a href="../../index.php"><img src="../../ressources/logo.png" alt="description" id="logo"></a>
            </div>
                <div class="container-menu-nav">
                    <nav class="top-menu-nav">
                        <ul class="top-menu">
                            <li><a href="../../index.php" class="link">Accueil <i class="fa fa-home" aria-hidden="true"></i></a></li>
							<li><a href="etape3.php" class="link">calorie<i class="fa fa-columns" aria-hidden="true"></i></a></li>
                            <li><a href="../test.php" class="link">Test <i class="fa fa-list" aria-hidden="true"></i></a></li>
                            <li><a href="../apropos.php" class="link">A propos <i class="fa fa-question-circle-o" aria-hidden="true"></i></a></li>
                            <li><a href="../contact.php" class="link">Contact <i class="fa fa-address-book-o" aria-hidden="true"></i></a></li>
							
                        <li id="nav-moncompte">
						<?php
            if(isset($_SESSION['user'])){

                
          echo'<a href= "../deconnexion.php" class="link"> Se déconnecter<i class="fa fa-user-circle-o" aria-hidden="true"></i></a> <br/>';
                
            }else{?>
			
			<li id="nav-moncompte"><a href="../Connexion.php" class="link">Mon Compte <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
			<?php 
			} 
    ?>
	</li>
	<li id="lang"><a><i class="fa fa-globe" aria-hidden="true"></i> FR <span id="eur">(EUR)</span></a></li>
	</ul>
                    </nav>
                <div class="toggle"><span></span></div>
            </div>
        </header>






<?php

include("foncPanier.php");
include("bdConnect.php");
$erreur=false;

$action=(isset($_POST['action'])?$_POST['action']:(isset($_GET['action'])?$_GET['action']:null));

if($action!==null){
	if(!in_array($action,array("ajout","suppression","refresh")))
	
	$erreur= true;
	
	$l=(isset($_POST['l'])?$_POST['l']:(isset($_GET['l'])?$_GET['l']:null));
	$q=(isset($_POST['q'])?$_POST['q']:(isset($_GET['q'])?$_GET['q']:null));
	$p=(isset($_POST['p'])?$_POST['p']:(isset($_GET['p'])?$_GET['p']:null));
	$id=(isset($_POST['id'])?$_POST['id']:(isset($_GET['id'])?$_GET['id']:null));
	$li=(isset($_POST['li'])?$_POST['li']:(isset($_GET['li'])?$_GET['li']:null));
	$glu=(isset($_POST['glu'])?$_POST['glu']:(isset($_GET['glu'])?$_GET['glu']:null));
	$pro=(isset($_POST['pro'])?$_POST['pro']:(isset($_GET['pro'])?$_GET['pro']:null));
	
	$l= preg_replace('#\v#','',$l);
	
	$p=floatval($p);
	
	if(is_array($q)){
		
		$quantPlat = array();
		
		$i=0;
		
		foreach($q as $contenu){
			
			$quantPlat[$i++]= intval($contenu);
		}
		
	}else{
		
		$q=intval($q);
	

	}
}

if(!$erreur){
	switch($action){
		case "ajout";
		
		ajouterPlat($l,$q,$p,$glu,$li,$pro,$id);
		
		break;
		
		case"suppression";
		
		supprimerPlat($l);
		
		break;
		
		case"refresh";
		
		for($i=0; $i<count($quantPlat);$i++){
			
			modifierQuantPlat($_SESSION['panier']['nomPlat'][$i],round($quantPlat[$i]));
		}
		
		break;
		
		Default;
		
		break;
		
	}
}


if(isset($_GET['deletepanier'])&& $_GET['deletepanier']==true){
	
	supprimerPanier();
}

if(creationPanier()){
	

$nbplats= count($_SESSION['panier']['nomPlat']);

if($nbplats <= 0){
	echo "Oups, Vous n'avez pas selectionné de plat. </br> Vous n'avez rien mangé aujourd'hui? ";
	?><p><a href="etape3.php">ajouter des plats </a> </p><?php
	
}else{
	?>
	
	<form method="post" action="">

	
 <table >
<tr>
<td><label for="start">Vos plat du :</label>

<input type="date" id="d" name="d"
       value="2020-04-20"
       min="2020-01-01" max="2020-12-31"></td>
<td><input class="petit" type="submit" value="ok"></td>
</tr>
</table>
<?php
if(isset($_POST['d'])){
echo $_POST['d'];}
?>
 
<table border=1>
<tr>
<td>plats</td>
<td>calorie</td>
<td>quantité</td>
<td>action</td>
</tr>
	<?php
	for($i=0;$i<$nbplats;$i++){
		?>
		
		<tr>
		<td><br/><?php echo $_SESSION['panier']['nomPlat'][$i];?></td>
		
		<td><br/><?php echo $_SESSION['panier']['calPlat'][$i];?></td>
		<td><br/><input name="q[]"  value="<?php echo $_SESSION['panier']['quantPlat'][$i];?> "></td>
		<td><br/><a href = "panier.php?action=suppression&amp;l=<?php echo rawurlencode($_SESSION['panier']['nomPlat'][$i]);?>">Supprimer le plat<a/></td>
		</tr>
		
		
		
		
		<?php       
	}?>
	
	<tr>
		<td>
		<input type="hidden" name="action" value="refresh"/>
		</td>
		</tr>
		
		</table>
		
		<h2>Votre cumul des plats est-t-il équilibré ? </h2> </br>
		
		<?php echo cumulEquilibre();?>
		
		<p>Vos plats doivent avoir pour etre equilibré : 11 à 15 % de protéines, 35 à 40 % de lipides et 50 à 55 % de glucides. </p>
		
		<p> total calorie :<?php echo calPanier();?></p>
		<?php 
		if(isset($_POST['d'])){
		$d= $_POST['d'];
		$calT=calPanier();?>
		<a href="p.php?act=ajout&amp;d=<?php echo  $d;?>&amp;c=<?php echo  $calT;?>">ENREGISTRER </a> <?php } ?>
		
		<input type ="submit" value="recalculer"/>
		
		<a href="?deletepanier=true">supprimer le panier</a>
		<a href="etape3.php">ajouter d'autres plats </a>
		
		<?php
	
}
	
}



?>
</table>
</form>


<footer>
        <ul id="listfooterleft"> <h3>Université Paul Valéry</h3> 
             <li>Adresse : Route de Mende, 34090 Montpellier</li>
             <li>Téléphone : 04 67 14 20 00</li>
             <li>Type : Université en France</li>
             <li>Président : Patrick Gilli</li>
             <li class="lienfooter"><a href="https://www.univ-montp3.fr/fr/universit%C3%A9" class="liens">A propos</a></li>

        </ul>
        <ul> <h3>Qui sommes nous ?</h3>
             <li>Etudiants en 3ème année de Licence MIASHS</li>
             <li>Domaine Data Science</li>
             <li class="lienfooter"><a href="https://www.univ-montp3.fr/fr/formations/offre-de-formation/licence-lmd-XA/sciences-humaines-et-sociales-SHS/licence-mathematiques-et-informatique-appliquees-aux-sciences-humaines-et-sociales-miashs-program-licence-miashs.html" class="liens">Licence MIASHS (Maths info appliquée aux SHS)</a></li>
             <li><a href="../contact.php" class="liens">Contact</a></li>
        </ul>
        <ul id="listfooterright"> <h3>Développeurs</h3> 
             <li>Moulika</li>
             <li>Yacine</li>
             <li>Johanna</li>
             <li>Justin</li>
             <li>Berk</li>
        </ul>
    </footer>
	

  
	</body>
</html>