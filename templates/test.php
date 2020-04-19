
<?php
session_start();
?><!DOCTYPE html>

<!DOCTYPE html>


<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<head>
		<title>Test</title>
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="test.js"></script>
		<link rel="stylesheet" href="../style/test.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="../style/model.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="../scripts/jquery-3.4.1.min.js"></script>
        <script src="../scripts/app.js" type="text/javascript"></script>
	</head>
	<body>
	  <header>
            <div class="logo-container">
                <a href="../index.php"><img src="../ressources/logo.png" alt="description" id="logo"></a>
            </div>
                <div class="container-menu-nav">
                    <nav class="top-menu-nav">
                        <ul class="top-menu">
                            <li><a href="../index.php" class="link">Accueil <i class="fa fa-home" aria-hidden="true"></i></a></li>
							<li><a href="platsJournée/etape3.php" class="link">calorie<i class="fa fa-columns" aria-hidden="true"></i></a></li>
                            <li><a href="test.php" class="link">Test <i class="fa fa-list" aria-hidden="true"></i></a></li>
                            <li><a href="apropos.php" class="link">A propos <i class="fa fa-question-circle-o" aria-hidden="true"></i></a></li>
                            <li><a href="contact.php" class="link">Contact <i class="fa fa-address-book-o" aria-hidden="true"></i></a></li>
							
							<?php
							if(isset($_SESSION['user'])){

                
								?> <li id="nav-moncompte"><a href= "Connexion.php" class="link"> <?php echo $_SESSION['user'][2];?><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li> 
                
								<?php 
								}else{?>
			
									<li id="nav-moncompte"><a href="Connexion.php" class="link">Mon Compte <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
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

					
					<br/>
						<label>Sexe</label>
							<select name="Sexe" >
                                <option>Femme</option>
                                <option>Homme</option>
                            </select>
							
							
							
						
						

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

			
		


			 <!-- Habitudes de vie -->
                    
			 <div> 
                        <h1> Hygiène de vie </h1>
                    
                            <p id="parfait">C'est parfait! Interessons-nous un peu à vos habitudes de vie</p>
                            <br/> 
                            
                            
                        
                        <!-- <button id="but5"> Habitudes de vie </button><br/>	 -->

                    </div>

                    

                    <br/>

                    <div class="input" id="div9">
                        <h3>Pratiquez-vous des activités physiques ?</h3>  <br/>
                        
                                <select name="Activitésphysiques ">
                                    <option>Oui</option>
                                    <option>Non</option>
                                </select>

                        
                            
                        <p>
                                Nom du sport :
                                <input type="text" name="nomsport" value=" La marche"/>
                         </p>

                        <div class="input" id="sousDiv">
                            <h3>Choisissez votre niveau d'activité physique</h3>
                            <p> Avant de choisir, veuillez-vous référer au tableau ci-dessous présentant les niveaux d'activités.
                            <h2>Tableau des niveaux d'activiés physique</h2>

                                <table style="width:60%">
                                <tr>
                                    <th>Numero du niveau</th>
                                    <th>Caractéristique du niveau</th> 
                                    <th>Nombre d'heure/semaine</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Casi-inexistant</td>
                                    <td>0</td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Très peu</td>
                                    <td>0,33 (20 min)</td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Modéré</td>
                                    <td>1 à 3</td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Soutenu</td>
                                    <td>4 à 6</td>
                                </tr>
                                    
                                <tr>
                                    <td>5</td>
                                    <td>intense</td>
                                    <td>au moins 7</td>
                                </tr>
                                </table>

                            </p>
                            <label>Faites votre choix : </label>
                            <select name="nbsport">
                                <option>1 </option>
                                <option>2</option>
                                <option>3 </option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>


                    </div>
                    
                    <div class="input" id="submit">
                                    <input type="submit" value=" Passez à la suite">
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
