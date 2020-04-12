<html>
	<head>
		<title> etape3 </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href=
"etape3.css" type="text/css"
media="screen" />
		
	</head>
	
	<body>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<form method="POST" action="">
			<label> Entrez votre plat : </label> </br>
			<input  type="search" name="plat" placeholder="Recherchez un plat.." id="search" value="" />
	

			
			<input type="submit" value ="ok" />
		</form>
		
		<div id="resultat">
		<ul>
		
		</ul>
		</div>
		
		<div id="loader">
		<img src="load.gif">
		</div>
		
		<div id="feedback">
		</div>
		
		
		<script src="jquery-3.4.1.js"></script>
		<script src="etape3.js"></script>
		
	
	
		
	<?php
	$bdd =new PDO('mysql:host=localhost;dbname=heathyyou;charest=utf8','root','');
	
	if(isset($_POST['plat'])&& !empty($_POST['plat'])){
		$plat = htmlspecialchars($_POST['plat']);
		$requete = $bdd->query('SELECT * FROM platboisson WHERE nomPlat LIKE "%'.$plat.'%" ORDER BY idP ');
	while ($resultat = $requete->fetch()){
	echo  $resultat['nomPlat']. "<br/>";
	}
	
	}
	
	
	
	
	 
	
	
	
	
	
	
	?>
	</body>
</html>