<!DOCTYPE html>


<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<head>
		<title>Test</title>
		<link rel="stylesheet" href="../style/test.css" type="text/css" media="screen"/>
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


		<form action="enregistrementTest.php" method="get" autocomplete="off">
			<div>
			
				<h1>Commencer le test</h1>
					<p> Salut ! Je suis le professeur Test. C'est moi qui vais m'occuper de votre Body Check... euhh 
						C'est plus un Nutri Check, si vous voyer ce que je veux dire.</p>
					<p>Pour pouvoir effectuer mes calculs, j'ai besoin de vous connaître vous et vos habitudes alimentaires.</p>
					<br/> 
					<!-- <button onclick = "bouton('div1'),bouton('div0'),bouton('div2'),bouton('div3')"> Commençons par vous : </button><br/>	 -->

				<h2> Commençons par vous !</h2>
				

					
			</div>
			
			

			<div class="etape1" id="div0">

					<h3>Choix du sexe </h3>

					Tapez 1 dans le champ qui correspond à votre sexe. <br/>
						<label>Femme</label>
						<input type="number" name= "Femme" value= "0" min="0" max="1" reqired>  <br/> 
						<label>Homme</label>
						<input type="number" name= "Homme" value= "0" min="0" max="1"  reqired>  <br/> 

            </div>
				
			<div class="etape1" id="div2">
				<h3>Quel taille faite-vous? <br/>	</h3>
            	  <label>Votre taille (en cm) :</label>
                 <input type="number"  name="taille" value= "160" required>

            </div>

			<div class="etape1" id="div3">
			<h3>Combien pesez-vous? </h3><strong> Ne vous inquiétez pas, c'est entre nous</strong><br/>	
            	  <label>Votre poids (en kilo):</label>
                 <input type="number" step="0.01" name="poids" value= "50" required>

			</div>
			
			
			

			<div class="etape1" id="div1">
				
				<h3>Quelle est votre date de naissance ?  </h3>
				<br/>	
				<label for="datenais">Date de naissance:</label>

					<input type="date" id="datenais" name="datenais"
       					value="1997-03-22"
       				min="1950-01-01" max="2020-12-31" required>

			</div>

			
		


			 <!-- plat type journalier -->
		
			
			<div class="input" id="submit">
                            <input type="submit" value="Passer à la suite">
			</div>
			
		</form>

		<script>
			//  la fonction pour clicker
					function bouton(div1){
					//alert(getComputedStyle(div1).display);
					let d1 = document.getElementById(div1);
					if(getComputedStyle(d1).display != "none"){
					
					d1.style.display = "none";
					} else {
					d1.style.display = "block";
					}
					}

					function boutonClass(div1){
						
						let d1 = document.getElementsByClassName(div1);
						
						if(getComputedStyle(d1).display != "none"){
						
							d1.style.display = "none";
						} else {
							d1.style.display = "block";
						}
					}

		</script> 



	</body>

</html>