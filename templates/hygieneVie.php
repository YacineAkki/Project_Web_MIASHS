<!DOCTYPE html>


<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<head>
		<title>Test</title>
		<script type="text/javascript" src="test.js"></script>
		<link rel="stylesheet" href="../style/test.css" type="text/css" media="screen"/>
		
	</head>
	<body>


		<form action="enregistrementTest3.php" method="get" autocomplete="off">
			

			<!-- Habitudes de vie -->
			
			<div> 
                <h1> Hygiène de vie </h1>
			
					<p id="parfait">C'est parfait! Interessons-nous un peu à vos habitudes de vie</p>
					<br/> 
					
					
				
				<!-- <button id="but5"> Habitudes de vie </button><br/>	 -->
		
			</div>

			<div class="input" id="div8">
				<h3>Êtes-vous un fumeur? </h3> <br/>	
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

            <br/>

			<div class="input" id="div9">
            <h3>Pratiquez vous un sport?</h3>  <br/>	
            	  <label>Sport:</label>
                 <input type="boolean" name="sport" value= "course ">

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
                            <input type="submit" value=" Résultat du test">
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