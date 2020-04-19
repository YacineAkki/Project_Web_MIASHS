<?php
function getBD(){
	$bdd=  new PDO('mysql:host=localhost:8889;dbname=heathyYou;','root', 'root');
return $bdd;
}
?>