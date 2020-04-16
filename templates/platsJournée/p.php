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
                            <li id="nav-moncompte"><a href="../Connexion.php" class="link">Mon Compte <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
                            <li id="lang"><a><i class="fa fa-globe" aria-hidden="true"></i> FR <span id="eur">(EUR)</span></a></li>
                        </ul>
                    </nav>
                <div class="toggle"><span></span></div>
            </div>
        </header>
	


<?php
include("bdConnect.php");
$act=(isset($_POST['act'])?$_POST['act']:(isset($_GET['act'])?$_GET['act']:null));

if($act!==null){
	
	
	$d=(isset($_POST['d'])?$_POST['d']:(isset($_GET['d'])?$_GET['d']:null));
	$c=(isset($_POST['c'])?$_POST['c']:(isset($_GET['c'])?$_GET['c']:null));


function enregistrer ($cal,$d){
	$bdd=getBD();
	$req = "INSERT INTO journéeuser(CalTotal,date) VALUES ('$cal','$d')";
	$reponse=$bdd->query($req);	


}


if($d!="" and $c!=""  ) {
	
	
	enregistrer($c,$d);
	
	echo "Le &nbsp; &nbsp;", $d ," &nbsp; &nbsp; vous avez mangé  &nbsp; &nbsp;  ", $c ,"&nbsp; &nbsp; calorie.";
	
	echo "</br>info inseré </br> ";
	session_destroy();
	?><a href="etape3.php">ajouter des plats à une autre journée  </a>
	<?php

}
}

?>


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