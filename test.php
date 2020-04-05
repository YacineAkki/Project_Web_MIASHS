<!DOCTYPE html>


<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<head>
		<title>Test</title>
		
		<link rel="stylesheet" href="styles/test.css" type="text/css" media="screen"/>
	</head>
	<body>

		<form action="enregistrementTest.php" method="get" autocomplete="off">
			<div>
				<h1>Commencer le test</h1>
					<p> Salut! Je suis le professeur Test. C'est moi qui vais m'occuper de votre Body Check... euhh 
						c'est plus un Nutri Check, si vous voyer ce que je veux dire.</p>
					<p>Pour pouvoir effectuer mes calculs j'ai besoins de vous connaitre vous et vos habitudes alimentaires.</p>
					<br/> 
				<h2> Commençons par vous : </h2>
			</div>

			<div>
				Quel est votre date de naissance ? :

				<label for="datenais">Start date:</label>

					<input type="date" id="datenais" name="datenais"
       					value="2020-03-22"
       				min="2020-01-01" max="2020-12-31">

			</div>

			<div class="input">
				Quel taille faite-vous?
            	  <label>Votre taille :</label>
                 <input type="number" name="taille" value= "">

            </div>

			<div class="input">
				Combien pesez vous? <emp> Ne vous inquitez pas, c'est entre nous</emp>
            	  <label>Votre poids :</label>
                 <input type="number" name="poids" value= "">

            </div>

			 <!-- plat type journalier -->
			<div>
			
					<p>Maintenant que les présentations sont faites, c'est le moment de voir plus en détails ce que vous consommer par jour.</p>
					<br/> 
					<p>Donnez-moi, un exemple de repas (plats, boissons, snacks etc ...) que vous manger aux moments de la journée ci-dessous :</p>
					<br/> 
					
				<h2> Le matin : </h2>
		
			</div>

			<div class="input">
				Que prenez- vous les matins?
            	  <label> repas :</label>
                 <input type="text" name="matin" value= "">

            </div>

			<div class="input">
				Que prenez- vous à midi?
            	  <label> repas :</label>
                 <input type="text" name="matin" value= "">

            </div>

			<div class="input">
				Snack time
            	  <label> repas :</label>
                 <input type="text" name="matin" value= "">
				

            </div>

			<div class="input">
				Que prenez- vous à le soir?
            	  <label> repas :</label>
                 <input type="text" name="matin" value= "">

            </div>

			<!-- Habitudes de vie -->
			
			<div>
			
					<p>C'est parfait! Interessons-nous un peu à vos habitudes de vie</p>
					<br/> 
					
					
				<h2> Habitudes de vie</h2>
		
			</div>

			<div class="input">
				Êtes-vous un fumeur?  
            	  <label>fumeur:</label>
                 <input type="boolean" name="fumer" value= "">

				<?php 

					$fumer = $_POST['fumer'];
						if( $fumer == True){
							echo'à quel fréquence ?';
							echo'<label>fréquence:</label>
							<input type="number" name="frequence" value= "">';
						}
					
				?>

            </div>

			<div class="input">
				Pratiquez vous un sport?  
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
		</form>


	</body>

</html>