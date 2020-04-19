<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
    <title>Body Check</title>
    <link rel="stylesheet" href="style/model.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="scripts/app.js" type="text/javascript"></script>
	<script src="scripts/fonction.js" type="text/javascript"></script>
	
</head>

<body>
   <header>
            <div class="logo-container">
                <a href="index.php"><img src="ressources/logo.png" alt="description" id="logo"></a>
            </div>
                <div class="container-menu-nav">
                    <nav class="top-menu-nav">
                        <ul class="top-menu">
                            <li><a href="index.php" class="link">Accueil <i class="fa fa-home" aria-hidden="true"></i></a></li>
							<li><a href="templates/platsJournée/etape3.php" class="link">calorie<i class="fa fa-columns" aria-hidden="true"></i></a></li>
                            <li><a href="templates/test.php" class="link">Test <i class="fa fa-list" aria-hidden="true"></i></a></li>
                            <li><a href="templates/apropos.php" class="link">A propos <i class="fa fa-question-circle-o" aria-hidden="true"></i></a></li>
                            <li><a href="templates/contact.php" class="link">Contact <i class="fa fa-address-book-o" aria-hidden="true"></i></a></li>
							
                       <?php
            if(isset($_SESSION['user'])){

                
         ?> <li id="nav-moncompte"><a href= "templates/Connexion.php" class="link"> <?php echo $_SESSION['user'][2];?><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li> 
                
           <?php }else{?>
			
			<li id="nav-moncompte"><a href="templates/Connexion.php" class="link">Mon Compte <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
			<?php 
			} 
    ?>
	<li id="lang"><a><i class="fa fa-globe" aria-hidden="true"></i> FR <span id="eur">(EUR)</span></a></li>
	</ul>
                    </nav>
                <div class="toggle"><span></span></div>
            </div>
        </header>

    <section>
		<div>
			<h1 > Bonjour, notre site a pour but de vous aider à améliorer votre santé. </h1> 
		</div>
		
		<div>
			<table width=500px; >
				<tr>
					<td>
						<a href="templates/platsJournée/etape3.php" ><img  id="grand" onmouseover="overParagraphe('grand')" onmouseout= "outParagraphe('grand')" src="ressources/cal.png" width="300"></a>
					</td>
					<td>
					
					</td>
					<td><a href="templates/test.php" ><img  id="2" onmouseover="overParagraphe('2')" onmouseout= "outParagraphe('2')" src="ressources/test.jpg" width="300" ></a></td>
				</tr>
 
				<tr>
					<td>
						<h1 class="lienTest"><a href="templates/journéePlats/etape3.php" class="liens">Calculer les calories </a></h1>
							<p> Vous pouvez ici selectionner les plats que vous avez mangé à une date donnée. </p></br>
							<p>Ainsi vous pourrez voir les calories de chacuns des plats.Et un calcul du nombre de calorie que vous avez consommé durant cette journée sera effectué.</p>
 
							<p>Toutes les journées que vous enregistrerez seront stocké dans une base de donnée.</br></p>
							<p>vous pourrez donc avoir un suivi des calories que vous avez consommé au fil des jours.</p> 
					</td>
					<td>
					</td>
					<td>
						<h1 class="lienTest"><a href="templates/test.php" class="liens"> Faire le test</a> </h1> 
							<p>En effet, pour y parvenir, vous pouvez calculer votre indice pondéral et nous vous indiquerons si vous devez perdre, gagner ou maintenir votre poids.  <br> A la suite de cette indication, nous calculerons la quantité de calories nécessaire à votre organisme pour tenir toute une journée. Suite à cela, nous vous proposerons la quantité de calories à consommer chaque jour pour améliorer votre santé. </p> 
							<p> Vous pourrez ensuite consulter nos différents plats afin de composer des repas équilibrés adaptés a votre régime. </p>
					</td>
				</tr>
   
			</table>
   <?php
            if(isset($_SESSION['user'])){

                echo "Bonjour ".$_SESSION['user'][2];
                
                echo "<br/>";

                echo "<br/>";
                echo'<a href= "templates/deconnexion.php">Se déconnecter</a> <br/>';
				
				echo'<a href= "templates/platsJournée/p.php">voir mon historique</a> <br/>';
                
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
             <li><a href="templates/contact.php" class="liens">Contact</a></li>
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