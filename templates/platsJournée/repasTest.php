<?php
if(!isset($_SESSION)){
	session_start();
}
include("foncPanier.php");

include("bdConnect.php");
?>

<!DOCTYPE html>


<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<head>
		<title>Test</title>
<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
	           
			   <link rel="stylesheet" href="../../style/test.css" type="text/css" media="screen"/>
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
    	<section>

        <!-- questionnaire concernant la partie repas. -->
		
		<h2>Ici vous pouvez entrer vos repas pour une journée donnée.</br>
		  Recherchez un plat et ajoutez le à votre journée! </h2>
		
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<form method="POST" action="">
	
	</br>
	</br>
			<label> Entrez votre plat : </label> </br>
			<input  type="search" name="plat" placeholder="Recherchez un plat.." id="search" value="" />
	
	<div id="resultat">
	</br>
		<ul>
		
		</ul>
		</div>
		
		<div id="loader">
		<img src="load.gif">
		</div>
		
		<div id="feedback">
		</div>

			
			<input type="submit" value ="ok" />
		</form>
		
		
		
		
		<script src="jquery-3.4.1.js"></script>
		<script src="etape3.js"></script>
		
	
	
		
	<?php
	$bdd = getBd();
	
	if(isset($_POST['plat'])&& !empty($_POST['plat'])){
		$plat = htmlspecialchars($_POST['plat']);
		$requete = $bdd->query('SELECT * FROM platboisson WHERE nomPlat LIKE "%'.$plat.'%" ORDER BY idP ');
	while ($resultat = $requete->fetch()){
	echo  $resultat['nomPlat']."_____";
	echo $resultat['Energie']."cal      ";
	?><a href="panier.php?action=ajout&amp;l=<?php echo  $resultat['nomPlat'];?>&amp;q=1&amp;glu=<?php echo  $resultat['Glucides'];?>&amp;li=<?php echo  $resultat['Lipides'];?>&amp;pro=<?php echo  $resultat['Proteines'];?>&amp;id=<?php echo  $resultat['idP'];?>&amp;p=<?php echo $resultat['Energie']; ?>">______Ajouter </br></a><?php
	}
	
	}
	
	
	
	 
	
	
	
	
	
	
	?>
        </section>
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
             <li><a href="contact.php" class="liens">Contact</a></li>
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
