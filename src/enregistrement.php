<html>
<head>
<title>enregistrement</title>

<?php 
function getBD(){
	$bdd=new PDO ('mysql:host=localhost;dbname=healthyyou;charest=utf8','root','');
return $bdd;
}

	
if($_GET['n']!="" and $_GET['p']!="" and $_GET['num']!="" and $_GET['maill']!="" and $_GET['mdp1']!="" and $_GET['mdp2']!="" and ($_GET['mdp1'] == $_GET['mdp2']) ) {
	echo "<meta http-equiv='refresh' content='2; URL = ../index.html'>";
}

else {
echo "<meta http-equiv='refresh' content='2; URL =../templates/nouveau.php'>";
}

?>

</head>