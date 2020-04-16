<!DOCTYPE html>


<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<head>
		<title>Test</title>
		<script type="text/javascript" src="test.js"></script>
		<link rel="stylesheet" href="styles/test.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="../style/model.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>
	<body>
		<header>
            <div class="logo-container">
                <a href="../../index.php"><img src="../ressources/logo.png" alt="description" id="logo"></a>
            </div>
                <div class="container-menu-nav">
                    <nav class="top-menu-nav">
                        <ul class="top-menu">
                            <li><a href="../index.php" class="link">Accueil <i class="fa fa-home" aria-hidden="true"></i></a></li>
							<li><a href="platsJournée/etape3.php" class="link">calorie<i class="fa fa-columns" aria-hidden="true"></i></a></li>
                            <li><a href="test.php" class="link">Test <i class="fa fa-list" aria-hidden="true"></i></a></li>
                            <li><a href="apropos.php" class="link">A propos <i class="fa fa-question-circle-o" aria-hidden="true"></i></a></li>
                            <li><a href="contact.php" class="link">Contact <i class="fa fa-address-book-o" aria-hidden="true"></i></a></li>
                            <li id="nav-moncompte"><a href="Connexion.php" class="link">Mon Compte <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
                            <li id="lang"><a><i class="fa fa-globe" aria-hidden="true"></i> FR <span id="eur">(EUR)</span></a></li>
                        </ul>
                    </nav>
                <div class="toggle"><span></span></div>
            </div>
        </header>
    	<section>
		<script>
			
			function fct(choix){
				if(choix == 1){
					var pchoix = document.getElementById("pchoix1"); 
					
					pchoix.innerHTML = "
					<?php
						$_GET['femme'] = TRUE;
					?>
					"; 
					
				} else if (choix== 2) {
					var pchoix = document.getElementById("pchoix2"); 
					pchoix.innerHTML = "
					<?php
						$_GET['homme'] = TRUE;
					?>
					"; 
				}
			}	
		</script>

		<form action="enregistrementTest.php" method="get" autocomplete="off">
			<div>
				<h1>Commencer le test</h1>
					<p> Salut! Je suis le professeur Test. C'est moi qui vais m'occuper de votre Body Check... euhh 
						c'est plus un Nutri Check, si vous voyer ce que je veux dire.</p>
					<p>Pour pouvoir effectuer mes calculs j'ai besoins de vous connaitre vous et vos habitudes alimentaires.</p>
					<br/> 
					<button onclick = "display('etape1')"> Commençons par vous : </button><br/>	
			</div>

			<div class="etape1" id="div0">
				<input type="checkbox" onclick="fct(1)"> Femme<br> <p id="pchoix1"><p>
				<p id="pchoix1"><p>
				<input type="checkbox" onclick="fct(2)"> Homme<br> <p id="pchoix2"><p>
				<p id="pchoix2"><p>
            </div>

			<div class="etape1" id="div1">
				
				<h3>Quel est votre date de naissance ? : </h3>
				<br/>	
				<label for="datenais">Date de naissance:</label>

					<input type="date" id="datenais" name="datenais"
       					value="2020-03-22"
       				min="1950-01-01" max="2020-12-31" required>

			</div>

				
			<div class="etape1" id="div2">
				<h3>Quel taille faite-vous? <br/>	</h3>
            	  <label>Votre taille (en cm) :</label>
                 <input type="number"  name="taille" value= "" required>

            </div>

			<div class="etape1" id="div3">
			<h3>Combien pesez vous? <strong> Ne vous inquitez pas, c'est entre nous</strong></h3><br/>	
            	  <label>Votre poids (en kilo):</label>
                 <input type="number" step="0.01" name="poids" value= "" required>

			</div>
			
		





			
			<!-- Habitudes de vie -->
			
			<div>
			
					<p id="parfait">C'est parfait! Interessons-nous un peu à vos habitudes de vie</p>
					<br/> 
					
					
				
				<label>	Vos habitudes de vie :</label><br/>	
		
			</div>

			<div class="input" id="div8">
			<p>
				Êtes-vous un fumeur?  <br/>	
            	  <label>fumeur:</label></br>
                 <select name="fumer">
					<option>Oui</option>
					<option>Non</option>
				</select>
			</p>
				
				<p>
				<label>à quelle frequence fumez-vous? </label></br>
                 <select name="freq">
					<option>Je ne fume pas </option>
					<option>moins de 5 par semaine</option>
					<option>moins de 3 par jour</option>
					<option>moins de 10 par jour </option>
					<option>plus de 10 par jour</option>
					
				</select>
				
				</p>

            </div>

			<div class="input" id="div9">
			
			<p>
				Pratiquez vous un sport?  <br/>	
            	  
                 <select name="Sport">
					<option>Oui</option>
					<option>Non</option>
				</select>
			</p>
				
				<p>
Nom du sport :
<input type="text" name="nomsport" value=""/>
</p>
				
				
				<p>
				<label>combien de fois par semaine :</label></br>
                 <select name="nbsport">
					<option>1 </option>
					<option>2</option>
					<option>3 </option>
					<option>4</option>
					<option>plus de 4 </option>
				</select>
				</p>
				
			

			</div>
			
			<div class="input" id="submit">
                            <input type="submit" value="Valider">
			</div>
			
			<div class="input" id="submit">
                            <input type="submit" value="Valider">
			</div>
			
		</form>
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