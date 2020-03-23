<!DOCTYPE html>


<html>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<head>
		<title>Test</title>
		<meta name="generator" content="BBEdit 13.0" />
		<link rel="stylesheet" href="styles/test.css" type="text/css" media="screen"/>
	</head>
	<body>

		<form action="enregistrementTest.php" method="get" autocomplete="off">
			<h1>Commencer le test</h1>
				<p> Salut! Je suis le professeur Test. C'est moi qui vais m'occuper de votre Body Check... euhh 
					c'est plus un Nutri Check, si vous voyer ce que je veux dire.</p>
				<p>Pour pouvoir effectuer mes calculs j'ai besoins de vous connaitre vous et vos habitudes alimentaires.</p>
				<br/> 
			<h2> Commençons par vous : </h2>

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
		</form>


	</body>

</html>