<!DOCTYPE html>


<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<head>
		<title>Test</title>
		<script type="text/javascript" src="test.js"></script>
		<link rel="stylesheet" href="../../style/test.css" type="text/css" media="screen"/>
		
	</head>
	<body>


		<form action="enregistrementTest2.php" method="get" autocomplete="off">
			


			 <!-- plat type journalier -->
			<div>
                    <h1> Habitude de vie Alimentaire </h1>
			
					<p>Maintenant que les présentations sont faites, c'est le moment de voir plus en détails ce que vous consommer par jour.<br/> 
					 
					Donnez-moi, un exemple de repas (plats, boissons, snacks etc ...) que vous manger aux moments de la journée ci-dessous :</p>
					<br/> 
					
				<button onclick = "bouton('div4')" id="but2"> Le matin  </button><br/>	
		
			</div>

			<div class="etape2" id="div4">
			<h3>Que prenez- vous les matins?</h3><br/>	
            	  <label> repas :</label>
                 <input type="text" name="matin" value= "oeufs dures" required>

			</div>
			
				<button  onclick = "bouton('div5')" id="but2"> À midi  </button><br/>	

			<div class="etape2" id="div5">
			<h3>Que prenez- vous à midi?</h3><br/>	
            	  <label> repas :</label>
                 <input type="text" name="matin" value= " oeufs dures" required>

            </div>

			<button onclick = "bouton('div6')" id="but3"> Au goûter  </button><br/>	

			<div class="etape2" id="div6">
				Snack time
				<br/>	
            	  <label> repas :</label>
                 <input type="text" name="matin" value= "oeufs dures" required>
				

			</div>
			
				<button onclick = "bouton('div7')" id="but4"> Le soir  </button><br/>	

			<div class="etape2" id="div7">
			<h3>Que mangez- vous le soir?</h3><br/>	
            	  <label> repas :</label>
                 <input type="text" name="matin" value= "" required>

            </div>

		
			
			<div class="input" id="submit">
                            <input type="submit" value="Valider">
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