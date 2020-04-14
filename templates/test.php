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
	            <a href="index.php"><img src="ressources/logo.png" alt="description" id="logo"></a>
	        </div>
	        <div class="container-menu-nav">
	            <nav class="top-menu-nav">
	                <ul class="top-menu">
	                    <li><a href="../index.php" class="link">Accueil <i class="fa fa-home" aria-hidden="true"></i></a></li>
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
			
		





			 <!-- plat type journalier -->
			<div>
			
					<p>Maintenant que les présentations sont faites, c'est le moment de voir plus en détails ce que vous consommer par jour.
					 
					Donnez-moi, un exemple de repas (plats, boissons, snacks etc ...) que vous manger aux moments de la journée ci-dessous :</p>
					<br/> 
					
				<button onclick = "displayid('div4')" id="but2"> Le matin : </button><br/>	
		
			</div>

			<div class="etape2" id="div4">
				Que prenez- vous les matins?<br/>	
            	  <label> repas :</label>
                 <input type="text" name="matin" value= "" required>

			</div>
			
				<button  onclick = "displayid('div5')" id="but2"> À midi : </button><br/>	

			<div class="etape2" id="div5">
				Que prenez- vous à midi?<br/>	
            	  <label> repas :</label>
                 <input type="text" name="matin" value= "" required>

            </div>

			<button onclick = "displayid('div6')" id="but3"> Au goûter : </button><br/>	

			<div class="etape2" id="div6">
				Snack time
				<br/>	
            	  <label> repas :</label>
                 <input type="text" name="matin" value= "" required>
				

			</div>
			
				<button onclick = "displayid('div7')" id="but4"> Le soir : </button><br/>	

			<div class="etape2" id="div7">
				Que prenez- vous à le soir?<br/>	
            	  <label> repas :</label>
                 <input type="text" name="matin" value= "" required>

            </div>

			<!-- Habitudes de vie -->
			
			<div>
			
					<p id="parfait">C'est parfait! Interessons-nous un peu à vos habitudes de vie</p>
					<br/> 
					
					
				
				<button id="but5"> Habitudes de vie </button><br/>	
		
			</div>

			<div class="input" id="div8">
				Êtes-vous un fumeur?  <br/>	
            	  <label>fumeur:</label>
                 <input type="boolean" name="fumer" value= "" required>

				<?php 

					$fumer = $_POST['fumer'];
						if( $fumer == True){
							echo'à quel fréquence ?';
							echo'<label>fréquence:</label>
							<input type="number" name="frequence" value= "">';
						}
					
				?>

            </div>

			<div class="input" id="div9">
				Pratiquez vous un sport?  <br/>	
            	  <label>Sport:</label>
                 <input type="boolean" name="sport" value= "">

				<?php 
					$sport = $_POST['sport'];
						if( $sport == True){

							echo'Lequel ?';
							echo'<label>Nom du Sport:</label>
							<input type="text" name="nomSport" value= "">';

							echo'combien de fois par semaine ?';
							echo'<label>fréquence Sport:</label>
							<input type="number" name="frequenceSport" value= "">';
						}
					
				?>

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
	             <li>Etudiants en 3ème année de Licence</li>
	             <li>Etudiants en 3ème année de Licence</li>
	             <li class="lienfooter"><a href="https://www.univ-montp3.fr/fr/formations/offre-de-formation/licence-lmd-XA/sciences-humaines-et-sociales-SHS/licence-mathematiques-et-informatique-appliquees-aux-sciences-humaines-et-sociales-miashs-program-licence-miashs.html" class="liens">Licence MIASHS (Maths info appliquée aux SHS)</a></li>
	             <li><a href="templates/contact.php" class="liens">Contact</a></li>
	        </ul>
	        <ul id="listfooterright"> <h3>A Propos</h3> 
	             <li class="lienfooter"><a href="templates/apropos.php" class="liens">A savoir</a></li>
	        </ul>
    	</footer>

	</body>

</html>